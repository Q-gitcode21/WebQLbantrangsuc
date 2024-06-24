<?php
 class DSNhanVien extends controller{
    private $dsnv;
    function __construct()
    {
        $this->dsnv=$this->model('qlnhanvien');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSNhanvien_v',
            'dulieu'=>$this->dsnv->nhanvien_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $manhanvien=$_POST['txtTimkiemma'];
            // lay du lieu nhap tu txt  
            $tennhanvien=$_POST['txtTimkiemten'];
            $dl=$this->dsnv->nhanvien_find($manhanvien,$tennhanvien); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSNhanvien_v',
                'dulieu'=>$dl,
                'Manhanvien'=>$manhanvien,
                'Tennhanvien'=>$tennhanvien
            ]);
           

        
    }
    if(isset($_POST['btnXuatExcel2'])){
        echo 'xuatexcel';
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSHH');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        
        $sheet->setCellValue('A'.$rowCount,'Mã Nhân Viên');
        $sheet->setCellValue('B'.$rowCount,'Tên Nhân Viên');
        $sheet->setCellValue('C'.$rowCount,'Giới Tính');
        $sheet->setCellValue('D'.$rowCount,'Ngày Sinh');
        $sheet->setCellValue('E'.$rowCount,'Điện Thoại');
        $sheet->setCellValue('F'.$rowCount,'Địa Chỉ');
        $sheet->setCellValue('G'.$rowCount,'Phòng Ban');
        
    
        //định dạng cột tiêu đề
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        
        
        //gán màu nền
        $sheet->getStyle('A1:G1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //căn giữa
        $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        $manhanvien=$_POST['txtManhanvien'];
        $tennhanvien=$_POST['txtTennhanvien'];
        $data=$this->dsnv->nhanvien_find($manhanvien,$tennhanvien);
      
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
           
            $sheet->setCellValue('A'.$rowCount,$row['Manhanvien']);
            $sheet->setCellValue('B'.$rowCount,$row['Tennhanvien']);
            $sheet->setCellValue('C'.$rowCount,$row['Gioitinh']);
            $sheet->setCellValue('D'.$rowCount,$row['Ngaysinh']);
            $sheet->setCellValue('E'.$rowCount,$row['Dienthoai']);
            $sheet->setCellValue('F'.$rowCount,$row['Diachi']);
            $sheet->setCellValue('G'.$rowCount,$row['Phongban']);
            
        
        }
        //Kẻ bảng 
        $styleAray=array(
            'borders'=>array(
                'allborders'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_THIN
                )
            )
            );
        $sheet->getStyle('A1:'.'G'.($rowCount))->applyFromArray($styleAray);
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
    function xoa($manhanvien){
        $kq=$this->dsnv->nhanvien_del($manhanvien);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($manhanvien){
        $this->view('Masterlayout',[
            'page'=>'Nhanvien_sua',
            'dulieu'=>$this->dsnv->nhanvien_find($manhanvien,"")
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $manhanvien=$_POST['txtManhanvien'];
            $tennhanvien=$_POST['txtTennhanvien'];
            $gioitinh=$_POST['txtGioitinh'];
            $ngaysinh=$_POST['txtNgaysinh'];
            $dienthoai=$_POST['txtDienthoai'];
            $diachi=$_POST['txtDiachi'];
            $phongban=$_POST['txtPhongban'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dsnv->nhanvien_upd($manhanvien,$tennhanvien,$gioitinh,$ngaysinh,$dienthoai,$diachi,$phongban);
            if($kq){
                echo'<script>alert("Sửa thành công")
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien";
                </script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSTaikhoan_v',
                'dulieu'=>$this->dsnv->nhanvien_find('','')
            ]);
           
        }
    }
}
 
?>