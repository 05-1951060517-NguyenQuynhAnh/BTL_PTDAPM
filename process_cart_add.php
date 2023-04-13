<?php $user =$_GET['user'];
        $sluong = $_POST['sluong'];
        $id =$_GET['id'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        require_once './config/connect_db.php';
        if (!$size )
        {
            $error = "Bạn chưa chọn size cần mua.";
            header("location:detail.php?id=$id&bug=$error"); 
            exit;
        }
        if (!$color )
        {
            $error = "Bạn chưa chọn màu sắc cần mua.";
            header("location:detail.php?id=$id&bug=$error"); 
            exit;
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM user WHERE email = '$user'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id_user= $row['id_user'];
        }
        $sql = "SELECT * FROM `cart` WHERE id_user='$id_user' and id_product='$id' and color='$color' and size='$size'";
        $result1 = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result1) > 0){
            $row = mysqli_fetch_assoc($result1);
            $qty = $row['qty'] +1;
            $sql1 = "UPDATE `cart` SET `qty`='$qty' WHERE id_user='$id_user' and id_product='$id' and color='$color' and size='$size'";
            $result2 = mysqli_query($conn,$sql1);
            header("location:detail.php?id=$id"); 
        }
        else{
            $sql2 = "INSERT INTO `cart`(`id_user`,`id_product`,`qty`, `color`, `size`, `price`) VALUES ('$id_user','$id','$sluong','$color','$size','$price')";
            $number = mysqli_query($conn,$sql2);
            if($number > 0){
             header("location:detail.php?id=$id"); 
    
            }else{
              
        }
       }
        mysqli_close($conn);
?>