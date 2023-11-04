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

   
  
  // Truy vấn dữ liệu từ bảng chart
  $query5 = "SELECT production_date, plan, actual, plan_accrual, actual_accrual FROM chart";
  $result5 = mysqli_query($conn, $query5);

  // Chuyển đổi dữ liệu về định dạng yêu cầu của Google Charts
  $data = [['Production date', 'Plan', 'Actual', 'Plan accrual', 'Actual accrual']];
  while ($row5 = mysqli_fetch_array($result5)) {
    $data[] = [$row5['production_date'], $row5['plan'], $row5['actual'], $row5['plan_accrual'], $row5['actual_accrual']];
  }
  ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>);

        var options = {
          title : 'Production chart for month',
          vAxis: {title: 'Production quantity'},
          hAxis: {title: 'Production Date',
                  ticks: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31]
                  },
          seriesType: 'bars',
          series: {
            0: {type: 'line',color: 'blue'},
            1: {color: 'orange'},
            2: {type: 'line',color: 'green'},
            3: {type: 'line',color: 'orange'}
          }
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>

<?php
     $sql = "SELECT SUM(makeqty) as total FROM ctsx ";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $sql1 = "SELECT SUM(makeqty) as total1 FROM ctsx where line ='VX021' ";
     $result1 = mysqli_query($conn, $sql1);
     $row1 = mysqli_fetch_assoc($result1);
     $sql2 = "SELECT SUM(makeqty) as total2 FROM ctsx where line ='VX022' ";
     $result2 = mysqli_query($conn, $sql2);
     $row2 = mysqli_fetch_assoc($result2);
     $sql3 = "SELECT SUM(makeqty) as total3 FROM ctsx where line ='VX023' ";
     $result3 = mysqli_query($conn, $sql3);
     $row3 = mysqli_fetch_assoc($result3);

     $sqll1 = "SELECT SUM(makeqty) as tong1 FROM history where line ='VX021' and congdoan= 'NQ' ";
     $resultl1 = mysqli_query($conn, $sqll1);
     $rowl1 = mysqli_fetch_assoc($resultl1);
     $sqll2 = "SELECT SUM(makeqty) as tong2 FROM history where line ='VX022' and congdoan= 'NQ' ";
     $resultl2 = mysqli_query($conn, $sqll2);
     $rowl2 = mysqli_fetch_assoc($resultl2);
     $sqll3 = "SELECT SUM(makeqty) as tong3 FROM history where line ='VX023' and congdoan= 'NQ' ";
     $resultl3 = mysqli_query($conn, $sqll3);
     $rowl3 = mysqli_fetch_assoc($resultl3);

?>

<body class="nav-md">
    <div class="container">
         <?php include 'top_side.php' ?>
         <div class="container_full">
           <h1 class="text-center text-white text-center bg-primary">PRODUCTION DASHBOARD - Machining_Mold (N22)</h1>
            <div class="row" style="margin-top:5px;">
               <div class="col col-5 pd-12" style="margin-left:125px;">
                 <table class="text-center">
                    <thead>
                      <tr class="bg-info text-white" style="height: 30px; text-align: center;">
                          <th scope="col" class="th-sm">Line</th>
                          <th scope="col" class="th-sm">Plan(pcs)</th>
                          <th scope="col" class="th-sm">Actual(pcs)</th>
                          <th scope="col" class="th-sm">%</th>
                      </tr>
                    </thead>
                    <tbody style="background-color: #eeee">
                        <tr style="height: 25px;">
                          <th>VX021S</th>
                        <?php
                          echo "<td>" .number_format($row1['total1']) . "</td>";
                          echo "<td>" .number_format($rowl1['tong1']) . "</td>";
                          if ($row1['total1'] != 0) {
                            $percent = $rowl1['tong1'] / $row1['total1'] * 100;
                            echo "<td>" . number_format($percent, 0) . "%</td>";
                          } else {
                            echo "<td>0%</td>";
                          }
                        ?>
                        </tr>
                        <tr style="height: 25px;">
                          <th>VX022S</th>
                          <?php
                          echo "<td>" .number_format($row2['total2']) . "</td>";
                          echo "<td>" .number_format($rowl2['tong2']) . "</td>";
                          if ($row2['total2'] != 0) {
                            $percent = $rowl2['tong2'] / $row2['total2'] * 100;
                            echo "<td>" . number_format($percent, 0) . "%</td>";
                          } else {
                            echo "<td>0%</td>";
                          }
                        ?>
                        </tr>
                        <tr style="height: 25px;">
                          <th>VX023S</th>
                          <?php
                          echo "<td>" .number_format($row3['total3']) . "</td>";
                          echo "<td>" .number_format($rowl3['tong3']) . "</td>";
                          if ($row3['total3'] != 0) {
                            $percent = $rowl3['tong3'] / $row3['total3'] * 100;
                            echo "<td>" . number_format($percent, 0) . "%</td>";
                          } else {
                            echo "<td>0%</td>";
                          }
                        ?>
                        </tr>
                    </tbody>
                 </table>

                </div>
                <div class="col col-5 pd-12">
                 <table class="text-center">
                    <thead>
                      <tr class="bg-info text-white" style="height: 30px; text-align: center;">
                          <th scope="col" class="th-sm">Công đoạn</th>
                          <th scope="col" class="th-sm">Plan(pcs)</th>
                          <th scope="col" class="th-sm">Actual(pcs)</th>
                          <th scope="col" class="th-sm">%</th>
                      </tr>
                    </thead>
                    <tbody style="background-color: #eeee"> 
                        <tr style="height: 25px;">
                          <th>Hàn</th>
                          <?php
                          echo "<td>" .number_format($row['total']) . "</td>";
                          echo "<td>5000</td>";
                          echo "<td>50%</td>";
                        ?>
                        </tr>
                        <tr style="height: 25px;">
                          <th>Đúc</th>
                          <?php
                          echo "<td>" .number_format($row['total']) . "</td>";
                          echo "<td>5000</td>";
                          echo "<td>50%</td>";
                        ?>
                        </tr>
                        <tr style="height: 25px; background-color: #ccc">
                          <th>Tổng</th>
                          <?php
                          echo "<th>" .number_format($row['total']) . "</th>";
                          $tong= $rowl1['tong1']+$rowl2['tong2']+$rowl3['tong3'];
                          echo "<th>" .number_format($tong). "</th>";
                          if ($tong != 0) {
                            $percent = $tong / $row['total'] * 100;
                            echo "<th>" . number_format($percent, 0) . "%</th>";
                          } else {
                            echo "<th>0%</th>";
                          }
                        ?>
                        </tr>
                    </tbody>
                 </table>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        <div id="chart_div" style="width: 100%; height: 400px;"></div>
      </div>
    </div>
</body>
</html>