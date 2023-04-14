<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
    $Trangthai= $_POST['txtTrangthai'];

    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    //  if($Soluong > 100){
    //     echo 'Số lượng phải nhỏ hơn 100 và lớn hơn 0';
    //     header("location: update_sanpham.php?id=$id"); 
    //    }else{
    //        header("location: error.php"); 
    //    }
    $sql = "UPDATE detail_order SET status='$Trangthai' WHERE detail_order.id_order= '$id1' and product_id='$id2'";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: detail_order.php?id=$id&id1=$id1"); 
    }else{
        header("location: error.php"); 
    }

    mysqli_close($conn);
?>