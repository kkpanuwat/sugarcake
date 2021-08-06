<?php
    session_start();
    include('../connect/connectdb.php');
    if(!isset($_GET['product_id']) or !isset($_GET['qty'])){
        exit();
    }
    $qty = $_GET['qty'];
    $product_id = $_GET['product_id'];
    $username = $_SESSION['user_username'];
    $sql = "SELECT * FROM cart WHERE pd_id = $product_id AND user_username = '$username'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0){
        $sql = "INSERT INTO cart(pd_id,qty,user_username) VALUES($product_id,$qty,'$username')";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            exit();
        }
        echo 'insert success';
    } else {
        $oldData = mysqli_fetch_assoc($result);
        $newQty = $oldData['qty'] + $qty;
        $sql = "UPDATE cart SET qty = $newQty WHERE user_username = '$username' and pd_id = $product_id";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'update success';
        }
    }


