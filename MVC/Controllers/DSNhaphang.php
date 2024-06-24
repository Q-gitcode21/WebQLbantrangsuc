<?php
 class DSnhaphang extends controller{
    private $dsnh;
    function __construct()
    {
        $this->dsnh=$this->model('Nhaphang_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSnhaphang_v',
            'dulieu'=>$this->dsnh->nhaphang_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $manh=$_POST['txtTimkiemManhaphang'];
            
            
            $dl=$this->dsnh->nhaphang_find($manh); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSnhaphang_v',
                'dulieu'=>$dl,
                'Manhaphang'=>$manh,
            ]);
           

        
    }
    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSnh');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'Manhaphang');
        $sheet->setCellValue('B'.$rowCount,'Thoigiannhap');
        $sheet->setCellValue('C'.$rowCount,'Masp');
        $sheet->setCellValue('D'.$rowCount,'Soluong');
        $sheet->setCellValue('E'.$rowCount,'Donvitinh');
        $sheet->setCellValue('F'.$rowCount,'Mancc');
      
        


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
        $manh=$_POST['txtTimkiemManhaphang'];
            
        $data=$this->dsnh->nhaphang_find($manh);  // goi ham tim kiem
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['Manhaphang']);
            $sheet->setCellValue('B'.$rowCount,$row['Thoigiannhap']);
            $sheet->setCellValue('C'.$rowCount,$row['Masp']);
            $sheet->setCellValue('D'.$rowCount,$row['Soluong']);
            $sheet->setCellValue('E'.$rowCount,$row['Donvitinh']);
            $sheet->setCellValue('F'.$rowCount,$row['Mancc']);
          

            
           
           
        
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
        header('Content-Dinhosition: attachment; filename="'.$fileName.'"');
        header('Content-Type: application/vnd.openxlmformatsofficedocument.nheadsheetml.sheet');
        header('Content-Length: '.filesize($fileName));
        header('Content-Transfer-Encoding:binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: no-cache');
        readfile($fileName);
        }
    
    }
    function xoa($manh){
        $kq=$this->dsnh->nhaphang_del($manh);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSnhaphang";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($manh){
        $nhapHangData =$this->dsnh->getMasp();
        $nhapHangData1 =$this->dsnh->getMancc();
        $this->view('Masterlayout',[
            'page'=>'nhaphang_sua',
            'dulieu'=>$this->dsnh->nhaphang_find($manh,""),'nhapHangData'=>$nhapHangData,'nhapHangData1' =>$nhapHangData1
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $manh=$_POST['txtManhaphang'];
            $tgnhap=$_POST['txtThoigiannhap'];
            $masp=$_POST['ddlSanpham'];
           
            $soluong=$_POST['txtSoluong'];
            $donvi=$_POST['txtDonvitinh'];
            $mancc=$_POST['ddlNhacungcap'];
            
           
            
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dsnh->nhaphang_upd($manh,$tgnhap,$masp,$soluong,$donvi,$mancc);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
             $this->view('Masterlayout',[
                 'page'=>'DSnhaphang_v',
                'dulieu'=>$this->dsnh->nhaphang_find('','')
             ]);
           
        }
    }
}
?>