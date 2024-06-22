<!-- goi giao dien và function -->
 <?php 
 class Nhacungcap extends controller{
    private $nhacungcap;
    function __construct()
    {
        $this->nhacungcap=$this->model('Nhacungcap_m');
        // khởi tạo đối tượng model('Nhacungcap_m') gán cho $nhacungcap
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'Nhacungcap_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang nhacungcap view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            
            $tenncc=$_POST['txtTenncc'];
            $diachi=$_POST['txtDiachi'];
            $sdt=$_POST['txtSodienthoai'];
            $email=$_POST['txtEmail'];
            $mst=$_POST['txtMasothue'];
            
            // Kiem tra trung id
            // $kq1=$this->nhacungcap->checktrungid($tenncc);
            // ko cần vì để khóa tự động
            
            
                    // gọi hàm chèn dl nhacungcap_ins trong model tacgia_m
            $kq=$this->nhacungcap->nhacungcap_ins($tenncc,$diachi,$sdt,$email,$mst);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Nhacungcap";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
           
        }
        function upload(){
  
            $file=$_FILES['txtFile']['tmp_name'];
                $objReader=PHPExcel_IOFactory::createReaderForFile($file);
                $objExcel=$objReader->load($file);
                //Lấy sheet hiện tại
                $sheet=$objExcel->getSheet(0);
                $sheetData=$sheet->toArray(null,true,true,true);
                for($i=2;$i<=count($sheetData);$i++){
                    $tenncc=$sheetData[$i]["A"];
                    $diachi=$sheetData[$i]["B"];
                    $sdt=$sheetData[$i]["C"];
                    $email=$sheetData[$i]["D"];
                    $mst=$sheetData[$i]["E"];
                    $this->nhacungcap->nhacungcap_ins($tenncc,$diachi,$sdt,$email,$mst);
                }
                echo '<script>
                    alert("Thêm mới thành công");
                    window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhacungcap";
                    </script>';
            }
    }
    
 
 ?>
