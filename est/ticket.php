<?php
include ('header.php');
include ('nav.php');
?>
<div class="container">

    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه </a>/رزرو بلیط
    </div>

    <div class="jumbotron jb mt-5">

        <form action="ticket_action.php" method="post">
            <div class="form-group">
                <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                    <i class="fa fa-user-cog"></i>                       نام نام خانوادگی
                </div>
                <input type="text" name="name" placeholder="نام نام خانوادگی" class="form-control text-center">
            </div>
            <div class="form-group">
                <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                    <i class="fa fa-sort-numeric-up"></i>کد ملی
                </div>
                <input type="text" name="code" placeholder="کد ملی" class="form-control text-center">
            </div>
            <div class="form-group">
                <div class="shadow-lg text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                    <i class="fa fa-phone-square"></i>                       شماره موبایل
                </div>
                <input type="text" name="number_phone" placeholder="شماره موبایل" class="form-control text-center" >
            </div>
            <div class="form-group">
                <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                    <i class="fa fa-money-bill"></i>                        هزینه بلیط
                </div>
                <input class="form-control mb-5 text-center" name="price"  type="text" value="28000"  readonly>
            </div>

            <button type="submit" class="btn btn-primary text-center" style="margin-right: 45%">ثبت سفارش </button>
        </form>
    </div>
</div>
<?php
include ('nav_footer.php');
include ('footer.php');

?>