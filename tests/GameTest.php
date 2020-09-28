<?php
namespace Bowling\tests;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

Class GameTest extends TestCase
{
    /**
     * @var Game
     */

    public function testCanCreateGame()
    {
        $game = new Game(50);
        $this->assertInstanceOf(Game::class, $game);
    }


}