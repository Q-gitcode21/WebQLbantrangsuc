<?php
class Doimatkhau_m extends connectDB{
    function doimatkhau($id,$email,$mk){
        $sql="UPDATE taikhoan SET Email='$email',Matkhau='$mk'
        WHERE Id='$id'";
        echo $sql;
        return mysqli_query($this->con,$sql);
    }
}


?>