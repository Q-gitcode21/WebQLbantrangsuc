<!-- truy van sql -->
<?php 
class Giaohang_m extends connectDB{
    function giaohang_ins($mdh,$ndh,$nnh,$dvvc,$tt){
        $sql="INSERT INTO giaohang VALUES ('$mdh','$ndh','$nnh',N'$dvvc','$tt')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungma($mdh){
        $sql="SELECT * FROM giaohang WHERE Madonhang='$mdh'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function giaohang_find($mdh,$tt){
        // trường hợp loaddata
        
            $sql = "SELECT * FROM giaohang WHERE Madonhang LIKE '%$mdh%' AND Trangthai LIKE '%$tt%'";
        
       
        return mysqli_query($this->con,$sql);
    }
    function giaohang_findma($mdh){
        $sql = "SELECT * FROM giaohang WHERE Madonhang = '$mdh'";

        return mysqli_query($this->con,$sql);
    }
    // tìm mã từ bảng khác
    function getMadonhang(){
        $sql = "SELECT * FROM qldonhang ";

        return mysqli_query($this->con,$sql);
    }
    
    function giaohang_del($mdh){
        $sql="DELETE FROM giaohang WHERE Madonhang='$mdh'";
        return mysqli_query($this->con,$sql);
    }
    function giaohang_upd($mdh,$ndh,$nnh,$dvvc,$tt){
        $sql="UPDATE giaohang SET Ngaydathang='$ndh', Ngaynhanhangdukien='$nnh', Donvivanchuyen=N'$dvvc',Trangthai=N'$tt'
        WHERE Madonhang='$mdh'";
        return mysqli_query($this->con,$sql);
    }
    
    
}
?>
