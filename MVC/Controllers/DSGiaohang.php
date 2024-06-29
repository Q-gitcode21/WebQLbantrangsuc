<?php
 class DSGiaohang extends controller{
    private $dsgh;
    function __construct()
    {
        $this->dsgh=$this->model('Giaohang_m');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        
        $this->view('Masterlayout',[
            'page'=>'DSGiaohang_v',
            'dulieu'=>$this->dsgh->giaohang_find('',''),
            
        ]);
        
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $mdh=$_POST['txtTKMa'];
            $tt=$_POST['txtTKTrangthai']; // lay du lieu nhap tu txt  
            
            $dl=$this->dsgh->giaohang_find($mdh,$tt); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSGiaohang_v',
                'dulieu'=>$dl,
                'madonhang'=>$mdh,
                'trangthai'=>$tt
            ]);
           

        
    }
    if(isset($_POST['btnXuatExcel'])){
        //code xuất excel
        $objExcel=new PHPExcel();
        $objExcel->setActiveSheetIndex(0);
        $sheet=$objExcel->getActiveSheet()->setTitle('DSGH');
        $rowCount=1;
        //Tạo tiêu đề cho cột trong excel
        $sheet->setCellValue('A'.$rowCount,'Mã đơn hàng');
        $sheet->setCellValue('B'.$rowCount,'Ngày đặt hàng');
        $sheet->setCellValue('C'.$rowCount,'Ngày nhận hàng dự kiến');
        $sheet->setCellValue('D'.$rowCount,'Đơn vị vận chuyển');
        $sheet->setCellValue('E'.$rowCount,'Trạng thái');
        
    
        //định dạng cột set autosize
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
            $mdh=$_POST['txtTKMa'];
            $tt=$_POST['txtTKTrangthai']; // lay du lieu nhap tu txt  
            
            $data=$this->dsgh->giaohang_find($mdh,$tt); 
    
        while($row=mysqli_fetch_array($data)){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['Madonhang']);
            $sheet->setCellValue('B'.$rowCount,$row['Ngaydathang']);
            $sheet->setCellValue('C'.$rowCount,$row['Ngaynhanhangdukien']);
            $sheet->setCellValue('D'.$rowCount,$row['Donvivanchuyen']);
            $sheet->setCellValue('E'.$rowCount,$row['Trangthai']);
           
        
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
        $fileName='ExportExcelDSGH.xlsx';
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
    function xoa($mdh){
        $kq=$this->dsgh->giaohang_del($mdh);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSGiaohang";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }
       
    

    }
    function sua($mdh){
        $this->view('Masterlayout',[
            'page'=>'Giaohang_sua',
            'dulieu'=>$this->dsgh->giaohang_findma($mdh)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $mdh=$_POST['selectMadonhang'];
            $ndh=$_POST['txtNgaydathang'];
            $nnh=$_POST['txtNgaynhanhang'];
            $dvvc=$_POST['selectDonvivanchuyen'];
            $tt=$_POST['selectTrangthai'];
           
            
                    // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->dsgh->giaohang_upd($mdh,$ndh,$nnh,$dvvc,$tt);
            if($kq){
                
                    $uptt=$this->dsgh->update_trangthai($mdh,$tt);
                    if($uptt){
                        echo '<script>
                        alert("Cập nhật trạng thái thành công");
                        </script>';
                    
                echo'<script>alert("Sửa thành công")</script>';
            }}
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSGiaohang_v',
                'dulieu'=>$this->dsgh->giaohang_find('','')
            ]);
           
        }
    }
}
?>