<?php include('./config/connect_db.php');
?>
<?php
if (session_id() == '') {
    session_start();
}
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
    <link rel="stylesheet" href="public/styled2.css">
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
                                THỜI TRANG</font><br>
                            <font class="mt-3" STYLE="letter-spacing: 1px;word-spacing:1px;" face="Candara"
                                size="3">Cách bạn ăn mặc thật sự phản ánh cảm nhận, lối sống, kiến
                                thức và cả lựa chọn của bạn. Đó là điều tôi muốn đưa vào các thiết kế của Gucci.</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-3">
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
                        <a href="product/phukien.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">PHỤ KIỆN</font>
                        </a>
                    </div>

                    <div class="col px-0 me-4">
                        <a href="product/giay.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai1.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">GIÀY</font>
                        </a>

                    </div>

                    <div class="col  px-0 me-4">
                        <a href="product/tui.php" class="text-decoration-none">
                            <img class="img-fluid rounded-3 mb-2" src="img/loai2.png" alt="">
                            <font class="link-dark" STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                                size="3">TÚI XÁCH</font>
                        </a>

                    </div>

                    <div class="col px-0">
                        <a href="product/quanao.php" class="text-decoration-none">
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
                                SUMMER 2023</font><br>
                            <font class="mt-3 " STYLE="letter-spacing: 1px;word-spacing:1px;" face="Candara"
                                size="3"> Các cặp song sinh giống hệt nhau trong chiến dịch này diễn giải khái niệm về
                                tính hai
                                mặt/tính cá nhân thông qua quần áo may sẵn, đồ da và phụ kiện.</font>

                        </div>
                    </div>
                </div>
                <div class="px-5 mt-3">
                    <img src="img/summer.avif" class=" img-fluid " alt="">
                </div>
                <div class="row px-5 mt-5 pt-5">
                    <?php
                    $sql1 = "SELECT * FROM product WHERE event='summer2023' ";
                    $res1 = mysqli_query($conn, $sql1);
                    $count1 = mysqli_num_rows($res1);
                    if ($count1 > 0) {
                        while ($row = mysqli_fetch_assoc($res1)) {
                            ?>
                    <div class="col px-0 mx-2 px-1 ">
                        <a href="./detail.php?id=<?php echo $row['id_product']; ?>" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/<?php echo $row['img']; ?>" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3"><?php echo $row['name_product']; ?></font><br>
                            <p class="link-dark mt-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                <?php echo number_format($row['price']); ?> VNĐ
                            </p>
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
        <div class="container-fluid">
            <div class="container">
                <div class="p-5">
                    <div class="" style="padding-left:200px;padding-right:200px;">
                        <div class="text-center mt-5">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">GG SUPREME
                                FLORA</font><br>
                            <font class="mt-3" STYLE="letter-spacing: 1px;word-spacing:1px;" face="Candara"
                                size="3">Một bộ sưu tập đặc biệt kết hợp hai trong số những thiết kế đặc biệt nhất của Ngôi nhà
                                thành một loại vải bất ngờ và đương đại.</font>

                        </div>
                    </div>
                </div>
                <div class="px-5 mt-3">
                    <img src="img/panel3.avif" class=" img-fluid " alt="">
                </div>
                <div class="row  px-5 mt-5 pt-5">
                    <?php
                    $sql2 = "SELECT * FROM product WHERE event='flora2023' ";
                    $res2 = mysqli_query($conn, $sql2);
                    $count2 = mysqli_num_rows($res2);
                    if ($count2 > 0) {
                        while ($row = mysqli_fetch_assoc($res2)) {
                            ?>
                    <div class="col px-0 mx-2 px-1">
                        <a href="./detail.php?id=<?php echo $row['id_product']; ?>" class="text-decoration-none">
                            <img class="img-fluid  mb-3" src="img/<?php echo $row['img']; ?>" alt="">
                            <font class="link-dark pe-3 fw-bold" STYLE="letter-spacing: 1.5px;word-spacing:1px"
                                face="Candara" size="3"><?php echo $row['name_product']; ?></font><br>
                            <p class="link-dark mt-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                <?php echo number_format($row['price']); ?> VNĐ
                            </p>
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
                        <font class="mt-3" STYLE="letter-spacing: 1px;word-spacing:1px;" face="Candara"
                                size="3"> Nhân viên của Gucci trên toàn thế giới cam kết thể hiện các giá trị của ngôi nhà cho
                                khách hàng của chúng tôi.</font>
                          
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