<?php
include_once 'header.php';
include_once 'nav.php';
?>

    <div class="container mb-5">
        <div class="row mt-2 mr-2 ">
            شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a> <a href="login.php"> / ورود</a>/ ورود مدیریت
        </div>
    <p style='text-align: center; font-size:25px; margin-top:5%;'>ورود ادمین </p>

    <hr style='border:1px solid black; width:800px;'>

    <div style="width:500px; margin-left: 25%">

        <fieldset>

        <form action="login_admin_action.php" method="post" style="margin-bottom: 15%; margin-top: 5%">

            <div class="form-group">


                <input type="text" name="username" class="form-control text-center" placeholder="نام کاربری" autocomplete="off" style="margin-right: 300px">

            </div>

            <div class="form-group">


                <input type="password" name="password" class="form-control text-center" placeholder="رمز عبور" autocomplete="off" style="margin-right: 300px">

            </div>

            <div class="form-group">

                <input type="submit" name="login_admin" value="ورود ادمین" class="btn btn-outline-info btn-block text-center" style="margin-right: 300px">

            </div>

        </form>
        </fieldset>

    </div>
    </div>
<?php
include ('nav_footer.php');
include_once 'footer.php';
?>