<?php include('../../config/connect_db.php'); 
?>
 <?php
// Thực hiện truy vấn để lấy dữ liệu từ cột tương ứng
$sql = "SELECT image_list FROM product";
$result = $conn->query($sql);

// Kiểm tra số lượng dòng trả về từ câu lệnh truy vấn
if ($result->num_rows > 0) {
    // Lặp qua từng dòng kết quả trả về và xuất các thẻ "img"
    while($row = $result->fetch_assoc()) {
        echo '<img src="' . $row["image_list"] . '" />';
    }
} else {
    echo "No images found.";
}

// Đóng kết nối
$conn->close();
?> 