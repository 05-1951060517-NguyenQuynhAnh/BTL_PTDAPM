<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
    $id_catalog = $_POST['txtMaLH'];
    $name = $_POST['txtTenLH'];
   
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE catalog SET name='$name' WHERE id_catalog='$id1'";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: loaihang.php?id=$id"); 
    }else{
        header("location: error.php"); 
    }

    mysqli_close($conn);
?>