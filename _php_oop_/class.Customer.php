<?php

class Customer{
    public $id;
    public $customerNumber;
    public $name;

    public function _construct($customerID){
        # code...
        // Fetch customer information from database
        $data = array();

        $data['customerNumber'] = 1000000;
        $data['name'] = 'jane johnson';

        // Asssign the values from the database to this object
        $this->id = $customerID;
        $this->name = $data['name'];
        $this->customerNumber = $data['customerNumber'];
    }
}

?>