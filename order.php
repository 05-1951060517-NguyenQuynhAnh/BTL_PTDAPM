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
    <link rel="stylesheet" href="public/stylessss.css">
    <title>Thanh toán | GUCCI Official</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body style="background:#f6f1eb">
<?php
// Kiểm tra xem có thông báo nào được lưu trữ trong session không
if(isset($_SESSION['isDelOrder'])) {
    $message = $_SESSION['isDelOrder'];?>
    <div class="toast show position-fixed " style="z-index: 1">
        <div class="d-flex">
            <div class="toast-body"><?php
                echo $message;?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
    <?php
   unset($_SESSION['isDelOrder']);
}
?>
    <div class="header">
        <div class="container-fluid px-5 shadow" style="background:#f6f1eb;">
            <div class="px-5  py-2">
                <div class="d-flex">
                    <div style="width: 40%;" class="d-flex ps-5 py-3">
                        <a href="./index.php" class="pt-1 text-decoration-none text-black d-flex">
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
    <section>
        <div class="container mt-5">
            <ul class="d-flex m-0 p-0">
                <li class="list-unstyled col text-center">
                    <p class="pt-1 ps-2 mb-0" style="font-size:13px">Giỏ hàng</p>
                </li>
                <li class="list-unstyled col text-center">
                    <p class="pt-1 ps-2 mb-0" style="font-size:13px">Thanh toán</p>
                </li>
                <li class="list-unstyled col text-center">
                    <p class="pt-1 ps-2 mb-0" style="font-size:13px">Xác nhận</p>
                </li>
            </ul>
            <div class="position-relative m-4 mt-1">
                <div class="progress" style="background-color: #e0e0e0;height: 2px;">
                    <div class="fw-bold progress-bar" role="progressbar" style="background-color:#444;width: 100%;"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="border-0 position-absolute translate-middle " style="top:1px;left:15.5%">

                    <a href="" style="color:#444">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor"
                            class="bi bi-dot" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        </svg>
                    </a>
                </div>
                <div class="border-0 position-absolute  translate-middle " style="top:1px;left:50.4%">
                    <a href="" style="color:#444">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor"
                            class="bi bi-dot" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        </svg>
                    </a>
                </div>
                <div class="border-0 position-absolute  translate-middle " style="top:1px;right:9.8%">
                    <a href="" style="color:#444">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor"
                            class="bi bi-dot" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section style="" class="mb-5">
        <div class="container">
            <div class="row mt-5 mx-2">
                <div class="col-8">
                    <div class="">
                        <?php
                        if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
                            $id =$_SESSION['isLoginOK'];
                            $sql = "SELECT * FROM user WHERE user.email='$id' ";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_assoc($result);
                            $user = $row['id_user'];
                            }
                            endif;
                    ?>
                        <div class="">
                            <div class="pb-3" style="background:#fffcf7;">
                                <p class="ps-4 pt-3 mb-0 fw-bold"
                                    style="font-size:14px,letter-spacing: 2.75px;word-spacing:2px">
                                    Bạn có đơn hàng.</p>
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="">
                                <?php
                                if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
                                $sql1 = "SELECT *,order.status as stt FROM `order`, detail_order, product  WHERE order.id_order=detail_order.id_order and product.id_product=detail_order.product_id and order.user_id='$user'GROUP by detail_order.id_order DESC";
                                $result1 = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1)>0)
                                 {
                                 while($row=mysqli_fetch_assoc($result1))
                                 {
                                    $id_order=$row['id_order'];
                                    $mount = $row['amount'];
                                    $status = $row['stt'];
                                ?>
                                <ul style="background:#fffcf7;" class="p-0 m-0 mt-3">
                                    <li class="list-unstyled">
                                        <div class="row">
                                            <div class="pt-2">
                                                <?php
                                                                if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
                                                                $sql10 = "SELECT * FROM `order`, detail_order, product WHERE order.id_order=detail_order.id_order AND detail_order.product_id=product.id_product AND detail_order.id_order='$id_order'";
                                                                $result10 = mysqli_query($conn,$sql10);
                                                                if(mysqli_num_rows($result10)>0)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($result10))
                                                                    {
                                                            ?>
                                                <ul class="px-4 p-0 mt-2">
                                                    <li class="list-unstyled">
                                                        <div class="row ">
                                                            <div class="d-flex">
                                                                <a
                                                                    href="./detail.php?id=<?php echo $row['id_product'];?>">
                                                                    <div class="">
                                                                        <img src="./img/<?php echo $row['img'];?>"
                                                                            style="width:80px;height:80px" alt="">
                                                                    </div>
                                                                </a>
                                                                <div class="ms-3 col">
                                                                    <a href=""></a>
                                                                    <div class="d-flex col-md-12">
                                                                        <div style="width: 80%;">
                                                                            <a class="link-dark text-decoration-none"
                                                                                href="./detail.php?id=<?php echo $row['id_product'];?>">
                                                                                <font class="text-uppercase"
                                                                                    STYLE="letter-spacing: 1px;word-spacing:1px"
                                                                                    face="Candara" size="3">
                                                                                    <?php echo $row['name_product'];?>
                                                                                </font>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="d-flex col-md-12 mt-3">
                                                                        <div style="width: 45%;" class="">
                                                                            <a class="link-dark text-decoration-none"
                                                                                href="./detail.php?id=<?php echo $row['id_product'];?>">
                                                                                <p class="mb-1"
                                                                                    style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                                                    Màu:
                                                                                    <?php echo $row['color'];?>
                                                                                </p>
                                                                                <p class="m-0"
                                                                                    style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                                                    Kích cỡ:
                                                                                    <?php echo $row['size'];?>
                                                                                </p>
                                                                            </a>

                                                                        </div>
                                                                        <div style="width: 25%;"
                                                                            class="d-flex align-items-end">
                                                                            <p class="m-0"
                                                                                style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                                                Số lượng:
                                                                                <?php echo $row['qty'];?>
                                                                            </p>
                                                                        </div>
                                                                        <div style="width: 30%;"
                                                                            class="d-flex align-items-end justify-content-end">
                                                                            <div class="">
                                                                                <p class="mb-0"
                                                                                    style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                                                                    <?php echo number_format($row['detail_amount']); ?>
                                                                                    VNĐ
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </li>
                                                </ul>
                                                <hr style="background:#e2d8ce" class="m-0 mt-2">
                                                <?php
                                                        }
                                                    }    
                                                endif;     
                                                    ?>
                                            </div>
                                            <div class="d-flex m-3 mb-1">
                                                <div class="ps-3" style="width: 60%;">
                                                    <font class="text-uppercase"
                                                        STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                                        size="4">tổng cộng
                                                    </font>
                                                </div>
                                                <div style="width: 40%;" class="d-flex justify-content-end">
                                                    <div class="pe-5">
                                                        <p class=""
                                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                                            <?php echo number_format($mount ); ?> VNĐ </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr style="background:#e2d8ce" class="m-0 ">
                                            <?php
                                            if($status == '0'){
                                                ?>
                                                <div class="d-flex justify-content-end">
                                                    <div class="p-4 pe-0 d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id_order;?>">
                                                        <button style="color:white;background:red;"
                                                            class="px-5 pt-1  fw-bold btn btn-lg btn-block" type="submit" 
                                                            name="btnLogin">
                                                            <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                                size="2">
                                                                HUỶ ĐƠN HÀNG</font>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal<?php echo $id_order;?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Xác nhận xoá
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class=""
                                                                                style="font-size:13px;word-spacing:2px">
                                                                                Bạn có chắc chắn muốn xoá sản phẩm này.
                                                                            </p>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Huỷ</button>
                                                                            <a
                                                                                href="process_del_order.php?id=<?php echo $id_order;?>">
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Đồng
                                                                                    ý</button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <div class="p-4 d-flex ">
                                                        <button style="color:white;background:#5ec073f5"
                                                            class="px-5 pt-1 me-3 fw-bold btn btn-lg btn-block" type="submit"
                                                            name="btnLogin">
                                                            <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                                size="2">
                                                                CHỜ XÁC NHẬN</font>
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            elseif($status == '1'){?>
                                            <div class="p-4 d-flex justify-content-end">
                                                <button style="color:white;background:#f60000e8"
                                                    class="px-5 pt-1 me-3 fw-bold btn btn-lg btn-block" type="submit"
                                                    name="btnLogin">
                                                    <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                        size="2">
                                                        ĐANG GIAO HÀNG</font>
                                                </button>
                                            </div>
                                            <?php
                                            } else{
                                                ?>
                                            <div class="p-4 d-flex justify-content-end">
                                                <button style="color:white;background:#444444f0"
                                                    class="px-5 pt-1 me-3 fw-bold btn btn-lg btn-block" type="submit"
                                                    name="btnLogin">
                                                    <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                        size="2">
                                                        ĐÃ NHẬN HÀNG</font>
                                                </button>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <hr style="background:#e2d8ce" class="m-0 ">
                                        </div>
                                    </li>
                                </ul>
                                <hr style="background:#e2d8ce" class="m-0 ">
                                <?php
                                    }
                                }    
                                endif;     
                                ?>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-4 p-0 ">
                    <div style="background:#fffcf7;">
                        <div class="pt-2 ps-4" STYLE="padding-bottom:13px;">
                            <font class="mt-5" STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px"
                                face="Candara" size="5">Bao bì GUCCI</font>
                        </div>
                        <hr style="background:#e2d8ce" class="m-0 ">
                        <div class="d-flex ps-4 pe-3 pb-3 mt-3">
                            <div class="">
                                <img src="img/bb2.avif" style="width:80px;height:80px" alt="">
                            </div>
                            <div class="">
                                <p class="ms-3 mb-1"
                                    style="vertical-align: inherit;font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                    Hầu hết các đơn đặt
                                    hàng Gucci.com đều có một chiếc túi vải cotton có thể tái sử dụng độc quyền trực
                                    tuyến.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3" style="background:#fffcf7;">
                        <div class="pt-2 ps-4" STYLE="padding-bottom:13px;">
                            <font class="mt-5" STYLE="margin-start:20px;letter-spacing: 2.75px;word-spacing:2px"
                                face="Candara" size="5">Dịch vụ khách hàng</font>
                        </div>
                        <hr style="background:#e2d8ce" class="m-0 ">
                        <div class="ps-4 mb-3 mt-3">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-telephone mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <p class="ms-3 mb-1" style="font-size:18px; letter-spacing: 1px;word-spacing:1px">
                                    0869 368 946</p>
                            </div>
                            <div class="mt-1" STYLE="margin-left:22px;">
                                <p class="ms-3 mb-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                    Thứ 2 - Thứ 6: 9 giờ sáng - 5 giờ chiều</p>
                                <p class="ms-3 mt-2 mb-1" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                    Thứ 7: 10 giờ sáng - 5 giờ chiều</p>
                            </div>
                        </div>
                        <hr style="background:#e2d8ce" class="m-0 ">
                        <div class="m-3 d-flex">
                            <div class="" style="width: 33%;">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-truck" viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                                <div class="px-4 mt-2 d-flex justify-content-center text-center">
                                    <p class="" style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                        Giao hàng miễn phí</p>
                                </div>
                            </div>
                            <div class="" style="width: 33%;">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </div>
                                <div class="px-4 mt-2 d-flex justify-content-center text-center">
                                    <p class="" style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                        Trả lại & Trao đổi</p>
                                </div>
                            </div>
                            <div class="" style="width: 33%;">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-shield-lock" viewBox="0 0 16 16">
                                        <path
                                            d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                        <path
                                            d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                    </svg>
                                </div>
                                <div class="px-4 mt-2 d-flex justify-content-center text-center">
                                    <p class="" style="font-size:11px; letter-spacing: 1px;word-spacing:1px">
                                        Mua sắm an toàn</p>
                                </div>
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