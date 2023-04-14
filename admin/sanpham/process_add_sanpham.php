<?php
$id = $_GET['id'];
    $MaSP = $_POST['txtMaSP'];
    $MaLSP = $_POST['txtMaLSP'];
    $TenSP = $_POST['txtTenSP'];
    $Giaban = $_POST['txtGiaban'];
    $Gianhap = $_POST['txtGianhap'];
    $Soluong = $_POST['txtSoluong'];
    $Trangthai= $_POST['txtTrangthai'];
    $Giamgia= $_POST['txtGiamgia'];
    $Ngaytao= $_POST['txtngaytao'];
    $Mota = $_POST['txtMota'];
    $file3 = $_POST['file3'];

    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql01 = "SELECT * FROM product where id_product='$MaSP'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){

    $error = "MaSP bị trùng";
    header("location:add_sanpham.php?id=$id&error=$error"); 
    }else{
    $sql = "INSERT INTO product (id_product,catalog_id,name_product,price,import_price,quantity,content,discount,created,status,img) VALUES('$MaSP','$MaLSP','$TenSP','$Giaban','$Gianhap','$Soluong','$Mota','$Giamgia','$Ngaytao','$Trangthai','$file3')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:sanpham.php?id=$id"); 
    }else{
        $error = "Bạn nhập thông tin chưa đúng";
        header("location:add_sanpham.php?id=$id&error=$error");
    }
    }
    mysqli_close($conn);  
?>