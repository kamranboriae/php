<?php
//parent clas
class Fruit{

    //properties
    public $name;
    public $color;

    // constructor Function
    function __construct($par1, $par2){
        $this->name = $par1;
        $this->color = $par2;
    }

    //Method or function
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name ." <br/>";
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color ." <br/>";
    }
}
//inheritance 
class Orange extends Fruit{

    var $publisher;
    function setPublisher($par){
        $this->publisher = $par;
    }
    function getPublisher(){
        echo $this->publisher." <br/>";
    }

}
// sample parent class
$apple =  new Fruit('Apple','Yellow');
echo $apple->get_name();
echo $apple->get_color();

// sample inheritance class 
$orange = new Orange('Orange','Red');
$orange->set_name("Orange");
echo $orange->get_name();
$orange->set_color("Red");
echo $orange->get_color();
$orange->setPublisher("2022/03/15");
echo $orange->getPublisher();