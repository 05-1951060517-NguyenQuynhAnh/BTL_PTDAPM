<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "SELECT * FROM `order` WHERE id_order='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stt = $row['status'];
        if($stt == 0){
            $sql1 = "UPDATE `order` SET `status`='1' WHERE id_order='$id'";
            $number = mysqli_query($conn,$sql1);
            if($number > 0){
            $_SESSION['isAcceptOrder'] = "Đã xác nhận đơn hàng thành công.";
             header("location: detail_order.php?id=$id1&id1=$id"); 
            }else{
            header("location: error.php"); 
        }
        }
        else
        {
            $sql2 = "UPDATE `order` SET `status`='2' WHERE id_order='$id'";
            $number2 = mysqli_query($conn,$sql2);
            if($number2 > 0){
            $_SESSION['isAcceptOrder'] = "Đơn hàng đã được hoàn thành";
             header("location:detail_order.php?id=$id1&id1=$id"); 
            }else{
            header("location: error.php"); 
            }
        }}
        mysqli_close($conn);
?>