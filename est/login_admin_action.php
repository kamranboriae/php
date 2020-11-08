<?php

include ('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE ausername = '$username' AND apassword = '$password'";

$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['aid'];
        $username = $row['ausername'];
        session_start();
        $_SESSION['aid'] = $id;
        $_SESSION ['ausername'] = $username;
    }
    header("Location:admin_panel.php");
}
else{
    echo "<p style='color: red; text-align: center'>"."ورود ناموفق ادمین"."</p>";
}
?>

<?php include ('header.php'); ?>
<a href="login_admin.php" class="btn btn-light" style="margin-left: 48%;">بازگشت</a>
<?php include ('footer.php'); ?>

