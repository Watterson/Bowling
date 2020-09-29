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
        $this->game = new Game(0);
    }
    
    public function rollMany($n, $pins)
    {
        for($i = 0; $i<$n; $i++){
            $this->score = $this->game->roll($pins);
        }
    }

    public function testRollGutterGame()
    {
        $this->rollMany(20,0);
        $this->assertEquals(0, $this->score);
    }

    public function testRollAllOnes()
    {
        $this->rollMany(20,1);
        $this->assertEquals(20, $this->score);
    }

}