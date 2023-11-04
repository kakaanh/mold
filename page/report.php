<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Machining_Mold</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../img/smc.ico">
  <?php
   $conn = mysqli_connect("localhost", "root", "", "database_n22");
   if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
   }
  ?>
</head>
<?php 
if (isset($_POST['btn_bchn'])){
	$bcdate = $_POST['makedate'];
    $timestamp = strtotime($bcdate);
    $ngay = "ngay" . date('d', $timestamp);
    $ngaybd= date('d', $timestamp);
	$bccasx = $_POST['shiftno'];
	$bcctsx = $_POST['ctsx'];
	$bcmsp = $_POST['masp'];
	$bcsl = $_POST['makeqty'];
	$bccd = $_POST['cd'];
	$bcperson = $_POST['person'];
    $bcline = $_POST['line'];
    if ($bcmsp != "undefined") {
    $query = "INSERT INTO history (makedate, command, product, makeqty, person, line, congdoan, ca) 
    VALUES ('$bcdate', '$bcctsx', '$bcmsp', '$bcsl', '$bcperson', '$bcline', '$bccd', '$bccasx')";
		//echo $query;
		mysqli_query($conn,$query);
    }
    else{
        echo '<script>alert("Nhập sai mã chỉ thị <br> Vui lòng nhập lại CTSX");</script>';
    }
	
    $sql4 = "SELECT SUM(makeqty) as total FROM history where makedate <= '$bcdate' and command = '$bcctsx' and congdoan = 'NQ'";
    $result4 = mysqli_query($conn, $sql4);
    if (mysqli_num_rows($result4) > 0) {
        // Lấy kết quả và gán cho biến $soluong
        $row = mysqli_fetch_assoc($result4);
        $soluong = $row["total"];
    } else {
        // Không có kết quả trả về
        $soluong = 0;
    }

    $sql6 = "SELECT SUM(makeqty) as total1 FROM history where makedate = '$bcdate' and congdoan = 'NQ'";
    $result6 = mysqli_query($conn, $sql6);
    $row6 = mysqli_fetch_assoc($result6);
    $soluongtt=$row6['total1'];

    $sql7 = "SELECT SUM(makeqty) as total2 FROM history where makedate <= '$bcdate' and congdoan = 'NQ'";
    $result7 = mysqli_query($conn, $sql7);
    $row7 = mysqli_fetch_assoc($result7);
    $soluonglk=$row7['total2'];

    $sql3= "UPDATE `khsx` SET `$ngay`='$soluong' WHERE `product`='$bcctsx'";
    $result1 = mysqli_query($conn, $sql3);

    $sql5= "UPDATE `chart` SET `actual`='$soluongtt' where `production_date`='$ngaybd'";
    $result5 = mysqli_query($conn, $sql5);
    $sql6= "UPDATE `chart` SET `actual_accrual`='$soluonglk' where `production_date`>='$ngaybd'";
    $result6 = mysqli_query($conn, $sql6);
}
?>

<body class="nav-md">
<div class="container ">
    <!-- Gọi top_side! -->
    <?php include 'top_side.php' ?>

    <!-- Viết khung bchn -->

    <div class="container_full">
        <h1 class="text-center text-white text-center bg-primary">Báo Cáo Thực Tích Hàng Ngày</h1>
        <form method="post" >
        <div class="row">
            <div class="col col-3 pd-12">
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Ngày SX</span>
                    <input type="date" name="makedate" class="form-control col-8" required>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Ca SX</span>
                    <select class="form-select col-8" name="shiftno" required>
                        <option value="HC" selected="">Ca HC</option>
                        <option value="ca1">Ca 1</option>
                        <option value="ca2">Ca 2</option>
                    </select>
                </div>  
            </div>
            <div class="col col-3 pd-12">
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">CTSX</span>
                    <input type="text" name="ctsx" class="form-control col-8" placeholder=" Hãy nhập CTSX" required>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Mã sp</span>
                    <input type="text" name="masp" class="form-control col-8" placeholder=" Điền tự động"  required>
                </div>
                
            </div>
            <div class="col col-3 pd-12">
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Số lượng</span>
                    <input type="text" name="makeqty" class="form-control col-8" placeholder=" Nhập số lượng" required>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Công đoạn</span>
                    <select class="form-select col-8" name="cd" required>
                        <option value="HM" selected="">Hàn Gromet</option>
                        <option value="HD">Hàn dây</option>
                        <option value="ĐÚC">Đúc</option>
                        <option value="In-ktra">In-ktra</option>
                        <option value="NQ">NQ</option>
                    </select>
                </div>  
                
            </div>
            <div class="col col-3 pd-12">
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Nhân viên</span>
                    <input type="text" name="person" class="form-control col-8" placeholder=" Nhập MSNV" required>
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text col-4">Line</span>
                    <input type="text" name="line" class="form-control col-8" placeholder=" Điền tự động" required>
                </div>
                <div class="input-group mb-1">
                <input type="submit" name="btn_bchn" class="form-control bg-primary text-white" value="GỬI BÁO CÁO">
                </div>
                
            </div>
        </div>
        </form>
    </div>
    <?php
       $sql = "SELECT * FROM history ORDER BY id DESC LIMIT 9";
       $result1 = mysqli_query($conn, $sql);
       
       


    ?>
    <div class="container-conten">
        <div class="row">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col" class="th-sm">STT</th>
                        <th scope="col" class="th-bg">Ngày</th>
                        <th scope="col" class="th-sm">Ca SX</th>
                        <th scope="col" class="th-bg">CTSX</th>
                        <th scope="col" class="th-mg">Mã sản phẩm</th>
                        <th scope="col" class="th-bg">Số lượng</th>
                        <th scope="col" class="th-bg">Công đoạn</th>
                        <th scope="col" class="th-bg">Nhân viên</th>
                        <th scope="col" class="th-sm">Line</th>
                    </tr>
                </thead>
                <tbody class="my-table">
                    <?php
                    while($row = mysqli_fetch_assoc($result1)) {
                        echo "<tr class='table-tr'>";
                        echo "<td scope='row'>" . $row['id'] . "</td>";
                        echo "<td>" . $row['makedate'] . "</td>";
                        echo "<td>" . $row['ca'] . "</td>";
                        echo "<td>" . $row['command'] . "</td>";
                        echo "<td>" . $row['product'] . "</td>";
                        echo "<td>" . $row['makeqty'] . "</td>";
                        echo "<td>" . $row['congdoan'] . "</td>";
                        echo "<td>" . $row['person'] . "</td>";
                        echo "<td>" . $row['line'] . "</td>";
                        echo "</tr>";
                    }
                   ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
  document.querySelector('input[name="ctsx"]').addEventListener('keyup', function() {
    var inputValue = this.value;
    console.log(inputValue);
    
    // Thực hiện lệnh truy vấn đến file PHP để lấy dữ liệu
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var result = JSON.parse(this.responseText);
      document.querySelector('input[name="masp"]').value = result.masp;
      document.querySelector('input[name="line"]').value = result.line;
    }
  };
    xhttp.open("GET", "getdata.php?q=" + inputValue, true);
    xhttp.send();
  });
</script>


</body>
</html>