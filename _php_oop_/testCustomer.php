<?php
require_once('class.SweepstakesCustomer.php');
// since thid file already includes class.Customer.php, there's
// no need to pull that file in, as well.
function greetCustomer(Customer $objCust){
    echo "Welcome back to the store $objCust->name!";
}
// change this value to change the class used to create this customer
//object
$promotionCurrentlyRunning = true;
if($promotionCurrentlyRunning){
    $objCust = new Sweetstakescustomer(1000000);
} else{
    $objCust = new Customer(1000000);
}
greetCustomer($objCust);
?>