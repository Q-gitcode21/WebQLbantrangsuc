<?php
 class DSTaikhoan extends controller{
    private $dstk;
    function __construct()
    {
        $this->dstk=$this->model('Taikhoan_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSTaikhoan_v',
            'dulieu'=>$this->dstk->taikhoan_find('','')
        ]);
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $id=$_POST['txtTKID'];
            $tdn=$_POST['txtTKTen']; // lay du lieu nhap tu txt  
            
            $dl=$this->dstk->taikhoan_find($id,$tdn); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSTaikhoan_v',
                'dulieu'=>$dl,
                'id'=>$id,
                'tendn'=>$tdn
            ]);
           

        
    }
    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSLS');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'STT');
        $sheet->setCellValue('B'.$rowCount,'Id');
        $sheet->setCellValue('C'.$rowCount,'Email');
        $sheet->setCellValue('D'.$rowCount,'Tendn');
        $sheet->setCellValue('E'.$rowCount,'Matkhau');
        $sheet->setCellValue('F'.$rowCount,'Ngaytao');
    
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
        $id=$_POST['txtTKID'];
        $tdn=$_POST['txtTKTen']; // lay du lieu nhap tu txt              
        $data=$this->dstk->taikhoan_find($id,$tdn);
        $i=1;
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$i++);
            $sheet->setCellValue('B'.$rowCount,$row['Id']);
            $sheet->setCellValue('C'.$rowCount,$row['Email']);
            $sheet->setCellValue('D'.$rowCount,$row['Tendn']);
            $sheet->setCellValue('E'.$rowCount,$row['Matkhau']);
            $sheet->setCellValue('F'.$rowCount,$row['Ngaytao']);
            
           
           
        
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
    function xoa($id){
        $kq=$this->dstk->taikhoan_del($id);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSTaikhoan";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'Taikhoan_sua',
            'dulieu'=>$this->dstk->taikhoan_find($id,"")
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtId'];
            $email=$_POST['txtEmail'];
            $tdn=$_POST['txtTendangnhap'];
            $mk=$_POST['txtMatkhau'];
            $nt=$_POST['dateNgaytao'];
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dstk->taikhoan_upd($id,$email,$tdn,$mk,$nt);
            if($kq){
                echo'<script>alert("Sửa thành công")</script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSTaikhoan_v',
                'dulieu'=>$this->dstk->taikhoan_find('','')
            ]);
           
        }
    }
}
?>