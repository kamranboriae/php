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
                  <a class="nav-link text-info" href="logout_admin.php"><i class="fa fa-sign-in-alt"></i>خروج</a>
              </li>
            </ul>

            <?php
            session_start();
            $username = $_SESSION['ausername'] ;
            ?>
            <button style="margin-right: 80%"  class="btn btn-info text-light"><?php echo $username; ?></button>
        </div>
    </nav>
<?php

$id = $_SESSION['aid'];

$query = "SELECT * FROM admin WHERE aid='$id'";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $username = $row['ausername'];
        $password = $row['apassword'];
    }
}

?>
<?php
    $query = "SELECT * FROM teacher WHERE tusername = '$username' AND tpassword= '$password'";

    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)){
    $id = $row['tid'];
    $username = $row['tusername'];
    session_start();
    $_SESSION['tid'] = $id;
    $_SESSION ['tusername'] = $username;
    }
    }
?>
    <div class="container">
        <div class="jumbotron" style="margin-top: 25px; background: #bee5eb;">

            <p class="text-center text-secondary" style="font-size: 25px">پنل مدیریت</p>

            <hr style="border: 1px solid">
            <p class="text-center text-secondary" style="font-size: 18px">کلاس</p>
            <a href="create_class.php" class="btn btn-primary">افزودن کلاس</a>
            <table class="table table-hover mt-5 mb-5  ml-3" style="border: 1px solid black; border-collapse: collapse">
                <thead class="bg-secondary text-light">
                <tr style="border: 1px solid black;" >
                    <th scope="col" class=' text-center'>ردیف</th>
                    <th scope="col" class=' text-center'> نام کلاس</th>
                    <th scope="col" class=' text-center'>محل کلاس</th>
                    <th scope="col" class=' text-center'>شهریه کلاس</th>
                    <th scope="col" class=' text-center'>عملیات</th>
                </tr>
                </thead>
                <tbody class="text-dark">
                <?php

                $query = "SELECT * FROM class ";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {?>
                        <tr>
                            <td class="text-center" style="border: 1px solid black;" > <?php echo $row['cid']; ?>        </td>
                            <td class=" text-center" style="border: 1px solid black;" > <?php echo $row['cnam']; ?>      </td>
                            <td class=" text-center" style="border: 1px solid black;" > <?php echo $row['cmahal']; ?>    </td>
                            <td class=" text-center" style="border: 1px solid black;" > <?php echo $row['cmablagh']; ?>  </td>
                            <td class=" text-center" style="border: 1px solid black;" >
                                            <a href="edit_class.php?id= <?php  echo$row['cid']; ?> " class="btn btn-warning">ویرایش</a>
                                            <a href="delete_class.php?id=<?php echo$row['cid']; ?> " class="btn btn-danger">حذف</a>
                            </td></tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>

            <hr style="border: 1px solid">
            <p class="text-center text-secondary" style="font-size: 18px">هنرآموز</p>
            <a href="create_teacher.php" class="btn btn-primary">افزودن هنرآموز</a>
            <table class="table table-hover mt-5 mb-5  ml-3" style="border: 1px solid black; border-collapse: collapse">
                <thead class="bg-secondary text-light">
                <tr style="border: 1px solid black;" >
                    <th scope="col" class=' text-center'>ردیف</th>
                    <th scope="col" class=' text-center'>نام</th>
                    <th scope="col" class=' text-center'>نام خانوادگی</th>
                    <th scope="col" class=' text-center'>نام کلاس</th>
                    <th scope="col" class=' text-center'>عملیات</th>
                </tr>
                </thead>
                <tbody class="text-dark" style="font-size: 18px">
                <?php

                $query = "SELECT * FROM teacher ";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {?>

                       <tr>
                            <td class="text-center" style="border: 1px solid black;"><?php  echo $row['tid'];    ?></td>
                            <td class="text-center" style="border: 1px solid black;"><?php  echo $row['tnam'];   ?></td>
                            <td class="text-center" style="border: 1px solid black;" ><?php echo $row['tfamily'];?></td>
                            <td class="text-center" style="border: 1px solid black;" ><?php echo $row['cnam'];   ?></td>
                            <td class="text-center" style="border: 1px solid black;" >
                                            <a href="edit_teacher.php?id=<?php   echo $row['tid'];    ?>" class="btn btn-warning">ویرایش</a>
                                            <a href="delete_teacher.php?id=<?php echo $row['tid'];    ?>" class="btn btn-danger">حذف</a>
                            </td></tr>
              <?php
                    }
                }
                ?>
                </tbody>
            </table>
                    <hr style="border: 1px solid">
                    <p class="text-center text-secondary" style="font-size: 18px">هنرجو</p>
                    <a href="signup.php" class="btn btn-primary">افزودن هنرجو</a>
                    <table class="table table-hover mt-5 mb-5  ml-3" style="border: 1px solid black; border-collapse: collapse">
                        <thead class="bg-secondary text-light">
                        <tr style="border: 1px solid black;" >
                            <th scope="col" class=' text-center'>ردیف</th>
                            <th scope="col" class=' text-center'>نام</th>
                            <th scope="col" class=' text-center'>نام خانوادگی</th>
                            <th scope="col" class=' text-center'>نام پدر</th>
                            <th scope="col" class=' text-center'>کد ملی</th>
                            <th scope="col" class=' text-center'>سن</th>
                            <th scope="col" class=' text-center'>نام کلاس</th>
                            <th scope="col" class=' text-center'>عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="text-dark" style="font-size: 18px">
                        <?php

                        $query = "SELECT * FROM student";

                        $result = mysqli_query($conn,$query);
                        if (mysqli_num_rows($result) > 0){

                            while ($row = mysqli_fetch_assoc($result)) {?>

                                <tr>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['sid']; ?>       </td>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['snam'];  ?>     </td>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['sfamily']; ?>   </td>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['snampedar']; ?> </td>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['scodemeli']; ?> </td>
                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['sage'];   ?>    </td>

                                    <td class=" text-center" style="border: 1px solid black;" ><?php echo $row['cnam']; ?>      </td>
                                    <td class=" text-center" style="border: 1px solid black;" >
                                            <a href="edit_student.php?id=<?php echo $row['sid']; ?>" class="btn btn-warning">ویرایش</a>
                                            <a href="delete_student.php?id=<?php echo $row['sid']; ?>" class="btn btn-danger">حذف</a>
                                    </td></tr>
                        <?php
                          }
                        }
                        ?>
                        </tbody>
                    </table>
            <hr style="border: 1px solid">
            <p class="text-center text-secondary" style="font-size: 18px">مشتریان</p>
            <a href="ticket.php" class="btn btn-primary">افزودن بلیط</a>
            <table class="table table-hover mt-5 mb-5  ml-3" style="border: 1px solid black; border-collapse: collapse">
                <thead class="bg-secondary text-light">
                <tr style="border: 1px solid black;" >
                    <th scope="col" class=' text-center'>ردیف</th>
                    <th scope="col" class=' text-center'> نام مشتری</th>
                    <th scope="col" class=' text-center'>کد ملی</th>
                    <th scope="col" class=' text-center'>شماره موبایل</th>
                    <th scope="col" class=' text-center'>هزینه بلیط</th>
                    <th scope="col" class=' text-center'>عملیات</th>
                </tr>
                </thead>
                <tbody class="text-dark" style="font-size: 18px">
                <?php

                $query = "SELECT * FROM ticket";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {?>
                         <tr>
                            <td class=" text-center" style="border: 1px solid black;" ><?php  echo $row['tiid'];    ?>          </td>
                            <td class=" text-center" style="border: 1px solid black;" ><?php  echo $row['nam_moshtari'];  ?>     </td>
                            <td class=" text-center" style="border: 1px solid black;" ><?php  echo $row['codemeli_moshtary']; ?>  </td>
                            <td class=" text-center" style="border: 1px solid black;" ><?php  echo $row['phonenumber'];  ?>      </td>
                            <td class=" text-center" style="border: 1px solid black;" ><?php  echo $row['mablagh_blit']; ?>       </td>
                            <td class=" text-center" style="border: 1px solid black;" >
                                            <a href="edit_ticket.php?id=<?php  echo $row['tiid'];    ?> " class="btn btn-warning">ویرایش</a>
                                            <a href="delete_ticket.php?id=<?php  echo $row['tiid'];    ?> " class="btn btn-danger">حذف</a>
                            </td></tr>
             <?php
                    }
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
<?php
include 'footer.php';
include ('nav_footer.php');
?>