<?php
include ('config.php');

$class_name = $address_class = $fee_class =  '';

$class_name = $_POST['class_name'];
$address_class = $_POST['address_class'];
$fee_class = $_POST['fee_class'];


$query = "INSERT INTO class( cnam, cmahal, cmablagh)
                VALUES ('$class_name','$address_class','$fee_class')";

$result = mysqli_query($conn,$query);
if ($result){
    header("Location:admin_panel.php");
}
else{
    echo "ERROR : " .$query;
}