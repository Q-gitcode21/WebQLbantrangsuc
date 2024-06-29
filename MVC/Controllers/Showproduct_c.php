<?php 
class Showproduct_c extends controller{
    private $show;
    function __construct()
    {
       
    }
    function Get_data(){
        
        
        $this->view('Showproduct');
        
        // gọi giao diện chính và truyền dữ liệu page là trang dangky view
    }
}