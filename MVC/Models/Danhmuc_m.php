<!-- truy van sql -->
<?php 
class Danhmuc_m extends connectDB{
    function Danhmuc_ins($madm,$tendm,$mota){
        $sql="INSERT INTO qlydanhmuc VALUES ('$madm','$tendm','$mota')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungmadm($madm){
        $sql="SELECT * FROM qlydanhmuc WHERE Madm='$madm'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function danhmuc_find($madm,$tendm){
        // trường hợp loaddata
        if (empty($madm) && empty($tendm)) {
            $sql = "SELECT * FROM qlydanhmuc";
        } 
        // trường hợp sửa dl
        elseif (empty($tendm)) {
            $sql = "SELECT * FROM qlydanhmuc WHERE Madm = '$madm'";
        }
        // trường hợp tìm kiếm
         else {
            $sql = "SELECT * FROM qlydanhmuc WHERE Madm LIKE '%$madm%' OR TendM LIKE '%$tendm%'";
        }
       
        return mysqli_query($this->con,$sql);
    }
    
    function danhmuc_del($madm){
        $sql="DELETE FROM qlydanhmuc WHERE Madm='$madm'";
        return mysqli_query($this->con,$sql);
    }
    function danhmuc_upd($madm,$tendm,$mota){
        $sql="UPDATE qlydanhmuc SET Tendm='$tendm',Mota='$mota'
        WHERE Madm='$madm'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
