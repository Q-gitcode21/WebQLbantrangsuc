<!-- goi giao dien và function -->
<?php 
 class Danhmuc extends controller{
    private $Danhmuc;
    function __construct()
    {
        $this->Danhmuc=$this->model('Danhmuc_m');
        // khởi tạo đối tượng model('Danhmuc_m') gán cho $Danhmuc
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'Danhmuc_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang Danhmuc view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $madm=$_POST['txtMadm'];
            $tendm=$_POST['txtTendm'];
            $mota=$_POST['txtMota'];
            
            // Kiem tra trung madm
            $kq1=$this->Danhmuc->checktrungmadm($madm);
            
            if($kq1){
                echo'<script>alert("Trùng madm")</script>';
            }
            else{
                    // gọi hàm chèn dl Danhmuc_ins trong model tacgia_m
            $kq=$this->Danhmuc->Danhmuc_ins($madm,$tendm,$mota);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/danhmuc";
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
// ssửa lại các biến
                $madm=$sheetData[$i]["A"];
                $tendm=$sheetData[$i]["B"];
                $mota=$sheetData[$i]["C"];
                $this->Danhmuc->Danhmuc_ins($madm,$tendm,$mota);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDanhMuc";
                </script>';
        }
    
 }
 ?>
