<?php

include ('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM teacher WHERE tusername = '$username' AND tpassword= '$password'";

$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['tid'];
        $username = $row['tusername'];
        session_start();
        $_SESSION['tid'] = $id;
        $_SESSION ['tusername'] = $username;
    }
    header("Location:teacher_panel.php");
}
else{
    echo "<p style='color: red; text-align: center'>"."ورود ناموفق استاد"."</p>";
}
?>
<?php include ('header.php'); ?>
    <a href="login_teacher.php" class="btn btn-light" style="margin-left: 48%;">بازگشت</a>
<?php include ('footer.php'); ?>