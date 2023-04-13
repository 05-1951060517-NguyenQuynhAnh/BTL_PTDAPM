<?php
$id1 = $_GET['id'];
    $id = $_POST['id']; 
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    if (!$id || !$hovaten || !$gioitinh || !$ngaysinh || !$email || !$matkhau )
    {
        $error = "Vui lòng nhập đầy đủ thông tin";
        header("location:addaccount.php?id=$id1&error=$error"); 
        exit;
    }

    if (strlen($matkhau) < 6)
    { $error = "Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.";
        header("location:addaccount.php?id=$id1&error=$error");
        exit;
    }   

    $conn = mysqli_connect('localhost','root','','web_bqao');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql02 = "select * from admin where id_admin= '$id'"; 
    $result1 = mysqli_query($conn,$sql02);
    if(mysqli_num_rows($result1) > 0){
        $row=mysqli_fetch_assoc($result1);}
        if($id==$row['id_admin']){
            $error = "Mã nhân viên đã tồn tại";
            header("location:addaccount.php?id=$id1&error=$error"); 
            exit;
        }

    $sql01 = "SELECT * FROM admin WHERE username = '$email'";
    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){
    $error = "Tài khoản Email đã tồn tại";
    header("location:addaccount.php?id=$id1&error=$error"); 
    }else{
    $sql = "INSERT INTO admin (id_admin,name,gender,birth_date,username,password) VALUES('$id','$hovaten','$gioitinh','$ngaysinh','$email','$matkhau')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:taikhoan.php?id=$id1"); 
    }else{
        $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
        header("location:addaccount.php?id=$id1&error=$error");
    }
    }
    mysqli_close($conn);
?>

