<?php
 class DSkhuyenmai extends controller{
    private $dskm;
    function __construct()
    {
        $this->dskm=$this->model('khuyenmai_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSkhuyenmai_v',
            'dulieu'=>$this->dskm->khuyenmai_find('','')
        ]);
    }
    
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $makm=$_POST['txtTKKM']; 
            $giatri=$_POST['txtTKGT']; // lay du lieu nhap tu txt  
            $dl=$this->dskm->khuyenmai_find($makm,$giatri); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSkhuyenmai_v',
                'dulieu'=>$dl,
                'khuyenmai'=>$makm,
                'giatri'=>$giatri
            ]);
           

        
    }

    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSLS');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'MaKM');
        $sheet->setCellValue('B'.$rowCount,'Mota');
        $sheet->setCellValue('C'.$rowCount,'Giatri');
        $sheet->setCellValue('D'.$rowCount,'Giatriphantram');
        // $sheet->setCellValue('E'.$rowCount,'Matkhau');
        // $sheet->setCellValue('F'.$rowCount,'Ngaytao');
    
        //định dạng cột tiêu đề
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        // $sheet->getColumnDimension('E')->setAutoSize(true);
        // $sheet->getColumnDimension('F')->setAutoSize(true);
        //gán màu nền
        $sheet->getStyle('A1:D1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //căn giữa
        $sheet->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        $makm=$_POST['txtTKKM']; 
        $giatri=$_POST['txtTKGT']; // lay du lieu nhap tu txt  
        $dl=$this->dskm->khuyenmai_find($makm,$giatri); // goi ham tim kiem
        
        while($row=mysqli_fetch_array($dl)){
            $rowCount++;
           
            $sheet->setCellValue('A'.$rowCount,$row['MaKM']);
            $sheet->setCellValue('B'.$rowCount,$row['Mota']);
            $sheet->setCellValue('C'.$rowCount,$row['Giatri']);
            $sheet->setCellValue('D'.$rowCount,$row['Giatriphantram']);
            // $sheet->setCellValue('F'.$rowCount,$row['Ngaytao']);
            
           
           
        
        }
        //Kẻ bảng 
        $styleAray=array(
            'borders'=>array(
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN
                )
            )
            );
        $sheet->getStyle('A1:'.'D'.($rowCount))->applyFromArray($styleAray);
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
    function xoa($makm){
        $kq=$this->dskm->khuyenmai_del($makm);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhuyenmai";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($makm){
        $this->view('Masterlayout',[
            'page'=>'khuyenmai_sua',
            'dulieu'=>$this->dskm->khuyenmai_findid($makm)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $makm=$_POST['txtmakhuyenmai'];
            $mota=$_POST['txtmota'];
            $giatri=$_POST['txtgiatri'];
            $giatriphantram=$_POST['txtGiatriphantram'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dskm->khuyenmai_upd($makm,$mota,$giatri,$giatriphantram);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSkhuyenmai_v',
                'dulieu'=>$this->dskm->khuyenmai_find('','')
            ]);
           
        }
    }
}
?>