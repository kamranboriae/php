<?php
include ('header.php');
include ('nav.php');
?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a> <a href="login.php"> / ورود</a>/ ورود هنرجو
    </div>

    <p style='text-align: center; font-size:25px; margin-top:5%;'>ورود هنرجو </p>

    <hr style='border:1px solid black; width:800px;'>

    <div style="width:500px; margin-right: 30%" >
        <fieldset>
        <form action="login_action.php" method="post"  class="form-signin" style="margin-bottom: 15%; margin-top: 5%">
            <div class="form-group">
            <input type="text" name="username" class="form-control  text-center" placeholder="نام کاربری" required autofocus>
            </div>
            <div class="form-group">
            <input type="password" name="password" class="form-control  text-center" placeholder="رمز عبور" required>
            </div>
            <div class="form-group">
            <input type="submit" name="login" value="ورود" class="btn btn-outline-info btn-block text-center">
            </div>
        </form>
        </fieldset>
    </div>

</div>

<?php
include ('nav_footer.php');
include ('footer.php');
?>
