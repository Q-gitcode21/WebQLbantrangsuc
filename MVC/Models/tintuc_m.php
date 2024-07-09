<!-- truy van sql -->
<?php 
class tintuc_m extends connectDB{
    function tintuc_ins($id,$noidung,$tieude,$ngaytao,$hinhanh){
        $sql="INSERT INTO qltintuc VALUES ('$id','$noidung','$tieude','$ngaytao','$hinhanh')";
         return mysqli_query($this->con,$sql);
        
    }
    function checktrungid($id){
        $sql="SELECT * FROM qltintuc WHERE Id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;
        }
        return $kq;
    }
    function tintuc_find($tieude,$noidung){
        // trường hợp loaddata
            $sql = "SELECT * FROM qltintuc WHERE Tieude LIKE '%$tieude%' AND Noidung LIKE '%$noidung%'";
       
        return mysqli_query($this->con,$sql);
    }
    function tintuc_findid($id){
        $sql = "SELECT * FROM qltintuc WHERE Id LIKE '%$id%' ";
        return mysqli_query($this->con,$sql);
    }
    
    function tintuc_del($id){
        $sql="DELETE FROM qltintuc WHERE Id='$id'";
        return mysqli_query($this->con,$sql);
    }
    function tintuc_upd($id,$noidung,$tieude,$ngaytao,$hinhanh){
        if($hinhanh!=""){
            $sql="UPDATE qltintuc SET Noidung ='$noidung',Tieude ='$tieude',Ngaytao ='$ngaytao',Hinhanh ='$hinhanh'
        WHERE Id='$id'";
            echo $sql;
        }
        else{
            $sql="UPDATE qltintuc SET Noidung ='$noidung',Tieude ='$tieude',Ngaytao ='$ngaytao'
        WHERE Id='$id'";

        }return mysqli_query($this->con,$sql);

    }
    
}
?>
