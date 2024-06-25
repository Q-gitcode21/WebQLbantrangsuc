<!-- goi giao dien và function -->
<?php 
 class NhanVien extends controller{
    private $nhanvien;
    function __construct()
    {
        $this->nhanvien=$this->model('qlnhanvien');
        // khởi tạo đối tượng model('nhanvien_m') gán cho $nhanvien
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'Nhanvien_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang nhanvien view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $manhanvien=$_POST['txtManhanvien'];
            $tennhanvien=$_POST['txtTennhanvien'];
            $gioitinh=$_POST['txtGioitinh'];
            $ngaysinh=$_POST['txtNgaysinh'];
            $dienthoai=$_POST['txtDienthoai'];
            $diachi=$_POST['txtDiachi'];
            $phongban=$_POST['txtPhongban'];
            
            // Kiem tra trung id
            $kq1=$this->nhanvien->checktrungmanhanvien($manhanvien);
            
            if($kq1){
                echo'<script>alert("Trùng Mã Nhân Viên")</script>';
            }
            else{
                    // gọi hàm chèn dl nhanvien_ins trong model tacgia_m
            $kq=$this->nhanvien->nhanvien_ins($manhanvien,$tennhanvien,$gioitinh,$ngaysinh,$dienthoai,$diachi,$phongban);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/nhanvien";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'nhanvien_them',
            //     'id'=> $id,
            //     'email'=>$email,
            //     'quyen'=> $tdn,
            //     'matkhau'=> $mk,
            //     'ngaytao'=> $nt,
                
            // ]);
        }
    }
    
 }
 ?>
