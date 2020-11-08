<?php
include ('config.php');
$sid = $_GET["id"];

$query = "DELETE FROM student WHERE sid=$sid";
mysqli_query($conn, $query);
header("Location:admin_panel");
