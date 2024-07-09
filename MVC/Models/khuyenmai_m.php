<!-- truy van sql -->
<?php 
class khuyenmai_m extends connectDB{
    function khuyenmai_ins($makm,$mota,$giatri,$soluong){
        $sql="INSERT INTO qlkhuyenmai VALUES ('$makm','$mota','$giatri','$soluong')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungid($makm){
        $sql="SELECT * FROM qlkhuyenmai WHERE MaKM='$makm'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function khuyenmai_find($makm,$giatri){
        // trường hợp loaddata
            $sql = "SELECT * FROM qlkhuyenmai WHERE MaKM LIKE '%$makm%' AND Giatri LIKE '%$giatri%'";
       
        return mysqli_query($this->con,$sql);
    }
    function khuyenmai_findid($makm){
        $sql = "SELECT * FROM qlkhuyenmai WHERE MaKM LIKE '%$makm%' ";
        return mysqli_query($this->con,$sql);
    }
    
    function khuyenmai_del($makm){
        $sql="DELETE FROM qlkhuyenmai WHERE MaKM='$makm'";
        return mysqli_query($this->con,$sql);
    }
    function khuyenmai_upd($makm,$mota,$giatri,$soluong){
        $sql="UPDATE qlkhuyenmai SET Mota ='$mota',Giatri ='$giatri',Soluong ='$soluong' 
        WHERE MaKM='$makm'";
        
        return mysqli_query($this->con,$sql);
    }
    
}
?>
