<?php
$id = $_GET['id'];
    $id1 = $_GET['id1'];
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE  FROM `product` WHERE id_product = '$id1' ";
    // $sql = "ALTER TABLE sanpham DROP CONSTRAINT MaSP WHERE MaSP = '$id1';";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        $_SESSION['message'] = "Xóa thành công!";
        $_SESSION['status'] = "success";
        header("location: sanpham.php?id=$id");
    }else{
        header("location: error.php"); 
    }
    mysqli_close($conn);
?>