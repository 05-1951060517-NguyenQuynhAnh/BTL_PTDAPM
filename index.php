<?php include('./config/connect_db.php'); 
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
    <link rel="stylesheet" href="public/style13.css">
    <title>GUCCI Official</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body>
<?php include('./template/header.php'); 
?>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="p-5">
                    <div class="" style="padding-left:200px;padding-right:200px;">

                        <div class="text-center mt-3">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">VŨ TRỤ
                                THỜI TRANG</font>
                            <p class="mt-3" style="font-family:courier,arial,helvetica;">
                                Cách bạn ăn mặc thật sự phản ánh cảm nhận, lối sống, kiến
                                thức và cả lựa chọn của bạn. Đó là điều tôi muốn đưa vào các thiết kế của Gucci.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-5">
                <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="img/panel.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>GUCCI VALIGERIA</h1>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/panel1.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>COLLECTION PRE-LAUNCH</h5>
                                <h1>WOMEN'S FALL WINTER 2023 FASHION SHOW</h1>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/panel2.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>GUCCI SPRING SUMMER 2023</h1>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/panel3.avif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>GG SUPREME FLORA</h1>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="mt-5 pt-5">
                    <div class="text-center mt-3">
                        <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">SẢN PHẨM KÌ DIỆU
                            CỦA CHÚNG TÔI</font>
                    </div>
                </div>
                <div class="row mx-5 mt-4">
                    <div class="col px-0 me-4">
                        <a href="" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">PHỤ KIỆN</font>
                        </a>
                    </div>

                    <div class="col px-0 me-4">
                        <a href="product/bottom.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai1.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">GIÀY</font>
                        </a>

                    </div>

                    <div class="col  px-0 me-4">
                        <a href="product/skirt.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai2.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">TÚI XÁCH</font>
                        </a>

                    </div>

                    <div class="col px-0">
                        <a href="product/phukien.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai3.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">QUẦN ÁO</font>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="p-5">
                    <div class="" style="padding-left:200px;padding-right:200px;">
                        <div class="text-center mt-5">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">GUCCI SPRING
                                SUMMER 2023</font>
                            <p class="mt-3" style="font-family:courier,arial,helvetica;">
                                Các cặp song sinh giống hệt nhau trong chiến dịch này diễn giải khái niệm về tính hai
                                mặt/tính cá nhân thông qua quần áo may sẵn, đồ da và phụ kiện.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="px-5">
                    <img src="img/summer.avif" class=" img-fluid " alt="">
                </div>
                <div class="row mx-5 mt-5 pt-5">
                    <div class="col px-0 me-4">
                        <a href="" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/summer1.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">KHĂN LỤA IN HÌNH GC FLORA</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>
                    </div>

                    <div class="col px-0 me-4">
                        <a href="product/bottom.php" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/summer2.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Nơ cổ GG Flora in lụa</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>

                    </div>

                    <div class="col  px-0 me-4">
                        <a href="product/skirt.php" class="text-decoration-none">
                            <img class="img-fluid mb-3" src="img/summer3.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Ví đựng thẻ Ophidia GG Flora</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>

                    </div>

                    <div class="col px-0">
                        <a href="product/phukien.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-3" src="img/summer4.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Mũ bóng chày GG Supreme Flora</font><br>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="p-5">
                    <div class="" style="padding-left:200px;padding-right:200px;">

                        <div class="text-center mt-5">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">GG SUPREME
                                FLORA</font>
                            <p class="mt-3" style="font-family:courier,arial,helvetica;">
                                Một bộ sưu tập đặc biệt kết hợp hai trong số những thiết kế đặc biệt nhất của Ngôi nhà
                                thành một loại vải bất ngờ và đương đại.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="px-5">
                    <img src="img/panel3.avif" class=" img-fluid " alt="">
                </div>
                <div class="row mx-5 mt-5 pt-5">
                    <div class="col px-0 me-4">
                        <a href="" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/flora.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">KHĂN LỤA IN HÌNH GC FLORA</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>
                    </div>

                    <div class="col px-0 me-4">
                        <a href="product/bottom.php" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/flora2.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Nơ cổ GG Flora in lụa</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>

                    </div>

                    <div class="col  px-0 me-4">
                        <a href="product/skirt.php" class="text-decoration-none">
                            <img class="img-fluid mb-3" src="img/flora1.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Ví đựng thẻ Ophidia GG Flora</font>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>

                    </div>

                    <div class="col px-0">
                        <a href="product/phukien.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-3" src="img/flora3.avif" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3">Mũ bóng chày GG Supreme Flora</font><br>
                            <font class="link-dark pe-3" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                size="3">10.000.000 VNĐ</font>
                        </a>
                    </div>

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
    <?php include('./template/footer.php'); 
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>