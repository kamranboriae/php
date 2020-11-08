<?php
include ('header.php');
include ('nav.php');
?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a>/ فرم ثبت اطلاعات هنر آموز
    </div>

    <div class="jumbotron jb mt-5 mb-5">

        <form action="create_teacher_action.php" method="post">
            <div class="form-group">

                <input type="text" name="teacher_name" class="form-control text-center"  placeholder="نام">

            </div>

            <div class="form-group">

                <input type="text" name="teacher_family" class="form-control text-center"  placeholder="نام خانوادگی">

            </div>

            <div class="form-group">

                <input type="text" name="name_class" class="form-control text-center"  placeholder="نام کلاس">

            </div>

            <div class="form-group">

                <input type="text" name="teacher_username" class="form-control text-center"  placeholder="نام کاربری">

            </div>

            <div class="form-group">

                <input type="password" name="teacher_password" class="form-control text-center"  placeholder="رمز عبور">

            </div>

            <input type="submit" name="save" value="ثبت" class="btn btn-success btn-block text-center">

        </form>

    </div>

</div>

<?php
include ('nav_footer.php');
include ('footer.php');
?>
