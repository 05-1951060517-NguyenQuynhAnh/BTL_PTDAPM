
<?php
    $id= $_GET['id'];
    $passold = $_POST['txtpass'];
    $passnew = $_POST['txtpassnew'];
    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql1 = "SELECT * FROM user where user.id_user='$id' ";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        $row = mysqli_fetch_assoc($result1);
        }
    if ($passold != $row['password']) {
        $error = "Mật khẩu cũ nhập không chính xác, đảm bảo đã tắt caps lock.";
            header("location:edit_pass.php?id=$id&error=$error");
        
    }else if (strlen($passnew) < 6)
    { $error = "Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.";
        header("location:edit_pass.php?id=$id&error=$error");
      
    }else{
    $sql = "UPDATE user SET password='$passnew' WHERE id_user='$id'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
    
    }else{
        $error = "Thay đổi thành công";
        header("location:edit_pass.php?id=$id&error=$error");
    }
}

    mysqli_close($conn);
    
?>