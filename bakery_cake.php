<?php include "./connect/connectdb.php";
include "./function/getNumOfCart.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
  <link rel=”shortcut icon” href="img/icon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bakery_cake.css">
  <link rel="stylesheet" href="css/navbar.css">

  <title>Document</title>
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
                <a class="nav-link" href="bakery_mycart.php">
                  <div class="noti" style="width: 30px;height: 30px;background-color: red;color:white;border-radius:100%">
                    <?php echo $numOfCart ?><img class="icon_cart" src="img/cart.png" alt="" width="25">
                  </div>
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

    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="bakery_cake.php">เบเกอรี่</a></li>
          <li class="breadcrumb-item active" aria-current="page">เค้ก</li>
        </ol>
      </nav>
    </div>

    <div class="row">

      <div class="col-md-2"></div>
      <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">

        <div class="row">
          <?php
          $sql = "SELECT * FROM product";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
              <a href="bakery_product.php?product_id=<?php echo $row['pd_id'] ?>">
                <div class="card card_index">
                  <img src="<?php echo $row["pd_img"] ?>" height="400" class="card-img-top" alt="...">
                  <div class="card-body">
                    <span class="card-text"><?php echo $row["pd_name"] ?></span>
                    <p class="card-text" style="float: right;"><?php echo $row["pd_price"] ?>.-</p>
                  </div>
                </div>
              </a>
            </div>
          <?php } ?>
        </div> <!-- row  -->
      </div>
      <div class="col-md-2"></div>
    </div><!--  row2  -->



    </section> <!--  navbar  -->
  </div>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>