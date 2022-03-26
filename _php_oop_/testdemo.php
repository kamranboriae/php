<?php

require_once('class.Demo.php');

$objDemo = new Demo();
$objDemo->setName("kamran");
$objDemo->sayHell();
$objDemo->setName(37);

?>