<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM `order` WHERE  id_order= '$id1' ";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        $_SESSION['message'] = "Xóa thành công!";
        $_SESSION['status'] = "success";
        header("location: order.php?id=$id");
    }else{
        header("location: error.php"); 
    }
    mysqli_close($conn);
?>