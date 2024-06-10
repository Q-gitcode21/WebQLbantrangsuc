<!-- goi giao dien và function -->
 <?php 
 class Taikhoan extends controller{
    private $taikhoan;
    function __construct()
    {
        $this->taikhoan=$this->model('Taikhoan_m');
        // khởi tạo đối tượng model('Taikhoan_m') gán cho $taikhoan
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'Taikhoan_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang taikhoan view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtId'];
            $email=$_POST['txtEmail'];
            $tdn=$_POST['txtTendangnhap'];
            $mk=$_POST['txtMatkhau'];
            $nt=$_POST['dateNgaytao'];
            
            // Kiem tra trung id
            $kq1=$this->taikhoan->checktrungid($id);
            
            if($kq1){
                echo'<script>alert("Trùng ID")</script>';
            }
            else{
                    // gọi hàm chèn dl taikhoan_ins trong model tacgia_m
            $kq=$this->taikhoan->taikhoan_ins($id,$email,$tdn,$mk,$nt);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Taikhoan";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'Taikhoan_them',
            //     'id'=> $id,
            //     'email'=>$email,
            //     'tendn'=> $tdn,
            //     'matkhau'=> $mk,
            //     'ngaytao'=> $nt,
                
            // ]);
        }
    }
    
 }
 ?>
