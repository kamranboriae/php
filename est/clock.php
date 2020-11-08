<?php
include ('header.php');
include ('nav.php');
?>

<div class="container-fluid">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="index.php"><i class="fa fa-home"></i>خانه  </a>  /  ساعات پذیرش / رزرو بلیط
    </div>
</div>
<div class="container mb-5">

    <div class="row mt-3 text-center" style="margin-right: 250px; font-size: 35px ">
        (شنبه ها بانوان  تعطیل است)
<br>
(شنبه ها سانس آقایان 18الی24)
    </div>

    <table class="table table-hover mt-5 mb-5 mr-3 ml-3">
        <thead class="bg-primary text-light">
        <tr>
            <th scope="col"></th>
            <th scope="col">روزهای زوج</th>
            <th scope="col">روزهای فرد</th>
            <th scope="col">جمعه ها</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">آقایان</th>
            <td> <i class="fa fa-clock"></i> 18 الی 23:30</td>
            <td> <i class="fa fa-clock"></i>  20 الی 23:30</td>
            <td> <i class="fa fa-clock"></i>9 الی 14 </td>
        </tr>
        <tr>
            <th scope="row">بانوان</th>
            <td> <i class="fa fa-clock"></i>9  الی 15</td>
            <td><i class="fa fa-clock"></i>9 الی 19</td>
            <td><i class="fa fa-clock"></i>16 الی 21</td>
        </tr>

        </tbody>
    </table>

    <div class="alert alert-primary text-center mr-5" role="alert" style="font-size: 24px">
        قیمت بلیط استخر  28000 تومان  است
    </div>

    <div class="col-12 col-md">
        <a href="ticket.php" class="btn btn-info " style="margin-right: 45%">برای رزرو بلیط اینجا کلیک کنید</a>
    </div>
</div>


<?php
include ('footer.php');
include ('nav_footer.php');
?>
