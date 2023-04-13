<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
$hovaten = $_POST['hovaten'];
$gioitinh = $_POST['gioitinh'];
$ngaysinh = $_POST['ngaysinh'];
$matkhau = $_POST['matkhau'];

$conn = mysqli_connect('localhost', 'root', '', 'web_bqao');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}

$sql = "UPDATE admin SET name='$hovaten',birth_date='$ngaysinh', gender='$gioitinh', password='$matkhau' WHERE id_admin ='$id1'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    header("location: error.php");
} else {
    header("location: taikhoan.php?id=$id");
}

mysqli_close($conn);
?>