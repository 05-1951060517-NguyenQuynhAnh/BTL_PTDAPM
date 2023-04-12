<?php include('../../config/connect_db.php');
?>
<?php
if (session_id() == '') {
    session_start();
}
?>
<?php
if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])):
    $id = $_SESSION['isLoginOK'];
    $sql = "SELECT * FROM user where user.email='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
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
    <link rel="stylesheet" href="css/style2.css">
    <title>CSE481 - Tiệm thời trang</title>
    <link rel="shortcut icon" href="img/1.png">
</head>

<body>
    <div class="header">
        <div class="container-fluid" style="background:#e68e12;">
            <div class="container content">
                <div class="container">
                    <div class="row">
                        <div class="col py-3" style="font-size:13px;">
                            CSE481@GMAIL.COM | Hotline: 0837 473 645
                        </div>
                        <div class="col text-nowrap my-auto" style="font-size:13px;">
                            <p class="mb-0">
                                Tặng nay voucher trị giá 150.000VNĐ khi mua sản phẩm từ 1.000.000 VNĐ
                            </p>
                            <div class="text-center mx-auto">
                                Đơn hàng được FreeShip khi mua từ 500.000 VNĐ
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="">
                            <form action="search1.php?id=<?php echo $row['id_user'];?>" method="post">
                                    <div class="pt-2 ms-5 d-flex">
                                        <input class="py-2 rounded-start" type="text"
                                            style="border:none;padding-left: 10px;font-size:12px;width:250px"
                                            name="namesearch" placeholder="The clothes you need...">
                                        <button type="submit" class="border-0 rounded-0 rounded-end bg-white"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                                                <path
                                                    d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                                            </svg></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pb-2 border">
        <div class="container">
            <div class="row px-5">
                <div class="col-md-3 ">
                    <img src="img/logo-hcn.png" alt="" class="mt-2 ms-2 img-fluid">
                </div>
                <div class="col-md ps-0 mt-4">
                    <div class="row">
                        <div class="col-md-4 ps-5 mt-1 d-flex">
                            <a href="logout.php" class="ms-5 text-decoration-none link-dark">
                                <div class="ms-3">
                                    <p class="pt-1 fw-bold link-primary" style="font-size:13px">Đăng xuất</p>
                                </div>
                            </a>
                            <a href="../../cart.php?id=<?php echo $id?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="ms-3 link-dark bi bi-cart4" viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="pb-5" style="font-family:'Arial';background:#fafafa">
        <div class="container">
            <div class="px-5 pt-5">
                <div class="row px-5">
                    <div class="col-md-2">
                    <a class="text-decoration-none"href="user.php?id=<?php echo $row['id_user'];?>">
                            <p class="mt-2 fw-bold link-dark"><?php echo $row['name_user'];?></p>
                    </a>
                        <a href="edit_profile.php?id=<?php echo $row['id_user'];?>" class="text-decoration-none link-dark">
                            <div class="py-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="d-inline bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                </svg>
                                <p class="d-inline pt-1" style="font-size:14px">Sửa hồ sơ</p>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none link-dark">
                            <div class="py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-incognito" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                                <p class="d-inline pt-1" style="font-size:14px">Đổi mật khẩu</p>
                            </div>
                        </a>
                    </div>
                    <div style="background:white" class="border col-md px-5">

                        <div class="mt-3">
                            <p class="mb-0 fs-4">Sửa hồ sơ của tôi</p>
                            <p class="" style="font-size:14px">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                        </div>
                        <hr>
                        <form class="form-signin" action="process_edit_pass.php?id=<?php echo $row['id_user'];?>" method="post">
                            <div class="col-md-8">
                                <div class="pt-1 pb-3 mx-3">
                                    <label style="font-size:13px" class="fw-bold" for="txtpass">Mật khẩu cũ</label>
                                    <input class="form-control col-md-12 ps-3 border py-2 rounded-3" type="password" name="txtpass"
                                        placeholder="Mật khẩu cũ" required autofocus>
                                    <label style="font-size:13px" class="mt-2 fw-bold" for="txtpassnew">Mật khẩu mới</label>
                                    <input class=" form-control col-md-12 ps-3  border py-2 rounded-3" type="password" name="txtpassnew" placeholder="Mật khẩu mới" required autofocus >
                                </div>
                            </div>
                            <div class="mt-2 ms-3">

                                    <?php
                                    if(isset($_GET['error'])){
                                        echo "<p style ='color:red'>{$_GET['error']}</p>";
                                        }
                                ?>
                            </div>
                            <button type="submit" name="" style="background: #e68e12;"
                        class="link-light fw-bold btn mt-3 ms-5 mb-4 px-3">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="background:#fffeae;">
        <div class="container">
            <div style="font-size:15px" class="row px-5">
                <div class="col-md-4  me-5">
                    <p class="fs-4 mt-5">Giới thiệu</p>
                    <p class="">CSE481 được thành lập vào mua xuân năm
                        2022, tất cả sản phẩm của CSE481 đều tự thiết kế và sản xuất dựa trên tiêu chí chất lượng. Xin
                        cảm ơn đã ghé thăm!</p>
                </div>
                <div class="col-md-3 me-5 ps-5">
                    <p class="fs-4 mt-5">Liên kết</p>
                    <a class="link-dark text-decoration-none" href="">
                        <p class="mb-2">Trang chủ</p>
                    </a>
                    <a class="link-dark text-decoration-none" href="">
                        <p class="mb-2">Sản phẩm</p>
                    </a>
                    <a class="link-dark text-decoration-none" href="">
                        <p class="mb-2">Hướng dẫn</p>
                    </a>
                    <a class="link-dark text-decoration-none" href="">
                        <p class="mb-2">Bảng size</p>
                    </a>
                </div>
                <div class="col-md">
                    <p class="fs-4 mt-5">Thông tin liên hệ</p>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-geo-alt-fill d-inline" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <p class="ms-2 d-inline">123 Đào Duy Anh, Q.Đống Đa, Hà Nội</p>
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-telephone-fill d-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p class="ms-2 d-inline">0837 473 645</p>
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-envelope d-inline" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <p class="ms-2 d-inline">cse481@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 me-5">
                    <img class="img-fluid" src="img/1.png" alt="">
                </div>
                <div class="col">
                    <div class="ms-5 mt-3 ps-5">
                        <p class="fs-5 fw-bold">Để lại email để cập nhật sản phẩm sớm nhất</p>
                        <div class="">
                            <form action="" method="GET">
                                <div class="pt-2 d-flex">
                                    <input class="py-2 border border-warning rounded-start" type="text"
                                        style="padding-left: 10px;font-size:14px;width:400px" name=""
                                        placeholder="Enter your email...">
                                    <button type="submit" style="background:#f4cc1c;"
                                        class="border-0 rounded-0 rounded-end link-light">
                                        <p class="mt-1 mb-0">Send</p>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>
                            <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                            <a href="#" class="me-3 icon link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center py-3 mb-0" style="background:#f7d232;">Copyright © 2022 All rights reserved</p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>