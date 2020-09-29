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
        for($frame = 0; $frame < 10; $frame++){
            if($this->isSpare($firstInFrame)){
                $score += 10 + $this->rolls[$firstInFrame+2];
                $firstInFrame += 2;
            }else{
                $score += $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1];
                $firstInFrame += 2;
            }
        }
        return $score;
    }

    public function isSpare($firstInFrame)
    {
        if($this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1] == 10){
            return true;
        }else{
            return false;
        }
    }
}