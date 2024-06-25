<!-- goi giao dien và function -->
 <?php 
 class Taikhoan extends controller{
    private $taikhoan;
    private $check;
    function __construct()
    {
        $this->taikhoan=$this->model('Taikhoan_m');
        $this->check=$this->model('Dangky_m');
        // khởi tạo đối tượng model('Taikhoan_m') gán cho $taikhoan
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'Taikhoan_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang taikhoan view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            
            $email=$_POST['txtEmail'];
            $quyen=$_POST['txtQuyen'];
            $mk=$_POST['txtMatkhau'];
           
            
            // Kiem tra trung id
            $kq1=$this->check->checktrungemail($email);
            
            if($kq1){
                echo'<script>alert("Trùng ID");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Taikhoan";
                </script>';
                
            }
            else{
            $kq=$this->taikhoan->taikhoan_ins($email,$mk,$quyen);
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
                $id=$sheetData[$i]["A"];
                $email=$sheetData[$i]["B"];
                $quyen=$sheetData[$i]["C"];
                $mk=$sheetData[$i]["D"];
                $nt=$sheetData[$i]["E"];
                $this->taikhoan->taikhoan_ins($id,$email,$quyen,$mk,$nt);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSTaikhoan";
                </script>';
        }
    
 }
 ?>
