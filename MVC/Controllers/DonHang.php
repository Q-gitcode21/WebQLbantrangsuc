<!-- goi giao dien và function -->
<?php 
 class DonHang extends controller{
    private $donhang;
    function __construct()
    {
        $this->donhang=$this->model('qldonhang');
        // khởi tạo đối tượng model('donhang_m') gán cho $donhang
    }
    function Get_data(){
       
        // gọi giao diện chính và truyền dữ liệu page là trang donhang view
       
        
            
            $getMasp=$this->donhang->getMasp();
            $getMadonhang=$this->donhang->getMadonhang();
            $getMaKH=$this->donhang->getMaKH();
            $getGiatri=$this->donhang->getGiatri();
            $getGiatript=$this->donhang->getGiatript();
            $this->view('Masterlayout',['page'=>'DSDonhang_them','getMasp'=>$getMasp,'getMadonhang'=>$getMadonhang,'getMaKH'=>$getMaKH,'getGiatri'=>$getGiatri,'getgiatript'=>$getGiatript]);
            // gọi giao diện chính và truyền dữ liệu page là trang giaohang view
          
        
               
                
                // gọi gia
        
    }
   
        
        // gọi gia
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $makhachhang=$_POST['txtMaKH'];
            $masanpham=$_POST['txtMasp'];
            $madonhang=$_POST['txtMadonhang'];
            $soluong=$_POST['txtSoluong'];
            $tongtien=$_POST['txtTongtien'];
            echo $tongtien;
            $voucher=$_POST['txtMaVoucher'];
            $ngaydathang=$_POST['txtNgaydathang'];
            $diachi=$_POST['txtDiachi'];
            
            // Kiem tra trung id
            $kq2=$this->donhang->checktrungmadonhang($madonhang);
            
            if($kq2){
                echo'<script>alert("Trùng Mã Đơn Hàng")</script>';
            }
            else{
                    // gọi hàm chèn dl donhang_ins trong model tacgia_m
            $kq=$this->donhang->donhang_ins($makhachhang,$masanpham, $madonhang,$soluong, $tongtien,$voucher, $ngaydathang,$diachi);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                 window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/donhang";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'donhang_them',
            //     'id'=> $id,
            //     'email'=>$email,
            //     'tendn'=> $tdn,
            //     'matkhau'=> $mk,
            //     'ngaytao'=> $nt,
                
            // ]);
        }
    }
    public function layGiaSanPham($msp) {
        header('Content-Type: application/json');
        $result = $this->donhang->getGiasp($msp);
        if ($result) {
            $row = $result->fetch_assoc();
            $giaSanPham = $row['Gia'];
            echo json_encode(['giaSanPham' => $giaSanPham]);
        } else {
            echo json_encode(['error' => 'Không tìm thấy giá sản phẩm']);
        }
    }
    
 }
 ?>
