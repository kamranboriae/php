<?php
include ('config.php');
$cid = $_GET["id"];

$query = "DELETE FROM class WHERE cid=$cid";
mysqli_query($conn, $query);
header("Location:admin_panel");
