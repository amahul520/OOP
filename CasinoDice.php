<?php

require_once 'Dice.php';

class CasinoDice extends Dice
{
    protected $rolled;

    public function __construct($numSides = 6)
    {
        parent::__construct($numSides);
    }

    public function modified($mod, $times = 100)
    {
        $results = parent::roll($times);
        foreach ($results as $result) {
            $result = $result + $mod;
            if ($result < 1) {
                $result = 1;
            }
            if ($result > 6) {
                $result = 6;
            }
            $this->rolled[] = $result;
        }

        return $this->rolled;
    }

    public function average()
    {
        $count = count($this->rolled);
        $result = 0;
        foreach ($this->rolled as $roll) {
            $result = $result + $roll;
        }
        $result = $result / $count;
        echo '<br>';

        return $result;
    }
}
