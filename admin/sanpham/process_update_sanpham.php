<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
    $MaSP = $_POST['txtMaSP'];
    $TenSP = $_POST['txtTenSP'];
    $Giaban = $_POST['txtGiaban'];
    $Gianhap = $_POST['txtGianhap'];
    $Soluong = $_POST['txtSoluong'];
    $Trangthai= $_POST['txtTrangthai'];
    $Mota = $_POST['txtMota'];
    $file3 = $_POST['file3'];
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
    $sql = "UPDATE product SET name_product='$TenSP', price='$Giaban',import_price='$Gianhap',quantity='$Soluong',status='$Trangthai',content='$Mota',img='$file3' WHERE id_product='$id1'";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: sanpham.php?id=$id"); 
    }else{
        header("location: error.php"); 
    }

    mysqli_close($conn);
?>