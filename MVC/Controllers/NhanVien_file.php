<?php
class NhanVien_file extends controller{
    private $nv;
    function __construct(){
        $this->nv=$this->model('Nhanvien_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSNhanvien_file_v'
        ]);
    }
    function themmoi(){
         if(isset($_POST['btnUpload2'])){
            $file=$_FILES['txtTenfile']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel=$objReader->load($file);
            //Lấy sheet hiện tại
            $sheet=$objExcel->getSheet(0);
            $sheetData=$sheet->toArray(null,true,true,true);
            for($i=2;$i<=count($sheetData);$i++){
                $manhanvien=$sheetData[$i]["B"];
                $tennhanvien=$sheetData[$i]["C"];
                // $dateTime = DateTime::createFromFormat('d/m/Y', $ngaydathang);
                //  $ngaydathang = $dateTime->format('Y-m-d');
                $gioitinh=$sheetData[$i]["D"];
                $ngaysinh=$sheetData[$i]["E"];
                $dienthoai=$sheetData[$i]["F"];
                $diachi=$sheetData[$i]["G"];
                $phongban=$sheetData[$i]["H"];
                $ns=$this->nv->nhanvien_ins($manhanvien,$tennhanvien,$gioitinh,$ngaysinh,$dienthoai,$diachi,$phongban);
            
            if($ns){
                echo '<script>
                alert("Thêm mới thành công");
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanvien";
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