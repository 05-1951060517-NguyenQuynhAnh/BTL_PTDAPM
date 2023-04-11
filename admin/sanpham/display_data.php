<?php include('../../config/connect_db.php'); 
?>
<!-- <?php
// Lấy giá trị của option đã được chọn
$selected_option = $_POST['option'];

// Thực hiện truy vấn để lấy dữ liệu từ cột tương ứng
$query = "SELECT name_dcatalog FROM detail_catalog WHERE name_dcatalog_2 = '$selected_option'";
$result = mysqli_query($conn, $query);

// Hiển thị dữ liệu lấy được
echo "<h1>Dữ liệu từ cột:</h1>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name_dcatalog'] . "<br>";
    }
} else {
    echo "Không tìm thấy dữ liệu!";
}

// Đóng kết nối
mysqli_close($conn);
?> -->