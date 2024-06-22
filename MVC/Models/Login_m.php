<?php
class Login_m extends connectDB{
    function login($email){
        $sql = "SELECT * FROM taikhoan WHERE Email = '$email'";

        return mysqli_query($this->con,$sql);
    }
}
?>