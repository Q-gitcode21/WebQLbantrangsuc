<?php
 class DSNhacungcap extends controller{
    private $dsncc;
    function __construct()
    {
        $this->dsncc=$this->model('Nhacungcap_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSNhacungcap_v',
            'dulieu'=>$this->dsncc->nhacungcap_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $mancc=$_POST['txtTKMa'];
            $tenncc=$_POST['txtTKTen']; // lay du lieu nhap tu txt  
            
            $dl=$this->dsncc->nhacungcap_find($mancc,$tenncc); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSNhacungcap_v',
                'dulieu'=>$dl,
                'mancc'=>$mancc,
                'tenncc'=>$tenncc
            ]);
           

        
    }
    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSNCC');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'Mã NCC');
        $sheet->setCellValue('B'.$rowCount,'Tên NCC');
        $sheet->setCellValue('C'.$rowCount,'Địa chỉ');
        $sheet->setCellValue('D'.$rowCount,'SĐT');
        $sheet->setCellValue('E'.$rowCount,'Email');
        $sheet->setCellValue('F'.$rowCount,'Mã số thuế');
    
        //định dạng cột tiêu đề
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        //gán màu nền
        $sheet->getStyle('A1:F1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //căn giữa
        $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        $mancc=$_POST['txtTKMa'];
        $tenncc=$_POST['txtTKTen']; // lay du lieu nhap tu txt  
        
        $data=$this->dsncc->nhacungcap_find($mancc,$tenncc);
    
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['Mancc']);
            $sheet->setCellValue('B'.$rowCount,$row['Tenncc']);
            $sheet->setCellValue('C'.$rowCount,$row['Diachi']);
            $sheet->setCellValue('D'.$rowCount,$row['Sdt']);
            $sheet->setCellValue('E'.$rowCount,$row['Email']);
            $sheet->setCellValue('F'.$rowCount,$row['Masothue']);
        
        }
        //Kẻ bảng 
        $styleAray=array(
            'borders'=>array(
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN
                )
            )
            );
        $sheet->getStyle('A1:'.'F'.($rowCount))->applyFromArray($styleAray);
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
    
    function xoa($mancc){
        
        $kq=$this->dsncc->nhacungcap_del($mancc);
        
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhacungcap";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($mancc){
        
       
       
        $this->view('Masterlayout',[
            'page'=>'Nhacungcap_sua',
            'dulieu'=>$this->dsncc->nhacungcap_findma($mancc)
        ]);
        
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
                      
            $mancc = $_POST['txtMancc'];           
            $tenncc=$_POST['txtTenncc'];
            $diachi=$_POST['txtDiachi'];
            $sdt=$_POST['txtSodienthoai'];
            $email=$_POST['txtEmail'];
            $mst=$_POST['txtMasothue'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dsncc->nhacungcap_upd($mancc,$tenncc,$diachi,$sdt,$email,$mst);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSNhacungcap_v',
                'dulieu'=>$this->dsncc->nhacungcap_find('','')
            ]);
           
        }
    }
}
?>