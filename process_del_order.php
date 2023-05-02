<?php
    $id = $_GET['id'];  
    require_once './config/connect_db.php';
    $sql = "DELETE FROM `order` WHERE id_order='$id'";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        $_SESSION['isDelOrder'] = "Đơn hàng đã được huỷ.";
        header("location: order.php");
    }else{
        header("location: index.php"); 
    }
    mysqli_close($conn);
?>