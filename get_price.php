<?php
if(isset($_POST['Masp'])){
    $masp = $_POST['Masp'];
    
    // Kết nối cơ sở dữ liệu
    $conn = mysqli_connect('localhost','root','','qlbanhang1');
    
    if (!$conn) {
        die('Kết nối thất bại: ' . mysqli_connect_error());
    }

    $query = "SELECT Gia FROM qlysanpham WHERE Masp='$masp'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row['Gia'];
    } else {
        echo 'Không tìm thấy giá';
    }

    mysqli_close($conn);
}
?>