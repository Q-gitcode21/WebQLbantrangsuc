<!-- goi giao dien và function -->
 <?php 
 class tintuc extends controller{
    private $tintuc;
    function __construct()
    {
        $this->tintuc=$this->model('tintuc_m');
        // khởi tạo đối tượng model('tintuc_m') gán cho $tintuc
    }
    function Get_data(){
        $this->view('Masterlayout',['page'=>'tintuc_them']);
        // gọi giao diện chính và truyền dữ liệu page là trang tintuc view
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtid'];
            $noidung=$_POST['txtnoidung'];
            $tieude=$_POST['txttieude'];
            $ngaytao=$_POST['txtngaytao'];
            
            $hinhanh=$_FILES['txtHinhanh']['name'];
            echo $hinhanh;
            $target_dir = "upload/";

            $target_file = $target_dir . basename($_FILES["txtHinhanh"]["name"]);
            if (move_uploaded_file($_FILES["txtHinhanh"]["tmp_name"], $target_file)) {
                 echo "The file ". htmlspecialchars( basename( $_FILES["txtHinhanh"]["name"])). " has been uploaded.";
              } else {
                 echo "Sorry, there was an error uploading your file.";
              }
           
            
            // Kiem tra trung id
            $kq1=$this->tintuc->checktrungid($id);
            
            if($kq1){
                echo '<script>
                alert("Trùng ID");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/tintuc";
                </script>';
            }
            else{
                    // gọi hàm chèn dl tintuc_ins trong model tacgia_m
            $kq=$this->tintuc->tintuc_ins($id,$noidung,$tieude,$ngaytao,$hinhanh);
            if($kq){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/tintuc";
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
                $id=$sheetData[$i]["A"];
                $noidung=$sheetData[$i]["B"];
                $tieude=$sheetData[$i]["C"];
                $ngaytao=$sheetData[$i]["D"];
                $hinhanh=$sheetData[$i]["E"];
                // $ngaysinh=$sheetData[$i]["F"];
                $this->tintuc->tintuc_ins($id,$noidung,$tieude,$ngaytao,$hinhanh);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc";
                </script>';
        }
 }
 ?>
