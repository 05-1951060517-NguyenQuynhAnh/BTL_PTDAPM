<?php
    $id = $_GET['id'];
    $id1 = $_GET['id1'];
  
    $conn = mysqli_connect('localhost','root','','cse481');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
  
    $sql = "DELETE FROM taikhoan WHERE id = '$id1'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: taikhoan.php?id=$id"); 
    }else{
        header("location: error.php"); 
    }

   
    mysqli_close($conn);
?>