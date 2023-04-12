<?php
    $id= $_GET['id'];
    $id1= $_GET['id1'];
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $chucvu = $_POST['chucvu'];
    $luong = $_POST['luong'];
     
    $conn = mysqli_connect('localhost','root','','wb_banquanao');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "UPDATE taikhoan SET hoten='$hovaten', gioitinh='$gioitinh', ngaysinh='$ngaysinh', diachi='$diachi', sđt='$sdt', chucvu='$chucvu', luong='$luong' WHERE id='$id1'";

    $result = mysqli_query($conn,$sql);

    if(!$result){
     header("location: error.php"); 
    }else{
        header("location: taikhoan.php?id=$id"); 
    }

    mysqli_close($conn);
?>