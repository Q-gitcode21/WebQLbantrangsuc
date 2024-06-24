<!-- truy van sql -->
<?php 
class qldonhang extends connectDB{
    function donhang_ins($makhachhang,$masanpham, $madonhang,$soluong, $tongtien,$voucher, $ngaydathang,$diachi){
        $sql="INSERT INTO qldonhang VALUES ('$makhachhang','$masanpham','$madonhang','$soluong','$tongtien','$voucher','$ngaydathang','$diachi')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungmadonhang($madonhang){
        $sql="SELECT * FROM qldonhang WHERE madonhang='$madonhang' " ;
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function donhang_find($madonhang,$makhachhang){
        // trường hợp loaddata
       
        // trường hợp tìm kiếm
        
            $sql = "SELECT * FROM qldonhang WHERE madonhang LIKE '%$madonhang%' AND maKH LIKE '%$makhachhang%' ";
       
       
        return mysqli_query($this->con,$sql);
    }
    
    function donhang_del($madonhang){
        $sql="DELETE FROM qldonhang WHERE madonhang='$madonhang'";
        return mysqli_query($this->con,$sql);
    }
    function donhang_upd($makhachhang,$masanpham, $madonhang,$soluong, $tongtien,$voucher, $ngaydathang,$diachi){
        $sql="UPDATE qldonhang SET maKH='$makhachhang' , masp= '$masanpham' , madonhang= '$madonhang' , soluong= '$soluong'   ,tongtien='$tongtien', voucher='$voucher',ngaydathang='$ngaydathang',diachi='$diachi'
        WHERE madonhang='$madonhang'";
        return mysqli_query($this->con,$sql);
    }
    function getMasp(){
        $sql = "SELECT * FROM qlysanpham ";
    
        return mysqli_query($this->con,$sql);
    } 
    function getMadonhang(){
        $sql = "SELECT * FROM qldathang ";

        return mysqli_query($this->con,$sql);
    }
    function getMaKH(){
        $sql = "SELECT * FROM qlkh ";

        return mysqli_query($this->con,$sql);
    }
    function getGiatri(){
        $sql = "SELECT * FROM qlkhuyenmai ";

        return mysqli_query($this->con,$sql);
    }
    function getGiatript(){
        $sql = "SELECT * FROM qlkhuyenmai ";

        return mysqli_query($this->con,$sql);
    }
    public function getGiasp($msp) {
        $query = "SELECT Gia FROM qlysanpham WHERE Masp = ?";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param("s", $msp);
        $stmt->execute();
        return $stmt->get_result();
    }
}

?>
