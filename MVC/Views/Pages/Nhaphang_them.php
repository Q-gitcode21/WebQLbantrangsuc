<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quaylai {
    text-align: center;
    justify-content: center;
    padding-top: 5px;
}
    </style>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form id="myForm" method="post" action="./Nhaphang/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm nhập hàng</h2>

            <form action="#">
               
                <div class="input-box">
                    
                    <input  style="padding: 0px 5px 0px 200px;" type="date" required name="txtThoigiannhap" value="<?php if(isset($data['Thoigiannhap'])) echo $data['Thoigiannhap']?>">
                    <label>Thời gian nhập</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <label></label>
                    <select name="ddlSanpham" id="">
                                    <option value="">Chọn sản phẩm</option>
                                    <?php 
                            if(isset($data['nhapHangData']) && mysqli_num_rows($data['nhapHangData'])>0){
                                
                                    while($row=mysqli_fetch_array($data['nhapHangData'])){
                                        echo'<option value="'.$row['Masp'].'">'.$row['Tensp'].'</option>';
                                        
                                    }
                            }
                            ?>

                                </select>
                                
                                <input type="text" class="form-control" name="txtMasp">
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtGianhap" value="<?php if(isset($data['Gianhap'])) echo $data['Gianhap']?>">
                    <label>Giá nhập</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSoluong" value="<?php if(isset($data['Soluong'])) echo $data['Soluong']?>">
                    <label>Số lượng</label>   
                </div>
                <label>Đơn vị tính</label>
                <div class="input-box">
                 
                        <select style="width:100%" name="ddlDonvitinh">
                        <option value="bộ" <?php if(isset($row['Donvitinh']) && $row['Donvitinh'] === 'bộ') echo 'selected'; ?>>bộ</option>
                        <option value="chiếc" <?php if(isset($row['Donvitinh']) && $row['Donvitinh'] === 'chiếc') echo 'selected'; ?>>chiếc</option>
                        </select>
                </div>
              
                <div class="input-box">
                    
                    <label></label>
                    <select name="ddlNhacungcap" id="">
                                    <option value=""> Chọn nhà cung cấp</option>
                                    <?php 
                            if(isset($data['nhapHangData1']) && mysqli_num_rows($data['nhapHangData1'])>0){
                                
                                    while($row=mysqli_fetch_array($data['nhapHangData1'])){
                                        echo'<option value="'.$row['Mancc'].'">'.$row['Tenncc'].'</option>';
                                        
                                    }
                            }
                            ?>

                                </select>
                                
                                <input type="text" class="form-control" name="txtMancc">   
                </div>

                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang">Quay lại</a>
                </div>
           
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>