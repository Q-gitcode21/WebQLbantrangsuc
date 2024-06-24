<!-- truy van sql -->
<?php 
class Nhaphang_m extends connectDB{
    function nhaphang_ins($manh,$tgnhap,$masp,$soluong,$donvi,$mancc){
        $sql="INSERT INTO qlynhaphang VALUES ('$manh','$tgnhap','$masp','$soluong','$donvi','$mancc')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungmanh($manh){
        $sql="SELECT * FROM qlynhaphang WHERE Manhaphang='$manh'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function nhaphang_find($manh){
        
            $sql = "SELECT * FROM qlynhaphang WHERE Manhaphang LIKE '%$manh%'";
    
       
        return mysqli_query($this->con,$sql);
    }
    function getMasp(){
        $sql = "SELECT * FROM qlysanpham ";

        return mysqli_query($this->con,$sql);
    }
    function getMancc(){
        $sql = "SELECT * FROM nhacungcap ";

        return mysqli_query($this->con,$sql);
    }

    function nhaphang_del($manh){
        $sql="DELETE FROM qlynhaphang WHERE Manhaphang='$manh'";
        return mysqli_query($this->con,$sql);
    }
    function nhaphang_upd($manh,$tgnhap,$masp,$soluong,$donvi,$mancc){
        $sql="UPDATE qlynhaphang SET Thoigiannhap='$tgnhap',Masp='$masp',Soluong='$soluong',Donvitinh='$donvi',Mancc='$mancc'
        WHERE Manhaphang='$manh'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
