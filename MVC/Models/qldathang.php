<!-- truy van sql -->
<?php 
class qldathang extends connectDB{
    function dathang_ins($madonhang,$ngaydathang, $trangthaidonhang, $trangthaithanhtoan){
        $sql="INSERT INTO qldathang VALUES ('$madonhang','$ngaydathang','$trangthaidonhang','$trangthaithanhtoan')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungmadonhang($madonhang){
        $sql="SELECT * FROM qldathang WHERE madonhang='$madonhang'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function dathang_find($madonhang){
        // trường hợp loaddata
       
        // trường hợp tìm kiếm
        
            $sql = "SELECT * FROM qldathang WHERE madonhang LIKE '%$madonhang%' ";
       
       
        return mysqli_query($this->con,$sql);
    }
    
    function dathang_del($madonhang){
        $sql="DELETE FROM qldathang WHERE madonhang='$madonhang'";
        return mysqli_query($this->con,$sql);
    }
    function dathang_upd($madonhang,$ngaydathang,$trangthaidonhang, $trangthaithanhtoan){
        $sql="UPDATE qldathang SET ngaydathang='$ngaydathang'  , trangthaidonhang= '$trangthaidonhang' , trangthaithanhtoan= '$trangthaithanhtoan'   
        WHERE madonhang='$madonhang'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
