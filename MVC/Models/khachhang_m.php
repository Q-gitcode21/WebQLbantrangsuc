<!-- truy van sql -->
<?php 
class khachhang_m extends connectDB{
    
    function checktrungid($id){
        $sql="SELECT * FROM qlkh WHERE Id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function khachhang_find($id,$tenkhachhang){
        // trường hợp loaddata
        if (empty($id) && empty($tenkhachhang)) {
            $sql = "SELECT * FROM qlkh";
        } 
        // trường hợp sửa dl
        elseif (empty($tenkhachhang)) {
            $sql = "SELECT * FROM qlkh WHERE Id = '$id'";
        }
        // trường hợp tìm kiếm
         else {
            $sql = "SELECT * FROM qlkh WHERE Id LIKE '%$id%' OR Ten LIKE '%$tenkhachhang%'";
        }
       
        return mysqli_query($this->con,$sql);
    }
    
    function khachhang_del($id){
        $sql="DELETE FROM qlkh WHERE Id='$id'";
        return mysqli_query($this->con,$sql);
    }
    function khachhang_upd($id,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh){
        $sql="UPDATE qlkh SET Ten='$tenkhachhang',Gioitinh='$gioitinh',Diachi='$diachi',SDT ='$sdt',Ngaysinh='$ngaysinh'
        WHERE Id='$id'";
    
        return mysqli_query($this->con,$sql);
    }
    function khachhang_ins($id,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh){
        $sql="INSERT INTO qlkh VALUES ('$id','$tenkhachhang','$gioitinh','$diachi','$sdt','$ngaysinh')";
         return mysqli_query($this->con,$sql);
        
    }
    
    
    
}
?>
