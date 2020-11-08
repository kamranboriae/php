<?php

include ('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM student WHERE susername = '$username' AND spassword = '$password'";

$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['sid'];
        $username = $row['susername'];
        session_start();
        $_SESSION['sid'] = $id;
        $_SESSION ['susername'] = $username;
    }
    header("Location:user_panel.php");
}
else{
    echo "<p style='color: red; text-align: center'>"."ورود نا موفق"."</p>";
}
?>

<?php include ('header.php'); ?>
<a href="login_user.php" class="btn btn-light" style="margin-left: 48%;">بازگشت</a>
<?php include ('footer.php'); ?>
