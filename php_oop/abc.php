<?php

interface a{
    public function foo();
}
interface b extends a{
    public function baz($baz);
}
class c implements b{
    public function foo(){
        echo "foo function". "<br/>";
    }
    public function baz($baz){
        echo "baz function";
    }
}

$d = new c();
$d->foo();
$d->baz("");
