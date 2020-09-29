<?php
namespace Bowling;

class Game
{
    protected $rolls = array(21);
    protected $currentRoll = 0;

    /**
     * Game constructor.
     *
     */
    public function __construct()
    {

    }

    public function roll($pins)
    {
        $this->rolls[$this->currentRoll++] = $pins;

    }

    public function score()
    {
        $score = 0;
        $firstInFrame = 0;
        for($frame = 0; $frame < 10; $frame++){#
            if($this->isStrike($firstInFrame)){
                $score += 10 + $this->nextTwoBallsForStrike($firstInFrame);
                $firstInFrame++;
            }
            elseif($this->isSpare($firstInFrame)){
                $score += 10 + $this->nextBallForSpare($firstInFrame);
                $firstInFrame += 2;
            }else{
                $score += $this->twoBallsInFrame($firstInFrame);
                $firstInFrame += 2;
            }
        }
        return $score;
    }

    public function isStrike($firstInFrame)
    {
        if($this->rolls[$firstInFrame] == 10){
            return true;
        }else{
            return false;
        }
    }

    public function isSpare($firstInFrame)
    {
        if($this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1] == 10){
            return true;
        }else{
            return false;
        }
    }

    public function nextTwoBallsForStrike($firstInFrame)
    {
        return $this->rolls[$firstInFrame+1] + $this->rolls[$firstInFrame+2];
    }

    public function nextBallForSpare($firstInFrame)
    {
        return $this->rolls[$firstInFrame+2];
    }

    public function twoBallsInFrame($firstInFrame)
    {
        return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1];
    }
}