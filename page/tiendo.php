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
<body class="nav-md">

<?php
$sql = "SELECT * FROM khsx ";
$result2 = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM khsx ";
$result3 = mysqli_query($conn, $sql1);

$ngay_hien_tai = date('Y-m-d'); // Lấy ngày hôm nay dưới dạng chuỗi
$ngay_cot_str = date('d', strtotime($ngay_hien_tai)); // 
$ngay_cot = sprintf('%02d', $ngay_cot_str);


?>

<style>

</style>
  <div class="container">
      <?php include 'top_side.php' ?>
      
       <div class="container_full">
        <h1 class="text-center text-white text-center bg-primary" style="position:fixed; left: 0; right: 0; top:46px;">Tiến độ sản xuất</h1>
           <div class="row" style="margin-top:100px;">
              <div class="">
                  <table class="table">
                    <thead >
                      <tr>
                         <th scope="col" class="th-col ">Stt</th>
                         <th scope="col" class="th-bcol second-column">Mã sản phẩm/CTSX</th>
                         <th class="bg-fff"></th>
                         <th class="bg-fff"></th>
                         <th scope="col" class="th-col">KH/TT</th>
                        
                         <?php for ($i = 1; $i <= 31; $i++) { ?>
                         <th scope="col" class="th-col" ><?php echo $i ?></th>
                         <?php } ?>
   
                        </tr>
                      </thead>
                      
                      <tbody class="my-table" >
                      <?php
                          while($row = mysqli_fetch_assoc($result2)) {
                            echo "<tr class='table-tr'>";
                            if ($row['stt'] != 0) {
                            echo "<td>" . $row['stt'] . "</td>";
                               } else{ 
                                echo "<td></td>";
                            }
                            echo "<td class='second-column'>" . $row['product'] . "</td>";
                            echo "<td class='bg-fff'>  </td>";
                            echo "<td class='bg-fff'>  </td>";
                            if ($row['kh/tt'] != 0) {
                            echo "<td>" . $row['kh/tt'] . "</td>";
                            } else{ 
                            echo "<td></td>";
                            }
                            for ($i=1; $i<=31; $i++){
                                 $ngay= "ngay" .sprintf('%02d',$i);
                              if ($row[$ngay] != 0) {
                                echo "<td>" . $row[$ngay] . "</td>";
                                } else{ 
                                echo "<td></td>";
                              }
                            }
                                                   
                            echo "</tr>";
                            }
                            ?>
                      </tbody>
                      
                  </table>
              </div>
             
           </div>
       </div>
  </div>
</body>
<script>
  let today = new Date();
let dd = today.getDate();

let colIndex = null;
let thList = document.querySelectorAll('th');
thList.forEach(function(th, index) {
  if (th.innerText === dd.toString()) {
    colIndex = index;
    th.style.backgroundColor = "yellow";
  }
});

if (colIndex !== null) {
  let colList = document.querySelectorAll('td:nth-child(' + (colIndex + 1) + ')');
  colList.forEach(function(col) {
    col.style.backgroundColor = "yellow";
  });
}

</script>
</html>