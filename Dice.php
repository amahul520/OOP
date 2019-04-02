<?php

/**
 * 
 * creates the class 'dice' 
 */
class Dice
{
    protected $numSides, $lastrolled, $times;
    
/**
 * 
 * @param int $numsides
 * 
 */ 
    public function __construct(
            $numSides = 6
    ) {
        if (true == is_int($numSides)) {
            $this->numSides = $numSides;
            $this->lastRolled = [];
        } else {
            $this->numSides = 6;
        }
    }

    public function rollDice()
    {
        $this->lastRolled[] = rand(1, $this->numSides);
    }
/**
 * 
 * @return int[]
 * 
 */
    public function getLastRolled()
    {
        return $this->lastRolled;
    }
    
    /**
     * 
     * @param $times, times to roll
     * @return int[], all rolls
     * 
     */

    public function roll($times = 1)
    {
        for ($i = 0; $i < $times; ++$i) {
            $this->rollDice();
        }

        return $this->getLastRolled();
    }
}
