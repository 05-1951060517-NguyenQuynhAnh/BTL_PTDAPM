<?php
    $id = $_GET['id'];
    $product= $_GET['product'];  
    $color=$_GET['color'];
    $size= $_GET['size'];  

    require_once './config/connect_db.php';
    $sql = "DELETE FROM cart WHERE id_user='$id' and id_product='$product' and color='$color' and size='$size'";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        $_SESSION['isDelCart'] = "Xoá thành công";
        header("location: cart.php?id=$id");
    }else{
        header("location: index.php"); 
    }
    mysqli_close($conn);
?>