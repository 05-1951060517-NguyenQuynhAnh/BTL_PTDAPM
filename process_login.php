
<?php
  require_once './config/connect_db.php';
    if(isset($_POST['btnLogin'])){
        $email = $_POST['mail'];
        $pass  = $_POST['matkhau'];

        // Bước 01: Kết nối Database Server
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM user WHERE email = '$email' AND password='$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['isLoginOK'] = $email;
            header("location:index.php"); //Chuyển hướng về Trang quản trị
            echo 'Đăng nhập thành công!';
        }else{
            /*$error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:login.php?error=$error"); */
            echo $sql;
        }
        mysqli_close($conn);
    }else{
        //header("location:login.php");
    }
?>
