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
           
            $id=$_POST['txtTimkiem'];
            $tdn=$_POST['txtTimkiem']; // lay du lieu nhap tu txt  
            
            $dl=$this->dstk->taikhoan_find($id,$tdn); // goi ham tim kiem
            // goi lai giao dien render lại trang va truyen $ dl ra 
            $this->view('Masterlayout',[
                'page'=>'DSTaikhoan_v',
                'dulieu'=>$dl,
                'id'=>$id,
                'tendn'=>$tdn
            ]);
           

        
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