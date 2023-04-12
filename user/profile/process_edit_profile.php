<?php
 $id= $_GET['id'];
    $ten = $_POST['txtten']; 
    $diachi = $_POST['txtdiachi']; 
    $gioitinh = $_POST['txtgender']; 
    $ngaysinh = $_POST['txtngaysinh']; 
    $email = $_POST['txtemail']; 
    $sdt = $_POST['txtsdt']; 
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE user SET name_user='$ten',gender_user='$gioitinh',address='$diachi',date_birth='$ngaysinh',phone='$sdt',email='$email' WHERE id_user='$id'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location: profile_user.php?id=$id"); 
    }

    mysqli_close($conn);
?>