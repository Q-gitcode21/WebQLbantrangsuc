<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Cập nhật Đơn hàng</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input style="padding-left: 150px;" type="text" required name="txtMadonhang"  value="<?php  echo $row['Madonhang']?>" readonly>
                    <label>Mã đơn hàng</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input style="padding-left: 150px;" type="text" required name="txtIdkhachhang"  value="<?php  echo $row['Id']?>" readonly>
                    <label>ID khách hàng</label>

                </div>
                <div class="input-box">
                    
                    <input style="padding-left: 150px;" type="text" required name="txtSDT"  value="<?php  echo $row['SDT']?>" readonly>
                    <label>Số Điện thoại</label>
                </div>
                <div class="input-box">
                    
                    <input style="padding-left: 150px;" type="text" required name="txtDiachi"  value="<?php  echo $row['Diachi']?>" readonly>
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtGioitinh"  value=""> -->
                    <div class="input-box">
                        <select style="width:100%" name="txtTrangthai" disabled>
                        <option value="Chờ xác nhận" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Chờ xác nhận') echo 'selected'; ?>>Chờ xác nhận</option>
                        <option value="Đang vận chuyển" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Đang vận chuyển') echo 'selected'; ?>>Đang vận chuyển</option>
                        <option value="Thành công" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Thành công') echo 'selected'; ?>>Thành công</option>
                        <option value="Không thành công" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Không thành công') echo 'selected'; ?>>Không thành công</option>
                        </select>
</div>
                   
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input style="padding-left: 150px;" type="date" required name="txtNgaydathang"  value="<?php  echo $row['Ngaydathang']?>" readonly>
                    <label>Ngày đặt hàng</label>
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