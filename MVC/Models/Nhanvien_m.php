<?php
class Nhanvien_m extends connectDB{
    function nhanvien_ins($manhanvien,$tennhanvien,$gioitinh, $ngaysinh,$dienthoai,$diachi,$phongban){
        $sql="INSERT INTO qlnhanvien VALUES('$manhanvien','$tennhanvien','$gioitinh','$ngaysinh','$dienthoai','$diachi','$phongban')";
        return mysqli_query($this->con,$sql);
    }
}
?>