<?php
$id = $_GET['id'];
    $id_catalog = $_POST['txtMaLH'];
    $name = $_POST['txtTenLH'];

    require_once '../../config/connect_db.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql01 = "SELECT * FROM catalog where id_catalog='$id_catalog'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){

    $error = "MaLH bị trùng";
    header("location:add_loaihang.php?id=$id&error=$error"); 
    }else{
    $sql = "INSERT INTO catalog (id_catalog,name) VALUES('$id_catalog','$name')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:loaihang.php?id=$id"); 
    }else{
        $error = "Bạn nhập thông tin chưa đúng";
        header("location:add_loaihang.php?id=$id&error=$error");
    }
    }
    mysqli_close($conn);  
?>