<?php
    $id = $_GET['id'];
    $product= $_GET['product'];  
    require_once './config/connect_db.php';
    $sql = "DELETE FROM cart WHERE id_product = '$product'";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        header("location: cart.php?id=$id");
    }else{
        header("location: index.php"); 
    }
    mysqli_close($conn);
?>