<?php
  require_once '../config/connect_db.php';
    if(isset($_POST['btnLogin'])){
        $email = $_POST['txtuser'];
        $pass  = $_POST['txtpass'];

        // Bước 01: Kết nối Database Server
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM admin WHERE username = '$email' AND password='$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['isLoginOK'] = $email;
            header("location:index.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Email hoặc mật khẩu không hợp lệ.";
            header("location:login.php?error=$error");
        }
        mysqli_close($conn);
    }else{
        //header("location:login.php");
    }
?>