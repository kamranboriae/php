<?php
include ('header.php');
include ('nav.php');
?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a>/ ورود
    </div>

    <div class="jumbotron jb mt-5 mb-5">
        <div class="row" style="margin-right: 25%">
        <div class="col-md-3"><a href="login_user.php" class="btn btn-outline-primary">هنر جو</a></div>
        <div class="col-md-3"><a href="login_teacher.php" class="btn btn-outline-primary">هنر آموز</a></div>
       <div class="col-md-3"><a href="login_admin.php" class="btn btn-outline-primary">مدیریت</a></div>

        </div>
    </div>

</div>

<?php
include ('nav_footer.php');
include ('footer.php');
?>
