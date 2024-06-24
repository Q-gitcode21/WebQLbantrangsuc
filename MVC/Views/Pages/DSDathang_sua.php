<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa Thông Tin Đơn Hàng</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMadonhang"  value="<?php  echo $row['Madonhang']?>">
                    <label>Mã Đơn Hàng</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="date" required name="txtNgaydathang"  value="<?php  echo $row['Ngaydathang']?>">
                    <label>Ngày Đặt Hàng</label>
                </div>
               
                <div class="input-box">
                   
                    <!-- <input type="text" required name="txtTrangthaidonhang"  value=""> -->
                    <select name="txtTrangthaidonhang">
                        <option value="Chờ Xác Nhận" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Chờ Xác Nhận') echo 'selected'; ?>>Chờ Xác Nhận</option>
                        <option value="Đã Xác Nhận" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Đã Xác Nhận') echo 'selected'; ?>>Đã Xác Nhận</option>
                        <option value="Chờ Huỷ Hàng" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Chờ Huỷ Hàng') echo 'selected'; ?>>Chờ Huỷ Hàng</option>
                        <option value="Đã Huỷ Hàng" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Đã Huỷ Hàng') echo 'selected'; ?>>Đã Huỷ Hàng</option>
                        <option value="Đã Nhận Hàng" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Đã Nhận Hàng') echo 'selected'; ?>>Đã Nhận Hàng</option>
                        <option value="Chưa Nhận Hàng" <?php if(isset($row['Trangthaidonhang']) && $row['Trangthaidonhang'] === 'Chưa Nhận Hàng') echo 'selected'; ?>>Chưa Nhận Hàng</option>

                        </select>
                   
                </div>
                <div class="input-box">
                    
                    <!-- <input type="text" required name="txtTrangthaithanhtoan"  value=""> -->
                    <div class="input-box">
                        <select name="txtTrangthaithanhtoan">
                        <option value="Chưa Thanh Toán" <?php if(isset($row['Trangthaithanhtoan']) && $row['Trangthaithanhtoan'] === 'Chưa Thanh Toán') echo 'selected'; ?>>Chưa Thanh Toán</option>
                        <option value="Đã Thanh Toán" <?php if(isset($row['Trangthaithanhtoan']) && $row['Trangthaithanhtoan'] === 'Đã Thanh Toán') echo 'selected'; ?>>Đã Thanh Toán</option>
                       
                        </select>
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