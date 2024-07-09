<?php 
class qlctdonhang extends connectDB{
    function chitiet($id){
        $sql = "SELECT * FROM orders WHERE id = $id";
        $result = $this->con->query($sql); // Thực hiện truy vấn và lưu kết quả vào $result
        return $result;
    }
   
    function chitiet_find($madonhang,$id){
        // trường hợp loaddata
       
        // trường hợp tìm kiếm
        
            $sql = "SELECT * FROM orders WHERE Madonhang LIKE '%$madonhang%' AND Id = '$id' " ;
           
       
       
        return mysqli_query($this->con,$sql);
    }
    
    function chitiet_del($madonhang){
        $sql="DELETE FROM orders WHERE Madonhang='$madonhang'";
        return mysqli_query($this->con,$sql);
    }
    
}

?>