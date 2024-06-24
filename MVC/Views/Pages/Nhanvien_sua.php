<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa Thông Tin Nhân Viên</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtManhanvien"  value="<?php  echo $row['Manhanvien']?>">
                    <label>Mã Nhân Viên</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTennhanvien"  value="<?php  echo $row['Tennhanvien']?>">
                    <label>Tên Nhân Viên</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtGioitinh"  value=""> -->
                    <div class="input-box">
                        <select name="txtGioitinh">
                        <option value="Nam" <?php if(isset($row['Gioitinh']) && $row['Gioitinh'] === 'Nam') echo 'selected'; ?>>Nam</option>
                        <option value="Nữ" <?php if(isset($row['Gioitinh']) && $row['Gioitinh'] === 'Nữ') echo 'selected'; ?>>Nữ</option>
                        <option value="Khác" <?php if(isset($row['Gioitinh']) && $row['Gioitinh'] === 'Khác') echo 'selected'; ?>>Khác</option>
                        </select>
</div>
                   
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="date" required name="txtNgaysinh"  value="<?php  echo $row['Ngaysinh']?>">
                    <label>Ngày Sinh</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtDienthoai"  value="<?php  echo $row['Dienthoai']?>">
                    <label>Điện thoại</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtDiachi"  value="<?php  echo $row['Diachi']?>">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    
                    <!-- <input type="text" required name="Phongban"  value=""> -->
                    <div class="input-box">
                        <select name="txtPhongban">
                        <option value="Sale" <?php if(isset($row['Phongban']) && $row['Phongban'] === 'Sale') echo 'selected'; ?>>Sale</option>
                        <option value="Kế Toán" <?php if(isset($row['Phongban']) && $row['Phongban'] === 'Kế Toán') echo 'selected'; ?>>Kế Toán</option>
                        <option value="Khác" <?php if(isset($row['Phongban']) && $row['Phongban'] === 'Khác') echo 'selected'; ?>>Khác</option>
                        </select>
</div>
                   
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <?php
                    }
            }
            ?> 
            
        </div>
        </div>
    </form>
</body>
</html>