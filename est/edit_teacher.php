<?php

ob_start();

include ('header.php');
include ('nav.php');
include ('config.php');

$tid = $_GET['id'];
$query   = "SELECT * FROM teacher WHERE tid = '$tid'";
$result   = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>


<div class="container mb-5">
    <hr style="border: 1px solid">
    <div class="row mt-2 mr-2 ">
        شما اینجا هستید <a href="admin_panel.php"><i class="fa fa-solar-panel"></i>پنل مدیریت </a>/ فرم ویرایش اطلاعات هنر آموز
    </div>

    <div class="jumbotron jb mt-5 mb-5">

        <form action="" method="post">
            <input type="hidden" name="tid">
            <div class="form-group">
                <input class="form-control mb-5 text-center" name="cid"  type="text" value="<?php echo $row['tid']; ?>"  readonly>
            </div>
                <div class="form-group">
                <input type="text" name="teacher_name" class="form-control text-center"  value="<?php echo $row['tnam']; ?>">

            </div>

            <div class="form-group">

                <input type="text" name="teacher_family" class="form-control text-center"  value="<?php echo $row['tfamily']; ?>">

            </div>

            <div class="form-group">

                <input type="text" name="name_class" class="form-control text-center"  value="<?php echo $row['cnam']; ?>">

            </div>


            <input type="submit" name="edit" value="ویرایش" class="btn btn-success btn-block text-center">

        </form>

    </div>

</div>

<?php

if (isset($_POST['edit'])) {

    $teacher_name = $_POST['teacher_name'];
    $teacher_family = $_POST['teacher_family'];
    $name_class = $_POST['name_class'];

    $query = "UPDATE teacher SET tnam='$teacher_name', tfamily='$teacher_family', cnam='$name_class' WHERE tid='$tid'";
    if (mysqli_query($conn, $query)) {
        header('location:admin_panel.php');
    } else {
        echo 'error';
    }
}

include ('nav_footer.php');
include ('footer.php');
?>
