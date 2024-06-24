<!-- truy van sql -->
<?php 
class Sanpham_m extends connectDB{
    function Sanpham_ins($masp,$tensp,$madm,$gia,$soluong,$mota,$hinhanh){
        $sql="INSERT INTO qlysanpham VALUES ('$masp','$tensp','$madm','$gia','$soluong','$mota','$hinhanh')";

         return mysqli_query($this->con,$sql);
        
    }
    function checktrungmasp($masp){
        $sql="SELECT * FROM qlysanpham WHERE Masp='$masp'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function sanpham_find($masp,$tensp){
        // trường hợp loaddata
        if (empty($masp) && empty($tensp)) {
            $sql = "SELECT * FROM qlysanpham";
        } 
        // trường hợp sửa dl
        elseif (empty($tensp)) {
            $sql = "SELECT * FROM qlysanpham WHERE Masp = '$masp'";
        }
        // trường hợp tìm kiếm
         else {
            $sql = "SELECT * FROM qlysanpham WHERE Masp LIKE '%$masp%' OR Tensp LIKE '%$tensp%'";
        }
       
        return mysqli_query($this->con,$sql);
    }
    function getDanhmuc(){
        $sql = "SELECT * FROM qlydanhmuc";
        return  mysqli_query($this->con,$sql); 
        
    }
    
    function sanpham_del($masp){
        $sql="DELETE FROM qlysanpham WHERE Masp='$masp'";
        return mysqli_query($this->con,$sql);
    }
    function sanpham_upd($masp,$tensp,$madm,$gia,$soluong,$mota,$hinhanh){
        if($hinhanh!=""){
            $sql="UPDATE qlysanpham SET Tensp='$tensp', Madm='$madm', Gia='$gia', Soluong='$soluong',Mota='$mota',Hinhanh='$hinhanh' WHERE Masp='$masp'";
            echo $sql;
        }
        else{
            $sql="UPDATE qlysanpham SET Tensp='$tensp', Madm='$madm', Gia='$gia', Soluong='$soluong',Mota='$mota' WHERE Masp='$masp'";

        
       
    } return mysqli_query($this->con,$sql);
    
}
}
?>
