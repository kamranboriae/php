<?php
include ('header.php');
include ('config.php');
?>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(0,100,255,0.2);">
        <button
            class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav text-center mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-info" href="signup.php"><i class="fa fa-file-signature"></i>ثبت نام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="login_teacher.php"><i class="fa fa-sign-in-alt"></i>ورود</a>
                </li>

                <li class="nav-item dropdown">
                    <?php
                    session_start();
                    $username = $_SESSION['tusername'] ;
                    ?>
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout_teacher.php">logout</a>
                    </div>



                </li>
            </ul>
        </div>
    </nav>
<?php

$id = $_SESSION['tid'];

$query = "SELECT * FROM teacher WHERE tid='$id'";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $username = $row['tusername'];
        $password = $row['tpassword'];
    }
}

?>

    <div class="container">
        <div class="jumbotron" style="margin-top: 25px">
            <p class="text-center text-secondary" style="font-size: 18px">هنرجویان</p>
            <hr style="border: 1px solid">

            <table class="table table-hover mt-5 mb-5  ml-3" style="border: 1px solid black; border-collapse: collapse">
                <thead class="bg-secondary text-light">
                <tr style="border: 1px solid black;" >
                    <th scope="col" class=' text-center'>نام</th>
                    <th scope="col" class=' text-center'>نام خانوادگی</th>
                    <th scope="col" class=' text-center'>نام پدر</th>
                    <th scope="col" class=' text-center'>کد ملی</th>
                    <th scope="col" class=' text-center'>سن</th>
                    <th scope="col" class=' text-center'>نام کلاس</th>
                </tr>
                </thead>
                <tbody class="text-success">
                <?php

                $query = "SELECT * FROM student WHERE tnam = '$username'";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['snam'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['sfamily'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['snampedar'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['scodemeli'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['sage'] . "</td>" .

                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['cnam'] . "</td>" .
                            "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>


        </div>
    </div>
<?php
include ('nav_footer.php');
include ('footer.php');
?>