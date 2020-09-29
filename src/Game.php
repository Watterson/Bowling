<?php
namespace Bowling;

class Game
{
    protected $score;

    /**
     * Game constructor.
     * @param int $score
     */
    public function __construct(int $score)
    {
        $this->score = $score;
    }

    public function roll($pins)
    {
        $this->score += $pins;
        return $this->score;
    }
}