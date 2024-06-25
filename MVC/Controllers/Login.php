<?php
class Login extends controller{
    private $Login;
    function __construct()
    {
        $this->Login=$this->model('Login_m');
        
        // khởi tạo đối tượng model('Login_m') gán cho $Login
    }
    function Get_data(){
        
        
        $this->view('Login_v');
        
        // gọi giao diện chính và truyền dữ liệu page là trang Login view
    }
    function dangnhap(){
        $result_mess = false;
        if(isset($_POST['btnDangnhap'])){           
            $email=$_POST['txtEmail'];
            $mk_input=$_POST['txtMatkhau'];            
            $kq=$this->Login->login($email);
            
            if(mysqli_num_rows($kq)){
               while($row = mysqli_fetch_array($kq)){
                $id=$row['Id'];
                $email=$row['Email'];
                $quyen=$row['Quyen'];                
                $mk=$row['Matkhau'];
                
               
               }
               if ($mk==$mk_input)
               {
               
                    $_SESSION['Id']=$id;
                    if ($quyen == 'Khách hàng') {
                        // Gọi đến trang bán hàng
                        echo '<script>
                        alert("Đăng nhập thành công");
                        window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD";
                        </script>'; 
                        $result_mess=true;                 
                        exit();
                    } 
                    elseif ($quyen == 'Nhân viên') {
                        // Gọi đến trang quản lý
                        $doanhthu=$this->Login->doanhthungay();
                        $this->view('Masterlayout',['page'=>'Trangchu_v', 'dulieu'=>$doanhthu]);
                        $result_mess=true;
                        exit();
                    }
                    else{
                        echo 'Không xác định đc quyền';
                    }

                   
               }
               // sai mật khẩu
               else{
                echo '<script>
                alert("Sai mật khẩu");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Login";
                </script>';   
               }
               
            }
            // email chưa đăng ký
            else
               {
                echo '<script>
                alert("Email chưa đăng ký");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Login";
                </script>';           
               }
}
}
function logout(){
    unset($_SESSION['Id']);
    session_destroy();
    $this->view('Login_v');
}


}
?>