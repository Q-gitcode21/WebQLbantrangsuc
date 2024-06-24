<?php
class DatHang_file extends controller{
    private $dh;
    function __construct(){
        $this->dh=$this->model('DatHang_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSDathang_file_v'
        ]);
    }
    function themmoi(){
         if(isset($_POST['btnUpload'])){
            $file=$_FILES['txtTenfile']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel=$objReader->load($file);
            //Lấy sheet hiện tại
            $sheet=$objExcel->getSheet(0);
            $sheetData=$sheet->toArray(null,true,true,true);
            for($i=2;$i<=count($sheetData);$i++){
                $madonhang=$sheetData[$i]["B"];
                $ngaydathang=$sheetData[$i]["C"];
                $dateTime = DateTime::createFromFormat('d/m/Y', $ngaydathang);
                 $ngaydathang = $dateTime->format('Y-m-d');
                $tongtien=$sheetData[$i]["D"];
                $trangthaigiaohang=$sheetData[$i]["E"];
                $trangthaithanhtoan=$sheetData[$i]["F"];
                $ne=$this->dh->dathang_ins($madonhang,$ngaydathang,$tongtien,$trangthaigiaohang,$trangthaithanhtoan);
            
            if($ne){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang";
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