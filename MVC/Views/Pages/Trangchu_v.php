<?php include_once './MVC/Core/connectDB.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<?php 
 $sql="SELECT Ngaydathang,
 SUM(Tongtien) AS TongTienTrongNgay
  FROM qldonhang
  GROUP BY Ngaydathang;";
  $con=mysqli_connect('localhost','root','','qlbanhang') ;
  $res= mysqli_query($con,$sql);
  

if (isset($res) && mysqli_num_rows($res) > 0) {
    
    // Khởi tạo mảng data và xaxis
    $data = [];
    $xaxis = [];

    while ($row = mysqli_fetch_array($res)) {
        $data[] = $row['TongTienTrongNgay'];
        $xaxis[] = $row['Ngaydathang'];
    }
    ?>
    <div><h3>Thống kê doanh thu</h3></div>
    <div class="Doanhthu">
        <div style="width: 600px;" id="chart"></div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            let options = {
                chart: {
                    type: 'line'
                },
                stroke: {
                    curve: 'smooth',
                    width: 6,
                },
                series: [{
                    name: 'Tổng tiền',
                    data: <?php echo json_encode($data); ?> // Chuyển mảng data thành JSON
                }],
                xaxis: {
                    categories: <?php echo json_encode($xaxis); ?> // Chuyển mảng xaxis thành JSON
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>
    </div>
    <?php
}
?>

    </div>
    </div>
</body>
</html>