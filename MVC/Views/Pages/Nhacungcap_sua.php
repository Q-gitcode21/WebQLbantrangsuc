<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css?v=<?php echo time();?>">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhacungcap/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                // row[tên cột trong sql]
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa nhà cung cấp</h2>
            <form action="#">
                        <!-- thẻ ẩn lưu tt mã ncc  -->
                <input type="hidden" name="txtMancc" value="<?php echo $row['Mancc'] ?>">
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTenncc" value="<?php  echo $row['Tenncc']?>">
                    <label>Tên NCC</label>
                </div>               
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtDiachi" value="<?php echo $row['Diachi']?>">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSodienthoai" value="<?php echo $row['Sdt']?>">
                    <label>Số điện thoại</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="email" required name="txtEmail" value="<?php echo $row['Email']?>">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtMasothue" value="<?php echo $row['Masothue']?>">
                    <label>Mã số thuế</label>
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