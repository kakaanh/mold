<!DOCTYPE html>
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
    $result2 = null;
    if (isset($_POST['btn_bchn'])){
          $bctungay= $_POST['tungay'];
          $bcdenngay= $_POST['denngay'];
          $sql = "SELECT * FROM history WHERE makedate BETWEEN '$bctungay' AND '$bcdenngay'";
          $result2 = mysqli_query($conn, $sql);
    }
?>
<body class="nav-md">
  <div class="container">
    <?php include 'top_side.php' ?>
    <div class="container_full">
      <h1 class="text-center text-white text-center bg-primary">Tra cứu dữ liệu sản xuất</h1>
      <form method="post" style="margin-top:20px">
        <div class="row">
          <div class="col col-3 pd-12">
            <div class="input-group mb-1">
                <span class="input-group-text col-4">Từ Ngày</span>
                <input type="date" name="tungay" class="form-control col-8" required>
            </div>
          </div>
          <div class="col col-3 pd-12">
            <div class="input-group mb-1">
                <span class="input-group-text col-4">Đến Ngày</span>
                <input type="date" name="denngay" class="form-control col-8" required>
            </div>
          </div>
          <div class="col col-3 pd-12">
            <div class="input-group mb-1">
            <input type="submit" name="btn_bchn" class="form-control bg-primary text-white" value="Tra Cứu">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="container-conten">
      <div class="row">
        <table class="table ">
          <thead>
            <tr>
               <th scope="col" class="th-bg">Ngày</th>
               <th scope="col" class="th-sm">CTSX</th>
               <th scope="col" class="th-bg">Số lượng</th>
               <th scope="col" class="th-mg">Nhân viên</th>
               <th scope="col" class="th-bg">thời gian</th>
               <th scope="col" class="th-bg">Công đoạn</th>
               <th scope="col" class="th-bg">Mã sản phẩm</th>
               
            </tr>
          </thead>
          <tbody class="my-table">
               <?php
                if ($result2) {
                 while($row = mysqli_fetch_assoc($result2)) {
                   echo "<tr class='table-tr'>";
                   echo "<td>" . $row['makedate'] . "</td>";
                   echo "<td>" . $row['command'] . "</td>";
                   echo "<td>" . $row['makeqty'] . "</td>";
                   echo "<td>" . $row['person'] . "</td>";
                   echo "<td> 400 </td>";
                   echo "<td>" . $row['congdoan'] . "</td>";
                   echo "<td>" . $row['product'] . "</td>";
                   echo "</tr>";
                    }
                  }
                   ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>