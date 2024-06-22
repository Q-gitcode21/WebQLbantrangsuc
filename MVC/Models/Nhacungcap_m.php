<!-- truy van sql -->
<?php 
class Nhacungcap_m extends connectDB{
    // hàm thêm mới
    function nhacungcap_ins($tenncc,$diachi,$sdt,$email,$mst){
        $sql = "INSERT INTO nhacungcap (Tenncc, Diachi, Sdt, Email, Masothue) VALUES ('$tenncc', '$diachi', '$sdt', '$email', '$mst')";
         return mysqli_query($this->con,$sql);
        
    }
    // function checktrungid($id){
    //     $sql="SELECT * FROM nhacungcap WHERE Id='$id'";
    //     $dl=mysqli_query($this->con,$sql);
    //     $kq=false;
    //     if(mysqli_num_rows($dl)>0){
    //         $kq=true;
    //     }
    //     return $kq;
    // }
    function nhacungcap_find($mancc,$tenncc){
      
            $sql = "SELECT * FROM nhacungcap WHERE Mancc LIKE '%$mancc%' AND Tenncc LIKE '%$tenncc%'";
        
       
        return mysqli_query($this->con,$sql);
    }
    function nhacungcap_findma($mancc){
        $sql = "SELECT * FROM nhacungcap WHERE Mancc = '$mancc'";

        return mysqli_query($this->con,$sql);
    }
    
    function nhacungcap_del($mancc){
        $sql="DELETE FROM nhacungcap WHERE Mancc='$mancc'";
        return mysqli_query($this->con,$sql);
    }
    function nhacungcap_upd($mancc,$tenncc,$diachi,$sdt,$email,$mst){
        $sql="UPDATE nhacungcap SET Tenncc='$tenncc',Diachi='$diachi',Sdt='$sdt',Email='$email',Masothue='$mst'
        WHERE Mancc='$mancc'";
        return mysqli_query($this->con,$sql);
    }
    
}
?>
