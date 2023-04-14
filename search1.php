<?php include('./config/connect_db.php');
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
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/styled2.css">
    <title>CSE481 - Tiệm thời trang</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body>
    <div class="header">
        <div class="container-fluid px-5" style="background:#f6f1eb;">
            <div class="px-5  py-2">
                <div class="d-flex">
                    <div style="width: 40%;" class="d-flex  py-3">
                        <a class="pt-1 text-decoration-none text-black d-flex" data-bs-toggle="offcanvas"
                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <p class="pt-1 ps-2 mb-0" style="font-size:13px">Menu</p>
                        </a>
                        <div class="ms-3 ">
                            <form id="search-box" action="search1.php" method="post">
                                <button type="reset" class="namesearch" id="search-btn"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="ms-2 bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg></button>
                                <input type="text" name="input" class="input pt-2 pb-2 pe-2" id="search-text"
                                    placeholder="Tìm kiếm..." required>

                            </form>
                        </div>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="px-5 pt-5  pb-0 offcanvas-header">
                                <font class="offcanvas-title" id="offcanvasExampleLabel"
                                    STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">MENU</font>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="p-5 pt-3 offcanvas-body">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <span class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                QUẦN ÁO
                                            </span>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="me-5 ps-4" style="font-size:15px">
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-3 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Áo & Sơ mi
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Váy đầm
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Quần
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0 " style="font-family:courier,arial,helvetica;">
                                                        Áo khoác & Blazer
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 " style="font-family:courier,arial,helvetica;">
                                                        Đồ bơi
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <span class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                GIÀY
                                            </span>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="me-5 ps-4" style="font-size:15px">
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-3 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Giày & Dép
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Giày thể thao
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2" style="font-family:courier,arial,helvetica;">
                                                        Bốt
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <span class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                TÚI XÁCH
                                            </span>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="me-5 ps-4" style="font-size:15px">
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-3 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Túi đeo vai
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Túi quai chéo
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Túi tote
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2" style="font-family:courier,arial,helvetica;">
                                                        Túi thắt lưng & Balo
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <span class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                PHỤ KIỆN
                                            </span>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="me-5 ps-4" style="font-size:15px">
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-3 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Ví
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Trang sức
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Đồng hồ
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Kính mắt
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Khăn & lụa
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Thắt lưng
                                                    </p>
                                                </a>
                                                <a class="link-dark text-decoration-none" href="">
                                                    <p class="mt-2 mb-0" style="font-family:courier,arial,helvetica;">
                                                        Mũ & Găng tay
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="background:#f6f1eb;" class="p-5 ">
                                <div class="d-flex justify-content-center">
                                    <div class=""> <img src="img/logo.png" style="width:100px;height:66px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div style="width: 20%;" class="d-flex justify-content-center">
                        <div class=""> <img id="logo" src="img/logo.png" style="width:100px;height:66px" alt=""></div>

                    </div>
                    <div style="width: 40%;" class=" d-flex justify-content-end">

                        <div class="mt-3">
                            <?php
                            // Đã đăng nhập rồi -> hiển thị tên Người dùng và menu Đăng xuất
                            if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])):
                                ?>
                                <div class="d-flex">
                                    <a class="pt-1 text-decoration-none text-black d-flex" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                            class="me-2 bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                        <p class="pt-1 mb-0" style="font-size:13px">Tài khoản</p>
                                    </a>
                                    <a class="pt-1 text-decoration-none text-black d-flex"
                                        href="cart.php?id=<?php echo $row['id_user']; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                            class="bi bi-cart2 me-2 ms-4" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                                        <p class="pt-1 mb-0" style="font-size:13px">Giỏ hàng</p>
                                    </a>
                                </div>
                            <?php else: ?>
                                <a class="pt-1 text-decoration-none text-black d-flex" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                        class="me-2 bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                    <p class="pt-1 mb-0" style="font-size:13px">Đăng nhập</p>
                                </a>
                            <?php endif; ?>
                            <div class="offcanvas    <?php
                            if (isset($_GET['error'])) {
                                echo 'offcanvas-end show';
                            } else {
                                echo 'offcanvas-end';
                            }
                            ?>" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="px-5 pt-5  pb-0 offcanvas-header">
                                    <font class="offcanvas-title" id="offcanvasExampleLabel"
                                        STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">ĐĂNG
                                        NHẬP</font>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="px-5 offcanvas-body">
                                    <?php
                                    if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])):
                                        ?>
                                        <a href="./user/profile/profile_user.php?id=<?php echo $row['id_user']; ?>"
                                            class="text-decoration-none link-dark">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-gear me-1" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                <path
                                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="3">
                                                Thông tin cá nhân</font>
                                        </a>
                                        <div class="mt-3">
                                            <a href="./logout.php" class="text-decoration-none link-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-box-arrow-left me-1"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                                </svg>
                                                <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="3">
                                                    Đăng xuất</font>
                                            </a>
                                        </div>
                                        <div class="text-center mt-5 pt-5">
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px " class="text-uppercase"
                                                face="Candara" size="5">
                                                Welcome, <?php echo $row['name_user']; ?></font><br>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px " face="Candara" size="2">
                                                Thật tuyệt khi được gặp lại bạn. </font>
                                        </div>
                                    <?php else: ?>
                                        <form class="form-login" action="process_login.php" method="post">
                                            <div class="">
                                                <?php
                                                if (isset($_GET['error'])) { ?>
                                                    <div style="color:red">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            fill="currentColor" class="bi bi-exclamation-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                                        </svg>
                                                        <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara"
                                                            size="2">
                                                            <?php echo $_GET['error'] ?></font>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <div class="form-login">
                                                    <label style="font-size:12px" for="email">E-mail*</label>
                                                    <input type="text" class="col-md-12 ps-3 border py-2 " name="mail"
                                                        required>
                                                </div>
                                                <div class="form-login mt-3">
                                                    <label style="font-size:12px" for="matkhau">Mật khẩu*</label>
                                                    <input type="password" class="col-md-12 ps-3 border py-2 "
                                                        name="matkhau" required>
                                                </div>
                                                <button style="color:white;background:#444"
                                                    class="mt-5 pt-1 fw-bold col-md-12 btn btn-lg btn-block" type="submit"
                                                    name="btnLogin">
                                                    <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                        size="2">ĐĂNG
                                                        NHẬP</font>
                                                </button>

                                                <hr style="height:0.45px" class="mt-4">
                                            </div>
                                        </form>
                                        <a class="text-decoration-none" href="signup.php">
                                            <button style="color:white;background:#444"
                                                class="mt-2 pt-1 fw-bold col-md-12 btn btn-lg btn-block" type="submit"
                                                name="btnLogin">
                                                <font STYLE="letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                                                    size="2">TẠO TÀI KHOẢN MỚI</font>
                                            </button>
                                        </a>
                                        <div class="mt-3">
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                                Nhờ tải khoản Gucci của bạn, bạn sẽ có thể:</font><br>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                                ❖ Truy cập vào giỏ hàng của bạn</font> <br>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                                ❖ Đặt hàng Gucci của chúng tôi</font><br>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                                ❖ Truy cập tất cả các đơn hàng của bạn</font><br>
                                            <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                                ❖ Cập nhật dữ liệU cá nhận của bạn</font>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mt-5 pt-5">
                                        <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="3">
                                            DỊCH VỤ KHÁCH HÀNG</font><br>
                                        <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                            Gọi 0869 368 946 </font> <br>
                                        <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                            Thứ 2 - Thứ 6: 9 giờ sáng - 5 giờ chiều</font><br>
                                        <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="2">
                                            Thứ 7: 10 giờ sáng - 5 giờ chiều</font><br>
                                    </div>
                                    <div class="mt-5 mb-4">
                                        <div class="d-flex justify-content-center">
                                            <div class=""> <img src="img/logo.png" style="width:100px;height:66px"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <section>

        <div class="mt-2" style="background:#f1f1f1">
            <div class="container">
                <p class="px-5 ms-2 py-2 text-muted" style="font-size:13px">Trang chủ / Sản phẩm</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5">
            <div class="px-5 mt-5">
                <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">Sản phẩm phù hợp</font>

                <?php
                $search = $_POST['input'];
                $sql = "SELECT COUNT(name_product) as search FROM product WHERE name_product like '%$search%'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }


                ?>
                <p class="mt-3" style="font-family:courier,arial,helvetica;">
                <?php
                           echo $row['search'];
                    ?> sản phẩm phù hợp với từ khóa '<?php echo $search?>'</h6>

                <div class="row d-flex  px-4 mt-5">
                    <?php 
                            $sql1 = "SELECT *, product.price-(product.price*product.discount) as Giagiam FROM `product` WHERE name_product like '%$search%'";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if($count1>0)
                            {
                                while($row=mysqli_fetch_assoc($res1))
                                {
                        ?>

                            <div class="card me-0 border-0" style="width: 18rem;">
                                <img src="img/<?php echo $row['img']; ?>" class="img-fluid card-img-top" alt="...">
                                <div class="overlay d-flex">
                                    <a href="detail.php?id=<?php echo $row['id_product'] ?>">
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
                                    <p class="card-text">
                                        <?php echo $row['name_product']; ?>
                                    </p>
                                    <p class="d-inline fw-bold">
                                        <?php echo $row['Giagiam']; ?> VNĐ
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-emoji-frown" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                            </svg>
                        </div>

                        <div class="mt-3 text-center">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">
                                <?php
                                echo "<h5>Có vẻ như sản phẩm '$search' hiện không có trong shop. Chúng tôi sẽ cố gắng cập nhật nhiều sản phẩm hơn.</h5>"; ?>
                        </div>
                        <?php
                    }
                    ?>
                    </font>


                </div>
            </div>
        </div>
    </section>
    <section style="background:#fff;">
        <div class="container p-5">
            <div style="font-size:15px" class="row p-5 pt-0">
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
                            <p class="ms-2 d-inline" style="font-family:courier,arial,helvetica;">123 Đào Duy Anh,
                                Q.Đống Đa, Hà Nội</p>
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
                                            <input class="py-2 border rounded-start" type="text"
                                                style="padding-left: 10px;font-size:14px;width:400px" name=""
                                                placeholder="Enter your email...">
                                            <button type="submit" style="background:#dee2e6;"
                                                class="border-0 rounded-0 rounded-end link-dark">
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
    <section>
        <div class="container">
            <div class="px-5 d-flex">
                <div class="">
                    <font class="mt-5 " STYLE="margin-start:20px;letter-spacing: 1.75px;word-spacing:1px" face="Candara"
                        size="3">Copyright © 2023 All rights reserved</font>
                </div>
                <div class="col-md d-flex justify-content-end">

                    <div class="mt-1">
                        <a href="https://www.facebook.com/thuyduowg" class="me-3 icon link-dark"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
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
    <div class="d-flex justify-content-center p-5 m-5">
        <div class=""> <img src="../img/logo.png" style="weight:100px;height:66px" alt=""></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>