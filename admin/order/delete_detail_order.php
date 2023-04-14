<?php
$id = $_GET['id'];
    $id1 = $_GET['id1'];
    $id2 = $_GET['id2'];
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE  FROM detail_order WHERE  id_order= '$id1' and product_id='$id2' ";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        header("location: order.php?id=$id");
    }else{
        header("location: error.php"); 
    }
    mysqli_close($conn);
?>