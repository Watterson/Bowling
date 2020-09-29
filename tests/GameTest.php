<?php
namespace Bowling\tests;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

Class GameTest extends TestCase
{
    /**
     * @var Game
     */

    private $game;

    public function setUp() :void
    {
        $this->game = new Game();
    }
    public function testCanRoll()
    {
        $roll = $this->game->roll(5);
        $this->assertEquals(5, $roll);
    }


}