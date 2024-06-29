<?php 
class Checkout_c extends controller{
    private $cart,$kh;
    function __construct()
    {
        $this->kh=$this->model('khachhang_m');
    }
    function Get_data(){
        
        $id=$_SESSION['Id'];
        // echo $id;
        $this->view('checkout',['dulieu'=>$this->kh->khachhang_find($id,'')]);
        
        // gọi giao diện chính và truyền dữ liệu page là trang dangky view
    }
}