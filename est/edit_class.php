<?php

ob_start();

include ('header.php');
include ('nav.php');
include ('config.php');

$cid = $_GET['id'];
$query   = "SELECT * FROM class WHERE cid = '$cid'";
$result   = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="admin_panel.php"><i class="fa fa-solar-panel"></i>پنل مدیریت </a>>/ فرم ویرایش اطلاعات کلاس
    </div>

    <div class="jumbotron jb mt-5 mb-5">

        <form action="" method="post">
            <input type="hidden" name="cid">
            <div class="form-group">
                <input class="form-control mb-5 text-center" name="cid"  type="text" value="<?php echo $row['cid']; ?>"  readonly>
            </div>
            <div class="form-group">


                <input type="text" name="class_name" class="form-control text-center"  value="<?php echo $row['cnam']; ?>">

            </div>

            <div class="form-group">

                <input type="text" name="address_class" class="form-control text-center" value="<?php echo $row['cmahal']; ?>">

            </div>

            <div class="form-group">

                <input type="text" name="fee_class" class="form-control text-center"  value="<?php echo $row['cmablagh']; ?>">

            </div>

            <input type="submit" name="edit" value="ویرایش" class="btn btn-success btn-block text-center">

        </form>

    </div>

</div>

<?php

if (isset($_POST['edit'])) {

    $class_name = $_POST['class_name'];
    $address_class = $_POST['address_class'];
    $fee_class = $_POST['fee_class'];

    $query = "UPDATE class SET cnam='$class_name', cmahal='$address_class', cmablagh='$fee_class' WHERE cid='$cid'";
    if (mysqli_query($conn, $query)) {
        header('location:admin_panel.php');
    } else {
        echo 'error';
    }
}

include ('nav_footer.php');
include ('footer.php');
?>

