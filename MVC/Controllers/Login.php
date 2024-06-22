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
                $tdn=$row['Tendn'];                
                $mk=$row['Matkhau'];
                
               
               }
               if ($mk==$mk_input)
               {
                   
                    $_SESSION['Id']=$id;
                    $this->view('Masterlayout');
                    $result_mess=true;
               }
               else
               {
                $this->view('Login_v',['result'=>$result_mess]);               
               }
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