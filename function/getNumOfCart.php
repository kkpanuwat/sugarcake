<?php
    include './connect/connectdb.php';
    session_start();
    if(isset($_SESSION['user_username'])){
        $username = $_SESSION['user_username'];
        $sql = "SELECT * FROM cart WHERE user_username = '$username'";
        $result = mysqli_query($conn,$sql);
        $numOfCart =  mysqli_num_rows($result);
    } else {
        $numOfCart = '0';
    }
    
