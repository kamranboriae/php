<?php
include ('config.php');
$tid = $_GET["id"];

$query = "DELETE FROM teacher WHERE tid=$tid";
mysqli_query($conn, $query);
header("Location:admin_panel");
