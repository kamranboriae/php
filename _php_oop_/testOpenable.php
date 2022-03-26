<?php

require_once('class.Jar.php');
function opensomethings(Openable $obj){
    $obj->open();
}
function closesomethings(Openable $obj){
    $obj->close();
}
$objJar = new Jar("jam");
opensomethings($objJar);
closesomethings($objJar);
?>