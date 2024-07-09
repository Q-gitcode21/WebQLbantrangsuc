<?php 
 class Ctdonhang extends controller{
    private $chitiet;
    function __construct()
    {
        $this->chitiet=$this->model('qlctdonhang');
        // khởi tạo đối tượng model('donhang_m') gán cho $chitiet
    }
    function Get_data(){
       
        // gọi giao diện chính và truyền dữ liệu page là trang donhang view
        $id=$_SESSION['Id'];
        $this->view('cart_sua',['dulieu'=>$this->chitiet->chitiet($id)]);
       
        
       
           
            
           
        
    }
    function Timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $id=$_SESSION['Id'];
            $madonhang=$_POST['txtTimkiemmadon'];
           
            // lay du lieu nhap tu txt  
            
            $dl=$this->chitiet->chitiet_find($madonhang,$id); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('cart_sua',[
                'dulieu'=>$dl,
                'Madonhang'=>$madonhang,
                'Id'=>$id
                
                
            ]);
        }
   
        
        // gọi gia
    
 }
 function xoa($madonhang){
        $kq=$this->chitiet->chitiet_del($madonhang);
        if($kq){
            echo '<script>
            alert("Xóa thành công");
            window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Ctdonhang";
                </script>';
    exit();
        }
        else{
            echo'<script>alert("Xóa thất bại")</script>';
        }

}
 }