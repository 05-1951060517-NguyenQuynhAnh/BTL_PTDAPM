<?php
    $id = $_GET['id'];
    $id1 = $_GET['id1'];
  
    $conn = mysqli_connect('localhost','root','','wb_banquanao');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
  
    $sql = "DELETE FROM admin WHERE id_admin = '$id1'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: taikhoan.php?id=$id"); 
    }else{
        header("location: error.php"); 
    }

   
    mysqli_close($conn);
?>