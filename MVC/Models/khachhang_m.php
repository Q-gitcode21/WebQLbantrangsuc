<!-- truy van sql -->
<?php 
class khachhang_m extends connectDB{
    function khachhang_ins($makhachhang,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh){
        $sql="INSERT INTO qlkh VALUES ('$makhachhang','$tenkhachhang','$gioitinh','$diachi','$sdt','$ngaysinh')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungid($makhachhang){
        $sql="SELECT * FROM qlkh WHERE MaKH='$makhachhang'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function khachhang_find($makhachhang,$tenkhachhang){
        // trường hợp loaddata
        if (empty($makhachhang) && empty($tenkhachhang)) {
            $sql = "SELECT * FROM qlkh";
        } 
        // trường hợp sửa dl
        elseif (empty($tenkhachhang)) {
            $sql = "SELECT * FROM qlkh WHERE MaKH = '$makhachhang'";
        }
        // trường hợp tìm kiếm
         else {
            $sql = "SELECT * FROM qlkh WHERE MaKH LIKE '%$makhachhang%' OR Ten LIKE '%$tenkhachhang%'";
        }
       
        return mysqli_query($this->con,$sql);
    }
    
    function khachhang_del($makhachhang){
        $sql="DELETE FROM qlkh WHERE MaKH='$makhachhang'";
        return mysqli_query($this->con,$sql);
    }
    function khachhang_upd($makhachhang,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh){
        $sql="UPDATE qlkh SET Ten='$tenkhachhang',Gioitinh='$gioitinh',Diachi='$diachi',SDT ='$sdt',Ngaysinh='$ngaysinh'
        WHERE MaKH='$makhachhang'";
        return mysqli_query($this->con,$sql);
    }
    
    
    
}
?>
