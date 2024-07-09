<!-- goi giao dien và function -->
 <?php 
 class Giaohang extends controller{
    private $giaohang;
    function __construct()
    {
        $this->giaohang=$this->model('Giaohang_m');
        
        // khởi tạo đối tượng model('giaohang_m') gán cho $giaohang
    }
    function Get_data(){
        
        $getMdh=$this->giaohang->getMadonhang();
        $this->view('Masterlayout',['page'=>'Giaohang_them','getMdh'=>$getMdh]);
        
        // gọi giao diện chính và truyền dữ liệu page là trang giaohang view
    }
   
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $mdh=$_POST['selectMadonhang']; 
            $ndh=$_POST['txtNgaydathang'];
            $nnh=$_POST['txtNgaynhanhang'];
            $dvvc=$_POST['selectDonvivanchuyen'];            
            $tt=$_POST['selectTrangthai'];
            $mdh=trim($mdh);
             // chuyển đổi kiểu dữ liệu sang Timestamp
            $ndhTimestamp = strtotime($ndh);
            $nnhTimestamp = strtotime($nnh);
    
        if ($ndhTimestamp > $nnhTimestamp) {
            echo '<script>
            alert("Ngày nhận hàng không thể trước ngày đặt hàng");
             window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang";
            </script>';
            exit(); 
        }
           
            else{
                                  
                    // Kiem tra trung id
            $kq1=$this->giaohang->checktrungma($mdh);
            
            if($kq1){
                echo '<script>
                alert("Trùng mã đơn hàng");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang";
                </script>';
            }
            else{
                     
            $kq=$this->giaohang->giaohang_ins($mdh,$ndh,$nnh,$dvvc,$tt);
            if($kq){
                $uptt=$this->giaohang->update_trangthai($mdh,$tt);
                if($uptt){
                    echo '<script>
                    alert("Cập nhật trạng thái thành công");
                    </script>';
                }
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSGiaohang";
                </script>';
                //hiện thị alert trc khi chuyển trang

                
            exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
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
                $mdh=$sheetData[$i]["A"];
                $ndh=$sheetData[$i]["B"];
                $nnh=$sheetData[$i]["C"];
                $dvvc=$sheetData[$i]["D"];
                $tt=$sheetData[$i]["E"];
                $this->giaohang->giaohang_ins($mdh,$ndh,$nnh,$dvvc,$tt);
            }
            echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSGiaohang";
                </script>';
        }
    
 }
 ?>
