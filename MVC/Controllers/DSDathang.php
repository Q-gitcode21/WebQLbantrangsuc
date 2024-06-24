<?php
 class DSDathang extends controller{
    private $qldh;
    function __construct()
    {
        $this->qldh=$this->model('qldathang');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSDathang_v',
            'dulieu'=>$this->qldh->dathang_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $madonhang=$_POST['txtTimkiemmahang'];
            // lay du lieu nhap tu txt  
            
            $dl=$this->qldh->dathang_find($madonhang); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSDathang_v',
                'dulieu'=>$dl,
                'Madonhang'=>$madonhang,
                
            ]);
        }
           if(isset($_POST['btnXuatExcel'])){
            echo 'xuatexcel';
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSDH');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'STT');
            $sheet->setCellValue('B'.$rowCount,'Mã Đơn Hàng');
            $sheet->setCellValue('C'.$rowCount,'Ngày Đặt Hàng');
           
            $sheet->setCellValue('D'.$rowCount,'Trạng Thái Đơn Hàng');
            $sheet->setCellValue('E'.$rowCount,'Trạng Thái Thanh Toán');
        
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
         
            
            //gán màu nền
            $sheet->getStyle('A1:E1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $madonhang=$_POST['txtMadonhang'];
            
            $data=$this->qldh->dathang_find($madonhang);
            $i=1;
            while($row=mysqli_fetch_array($data)){
                $rowCount++;
                $sheet->setCellValue('A'.$rowCount,$i++);
                $sheet->setCellValue('B'.$rowCount,$row['Madonhang']);
                $sheet->setCellValue('C'.$rowCount,$row['Ngaydathang']);
                
                $sheet->setCellValue('D'.$rowCount,$row['Trangthaidonhang']);
                $sheet->setCellValue('E'.$rowCount,$row['Trangthaithanhtoan']);
            
            }
            //Kẻ bảng 
            $styleAray=array(
                'borders'=>array(
                    'allborders'=>array(
                        'style'=>PHPExcel_Style_Border::BORDER_THIN
                    )
                )
                );
            $sheet->getStyle('A1:'.'E'.($rowCount))->applyFromArray($styleAray);
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
    function xoa($madonhang){
        $kq=$this->qldh->dathang_del($madonhang);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($madonhang){
        $this->view('Masterlayout',[
            'page'=>'DSDathang_sua',
            'dulieu'=>$this->qldh->dathang_find($madonhang,"")
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $madonhang=$_POST['txtMadonhang'];
            $ngaydathang=$_POST['txtNgaydathang'];
            
            $trangthaidonhang=$_POST['txtTrangthaidonhang'];
            $trangthaithanhtoan=$_POST['txtTrangthaithanhtoan'];
            
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->qldh->dathang_upd($madonhang,$ngaydathang,$trangthaidonhang, $trangthaithanhtoan);
            if($kq){
                echo'<script>alert("Sửa thành công")
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang";
                </script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSDathang_v',
                'dulieu'=>$this->qldh->dathang_find('','')
            ]);
           
        }
    }
}
 
?>