<?php 

require_once('class.Customer.php');
class Sweetstakescustomer extends Customer{
    public function __construct($customerID){

            if ($this->customerID == 1000000) {
                echo 'Congratulations, You win a year supply of stakes!';
                # code...
            }

    }
}

?>