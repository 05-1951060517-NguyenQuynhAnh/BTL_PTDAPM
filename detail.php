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
    <link rel="stylesheet" href="./public/stylessss.css">
    <title>Thông tin sản phẩm | GUCCI Official</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body style="background:#f6f1eb">
<?php
// Kiểm tra xem có thông báo nào được lưu trữ trong session không
if(isset($_SESSION['isAddCart'])) {
    $message = $_SESSION['isAddCart'];?>
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
   unset($_SESSION['isAddCart']);
}
?>
    <?php include('./template/header.php'); 
?>
    <?php 
    $id =$_GET['id'];
    $sql = "SELECT * FROM `product`, detail_product WHERE product.id_product=detail_product.id_product and detail_product.id_product ='$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        }
    ?>
    
    <section class="mb-5">
        <div class="container pt-5">
            <div class="row px-5">
                <div style="width: 60%;" class="pe-5" style="z-index: -1">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        >
                        <div class="carousel-inner mt-3">
                            <div class="carousel-item active">
                                <img src="./img/<?php echo $row['img1']; ?>" style="height:675px"
                                    class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/<?php echo $row['img2']; ?>" style="height:675px"
                                    class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/<?php echo $row['img3']; ?>" style="height:675px"
                                    class="img-fluid d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="row mt-5">
                        <div class="col  ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed text-muted"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Thông tin vận chuyển
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                            <table class="table text-muted">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Vận chuyển</th>
                                                        <th scope="col">Ước tính giao hàng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Premium Express
                                                            miễn phí</td>
                                                        <td>Dự kiến ​​giao hàng trong vòng 2 – 3 ngày làm việc. </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ngày làm việc tiếp theo:
                                                            $25</td>
                                                        <td>Đặt hàng trước 4 giờ chiều EST vào một ngày làm việc.
                                                            Giao hàng từ 9h - 20h, từ thứ 2 đến thứ 6.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu thập tại cửa hàng:
                                                            Miễn phí</td>
                                                        <td>Giao hàng trong 1-2 ngày làm việc
                                                            Thời gian thu tiền tại cửa hàng: 14 ngày
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            Các mặt hàng đặt trước, sản xuất theo đơn đặt hàng và tự làm sẽ được giao
                                            vào ngày
                                            ước tính được ghi trên trang mô tả sản phẩm. Các mặt hàng này sẽ được vận
                                            chuyển qua
                                            Premium Express sau khi có hàng. Việc trả lại có thể được thực hiện qua thư
                                            hoặc tại
                                            cửa hàng*. Thời hạn hoàn trả đối
                                            với mua hàng trực tuyến là 30 ngày (10 ngày đối với mặt hàng làm đẹp) kể từ
                                            ngày
                                            giao
                                            hàng. Bạn có thể trả lại các mặt hàng bằng cách chọn "Trả lại mặt hàng này"
                                            từ tài
                                            khoản
                                            MY GUCCI của bạn trong phần chi tiết đơn hàng, thông qua email xác nhận giao
                                            hàng
                                            hoặc
                                            bằng cách liên hệ với Cố vấn khách hàng. Sau khi yêu cầu được chấp thuận,
                                            nhãn vận
                                            chuyển
                                            trả trước sẽ được gửi qua email cho bạn hoặc sẽ có sẵn để tải xuống trong
                                            tài khoản
                                            MY GUCCI
                                            của bạn. Đối với các đơn đặt hàng Thu thập tại cửa hàng, chúng tôi cung cấp
                                            thời hạn
                                            đổi/trả
                                            trong 30 ngày tại cửa hàng hoặc bằng cách liên hệ với Dịch vụ khách hàng .
                                            Thời hạn
                                            trả lại bắt đầu vào ngày mặt hàng của bạn có sẵn để thu gom. Các mặt hàng
                                            phải ở
                                            trong tình trạng ban đầu với tất cả các nhãn được đính kèm và
                                            còn nguyên vẹn. Xin lưu ý, Sản xuất theo đơn đặt hàng và các mặt hàng được
                                            cá nhân
                                            hóa
                                            không thể trả lại. Thông tin bổ sung có sẵn trong quá trình thanh toán hoặc
                                            trên
                                            Phần Câu hỏi thường
                                            gặp. *Xin lưu ý rằng chúng tôi không thể cung cấp dịch vụ hoàn trả tại cửa
                                            hàng cho
                                            bất
                                            kỳ mặt hàng Vault nào. Để biết thêm thông tin, hãy đọc phần "Trả lại mục
                                            Vault" trên
                                            Câu hỏi thường gặp.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed text-muted"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Các lựa chọn thanh toán
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px">Gucci chấp nhận
                                            các hình thức thanh toán sau đây khi mua
                                            hàng trực tuyến:
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed text-muted"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Bao bì GUCCI
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body text-muted mt-2"
                                            style="font-size:13px; letter-spacing: 1px;word-spacing:1px">
                                            <div class="row">
                                                <div class="col-md-3"> <img src="img/bb1.avif" alt="" width="200"
                                                        height="200">
                                                </div>
                                                <div class="col-md-3"> <img src="img/bb2.avif" alt="" width="200"
                                                        height="200">
                                                </div>
                                            </div>
                                            <div class="mt-2">Được thiết kế sáng tạo để có thể tái chế, bao bì mang tính
                                                biểu
                                                tượng của Gucci khơi
                                                dậy
                                                niềm đam mê của Ngôi nhà với các thiết kế lấy cảm hứng từ cổ điển. Hầu
                                                hết các
                                                đơn
                                                đặt
                                                hàng Gucci.com đều có một chiếc túi vải cotton có thể tái sử dụng độc
                                                quyền trực
                                                tuyến.</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="width:40%" class="ps-4 mt-3">
                    <div class="pt-2" style="background:#fffcf7;">
                        <div class="ps-3 product-title">
                            <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">
                                <?php echo $row['name_product']; ?></font>

                        </div>
                        <form method="post" action="
                        <?php
                            if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :?>
                                ./process_cart_add.php?id=<?php echo $row['id_product']; ?>&user=<?php echo $_SESSION['isLoginOK'] ?>
                            <?php
                            endif;
                            ?>">
                            <div class="d-flex">

                                <p name="price" value="<?php echo $row['price']; ?>" class="ps-3 link-dark mt-1"
                                    style="font-size:14px; letter-spacing: 1px;word-spacing:1px">
                                    <?php echo number_format($row['price']); ?> VNĐ</p>
                                <input name="price" type="text" class="price" value="<?php echo $row['price']; ?>">
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="ps-3 py-2 my-1">
                                <font STYLE="letter-spacing:2.75px;word-spacing:2px" face="Candara" size="3">
                                    SIZE</font>
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="mb-3 d-flex justify-content-center mt-3">
                                <?php 
                                if($row['catalog_id']=='1'||$row['catalog_id']=='2'||$row['catalog_id']=='3'||$row['catalog_id']=='4'){
                                ?>
                                <input type="radio" class="btn-check" name="size" value="XS" id="option"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary size me-4"
                                    for="option">XS</label>
                                <input type="radio" class="btn-check" name="size" value="S" id="option1"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary size me-4"
                                    for="option1">S</label>
                                <input type="radio" class="btn-check" name="size" value="M" id="option2"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary size me-4"
                                    for="option2">M</label>
                                <input type="radio" class="btn-check" name="size" value="L" id="option3"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary size me-4"
                                    for="option3">L</label>
                                <input type="radio" class="btn-check" name="size" value="XL" id="option4"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary size" for="option4">XL</label>
                                <?php
                                }
                                elseif($row['catalog_id']=='11'||$row['catalog_id']=='12'||$row['catalog_id']=='13'){?>
                                <div class="px-4 d-flex flex-wrap">
                                    <input type="radio" class="btn-check" name="size" value="35" id="option"
                                        autocomplete="off">
                                    <label class="link-dark text-center btn-outline-secondary size me-4"
                                        for="option">35</label>
                                    <input type="radio" class="btn-check" name="size" value="36" id="option1"
                                        autocomplete="off">
                                    <label class="link-dark text-center btn-outline-secondary size me-4"
                                        for="option1">36</label>
                                    <input type="radio" class="btn-check" name="size" value="37" id="option2"
                                        autocomplete="off">
                                    <label class="link-dark text-center btn-outline-secondary size me-4"
                                        for="option2">37</label>
                                    <input type="radio" class="btn-check" name="size" value="38" id="option3"
                                        autocomplete="off">
                                    <label class="link-dark text-center btn-outline-secondary size me-4"
                                        for="option3">38</label>
                                    <input type="radio" class="btn-check" name="size" value="39" id="option4"
                                        autocomplete="off">
                                    <label class="link-dark text-center btn-outline-secondary size me-4"
                                        for="option4">39</label>
                                    <input type="radio" class="btn-check" name="size" value="40" id="option5"
                                        autocomplete="off">
                                    <label class="mt-3 link-dark text-center btn-outline-secondary size me-4"
                                        for="option5">40</label>
                                    <input type="radio" class="btn-check" name="size" value="41" id="option6"
                                        autocomplete="off">
                                    <label class="mt-3 link-dark text-center btn-outline-secondary size"
                                        for="option6">41</label>
                                </div>

                                <?php
                            }
                            else{
                                ?>
                                <input type="radio" class="btn-check" name="size" value="Free Size" id="option4"
                                    autocomplete="off">
                                <label class="link-dark text-center btn-outline-secondary"
                                    style="border: 1px solid black;width: 100px;height: 50px;font-size: 13px;padding-top:15px"
                                    for="option4">Free Size</label>
                                <?php
                            }
                                ?>
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="ps-3 py-2 my-1">
                                <font STYLE="letter-spacing:2.75px;word-spacing:2px" face="Candara" size="3">
                                    MÀU SẮC</font>
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="mb-3 d-flex justify-content-center mt-3">
                                <?php if(!empty($row['color1'])){?>
                                <input type="radio" class="btn-check" name="color" value="<?php echo $row['color1']; ?>"
                                    id="color" autocomplete="off">
                                <label class="btn-outline-secondary me-4 rounded-circle p-1" for="color">
                                    <div class="color p-1" style="background-color: <?php echo $row['color1']; ?>;">
                                    </div>
                                </label>

                                <?php     
                           }
                            ?>
                                <?php if(!empty($row['color2'])){?>
                                <input type="radio" class="btn-check" name="color" value="<?php echo $row['color2']; ?>"
                                    id="color1" autocomplete="off">
                                <label class="btn-outline-secondary me-4 rounded-circle p-1" for="color1">
                                    <div class="color p-1" style="background-color: <?php echo $row['color2']; ?>;">
                                    </div>
                                </label>
                                <?php     
                           }
                            ?>
                                <?php if(!empty($row['color3'])){?>
                                <input type="radio" class="btn-check" name="color" value="<?php echo $row['color3']; ?>"
                                    id="color2" autocomplete="off">
                                <label class="btn-outline-secondary me-4 rounded-circle p-1" for="color2">
                                    <div class="color p-1" style="background-color: <?php echo $row['color3']; ?>;">
                                    </div>
                                </label>

                                <?php     
                           }
                            ?>
                                <?php if(!empty($row['color4'])){?>
                                <input type="radio" class="btn-check" value="<?php echo $row['color4']; ?>" name="color"
                                    id="color3" autocomplete="off">
                                <label class="btn-outline-secondary me-4 rounded-circle p-1" for="color3">
                                    <div class="color p-1" style="background-color: <?php echo $row['color4']; ?>;">
                                    </div>
                                </label>

                                <?php     
                           }
                            ?>

                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <div class="mt-3">
                                <div class="d-flex ps-3 py-2 my-1">
                                    <div class="mt-1">
                                        <font STYLE="letter-spacing:2.75px;word-spacing:2px" face="Candara" size="3">
                                            SỐ LƯỢNG</font>
                                    </div>
                                    <div class="ms-3 buttons_added">
                                        <input class="minus is-form" value="-" type="button" name="btn"
                                            onclick="handleminus()" style="background:#fffcf7;">
                                        <input style="width : 50px" class="input-qty" name="sluong" id="input-qty"
                                            type="number" value="1" style="background-color:#fffcf7;">
                                        <input class="plus is-form" value="+" type="button" name="btn"
                                            onclick="handleplus()" style="background:#fffcf7;">
                                    </div>
                                </div>
                                <script>
                                let qtyElement = document.getElementById('input-qty');
                                let qty = qtyElement.value;
                                //console.log(qtyElement);
                                let render = (
                                    qty) => {
                                    qtyElement.value = qty
                                }
                                let handleplus = () => {
                                    qty++
                                    render(qty);
                                }
                                let handleminus = () => {
                                    if (qty > 1)
                                    qty--
                                    render(qty);
                                }
                                </script>
                            </div>
                            <hr style="background:#e2d8ce" class="m-0 ">
                            <?php if(isset($_GET['bug'])){?>
                            <div class="d-flex justify-content-center mt-3">
                                <div style="color:red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                    </svg>
                                    <font STYLE="letter-spacing: 1px;word-spacing:1px" face="Candara" size="3">
                                        <?php echo $_GET['bug']?></font>
                                </div>
                            </div>
                            <?php
                                        }
                                    ?>
                            <?php if (isset($_SESSION['isLoginOK']) && !empty($_SESSION['isLoginOK'])) :?>

                            <div class="d-flex pb-3 justify-content-center mt-3">
                                <div class="">
                                    <a href="">
                                        <button id="add-to-cart"
                                            class="add-to-cart px-5 Product button drakpay btn-addtocart btn-dark"
                                            style="font-family:courier,arial,helvetica;" name="add">Thêm
                                            vào
                                            giỏ</button>
                                    </a>
                                </div>
                            </div>
                            <?php else : ?>

                            <div class="d-flex pb-3 justify-content-center mt-3">
                                <div class="">
                                    <button type="button"
                                        class="mt-3 add-to-cart px-5 Product button drakpay btn-addtocart btn-dark"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        style="font-family:courier,arial,helvetica;" name="add">
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Yêu cầu đăng nhập</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="" style="font-size:13px;word-spacing:2px">
                                                Bạn phải đăng nhập mới được sử dụng chức năng này của chúng tôi.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đồng
                                                ý</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                 endif;?>
                        </form>
                        <hr style="background:#e2d8ce" class="m-0 ">
                        <div class="p-3 product-title ">
                            <p class="" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">THÔNG TIN CHI TIẾT
                                SẢN PHẨM:
                            </p>
                            <p class="" style="font-size:13px; letter-spacing: 1px;word-spacing:1px">Mã sản phẩm:
                                <?php echo $row['id_product']; ?></p>
                            <textarea name="" id="" rows="25" class="col-md-12 border-0 link-dark"
                                style="font-size:13px; letter-spacing: 1px;word-spacing:1px;background:#fffcf7;" disabled><?php echo $row['content']; ?></textarea>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php include('./template/footer.php'); 
?>
    <script>
    // updated 2019
    const input = document.getElementById("search-input");
    const searchBtn = document.getElementById("search-btn");

    const expand = () => {
        searchBtn.classList.toggle("close");
        input.classList.toggle("square");
    };

    searchBtn.addEventListener("click", expand);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>