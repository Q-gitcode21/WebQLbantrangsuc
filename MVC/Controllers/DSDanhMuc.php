<?php
 class DSDanhMuc extends controller{
    private $dsdm;
    function __construct()
    {
        $this->dsdm=$this->model('Danhmuc_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSDanhmuc_v',
            'dulieu'=>$this->dsdm->danhmuc_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $madm=$_POST['txtTimkiemMadm'];
            $tendm=$_POST['txtTimkiemTendm']; // lay du lieu nhap tu txt  
            
            $dl=$this->dsdm->danhmuc_find($madm,$tendm); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSDanhmuc_v',
                'dulieu'=>$dl,
                'Madm'=>$madm,
                'Tendm'=>$tendm
            ]);
    
    }
    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSDM');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'Madm');
        $sheet->setCellValue('B'.$rowCount,'Tendm');
        $sheet->setCellValue('C'.$rowCount,'Mota');

        //định dạng cột tiêu đề
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        //gán màu nền
        $sheet->getStyle('A1:C1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //căn giữa
        $sheet->getStyle('A1:C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        $madm=$_POST['txtTimkiemMadm'];
        $tendm=$_POST['txtTimkiemTendm']; // lay du lieu nhap tu txt  
        
        $data=$this->dsdm->danhmuc_find($madm,$tendm);
       
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['Madm']);
            $sheet->setCellValue('B'.$rowCount,$row['Tendm']);
            $sheet->setCellValue('C'.$rowCount,$row['Mota']);
            
           
           
        
        }
        //Kẻ bảng 
        $styleAray=array(
            'borders'=>array(
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN
                )
            )
            );
        $sheet->getStyle('A1:'.'C'.($rowCount))->applyFromArray($styleAray);
        $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
        $fileName='ExportExcel.xlsx';
        $objWriter->save($fileName);
        header('Content-Disposition: attachment; filename="'.$fileName.'"');
        header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
        header('Content-Length: '.filesize($fileName));
        header('Content-Transfer-Encoding:binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: no-cache');
        readfile($fileName);
        }
    }
    function xoa($madm){
        $kq=$this->dsdm->danhmuc_del($madm);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSdanhmuc";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($madm){
        $this->view('Masterlayout',[
            'page'=>'danhmuc_sua',
            'dulieu'=>$this->dsdm->danhmuc_find($madm,"")
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $madm=$_POST['txtMadm'];
            $tendm=$_POST['txtTendm'];
            $mota=$_POST['txtMota'];
            
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dsdm->danhmuc_upd($madm,$tendm,$mota);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSDanhmuc_v',
                'dulieu'=>$this->dsdm->danhmuc_find('','')
            ]);
           
        }
    }
}
?>