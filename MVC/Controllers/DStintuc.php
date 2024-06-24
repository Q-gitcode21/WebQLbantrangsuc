<?php
 class DStintuc extends controller{
    private $dstt;
    function __construct()
    {
        $this->dstt=$this->model('tintuc_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DStintuc_v',
            'dulieu'=>$this->dstt->tintuc_find('','')
        ]);
    }
    
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $tieude=$_POST['txtTKTD']; 
            $noidung=$_POST['txtTKND']; // lay du lieu nhap tu txt  
            
            $dl=$this->dstt->tintuc_find($tieude,$noidung); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DStintuc_v',
                'dulieu'=>$dl,
                'tieude'=>$tieude,
                'noidung'=>$noidung
            ]);
           

        
    }

    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSLS');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'Id');
        $sheet->setCellValue('B'.$rowCount,'Noidung');
        $sheet->setCellValue('C'.$rowCount,'Tieude');
        $sheet->setCellValue('D'.$rowCount,'Ngaytao');
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
        $tieude=$_POST['txtTKTD']; 
        $noidung=$_POST['txtTKND']; // lay du lieu nhap tu txt      
        $dl=$this->dstt->tintuc_find($tieude,$noidung); // goi ham tim kiem
        
        while($row=mysqli_fetch_array($dl)){
            $rowCount++;
            
            $sheet->setCellValue('A'.$rowCount,$row['Id']);
            $sheet->setCellValue('B'.$rowCount,$row['Noidung']);
            $sheet->setCellValue('C'.$rowCount,$row['Tieude']);
            $sheet->setCellValue('D'.$rowCount,$row['Ngaytao']);
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
    function xoa($id){
        $kq=$this->dstt->tintuc_del($id);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'tintuc_sua',
            'dulieu'=>$this->dstt->tintuc_findid($id)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtid'];
            $noidung=$_POST['txtnoidung'];
            $tieude=$_POST['txttieude'];
            $ngaytao=$_POST['txtngaytao'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dstt->tintuc_upd($id,$noidung,$tieude,$ngaytao);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DStintuc_v',
                'dulieu'=>$this->dstt->tintuc_find('','')
            ]);
           
        }
    }
}
?>