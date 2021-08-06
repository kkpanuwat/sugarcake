<?php
include './connect/connectdb.php';
session_start();
$username = $_SESSION['user_username'];
$sql = "SELECT * FROM cart JOIN product on cart.pd_id = product.pd_id WHERE user_username = '$username'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ddd -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
    <link rel=”shortcut icon” href="img/icon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mycart.css">
    <link rel="stylesheet" href="css/navbar.css">

</head>

<body>
    <div class="contain--fluid">

        <section id="navbar">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" alt="" width="80">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active nav_menu" aria-current="page" href="index.php">หน้าหลัก</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav_menu" href="#เบเกอรี่" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ประเภทสินค้า</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item nav_menu" href="bakery_cake.php">เค้ก</a></li>
                                    <li><a class="dropdown-item nav_menu" href="bakery_roll.php">โรล</a></li>
                                    <li><a class="dropdown-item nav_menu" href="bakery_thai.php">ขนมไทย</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_menu" href="set.php">ชุดส่งสุดคุ้ม</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_menu" href="outsite.php">ชุดนอกสถานที่</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav_menu" href="contact.php">ติดต่อเรา</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ตะกร้าของฉัน">
                                    <img class="icon_cart" src="img/cart.png" alt="" width="25">
                                </a>
                            </li>
                            <li id="cart" class="nav-item">
                                <a id="cart_text" class="nav-link nav_menu" href="#ตะกร้าของฉัน">ตะกร้าของฉัน</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">
                                    <img class="icon_user" src="img/user.png" alt="" width="25">
                                </a>
                            <li id="user" class="nav-item">
                                <a id="user_text" class="nav-link nav_menu" href="profile.php">โปรไฟล์</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!-- //nav// -->
        </section> <!--  navbar  -->
        <div class="navv">hi</div>

        <center>
            <h3 class="text_title">ตะกร้าสินค้าของฉัน</h3>
        </center>
        <div class="row">
            <div class="col">
                <div class="left">
                    <div class="row">
                        <span>
                            <h3 style="float: left; margin-left:1em;">สินค้าในตะกร้า</h3>
                            <h3 style="float: right; margin-right:1em;"><?php echo mysqli_num_rows($result)?> รายการ</h3>
                        </span>
                        <hr>
                        <div class="col">
                            <table style="margin-left: 4em;padding:10px;">
                                <thead>
                                    <td style="width: 20em;">ชื่อสินค้า</td>
                                    <td style="width: 10em;text-align:center;">จำนวน</td>
                                    <td style="width: 10em;text-align:center;">ราคา</td>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><img src="<?php echo $row['pd_img'] ?>" width="100" height="100" alt=""> <b><?php echo $row['pd_name'] ?></b></td>
                                            <td style="text-align:center;">
                                                <form name=form1>
                                                    <input class="btn-de" type=button value=" - " onclick="document.form1.input1.value--">
                                                    <input class="btn-num" name=input1 value="<?php echo $row['qty'] ?>" size=4 onfocus="buffer=this.value" onchange="if (isNaN(this.value)) {this.value=buffer}">
                                                    <input class="btn-pl" type=button value=" + " onclick="document.form1.input1.value++">
                                                </form>
                                            </td>
                                            <td style="text-align:center;"><b><?php echo $row['pd_price'] ?> บาท</b></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="right">

                </div>
            </div><!--  col  -->
        </div><!--  row  -->

        <footer class="footer">
            <h6 style="text-align: center; color: white; font-weight: bold; padding-top: 2%;">©2021 Sugar Cake All right reserved</h6>
        </footer>


    </div><!--  contain--fluid -->

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>