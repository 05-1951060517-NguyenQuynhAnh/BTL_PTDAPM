<?php include('./config/connect_db.php'); 
?>
<?php
$id =$_GET['id'];
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
    <link rel="stylesheet" href="public/style13.css">
    <title>Giỏ hàng | GUCCI Official</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body style="background:#f6f1eb">
    <div class="header">
        <div class="container-fluid px-5 shadow" style="background:#f6f1eb;">
            <div class="px-5  py-2">
                <div class="d-flex">
                    <div style="width: 40%;" class="d-flex ps-5 py-3">
                        <a class="pt-1 text-decoration-none text-black d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-left mt-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                            <p class="pt-1 ps-2 mb-0" style="font-size:13px">Quay lại</p>
                        </a>
                    </div>

                    <div style="width: 20%;" class="d-flex justify-content-center">
                        <div class=""> <img id="logo" src="img/logo.png" style="width:100px;height:66px" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="" class="mb-5">
        <div class="container">
            <div class="row mt-5 mx-2">
                <div class="col-8">
                    <div class="" style="background:#fffcf7;">
                        <?php 
                            $sql4 = "SELECT * FROM cart  WHERE id_user='$id' ";
                            $res4 = mysqli_query($conn, $sql4);
                            $count4 = mysqli_num_rows($res4);
                            if($count4>0)
                            { 
                                
                        ?>
                        <p class="ms-4 pt-3 fw-bold" style="font-size:14px,letter-spacing: 2.75px;word-spacing:2px">
                            Bạn có 2 mặt hàng trong giỏ hàng.</p>
                        <hr style="background:#e2d8ce" class="m-0 ">
                        <div class="">
                            <?php 
                            $sql = "SELECT *,cart.qty*cart.price as thanhtien  FROM user,cart INNER JOIN product ON product.id_product = cart.id_product WHERE user.id_user='$id' ";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                        ?>
                            <ul class="py-3 ps-3 m-0">
                                <li class="list-unstyled">
                                    <div class="row me-3">
                                        <div class="d-flex">
                                            <div class="">
                                                <img src="./img/a2.avif" style="width:80px;height:80px" alt="">
                                            </div>
                                            <div class="ms-3 col">
                                                <div class="d-flex col-md-12">
                                                    <div style="width: 80%;">
                                                        <font class="text-uppercase"
                                                            STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                                            size="3"><?php echo $row['name'];?>
                                                        </font>
                                                    </div>
                                                    <div style="width: 20%;" class="d-flex justify-content-end">
                                                        <div class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-x-lg"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                            </svg>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="d-flex col-md-12 mt-3">
                                                    <div style="width: 50%;" class="">
                                                        <p class="mb-1"
                                                            style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                            Màu: <?php echo $row['color'];?></p>
                                                        <p class="m-0"
                                                            style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                            Kích cỡ: <?php echo $row['size'];?></p>
                                                    </div>
                                                    
                                                    <div style="width: 25%;" class="d-flex justify-content-center">
                                                    <form action="process_update_cart.php?id=<?php echo $id ?>&product=<?php echo $row['id_product']; ?>"
                                                        method="post">
                                                            <div class="buttons_added">
                                                                <input class="minus is-form" value="-" type="submit"
                                                                    type="button" name="btn"
                                                                    onclick="handleminus<?php echo $row['id_product'];?>()"
                                                                    style="background:#fffcf7;">
                                                                <input style="width : 50px" class="input-qty"
                                                                    name="sluong" id="<?php echo $row['id_product'];?>"
                                                                    type="number" value="<?php echo $row['qty'];?>">
                                                                <input class="plus is-form" value="+" type="submit"
                                                                    name="btn"
                                                                    onclick="handleplus<?php echo $row['id_product'];?>()"
                                                                    style="background:#fffcf7;">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <script>
                                                    let qtyElement<?php echo $row['id_product'];?> = document
                                                        .getElementById('<?php echo $row['id_product'];?>');
                                                    let qty<?php echo $row['id_product'];?> =
                                                        qtyElement<?php echo $row['id_product'];?>.value;
                                                    //console.log(qtyElement);
                                                    let render<?php echo $row['id_product'];?> = (
                                                        qty<?php echo $row['id_product'];?>) => {
                                                        qtyElement<?php echo $row['id_product'];?>.value =
                                                            qty<?php echo $row['id_product'];?>
                                                    }
                                                    let handleplus<?php echo $row['id_product'];?> = () => {
                                                        qty<?php echo $row['id_product'];?>++
                                                        render<?php echo $row['id_product'];?>(
                                                            qty<?php echo $row['id_product'];?>);
                                                    }
                                                    let handleminus<?php echo $row['id_product'];?> = () => {
                                                        if (qty<?php echo $row['id_product'];?> > 1)
                                                            qty<?php echo $row['id_product'];?>--
                                                        render<?php echo $row['id_product'];?>(
                                                            qty<?php echo $row['id_product'];?>);
                                                    }
                                                    </script>
                                                    <div style="width: 25%;"
                                                        class="d-flex align-items-end justify-content-end">
                                                        <div class="">
                                                            <p class="mb-1"
                                                                style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                                                <?php echo number_format($row['thanhtien']); ?> VNĐ </p>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <?php
                                }
                            }         
                            ?>
                            <?php 
                            $sql1 = "SELECT *, sum(cart.qty*cart.price) as tongtien FROM `cart` WHERE $id";
                            $result = mysqli_query($conn,$sql1);
                            if(mysqli_num_rows($result)>0){
                                $row = mysqli_fetch_assoc($result);
                                }
                            ?>
                            <div class="d-flex row m-3 ">
                                <div style="width: 80%;">
                                    <font class="text-uppercase" STYLE="letter-spacing: 1px;word-spacing:1px"
                                        face="Candara" size="3">tổng cộng
                                    </font>
                                </div>
                                <div style="width: 20%;" class="d-flex justify-content-end">
                                    <div class="">
                                        <p class="mb-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                            <?php echo number_format($row['tongtien']); ?> VNĐ </p>
                                    </div>

                                </div>

                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                        </div>
                        <?php 
                            }
                            else {
                                ?>
                                <div class="p-5">
                                    <div class="m-5 p-5 mb-0 pb-4 d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                            class="bi bi-bag-plus" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg>
                                    </div>
                                    <div class="m-5 mb-0 mt-0 d-flex justify-content-center">
                                        <font class="text-uppercase" STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                            size="3">Bạn không có sản phẩm nào trong giỏ hàng
                                        </font>
                                    </div>
                                    <div class="m-5 pb-5 mt-0 d-flex justify-content-center">
                                        <a href="index.php">
                                            <button style="color:white;background:#444"
                                                class="mt-4 pt-1 fw-bold btn btn-lg btn-block" type="submit" name="btnLogin">
                                                <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara" size="2">
                                                    TIẾP
                                                    TỤC MUA HÀNG</font>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-4 " style="background:#fffcf7;">
                    <div class="" style="background:#fffcf7;">d</div>
                </div>
            </div>
    </section>
    <section style="background:#ffffff;">
        <div class="container">
            <div style="font-size:15px" class="row p-5 pt-5">
                <div class="col-md-4  me-5">
                    <font class="mt-5" STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px" face="Candara"
                        size="6">Giới thiệu</font>
                    <p class="mt-3" style="font-family:courier,arial,helvetica;">
                        GUCCI được thành lập vào mùa xuân năm
                        2023, tất cả sản phẩm của GUCCI đều tự thiết kế và sản xuất dựa trên tiêu chí chất lượng. Xin
                        cảm ơn đã ghé thăm!
                    </p>
                </div>
                <div class="col-md-3 me-5 ps-5 d-flex justify-content-center">
                    <div>
                        <font class="mt-5" STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px"
                            face="Candara" size="6">Liên kết</font>
                        <a class="link-dark text-decoration-none" href="">
                            <p class="mt-3 mb-0" style="font-family:courier,arial,helvetica;">
                                Trang chủ
                            </p>
                        </a>
                        <a class="link-dark text-decoration-none" href="">
                            <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                Sản phẩm
                            </p>
                        </a>
                        <a class="link-dark text-decoration-none" href="">
                            <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                GUCCI SPRING SUMMER 2023
                            </p>
                        </a>
                        <a class="link-dark text-decoration-none" href="">
                            <p class="mt-2 " style="font-family:courier,arial,helvetica;">
                                GG SUPREME FLORA
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-end">
                    <div>
                        <font class="mt-5" STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px"
                            face="Candara" size="6">Thông tin liên hệ</font>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-geo-alt-fill d-inline" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <p class="mt-2 d-inline" style="font-family:courier,arial,helvetica;">
                                123 Đào Duy Anh, Q.Đống Đa, Hà Nội
                            </p>

                        </div>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-telephone-fill d-inline" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <p class="ms-2 d-inline" style="font-family:courier,arial,helvetica;">0837 473 645</p>
                        </div>
                        <div class="mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-envelope d-inline" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            <p class="ms-2 d-inline" style="font-family:courier,arial,helvetica;">nhom12@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="p-5 pb-0">
                    <div class="border-bottom pb-5 d-flex justify-content-center">
                        <div>
                            <div class="ms-5 mt-3">
                                <font class="mt-5 " STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px"
                                    face="Candara" size="5">Đăng ký nhận thông tin cập nhật của Gucci</font>
                                <div class="d-flex justify-content-center">
                                    <form action="" method="GET">
                                        <div class="pt-2 d-flex">
                                            <input class="py-2 border border-warning rounded-start" type="text"
                                                style="padding-left: 10px;font-size:14px;width:400px" name=""
                                                placeholder="Enter your email...">
                                            <button type="submit" style="background:#f4cc1c;"
                                                class="border-0 rounded-0 rounded-end link-light">
                                                <p class="mb-0">Send</p>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section style="background:#fff;">
        <div class="container">
            <div class="px-5 d-flex">
                <div class="">
                    <font class="mt-5 " STYLE="margin-start:20px;letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                        size="3">Copyright © 2023 All rights reserved</font>
                </div>
                <div class="col-md d-flex justify-content-end">

                    <div class="mt-1">
                        <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg></a>
                        <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div style="background:#fff;" class=" d-flex justify-content-center p-5 ">
        <div class=""> <img src="img/logo.png" style="weight:100px;height:66px" alt=""></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>