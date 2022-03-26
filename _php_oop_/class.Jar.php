<?php

require_once ('interface.Openable.php');

class Jar implements Openable{

    private $contents;

    public function __construct($contents)
    {
     $this->contents = $contents;   
    }
    public function open()
    {
        echo 'The jar is now open'.'<br/>';
    }
    public function close()
    {
        echo 'The jar is now close'.'<br/>';
    }
}
?>