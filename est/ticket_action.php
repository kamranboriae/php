<?php
include ('header.php');
include ('nav.php');
include ('config.php');

$name = $code = $number_phone =  $price = '';

$name = $_POST['name'];
$code = $_POST['code'];
$number_phone = $_POST['number_phone'];
$price = $_POST['price'];

$query = "INSERT INTO ticket(nam_moshtari, codemeli_moshtary, phonenumber, mablagh_blit)
          VALUES ('$name','$code','$number_phone','$price')";

$result = mysqli_query($conn,$query);
if ($result){?>

    <div class="container mt-5 mb-5">

        <div class="jumbotron mt-5 mb-3">
            <table class="table table-hover mt-5 mb-5 mr-3 ml-3" style="border: 1px solid black; border-collapse: collapse">
                <thead class="bg-secondary text-light">
                <tr style="border: 1px solid black;" >
                    <th scope="col" class="text-center" >نام و نام خانوادگی</th>
                    <th scope="col" class="text-center" >کد ملی</th>
                    <th scope="col" class="text-center" >شماره موبایل</th>
                    <th scope="col" class="text-center" >هزینه بلیط</th>
                </tr>
                </thead>
                <tbody class="text-success">
                <?php

                $query = "SELECT * FROM ticket WHERE nam_moshtari = '$name'";

                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['tiid'];
                        $name  = $row['nam_moshtari'];
                        session_start();
                        $_SESSION['id'] = $id;
                        $_SESSION['nam_moshtari'] = $name;
                        echo "<tr>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['nam_moshtari'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['codemeli_moshtary'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['phonenumber'] . "</td>" .
                            "<td class=' text-center' style='border: 1px solid black;' >" . $row['mablagh_blit'] . "</td>" .
                            "</tr>";
                    }
                }
                ?>
                </tbody>
                <a href="ticket_out.php" class="btn btn-info"><i class="fa fa-sign-out-alt"></i>خروج</a>
            </table>
        </div>

    </div>

<?php
}

else{
    echo "ERROR : " .$query;
}
?>
<?php
include ('nav_footer.php');
include ('footer.php');
?>