<?php
include ('config.php');
$tiid = $_GET["id"];

$query = "DELETE FROM ticket WHERE tiid=$tiid";
mysqli_query($conn, $query);
header("Location:admin_panel");
