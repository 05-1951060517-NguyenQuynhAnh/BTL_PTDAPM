<?php
  require_once './config/connect_db.php';
  $qty = $_POST['sluong'];
  
    if(isset($_POST['btn'])){
        $id =$_GET['id'];
        $product =$_GET['product'];
        $color=$_GET['color'];
        $size= $_GET['size'];  
        $sql = "UPDATE cart SET qty='$qty' WHERE id_user='$id' and id_product='$product' and color='$color' and size='$size'";
        $result = mysqli_query($conn,$sql);
        if(!$result){
           
        }else{
            header("location:cart.php?id=$id"); 
        }
        mysqli_close($conn);
    }else{
    }
?>
