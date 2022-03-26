<?php
class Demo{
    public $_name;

    public function _construct($name)
    {
     $this->$name;   
    }
    public function sayHell()
    {
        print("Hello". $this->_name . "!");
    }
    public function getName()
    {
        return $this->_name;
    }
    public function setName($name)
    {
        if (!is_string($name) || strlen($name)==0) {
            throw new Exception("Invalid name value !");
        }
        $this->_name = $name;
    }
}
?>