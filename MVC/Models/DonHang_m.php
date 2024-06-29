<?php
class DonHang_m extends connectDB{
    function donhang_ins($makhachhang, $masanpham,$madonhang,$soluong,$tongtien, $voucher,$ngaydathang,  $diachi){
        $sql="INSERT INTO orders VALUES('$makhachhang','$masanpham','$madonhang','$soluong','$tongtien','$voucher','$ngaydathang','$diachi')";
        return mysqli_query($this->con,$sql);
    }
}
?>