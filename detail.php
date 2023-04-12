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
    <link rel="stylesheet" href="public/style13.css">
    <title>GUCCI Official</title>
    <link rel="shortcut icon" href="img/web.png">
</head>

<body>
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
    <section>
        <div class="container mt-5">
            <div class="row px-5">
                <div class="col-md-6 pe-4">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        data-bs-interval="false">
                        <div class="carousel-inner mt-3">
                            <div class="carousel-item active">
                                <img src="./img/<?php echo $row['img1']; ?>" style="height:576px"
                                    class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/<?php echo $row['img2']; ?>" style="height:576px"
                                    class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/<?php echo $row['img3']; ?>" style="height:576px"
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
                </div>
                <div class="col-md-6 mt-3">
                    <div class="product-title">
                        <font STYLE="letter-spacing: 2.75px;word-spacing:2px" face="Candara" size="6">
                            <?php echo $row['name_product']; ?></font>

                    </div>
                    <hr>
                    <p class="mt-3" style="font-family:courier,arial,helvetica;">
                        <?php echo number_format($row['price']); ?> VNĐ</p>
                    <p class="mt-3" style="font-family:courier,arial,helvetica;">Size: </p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="SizeS">
                        <label class="form-check-label" style="font-family:courier,arial,helvetica;"
                            for="inlineRadio1">Size S</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="SizeM">
                        <label class="form-check-label" style="font-family:courier,arial,helvetica;"
                            for="inlineRadio2">Size M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="SizeL">
                        <label class="form-check-label" style="font-family:courier,arial,helvetica;"
                            for="inlineRadio2">Size L</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="SizeXL">
                        <label class="form-check-label" style="font-family:courier,arial,helvetica;"
                            for="inlineRadio2">Size XL</label>
                    </div>
                    <div class="selector mt-5">
                        <label class="form-check-label" style="font-family:courier,arial,helvetica;"
                            for="inlineRadio2">Số lượng: </label>
                        <div class="buttons_added">
                            <input class="minus is-form" value="-" type="submit" type="button" name="btn"
                                onclick="handleminus()" style="background:#fff;">
                            <input style="width : 50px" class="input-qty" name="sluong" id="input-qty" type="number"
                                value="1" style="background-color:#fff;">
                            <input class="plus is-form" value="+" type="submit" name="btn" onclick="handleplus()"
                                style="background:#fff;">
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
                            render(Sqty);
                        }
                        </script>
                        <div class="col-md-9 mt-3">
                            <a href="login.php">
                                <button id="add-to-cart"
                                    class="add-to-cart Product button drakpay btn-addtocart btn-dark"
                                    style="font-family:courier,arial,helvetica;" name="add">Thêm
                                    vào
                                    giỏ</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container mt-5 ">
            <div class="row ">
                <div class="col-md-7 me-5 ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed text-muted"
                                    style="font-family:courier,arial,helvetica;" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Thông tin vận chuyển
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted" style="font-family:courier,arial,helvetica;">
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
                                    Các mặt hàng đặt trước, sản xuất theo đơn đặt hàng và tự làm sẽ được giao vào ngày
                                    ước tính được ghi trên trang mô tả sản phẩm. Các mặt hàng này sẽ được vận chuyển qua
                                    Premium Express sau khi có hàng. Việc trả lại có thể được thực hiện qua thư hoặc tại
                                    cửa hàng*. Thời hạn hoàn trả đối
                                    với mua hàng trực tuyến là 30 ngày (10 ngày đối với mặt hàng làm đẹp) kể từ ngày
                                    giao
                                    hàng. Bạn có thể trả lại các mặt hàng bằng cách chọn "Trả lại mặt hàng này" từ tài
                                    khoản
                                    MY GUCCI của bạn trong phần chi tiết đơn hàng, thông qua email xác nhận giao hàng
                                    hoặc
                                    bằng cách liên hệ với Cố vấn khách hàng. Sau khi yêu cầu được chấp thuận, nhãn vận
                                    chuyển
                                    trả trước sẽ được gửi qua email cho bạn hoặc sẽ có sẵn để tải xuống trong tài khoản
                                    MY GUCCI
                                    của bạn. Đối với các đơn đặt hàng Thu thập tại cửa hàng, chúng tôi cung cấp thời hạn
                                    đổi/trả
                                    trong 30 ngày tại cửa hàng hoặc bằng cách liên hệ với Dịch vụ khách hàng . Thời hạn
                                    trả lại bắt đầu vào ngày mặt hàng của bạn có sẵn để thu gom. Các mặt hàng phải ở
                                    trong tình trạng ban đầu với tất cả các nhãn được đính kèm và
                                    còn nguyên vẹn. Xin lưu ý, Sản xuất theo đơn đặt hàng và các mặt hàng được cá nhân
                                    hóa
                                    không thể trả lại. Thông tin bổ sung có sẵn trong quá trình thanh toán hoặc trên
                                    Phần Câu hỏi thường
                                    gặp. *Xin lưu ý rằng chúng tôi không thể cung cấp dịch vụ hoàn trả tại cửa hàng cho
                                    bất
                                    kỳ mặt hàng Vault nào. Để biết thêm thông tin, hãy đọc phần "Trả lại mục Vault" trên
                                    Câu hỏi thường gặp.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed text-muted"
                                    style="font-family:courier,arial,helvetica;" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Các lựa chọn thanh toán
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-family:courier,arial,helvetica;">Gucci chấp nhận
                                    các hình thức thanh toán sau đây khi mua
                                    hàng trực tuyến:
                                </div>
                                <img src="img/cash.png" alt="" width="300px" height="100px">
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed text-muted"
                                    style="font-family:courier,arial,helvetica;" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Bao bì GUCCI
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted mt-2"
                                    style="font-family:courier,arial,helvetica;">
                                    <div class="row">
                                        <div class="col-md-3"> <img src="img/bb1.avif" alt="" width="200" height="200">
                                        </div>
                                        <div class="col-md-3"> <img src="img/bb2.avif" alt="" width="200" height="200">
                                        </div>
                                    </div>
                                    <div class="mt-2">Được thiết kế sáng tạo để có thể tái chế, bao bì mang tính biểu
                                        tượng của Gucci khơi
                                        dậy
                                        niềm đam mê của Ngôi nhà với các thiết kế lấy cảm hứng từ cổ điển. Hầu hết các
                                        đơn
                                        đặt
                                        hàng Gucci.com đều có một chiếc túi vải cotton có thể tái sử dụng độc quyền trực
                                        tuyến.</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="text-center ms-5">
                        <img src="img/d2.avif" alt="" width="200px" height="200px">
                    </div> -->
                    <div class="product-title mt-2">
                        <p class="mt-3" style="font-family:courier,arial,helvetica;">THÔNG TIN CHI TIẾT SẢN PHẨM:</p>
                        <p class="mt-3" style="font-family:courier,arial,helvetica;">Mã sản phẩm:
                            <?php echo $row['id_product']; ?></p>
                        <p class="mt-3" style="font-family:courier,arial,helvetica;">
                            <?php echo $row['content']; ?></p>


                    </div>
                    <div class="text-muted">

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