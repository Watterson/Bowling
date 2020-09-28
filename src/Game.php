<?php
namespace Bowling;

class Game
{
    protected $score;
    /**
     * Game constructor.
     */
    public function __construct(int $score)
    {
        $this->score = $score;
    }

    public function example(){
        return  "";
    }
}