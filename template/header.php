<?php
      if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
        $id6 =$_SESSION['isLoginOK'];
        $sql6 = "SELECT * FROM user where user.email='$id6' ";
        $result6 = mysqli_query($conn,$sql6);
        if(mysqli_num_rows($result6)>0){
            $row = mysqli_fetch_assoc($result6);
            }
      endif;
    ?>
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
                            if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
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
                                <a class="pt-1 text-decoration-none text-black d-flex" href="/BTL_PTDAPM/cart.php?id=<?php echo $row['id_user'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        class="bi bi-cart2 me-2 ms-4" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                    <p class="pt-1 mb-0" style="font-size:13px">Giỏ hàng</p>
                                </a>
                            </div>
                            <?php else : ?>
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
                            if(isset($_GET['error'])){
                                echo 'offcanvas-end show';
                            }
                                else {
                                    echo'offcanvas-end';
                                }  
                             ?>" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="px-5 pt-5  pb-0 offcanvas-header">
                                <?php               
                                        if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
                                    ?>
                                     <font class="offcanvas-title" id="offcanvasExampleLabel"
                                        STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">TÀI KHOẢN</font>
                                    <?php else : ?>
                                    <font class="offcanvas-title" id="offcanvasExampleLabel"
                                        STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">ĐĂNG
                                        NHẬP</font>
                                        <?php endif; ?>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="px-5 offcanvas-body">
                                    <?php               
                                        if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :
                                    ?>
                                    <a href="./user/profile/profile_user.php?id=<?php echo $row['id_user'];?>" class="text-decoration-none link-dark">
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
                                            Welcome, <?php echo $row['name_user'];?></font><br>
                                        <font STYLE="letter-spacing: 1px;word-spacing:1px " face="Candara" size="2">
                                            Thật tuyệt khi được gặp lại bạn. </font>
                                    </div>
                                    <?php else : ?>
                                    <form class="form-login" action="/BTL_PTDAPM/process_login.php" method="post">
                                        <div class="">
                                            <?php
                                    if(isset($_GET['error'])){?>
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
                                                   <?php echo $_GET['error']?></font>
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
                                    <a class="text-decoration-none" href="../signup.php">
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