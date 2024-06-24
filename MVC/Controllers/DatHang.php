<!-- goi giao dien và function -->
<?php 
 class DatHang extends controller{
    private $dathang;
    function __construct()
    {
        $this->dathang=$this->model('qldathang');
        // khởi tạo đối tượng model('dathang_m') gán cho $dathang
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'DSDathang_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang dathang view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $madonhang=$_POST['txtMadonhang'];
            $ngaydathang=$_POST['txtNgaydathang'];
          
            $trangthaidonhang=$_POST['txtTrangthaidonhang'];
            $trangthaithanhtoan=$_POST['txtTrangthaithanhtoan'];
            
            
            // Kiem tra trung id
            $kq2=$this->dathang->checktrungmadonhang($madonhang);
            
            if($kq2){
                echo'<script>alert("Trùng Mã Đơn Hàng")</script>';
            }
            else{
                    // gọi hàm chèn dl dathang_ins trong model tacgia_m
            $kq=$this->dathang->dathang_ins($madonhang,$ngaydathang,$trangthaidonhang, $trangthaithanhtoan);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/dathang";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'dathang_them',
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
