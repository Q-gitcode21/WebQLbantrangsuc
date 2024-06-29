<!-- goi giao dien và function -->
 <?php 
 class khachhang extends controller{
    private $khachhang;
    function __construct()
    {
        $this->khachhang=$this->model('khachhang_m');
        // khởi tạo đối tượng model('khachhang_m') gán cho $khachhang
    }
    function Get_data(){
       
        $this->view('Masterlayout',['page'=>'khachhang_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang khachhang view
    }
    function themmoi(){
        if(isset($_POST['btnKHmoi'])){
            $id=$_POST['txtId'];
            $tenkhachhang=$_POST['txttenkhachhang'];
            $gioitinh=$_POST['txtgioitinh'];
            $diachi=$_POST['txtdiachi'];
            $sdt=$_POST['txtsdt'];
            $ngaysinh=$_POST['datengaysinh'];
            
          
            
           
            
                    // gọi hàm chèn dl khachhang_ins trong model tacgia_m
            $kq=$this->khachhang->khachhang_ins($id,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh);
            
            if($kq){
                echo '<script>
                alert("Đăng ký thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Login";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Đăng ký thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'khachhang_them',
            //     'id'=> $id,
            //     'email'=>$email,
            //     'quyen'=> $tdn,
            //     'matkhau'=> $mk,
            //     'ngaytao'=> $nt,
                
            // ]);
        }
    

    function upload(){
  
        $file=$_FILES['txtFile']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel=$objReader->load($file);
            //Lấy sheet hiện tại
            $sheet=$objExcel->getSheet(0);
            $sheetData=$sheet->toArray(null,true,true,true);
            for($i=2;$i<=count($sheetData);$i++){
// ssửa lại các biến
                $makhachhang=$sheetData[$i]["A"];
                $tenkhachhang=$sheetData[$i]["B"];
                $gioitinh=$sheetData[$i]["C"];
                $diachi=$sheetData[$i]["D"];
                $sdt=$sheetData[$i]["E"];
                $ngaysinh=$sheetData[$i]["F"];
                $this->khachhang->khachhang_ins($makhachhang,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang";
                </script>';
        }
    
 }
 ?>
