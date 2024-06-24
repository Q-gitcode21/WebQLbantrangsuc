<?php
class DonHang_file extends controller{
    private $gh;
    function __construct(){
        $this->gh=$this->model('DonHang_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSDonhang_file_v'
        ]);
    }
    function themmoi(){
         if(isset($_POST['btnUpload1'])){
            $file=$_FILES['txtTenfile']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel=$objReader->load($file);
            //Lấy sheet hiện tại
            $sheet=$objExcel->getSheet(0);
            $sheetData=$sheet->toArray(null,true,true,true);
            for($i=2;$i<=count($sheetData);$i++){
                $makhachhang=$sheetData[$i]["B"];
                $masanpham=$sheetData[$i]["C"];
                // $dateTime = DateTime::createFromFormat('d/m/Y', $ngaydathang);
                //  $ngaydathang = $dateTime->format('Y-m-d');
                $madonhang=$sheetData[$i]["D"];
                $soluong=$sheetData[$i]["E"];
                $tongtien=$sheetData[$i]["F"];
                $voucher=$sheetData[$i]["G"];
                $ngaydathang=$sheetData[$i]["H"];
                $diachi=$sheetData[$i]["I"];
                $nh=$this->gh->donhang_ins($makhachhang, $masanpham,$madonhang,$soluong,$tongtien, $voucher,$ngaydathang,  $diachi);
            
            if($nh){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang";
                </script>';
                // hiện thị alert trc khi chuyển trang
    exit();
                
            }
            else
                echo'<script>alert("Thêm mới thất bại")</script>';
            }
         }
    }
}
?>