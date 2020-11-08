<?php

ob_start();

include ('header.php');
include ('nav.php');
include ('config.php');

$tiid = $_GET['id'];
$query   = "SELECT * FROM ticket WHERE tiid = '$tiid'";
$result   = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

?>
    <div class="container">

        <hr style="border: 1px solid">
        <div class="row mt-2 mr-2 ">
            شما اینجا هستید <a href="admin_panel.php"><i class="fa fa-solar-panel"></i>پنل مدیریت </a>/ ویرایش رزرو بلیط
        </div>

        <div class="jumbotron jb mt-5">

            <form action="" method="post">
                <input type="hidden" name="tiid">
                <div class="form-group">
                    <input class="form-control mb-5 text-center" name="cid"  type="text" value="<?php echo $row['tiid']; ?>"  readonly>
                </div>

                <div class="form-group">
                    <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                        <i class="fa fa-user-cog"></i>                       نام نام خانوادگی
                    </div>
                    <input type="text" name="name"  class="form-control text-center" value="<?php echo $row['nam_moshtari']; ?>" >
                </div>
                <div class="form-group">
                    <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c"  >
                        <i class="fa fa-sort-numeric-up"></i>کد ملی
                    </div>
                    <input type="text" name="code" class="form-control text-center" value="<?php echo $row['codemeli_moshtary']; ?>">
                </div>
                <div class="form-group">
                    <div class="shadow-lg text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                        <i class="fa fa-phone-square"></i>                       شماره موبایل
                    </div>
                    <input type="text" name="number_phone"  class="form-control text-center" value="<?php echo $row['phonenumber']; ?>" >
                </div>
                <div class="form-group">
                    <div class="shadow-lg  text-light  rounded text-center" style="font-size: 20px; background: #9c9c9c">
                        <i class="fa fa-money-bill "></i>                        هزینه بلیط
                    </div>
                    <input class="form-control mb-5 text-center" name="price"  type="text" value="<?php echo $row['mablagh_blit']; ?>"   readonly>
                </div>

                <input type="submit" name="edit" value="ویرایش" class="btn btn-success btn-block text-center">

            </form>
        </div>
    </div>
<?php

if (isset($_POST['edit'])) {
    $name= $_POST['name'];
    $code = $_POST['code'];
    $number_phone = $_POST['number_phone'];
    $price = $_POST['price'];
    $query = "UPDATE ticket SET nam_moshtari='$name', codemeli_moshtary='$code', phonenumber='$number_phone', mablagh_blit='$price' WHERE tiid=$tiid";
    if (mysqli_query($conn, $query)) {

        header('location:admin_panel.php');

    } else {
        echo 'error';
    }
}

include ('nav_footer.php');
include ('footer.php');

?>