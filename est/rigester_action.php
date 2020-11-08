<?php
include ('config.php');

$fname = $lname = $father_name = $cod = $age = $sex = $name_class = $name_teacher = $username = $password = '';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$father_name = $_POST['father_name'];
$cod = $_POST['cod'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$name_class = $_POST['name_class'];
$name_teacher = $_POST['name_teacher'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO student( snam, sfamily, snampedar, scodemeli, sage,ssex, cnam, tnam, susername, spassword)
                      VALUES ('$fname','$lname','$father_name','$cod','$age','$sex','$name_class','$name_teacher','$username','$password')";

$result = mysqli_query($conn,$query);
if ($result){
    header("Location:login.php");
}
else{
    echo "ERROR : " .$query;
}