<?php 
        $thanhtoan = $_POST['thanhtoan'];
        $vanchuyen= $_POST['vanchuyen'];
        $user = $_GET['user'];
        require_once './config/connect_db.php';
        if (!$thanhtoan )
        {
            $error = "Bạn chưa chọn phương thức thanh toán.";
            header("location:checkout.php?bug=$error"); 
            exit;
        }
        if (!$vanchuyen )
        {
            $error = "Bạn chưa chọn màu sắc cần mua.";
            header("location:checkout.php?bug=$error"); 
            exit;
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT *, sum(cart.qty*cart.price) as tongtien FROM `cart`, user WHERE user.id_user=cart.id_user AND user.email='$user'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id_user= $row['id_user'];
            $amount= $row['tongtien'];
            $address= $row['address'];
        }
        $sql1 = "INSERT INTO `order`( `status`, `user_id`, `amount`, `address_order`, `pay`, `ship`) VALUES ('0','$id_user','$amount','$address','$thanhtoan','$vanchuyen')";
        $result1 = mysqli_query($conn,$sql1);
        if($result1 == true){
            $sql2 = "SELECT * FROM `order` ORDER BY `order`.`id_order` DESC LIMIT 1";
            $result2 = mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result2) > 0){
                $row = mysqli_fetch_assoc($result2);
                $id_order = $row['id_order'];
                    $sql3 = "SELECT *, price*qty as tong FROM `cart` WHERE cart.id_user='$id_user'";
                    $result3 = mysqli_query($conn,$sql3);
                    if(mysqli_num_rows($result3) > 0){
                        while($row=mysqli_fetch_assoc($result3))  {
                            $id_product=$row['id_product'];
                            $qty=$row['qty'];
                            $color=$row['color'];
                            $size=$row['size'];
                            $amount=$row['tong'];
                            $sql4="INSERT INTO `detail_order`(`id_order`, `product_id`, `qty`, `color`, `size`,amount) VALUES ('$id_order','$id_product','$qty','$color','$size','$amount')";
                            $result4 = mysqli_query($conn,$sql4);
                            if($result4 == true){
                                $sql5="SELECT * from `product` WHERE id_product='$id_product'";
                                $result5 = mysqli_query($conn,$sql5);
                                if(mysqli_num_rows($result5) > 0){
                                    $row = mysqli_fetch_assoc($result5);
                                    $q_ty = $row['quantity'] - $qty;
                                    $sql6="UPDATE `product` SET `quantity`='$q_ty' WHERE id_product='$id_product'";
                                    $result6 = mysqli_query($conn,$sql6);
                                    header("location:order.php");
                                }
                                //$sql5="UPDATE `product` SET `quantity`='[value-9]' WHERE id_product='$id_product'"
                                //header("location:order.php");
                            }
                        }  
                    }
                
            }
        }else{
            //$error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            //header("location:signup.php?error=$error");
        }
        
        mysqli_close($conn);
?>