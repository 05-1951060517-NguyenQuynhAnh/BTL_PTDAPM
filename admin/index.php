<?php include('../config/connect_db.php');
?>
<?php
if (session_id() == '') {
    session_start();
}
?>
<?php
if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])):
    $id = $_SESSION['isLoginOK'];
    $sql = "SELECT * FROM admin where admin.username='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {

        $error = "Xin lỗi! Bạn chưa đăng nhập";
        header("location:login.php?id=$id&error=$error");

    }

endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style/style1.css">
    <title>ADMIN GUCCI</title>
    <link rel="shortcut icon" href="../img/web.png">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" id="header-toggle"
                class="ms-3 bi bi-list mt-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <h4 class="mt-1 text-center text-dark">Xin chào, <?php echo $row['name'];?></h4>
        <div class="mt-3 d-flex py-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-people me-2"
                viewBox="0 0 16 16">
                <path
                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
            </svg>

            <p class="pt-1 dropdown-toggle" style="font-size:13px" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $row['name']; ?>
            </p>
            <ul class="dropdown-menu dropdown-menu-end">
                <a href="./taikhoan/update_account.php?id=<?php echo $id?>&id1=<?php echo $id?>">
                    <li><button class="dropdown-item" type="button">Sửa tài khoản</button></li>
                </a>
                <a href="logout.php">
                    <li><button class="dropdown-item" type="button">Log out</button></li>
                </a>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_logo" style="background: #f6f1eb;"> </div>
                <div class="nav_list">
                    <div class="nav_links">
                        <span class="nav_names" >DASHBOARD</span>
                    </div>
                    <a href="" class="d-flex nav_link active" style="background: #f6f1eb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-speedometer nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
                        </svg>
                        <span class=" nav_name">Dashboard</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <a href="taikhoan/taikhoan.php?id=<?php echo $id ?>" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-person-check nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <span class="nav_name">Tài khoản</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <div class="nav_links">
                        <span class="nav_names">APPS</span>
                    </div>
                    <a href="loaihang/loaihang.php?id=<?php echo $id ?>" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-box-seam" viewBox="0 0 16 16">
                            <path
                                d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg>
                        <span class="nav_name">Loại hàng</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <a href="sanpham/sanpham.php?id=<?php echo $id ?>" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-box2-heart nav_icon" viewBox="0 0 16 16">
                            <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z" />
                            <path
                                d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z" />
                        </svg>
                        <span class="nav_name">Sản phẩm</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <div>
                        <a href="order/order.php?id=<?php echo $id ?>" class="d-flex nav_link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="bi bi-card-list" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                            </svg>
                            <span class="nav_name">Đơn hàng</span>
                            <i class="nav_icon2 bi bi-chevron-right"></i>
                        </a>
                    </div>
                    <div class="nav_links">
                        <span class="nav_names">PAGES</span>
                    </div>
                    <a href="../index.php" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-journal nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                        <span class="nav_name">Pages</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                </div>

        </nav>
    </div>
    <div class="height-100">
        <section class="p-5" style="background: #f6f1eb;">
            <div class="d-flex mb-5">
                <?php
                $sql = "SELECT sum(quantity) as sl_ton FROM `product` ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="card border-0 me-4"
                    style="border-radius:10px;width: 17rem;background-image: linear-gradient(230deg, #759bff, #843cf6);">
                    <div class="p-4 card-body">
                        <h5 class="ps-1 card-title link-light mb-0">SL Tồn kho</h5>
                        <div class="ps-1 d-flex mb-2">
                            <div class="col-md-9">
                                <p class="card-text fs-3 link-light fw-bold">
                                    <?php echo $row['sl_ton']; ?>
                                </p>

                            </div>
                            <div class="col-md">

                                <svg style="color:rgba(255, 255, 255, 0.4);" xmlns="http://www.w3.org/2000/svg"
                                    width="50" height="50" fill="currentColor" class="mt-4 bi bi-boxes"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $sql1 = "SELECT count(id_order) as hoadon FROM `order` where year(created)= year(CURDATE())";
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0) {
                    $row = mysqli_fetch_assoc($result1);
                }
                ?>
                <div class="card border-0 me-4"
                    style="border-radius:10px;width: 18rem;background-image: linear-gradient(230deg, #fc5286, #fbaaa2);}">
                    <div class="p-4 card-body">
                        <h5 class="ps-1 card-title link-light mb-0">Hóa đơn</h5>
                        <div class="ps-1 d-flex mb-2">
                            <div class="col-md-9">
                                <p class="card-text fs-3 link-light fw-bold">
                                    <?php echo $row['hoadon']; ?>
                                </p>
                            </div>
                            <div class="col-md">
                                <svg style="color:rgba(255, 255, 255, 0.4);" xmlns="http://www.w3.org/2000/svg"
                                    width="45" height="45" fill="currentColor" class="mt-4 bi bi-calendar-heart"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Zm7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $sql2 = "SELECT sum(detail_order.qty*product.price) as doanhthu FROM product,detail_order,`order` where order.id_order=detail_order.id_order and product.id_product=detail_order.product_id  and year(order.created)= year(CURDATE()) ";
                $res = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);
                }
                ?>
                <div class="card border-0 "
                    style="border-radius:10px;width: 18rem;background-image: linear-gradient(230deg, #ffc480, #ff763b);}">
                    <div class="p-4 card-body">
                        <h5 class="ps-1 card-title link-light mb-0">Doanh Thu</h5>
                        <div class="ps-1 d-flex mb-2">
                            <div class="col-md-9">
                                <div class="div">
                                    <p class="text-nowrap card-text fs-3 link-light fw-bold">
                                        <?php echo number_format($row['doanhthu']); ?>
                                    </p>
                                    <p class="card-text link-light">VNĐ</p>
                                </div>

                            </div>
                            <div class="col-md">
                                <svg style="color:rgba(255, 255, 255, 0.4);" xmlns="http://www.w3.org/2000/svg"
                                    width="45" height="45" fill="currentColor" class="mt-4 ms-1 bi bi-cash-coin"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                    <path
                                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                $sql3 = "SELECT sum(detail_order.amount*product.price)-(sum(price*import_price)) as loinhuan FROM detail_order,product,`order` WHERE order.id_order=detail_order.id_order and product.id_product=detail_order.product_id  and year(order.created)= year(CURDATE()) ";
                $res1 = mysqli_query($conn, $sql3);
                if (mysqli_num_rows($res1) > 0) {
                    $row = mysqli_fetch_assoc($res1);
                }
                ?>
                <div class="card border-0 ms-4"
                    style="border-radius:10px;width: 18rem;background-image: linear-gradient(230deg, #0e4cfd, #6a8eff);">
                    <div class="p-4 card-body">
                        <h5 class="ps-1 card-title link-light mb-0">Lợi nhuận</h5>
                        <div class="ps-1 d-flex mb-2">
                            <div class="col-md-9">
                                <div class="div">
                                    <p class="card-text fs-3 link-light fw-bold">
                                        <?php echo number_format($row['loinhuan']); ?>
                                    </p>
                                    <p class="card-text link-light">VNĐ</p>
                                </div>

                            </div>
                            <div class="col-md">
                                <svg style="color:rgba(255, 255, 255, 0.4);" xmlns="http://www.w3.org/2000/svg"
                                    width="45" height="45" fill="currentColor" class="mt-4 bi bi-coin"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="">
                <canvas id="myChart"
                    style="height:280px;border-radius:10px;box-shadow: 0 2px 4px 0 #0000001a, 0 8px 16px 0 #0000001a;"
                    class="p-3 bg-white"></canvas>
            </div>
        </section>
    </div>
    <script>
        const data = {
            labels: [
                'Tháng 1',
                'Tháng 2',
                'Tháng 3',
                'Tháng 4',
                'Tháng 5',
                'Tháng 6',
                'Tháng 7',
                'Tháng 8',
                'Tháng 9',
                'Tháng 10',
                'Tháng 11',
                'Tháng 12'
            ],
            datasets: [{
                type: 'bar',
                label: 'Lợi nhuận theo tháng',
                data: [<?php
                $sql5 = "SELECT sum(detail_order.qty*product.price)-(sum(qty*import_price) ) as loi FROM detail_order,`order`,product WHERE detail_order.id_order=order.id_order and product.id_product=detail_order.product_id GROUP BY month(order.created)";
                $res3 = mysqli_query($conn, $sql5);
                $count3 = mysqli_num_rows($res3);
                if ($count3 > 0) {
                    while ($row = mysqli_fetch_assoc($res3)) {
                        ?><?php echo $row['loi'] ?>, <?php
                    }
                }
                ?>],
                backgroundColor: [
                    'rgba(255, 159, 64, 0.4)',
                    'rgba(75, 192, 192, 0.4)',
                    'rgba(153, 102, 255, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 205, 86, 0.4)',
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(201, 203, 207, 0.4)',
                    'rgba(247, 127, 0, 0.4)',
                    'rgba(152, 75, 1, 0.4)',
                    'rgba(48, 69, 134, 0.4)',
                    'rgba(133, 72, 173, 0.4)',
                    'rgba(206, 118, 13, 0.4)'
                ],
                borderColor: [
                    'rgb(255, 159, 64)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 99, 132)',
                    'rgb(201, 203, 207)',
                    'rgb(247, 127, 0)',
                    'rgb(152, 75, 1)',
                    'rgb(48, 69, 134)',
                    'rgb(133, 72, 173)',
                    'rgb(206, 118, 13)'
                ],
                borderWidth: 1
            }, {
                type: 'line',
                label: 'Doanh thu theo tháng',
                data: [<?php
                $sql4 = "SELECT sum(detail_order.qty*product.price) as don FROM detail_order,`order`,product WHERE detail_order.id_order=order.id_order and product.id_product=detail_order.product_id GROUP BY month(order.created)";
                $res2 = mysqli_query($conn, $sql4);
                $count2 = mysqli_num_rows($res2);
                if ($count2 > 0) {
                    while ($row = mysqli_fetch_assoc($res2)) {
                        ?><?php echo $row['don'] ?>, <?php
                    }
                }
                ?>],
                fill: false,
                backgroundColor: '#33cb82',
                borderColor: '#33cb82',
            }]
        };
        const config = {
            type: 'scatter',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>