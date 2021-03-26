<?php
//connection Database
$server_host = "localhost";
$server_userName = "root";
$server_password = "";
$database = "cms";

try{

    $conn = new PDO("mysql:host=$server_host;dbname=$database", $server_userName, $server_password);

}
catch (PDOException $e){
    exit("Oops!!!Connection failed : ")  . $e->getMessage();
}