<!-- truy van sql -->
<?php 
class qlnhanvien extends connectDB{
    function nhanvien_ins($manhanvien,$tennhanvien,$gioitinh,$ngaysinh,$dienthoai,$diachi,$phongban){
        $sql="INSERT INTO qlnhanvien VALUES ('$manhanvien','$tennhanvien','$gioitinh','$ngaysinh','$dienthoai','$diachi','$phongban')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungManhanvien($manhanvien){
        $sql="SELECT * FROM qlnhanvien WHERE Manhanvien='$manhanvien'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function nhanvien_find($manhanvien,$tennhanvien){
        // trường hợp loaddata
       
        // trường hợp tìm kiếm
        
            $sql = "SELECT * FROM qlnhanvien WHERE Manhanvien LIKE '%$manhanvien%' AND Tennhanvien LIKE '%$tennhanvien%'";
       
       
        return mysqli_query($this->con,$sql);
    }
    
    function nhanvien_del($manhanvien){
        $sql="DELETE FROM qlnhanvien WHERE Manhanvien='$manhanvien'";
        return mysqli_query($this->con,$sql);
    }
    function nhanvien_upd($manhanvien,$tennhanvien,$gioitinh,$ngaysinh,$dienthoai,$diachi,$phongban){
        $sql="UPDATE qlnhanvien SET Tennhanvien='$tennhanvien' , Gioitinh= '$gioitinh' , Ngaysinh= '$ngaysinh' , Dienthoai= '$dienthoai' , Diachi= '$diachi' , Phongban= '$phongban'  
        WHERE Manhanvien='$manhanvien'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
