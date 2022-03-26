<?php

require_once('class.Cat.php');
class Cheetah extends Cat{
    public $numberofSpot;
    public function _construct()
    {
        $this->maxSpeed =100;
    }
    
}

?>