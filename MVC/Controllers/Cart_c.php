<?php 
class Cart_c extends controller{
    private $cart;
    function __construct()
    {
        
    }
    function Get_data(){
        
        
        $this->view('cart');
        
        // gọi giao diện chính và truyền dữ liệu page là trang dangky view
    }
}