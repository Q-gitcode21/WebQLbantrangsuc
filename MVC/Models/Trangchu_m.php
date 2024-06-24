<?php
class Trangchu_m extends connectDB{
    function doanhthungay(){
        $sql="SELECT Ngaydathang,
       SUM(Tongtien) AS TongTienTrongNgay
        FROM qldonhang
        GROUP BY Ngaydathang;";
        
        return mysqli_query($this->con,$sql);
    }
}

?>