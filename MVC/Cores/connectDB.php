<?php
class connectDB{
    public $con;
    function __construct()
    {
       $this->con=mysqli_connect('localhost','root','','qlbanhang') ;
       mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>