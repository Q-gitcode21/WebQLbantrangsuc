<?php 
class Doimatkhau extends controller{
    private $doimk;
    function __construct()
    {
        $this->doimk=$this->model('Doimatkhau_m');
        
        // khởi tạo đối tượng model('dangky_m') gán cho $dangky
    }
    function Get_data(){
        
        
        $this->view('Doimatkhau_v');
        
        // gọi giao diện chính và truyền dữ liệu page là trang dangky view
    }
    function doimatkhau(){
        if(isset($_POST['btnLuu'])){
            
            $id=$_GET['id'];
            $email=$_POST['txtEmaildky'];
            $mk1=$_POST['txtMatkhaulan1'];
            $mk2=$_POST['txtMatkhaulan2'];
            // kiểm tra 2 mật khẩu nhập giống nhau
            // if($mk1==$mk2){
            //     $kq=$this->doimk->doimatkhau($id,$email,$mk1);
            //     if($kq){
            //         echo'<script>alert("Đổi mật khẩu thành công");
            //         window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Login";
            //         </script>';
            //     }
            //     else{
            //         echo'<script>alert("Đổi mật khẩu thất bại");
                   
            //         </script>';
            //         var_dump($kq);
            //     }
            // }
            // else{
            //     // mật khẩu ko trùng nhau
            //     echo'<script>alert("Mật khẩu không khớp");
            //         </script>';
            //      // goi lai giao dien render lại trang va truyen $ dl ra 
            //     $this->view('Doimatkhau_v',[
            //         'page'=>'DSDanhmuc_v',
            //         'id'=>$id,
            //         'email'=>$email,
                    
            //     ]);    
            // }
        }
    }
}