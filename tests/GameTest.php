<?php
namespace Bowling\tests;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

Class GameTest extends TestCase
{
    /**
     * @var Game  instance of Game class
     */

    private $game;

    public function setUp() :void
    {
        $this->game = new Game();
    }

    public function rollMany($n, $pins)
    {
        for($i = 0; $i < $n; $i++) $this->game->roll($pins);
    }

    public function rollSpare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
    }

    public function rollStrike()
    {
        $this->game->roll(10);
    }

    public function testRollGutterGame()
    {
        $this->rollMany(20,0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testRollAllOnes()
    {
        $this->rollMany(20,1);
        $this->assertEquals(20, $this->game->score());
    }

    public function testRollOneSpare()
    {
        $this->rollSpare();
        $this->game->roll(3);
        $this->rollMany(17, 0);
        $this->assertEquals(16, $this->game->score());

    }

    public function testRollStrike()
    {
        $this->rollStrike();
        $this->game->roll(3);
        $this->game->roll(4);
        $this->rollMany(16, 0);
        $this->assertEquals(24, $this->game->score());
    }

    
}