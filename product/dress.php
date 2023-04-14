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
                    
                            $sql1 = "SELECT *, product.price-(product.price*product.discount) as Giagiam from detail_catalog,product where detail_catalog.id_dtcatalog=product.catalog_id and product.catalog_id='2'";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if($count1>0)
                            {
                                while($row=mysqli_fetch_assoc($res1))
                                {
                                    
                        ?>
                    <div class="card me-0 border-0" style="width: 18rem;">
                        <img src="../img/<?php echo $row['img'];?>" class="img-fluid card-img-top" alt="...">
                        <div class="overlay d-flex">
                            <a href="../detail.php?id=<?php echo $row['id_product']?>">
                                <div class="detail rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        style="margin:18.5px" class="bi bi-card-heading" viewBox="0 0 16 16">
                                        <path
                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path
                                            d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </a>

                        </div>
                        <div class="card-body px-0">
                            <p class="card-text"><?php echo $row['name_product']; ?></p>
                            <p class="d-inline fw-bold"><?php echo $row['Giagiam']; ?> VNĐ</p>

                        </div>
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