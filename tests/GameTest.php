<?php
namespace Bowling\tests;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

Class GameTest extends TestCase
{
    /**
     * @var Game  instance of Game class
     * @var Score int
     */

    private $game;
    private $score;

    public function setUp() :void
    {
        $this->score = 0;
        $this->game = new Game($this->score);
    }
    public function testCanRoll()
    {
        $score = $this->game->roll(0);
        $this->assertEquals(0, $score);
    }

    public function testRollGutterGame()
    {
        for($i = 0; $i<20; $i++){
           $this->score = $this->game->roll(0);
        }
        $this->assertEquals(0, $this->score);

    }

}