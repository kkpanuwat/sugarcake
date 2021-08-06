<?php
include('./conn.php');
$product_id = $_GET['product_id'];
$sql = "SELECT * FROM product WHERE pd_id = $product_id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0 or mysqli_num_rows($result) == null) {
  exit;
}
$row = mysqli_fetch_assoc($result);
include './function/getNumOfCart.php';
?>
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bakery_product.css">
  <link rel="stylesheet" href="css/navbar.css">
  <title>Document</title>
  <script>
    function addToCart(product_id) {
      const product_id = product_id
      let qty = document.form1.input1.value
      alert(product_id, qty)
    }
  </script>
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


    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="bakery_cake.php">เบเกอรี่</a></li>
          <li class="breadcrumb-item"><a href="bakery_cake.php">เค้ก</a></li>
          <li class="breadcrumb-item active" aria-current="page">เครปเค้กชาเขียว</li>
        </ol>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
          <div class="row card_index" id="box">
            <div class="col-lg-6">
              <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $row['pd_img'] ?>" style="border-radius: 7px;box-shadow: white 10px 10px 1px;" alt="Card image cap">
              </div>
            </div>
            <div class="col-lg-6" id="detail">
              <h3><?php echo $row['pd_name'] ?></h3>
              <table>
                <tr>
                  <td class="float">ราคา</td>
                  <td class="float">:</td>
                  <td class="td"><?php echo $row['pd_price'] ?></td>
                </tr>

                <tr>
                  <td class="float">วันหมดอายุ</td>
                  <td class="float">:</td>
                  <td class="td">หลังจาก <?php echo $row['pd_des'] ?> วัน (แช่เย็น)</td>
                </tr>
                <tr>
                  <td class="float">จำนวน</td>
                  <td class="float">:</td>
                  <td class="td">
                    <form name=form1>
                      <input class="btn-de" type="button" value=" - " onclick="document.form1.input1.value--">
                      <input class="btn-num" name="input1" value="1" size=4 onfocus="buffer=this.value" onchange="if (isNaN(this.value)) {this.value=buffer}">
                      <input class="btn-pl" type=button value=" + " onclick="document.form1.input1.value++">
                    </form>
                  </td>
                </tr>
              </table>

              <center><button type="button" style="margin-top: 2em;" class="btn btn-outline-secondary btn-lg" onclick="addcart(<?php echo $row['pd_id'] ?>)">เพิ่มไปยังรถเข็น</button></center>
              <!-- <button type="button" class="btn btn-outline-dark btn-lg" >ซื้อสินค้า</button> -->
              <script>
                function addcart(pd_id) {
                  const product_id = pd_id
                  let qty = document.form1.input1.value
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      // document.getElementById("page5").click();
                      console.log(xhttp.responseText)
                    }
                  };
                  xhttp.open("GET", "./function/insertToCart.php?product_id=" + product_id+"&qty="+qty, true);
                  xhttp.send();
                }
              </script>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>





</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>