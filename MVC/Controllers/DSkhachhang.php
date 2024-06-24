<?php
 class DSkhachhang extends controller{
    private $dskh;
    function __construct()
    {
        $this->dskh=$this->model('khachhang_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSkhachhang_v',
            'dulieu'=>$this->dskh->khachhang_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $tenkhachhang=$_POST['txtTKTKH']; 
            $makhachhang=$_POST['txtTKMKH']; // lay du lieu nhap tu txt  
            
            $dl=$this->dskh->khachhang_find($tenkhachhang,$makhachhang); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSkhachhang_v',
                'dulieu'=>$dl,
                'tenkhachhang'=>$tenkhachhang,
                'makhachhang'=>$makhachhang
            ]);
           

        
    }

    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSKH');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        
        $sheet->setCellValue('A'.$rowCount,'Mã KH');
        $sheet->setCellValue('B'.$rowCount,'Tên KH');
        $sheet->setCellValue('C'.$rowCount,'Giới tính');
        $sheet->setCellValue('D'.$rowCount,'Địa chỉ');
        $sheet->setCellValue('E'.$rowCount,'SĐT');
        $sheet->setCellValue('F'.$rowCount,'Ngày sinh');
    
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
        $tenkhachhang=$_POST['txtTKTKH']; 
            $makhachhang=$_POST['txtTKMKH']; // lay du lieu nhap tu txt  
            
            $dl=$this->dskh->khachhang_find($tenkhachhang,$makhachhang);
        
        while($row=mysqli_fetch_array($dl)){
            $rowCount++;
           
            $sheet->setCellValue('A'.$rowCount,$row['MaKH']);
            $sheet->setCellValue('B'.$rowCount,$row['Ten']);
            $sheet->setCellValue('C'.$rowCount,$row['Gioitinh']);
            $sheet->setCellValue('D'.$rowCount,$row['Diachi']);
            $sheet->setCellValue('E'.$rowCount,$row['SDT']);
            $sheet->setCellValue('F'.$rowCount,$row['Ngaysinh']);
            
           
           
        
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
    function xoa($makhachhang){
        $kq=$this->dskh->khachhang_del($makhachhang);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($makhachhang){
        $this->view('Masterlayout',[
            'page'=>'khachhang_sua',
            'dulieu'=>$this->dskh->khachhang_find($makhachhang,"")
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $makhachhang=$_POST['txtmakhachhang'];
            $tenkhachhang=$_POST['txttenkhachhang'];
            $gioitinh=$_POST['txtgioitinh'];
            $diachi=$_POST['txtdiachi'];
            $sdt=$_POST['txtsdt'];
            $ngaysinh=$_POST['datengaysinh'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dskh->khachhang_upd($makhachhang,$tenkhachhang,$gioitinh,$diachi,$sdt,$ngaysinh);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSkhachhang_v',
                'dulieu'=>$this->dskh->khachhang_find('','')
            ]);
           
        }
    }
}
?>