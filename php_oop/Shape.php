<?php

interface Shape{
    public function calcArea();
}

class Circle implements Shape{

    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calcArea(){
        return "circle Area: \t".$this -> radius * $this -> radius * pi() . "<br/>";
    }

}

class Rectangle implements Shape{

    private $height;
    private $width;

    public function __construct($height, $width)
    {

     $this->height = $height;
     $this->width= $width;

    }

    public function calcArea(){

        return "rectangle Area: \t". $this->height * $this->width;

    }

}

$circle = new Circle(2.5);
echo $circle->calcArea();


$rectangle = new Rectangle(5, 3);
echo $rectangle->calcArea();