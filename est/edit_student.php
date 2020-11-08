<?php

ob_start();

include ('header.php');
include ('nav.php');
include ('config.php');

$sid = $_GET['id'];
$query   = "SELECT * FROM student WHERE sid = '$sid'";
$result   = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

?>

<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="admin_panel.php"><i class="fa fa-solar-panel"></i>پنل مدیریت </a>/ فرم ویرایش هنرجو
    </div>

    <div class="jumbotron jb mt-5 mb-5">

        <form action="" method="post">
            <input type="hidden" name="sid">
            <div class="form-group">
                <input class="form-control mb-5 text-center" name="cid"  type="text" value="<?php echo $row['sid']; ?>"  readonly>
            </div>
            <div class="form-group">

                <input type="text" name="fname" class="form-control text-center" value="<?php echo $row['snam']; ?>" >

            </div>

            <div class="form-group">

                <input type="text" name="lname" class="form-control text-center" value="<?php echo $row['sfamily']; ?>" >

            </div>

            <div class="form-group">

                <input type="text" name="father_name" class="form-control text-center" value="<?php echo $row['snampedar']; ?>" >

            </div>

            <div class="form-group">

                <input type="text" name="cod" class="form-control text-center" value="<?php echo $row['scodemeli']; ?>" >

            </div>

            <div class="form-group">

                <input type="number" name="age" class="form-control text-center" value="<?php echo $row['sage']; ?>" >

            </div>

            <div class="form-group">

                <input type="text" name="name_class" class="form-control text-center" value="<?php echo $row['cnam']; ?>" >

            </div>


            <input type="submit" name="edit" value="ویرایش" class="btn btn-success btn-block text-center">

        </form>

    </div>

</div>

<?php

if (isset($_POST['edit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $father_name = $_POST['father_name'];
    $cod = $_POST['cod'];
    $age = $_POST['age'];
    $name_class = $_POST['name_class'];

    $query = "UPDATE student 
              SET snam='$fname', sfamily='$lname', snampedar='$father_name', scodemeli='$cod', sage='$age', cnam='$name_class'
              WHERE sid='$sid'";

    if (mysqli_query($conn, $query)) {

        header('location:admin_panel.php');

    } else {
        echo 'error';
    }
}

include ('nav_footer.php');
include ('footer.php');
?>
