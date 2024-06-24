<?php
class DatHang_m extends connectDB{
    function dathang_ins($madonhang,$ngaydathang,$trangthaidonhang,$trangthaithanhtoan){
        $sql="INSERT INTO qldathang VALUES('$madonhang','$ngaydathang','$trangthaidonhang','$trangthaithanhtoan')";
        return mysqli_query($this->con,$sql);
    }
}
?>