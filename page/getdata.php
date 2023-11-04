<?php
// Kết nối đến CSDL
$conn = mysqli_connect("localhost", "root", "", "database_n22");

// Lấy giá trị của tham số q
$q = $_GET['q'];

// Thực hiện truy vấn để lấy dữ liệu
$sql = "SELECT * FROM ctsx WHERE command = '$q'";
$result = mysqli_query($conn, $sql);

// Xử lý kết quả truy vấn
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $masp = $row['product'];
      $line = $row['line'];
    }
    $data = array("masp" => $masp,"line" => $line);
    header('Content-Type: application/json');
    echo json_encode($data);
  } else {
    header('Content-Type: application/json');
    $error = array("error" => "Nhập sai mã");
    echo json_encode($error);
  }
?>