<?php
include ('header.php');
include ('nav.php');
?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a>/ فرم ثبت نام
    </div>

    <div class="jumbotron jb mt-5 mb-5">

        <form action="rigester_action.php" method="post">
            <div class="form-group">

                <input type="text" name="fname" class="form-control text-center"  placeholder="نام">

            </div>

            <div class="form-group">

                <input type="text" name="lname" class="form-control text-center"  placeholder=" نام خانوادگی">

            </div>

            <div class="form-group">

                <input type="text" name="father_name" class="form-control text-center"  placeholder="نام پدر">

            </div>

            <div class="form-group">

                <input type="text" name="cod" class="form-control text-center"  placeholder="کد ملی">

            </div>

            <div class="form-group">

                <input type="number" name="age" class="form-control text-center"  placeholder="سن">

            </div>
            <div class="row">
                <div class="col-md-6">
            <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="sex" value="مرد" class="custom-control-input text-center">
                <label class="custom-control-label" for="customRadioInline1">مرد</label>
            </div>
            </div>
            </div>
                    <div class="col-md-6">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="sex" value="زن" class="custom-control-input text-center">
                <label class="custom-control-label" for="customRadioInline2">زن</label>
            </div>
            </div>
            </div>

            <div class="form-group">

                <input type="text" name="name_class" class="form-control text-center"  placeholder="نام کلاس">

            </div>

            <div class="form-group">

                <input type="text" name="name_teacher" class="form-control text-center"  placeholder="نام استاد">

            </div>

            <hr class="mt-5" style="border: 1px solid">

            <div class="form-group mt-5">

                <input type="text" name="username" class="form-control text-center"  placeholder="نام کاربری">

            </div>

            <div class="form-group">

                <input type="password" name="password" class="form-control text-center" placeholder="رمز عبور">

            </div>

            <input type="submit" name="save" value="ثبت" class="btn btn-success btn-block text-center">

        </form>

    </div>

</div>

<?php
include ('nav_footer.php');
include ('footer.php');
?>
