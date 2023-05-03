<?php include('../config/connect_db.php'); 
?>
<?php
if (session_id() == '') {
    session_start();
}
?>
<?php
      if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
        $id =$_SESSION['isLoginOK'];
        $sql = "SELECT * FROM user where user.email='$id' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            }
     
      endif;
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include('template/header.php'); 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/styled2.css">
    <link rel="stylesheet" href="../public/style.css">
    <title>GUCCI Official</title>
    <link rel="shortcut icon" href="../img/web.png">
</head>

<body>

   
    <section>
        <div class="container-fluid">
            <div class="container">
            <div class="row d-flex px-5 ms-3 mt-5">
                    <?php 
                    
                            $sql1 = "SELECT *, product.price-(product.price*product.discount) as Giagiam from detail_catalog,product where detail_catalog.id_dtcatalog=product.catalog_id and product.catalog_id='24'";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if($count1>0)
                            {
                                while($row=mysqli_fetch_assoc($res1))
                                {
                                    
                        ?>
                    <div class="col-3 px-0 mx-2 px-1 ">
                        <a href="../detail.php?id=<?php echo $row['id_product']; ?>" class="text-decoration-none">
                            <img class="img-fluid  mb-3" width="282px" src="../img/<?php echo $row['img']; ?>" alt="">
                            <div class="">
                                <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                    face="Candara" size="3"><?php echo $row['name_product']; ?></font><br>
                                <p class="link-dark mt-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                    <?php echo number_format($row['price']); ?> VNĐ
                                </p>
                            </div>
                        </a>
                    </div>


                    <?php
                                }
                            }
                          
                                ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid ">
            <div class="container ">
                <div class="p-5 pb-0">
                    <div class="mt-5" style="padding-left:180px;padding-right:180px;">
                        <div class="text-center mt-3">
                            <font STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="6">HÃY LÀ MỘT PHẦN CỦA CUỘC PHIÊU LƯU TẬP THỂ</font>

                        </div>
                    </div>
                    <div class="pb-5 border-bottom" style="padding-left:200px;padding-right:200px;">
                        <div class="text-center mt-3">
                            <p class="mt-3" style="font-family:courier,arial,helvetica;">
                                Nhân viên của Gucci trên toàn thế giới cam kết thể hiện các giá trị của ngôi nhà cho
                                khách hàng của chúng tôi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('../template/footer.php'); 
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>