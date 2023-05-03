<?php
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
$hovaten = $_POST['hoten'];
$sđt= $_POST['sdt'];
$ngaysinh = $_POST['ngaysinh'];
$diachi= $_POST['diachi'];
$gioitinh = $_POST['gender'];
   /* if (!$gioitinh || !$hovaten || !$ngaysinh || !$email || !$matkhau )
    {
        $error = "Vui lòng nhập đầy đủ thông tin";
        header("location:signup.php?error=$error"); 
        exit;
    }*/
   /* $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($partten ,$email, $matchs)){
    $error = "Nhập sai định dạng email";
    header("location:signup.php?error=$error"); 
    exit;}
    if (strlen($matkhau) < 6)
    { $error = "Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.";
        header("location:signup.php?error=$error");
        exit;
    }   */
    require_once './config/connect_db.php';
    $sql = "SELECT * FROM user WHERE email = '$email'";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
    $error = "Tài khoản Email đã tồn tại";
    header("location:signup.php?error=$error"); 
    }else{
    $sql1 = "INSERT INTO user(name_user, email, phone, address, password, date_birth, gender_user) VALUES('$hovaten ', '$email', '$sđt', '$diachi', '$matkhau','$ngaysinh','$gioitinh')";
    $result1 = mysqli_query($conn,$sql1);
    if($result1 ==true){
        $_SESSION['isSignup'] = "Tạo tài khoản thành công.";
        header("location:index.php"); 
    }else{
        $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
        header("location:signup.php?error=$error");
    }
    }
    mysqli_close($conn);  
?>