<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "est";

$conn = mysqli_connect($host,$user,$password,$dbname);
$conn->set_charset('utf-8');

if (!$conn){

    die("Connection failed: ". mysqli_connect_error());

}