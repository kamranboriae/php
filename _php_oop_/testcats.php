<?php

require_once("class.Cheetah.php");
function petTheKitty(Cat $objcat){
    if ($objcat-> maxSpeed < 5) {
        $objcat->purr();
    }else {
        echo "can not pet the kitty - it is  moving at".$objcat->maxSpeed."kilometers per hour!";
    }
}
$objCheetah = new Cheetah();
petTheKitty($objCheetah);
$objcat = new Cat();
petTheKitty($objcat);

?>