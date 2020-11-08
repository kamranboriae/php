<?php
include ('config.php');

$teacher_name = $teacher_family = $name_class = $teacher_username = $teacher_password = '';

$teacher_name = $_POST['teacher_name'];
$teacher_family = $_POST['teacher_family'];
$name_class = $_POST['name_class'];
$teacher_username = $_POST['teacher_username'];
$teacher_password = $_POST['teacher_password'];

$query = "INSERT INTO teacher(tnam, tfamily, cnam, tusername, tpassword) 
                        VALUES ('$teacher_name','$teacher_family','$name_class','$teacher_username','$teacher_password')";

$result = mysqli_query($conn,$query);
if ($result){
    header("Location:admin_panel.php");
}
else{
    echo "ERROR : " .$query;
}