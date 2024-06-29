<?php
 class DSDonhang extends controller{
    private $qlhh;
    function __construct()
    {
        $this->qlhh=$this->model('qldonhang');
    }
    // getdata de hien thi du lieu khi load trang
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'DSDonhang_v',
            'dulieu'=>$this->qlhh->donhang_find('','')
        ]);

    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
           
            $madonhang=$_POST['txtTimkiemmadon'];
            $makhachhang=$_POST['txtTimkiemmakhach'];
            // lay du lieu nhap tu txt  
            
            $dl=$this->qlhh->donhang_find($madonhang,$makhachhang); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSdonhang_v',
                'dulieu'=>$dl,
                'Madonhang'=>$madonhang,
                'Makhachhang' =>$makhachhang
                
            ]);
        }
        if(isset($_POST['btnXuatExcel1'])){
            echo 'xuatexcel';
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSHH');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'STT');
            $sheet->setCellValue('B'.$rowCount,'Mã Khách Hàng');
            $sheet->setCellValue('C'.$rowCount,'Mã Sản Phẩm');
            $sheet->setCellValue('D'.$rowCount,'Mã Đơn Hàng');
            $sheet->setCellValue('E'.$rowCount,'Số Lượng');
            $sheet->setCellValue('F'.$rowCount,'Tổng Tiền');
            $sheet->setCellValue('G'.$rowCount,'Voucher');
            $sheet->setCellValue('H'.$rowCount,'Ngày Đặt Hàng');
            $sheet->setCellValue('I'.$rowCount,'Địa Chỉ');
        
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            
            //gán màu nền
            $sheet->getStyle('A1:I1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:I1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $madonhang=$_POST['txtMadonhang'];
            $makhachhang=$_POST['txtMakhachhang'];
            $data=$this->qlhh->donhang_find($madonhang,$makhachhang);
            $i=1;
            while($row=mysqli_fetch_array($data)){
                $rowCount++;
                $sheet->setCellValue('A'.$rowCount,$i++);
                $sheet->setCellValue('B'.$rowCount,$row['Makhachhang']);
                $sheet->setCellValue('C'.$rowCount,$row['Masanpham']);
                $sheet->setCellValue('D'.$rowCount,$row['Madonhang']);
                $sheet->setCellValue('E'.$rowCount,$row['Soluong']);
                $sheet->setCellValue('F'.$rowCount,$row['Tongtien']);
                $sheet->setCellValue('G'.$rowCount,$row['Voucher']);
                $sheet->setCellValue('H'.$rowCount,$row['Ngaydathang']);
                $sheet->setCellValue('I'.$rowCount,$row['Diachi']);
            
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
    // function xoa($madonhang){
    //     $kq=$this->qlhh->donhang_del($madonhang);
    //     if($kq){
    //         echo '<script>
    //         alert("Xóa thành công");
    //         window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang";
    //             </script>';
    // exit();
    //     }
    //     else{
    //         echo'<script>alert("Xóa thất bại")</script>';
    //     }
       
    

    // }
    function sua($madonhang){
        
        // $getMasp=$this->qlhh->getMasp();
        // $getMadonhang=$this->qlhh->getMadonhang();
        // $getMaKH=$this->qlhh->getMaKH();
        // $getGiatri=$this->qlhh->getGiatri();
       
       
        $this->view('Masterlayout',[
            'page'=>'Donhang_sua',
            'dulieu'=>$this->qlhh->donhang_find($madonhang,""),
        
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
           
            $madonhang=$_POST['txtMadonhang'];
           
            $trangthai=$_POST['txtTrangthai'];
            
                                               // gọi hàm chèn dl tacgia_ins trong model tacgia_m
            $kq=$this->qlhh->donhang_upd($madonhang,$trangthai);
            if($kq){
                echo'<script>alert("Sửa thành công")
                window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang";
                </script>';
            }
            else{
                echo'<script>alert("Sửa thất bại")</script>';
            }
            
            // gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'DSDonhang_v',
                'dulieu'=>$this->qlhh->donhang_find('','')
            ]);
           
        }
    }
   
}
 
?>