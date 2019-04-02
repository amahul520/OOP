<?php

require_once 'Dice.php';

class GeekDice extends Dice
{
    protected $rolled;

    public function __construct($numsides = 10)
    {
        parent::__construct($numsides);
        parent::roll();
    }
    
    public function dice ($times = 10){
        parent::roll($times);
    }
    
}
