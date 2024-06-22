<!-- truy van sql -->
<?php 
class Taikhoan_m extends connectDB{
    function taikhoan_ins($id,$email,$tdn,$mk,$nt){
        $sql="INSERT INTO taikhoan VALUES ('$id','$email','$tdn','$mk','$nt')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungid($id){
        $sql="SELECT * FROM taikhoan WHERE Id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function taikhoan_find($id,$tdn){
        // trường hợp loaddata
        if (empty($id) && empty($tdn)) {
            $sql = "SELECT * FROM taikhoan";
        } 
        // trường hợp sửa dl
        elseif (empty($tdn)) {
            $sql = "SELECT * FROM taikhoan WHERE Id = '$id'";
        }
        // trường hợp tìm kiếm
         else {
            $sql = "SELECT * FROM taikhoan WHERE Id LIKE '%$id%' AND Tendn LIKE '%$tdn%'";
        }
       
        return mysqli_query($this->con,$sql);
    }
    
    function taikhoan_del($id){
        $sql="DELETE FROM taikhoan WHERE Id='$id'";
        return mysqli_query($this->con,$sql);
    }
    function taikhoan_upd($id,$email,$tdn,$mk,$nt){
        $sql="UPDATE taikhoan SET Email='$email',Tendn='$tdn',Matkhau='$mk',Ngaytao='$nt'
        WHERE Id='$id'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
