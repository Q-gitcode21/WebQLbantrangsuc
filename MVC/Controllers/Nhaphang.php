<!-- goi giao dien và function -->
<?php 
 class Nhaphang extends controller{
    private $Nhaphang;
    function __construct()
    {
        $this->Nhaphang=$this->model('Nhaphang_m');
        // khởi tạo đối tượng model('Nhaphang_m') gán cho $Nhaphang
    }
    function Get_data(){
        $nhapHangData =$this->Nhaphang->getMasp();
        $nhapHangData1 =$this->Nhaphang->getMancc();
        

        $this->view('Masterlayout',['page'=>'Nhaphang_them','nhapHangData'=>$nhapHangData,'nhapHangData1' =>$nhapHangData1]);

        // gọi giao diện chính và truyền dữ liệu page là trang Nhaphang view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $manh=$_POST['txtManhaphang'];
            $tgnhap=$_POST['txtThoigiannhap'];
            $masp=$_POST['ddlSanpham'];
            $soluong=$_POST['txtSoluong'];
            $donvi=$_POST['txtDonvitinh'];
            $mancc=$_POST['ddlNhacungcap'];


            
            // Kiem tra trung madm
            $kq1=$this->Nhaphang->checktrungmanh($manh);
            
            if($kq1){
                echo'<script>alert("Trùng manh")</script>';
            }
            else{
                    // gọi hàm chèn dl Nhaphang_ins trong model tacgia_m
            $kq=$this->Nhaphang->Nhaphang_ins($manh,$tgnhap,$masp,$soluong,$donvi,$mancc);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Nhaphang";
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
                $manh=$sheetData[$i]["A"];
                $tgnhap=$sheetData[$i]["B"];
                $masp=$sheetData[$i]["C"];
                $soluong=$sheetData[$i]["D"];
                $donvi=$sheetData[$i]["E"];
                $mancc=$sheetData[$i]["F"];
                

                $this->Nhaphang->Nhaphang_ins($manh,$tgnhap,$masp,$soluong,$donvi,$mancc);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang";
                </script>';
        }
    
 }
 ?>
