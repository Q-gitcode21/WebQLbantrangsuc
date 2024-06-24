<!-- goi giao dien và function -->
 <?php 
 class khuyenmai extends controller{
    private $khuyenmai;
    function __construct()
    {
        $this->khuyenmai=$this->model('khuyenmai_m');
        // khởi tạo đối tượng model('khuyenmai_m') gán cho $khuyenmai
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'khuyenmai_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang khuyenmai view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $makm=$_POST['txtmakhuyenmai'];
            $mota=$_POST['txtmota'];
            $giatri=$_POST['txtgiatri'];
            $giatriphantram=$_POST['txtGiatriphantram'];
           
            
            // Kiem tra trung id
            $kq1=$this->khuyenmai->checktrungid($makm);
            
            if($kq1){
                echo '<script>
                alert("Trùng ID");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
khuyenmai";
                </script>';
            }
            else{
                    // gọi hàm chèn dl khuyenmai_ins trong model tacgia_m
            $kq=$this->khuyenmai->khuyenmai_ins($makm,$mota,$giatri,$giatriphantram);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/khuyenmai";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
           
            // gọi lại giao diện
            // $this->view('Masterlayout',[
            //     'page'=>'khuyenmai_them',
            //     'id'=> $id,
            //     'email'=>$email,
            //     'tendn'=> $tdn,
            //     'matkhau'=> $mk,
            //     'ngaytao'=> $nt,
                
            // ]);
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
                $makm=$sheetData[$i]["A"];
                $mota=$sheetData[$i]["B"];
                $giatri=$sheetData[$i]["C"];
                $giatriphantram=$sheetData[$i]["D"];
                // $sdt=$sheetData[$i]["E"];
                // $ngaysinh=$sheetData[$i]["F"];
                $this->khuyenmai->khuyenmai_ins($makm,$mota,$giatri,$giatriphantram);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhuyenmai";
                </script>';
        }
    
 }
 ?>
