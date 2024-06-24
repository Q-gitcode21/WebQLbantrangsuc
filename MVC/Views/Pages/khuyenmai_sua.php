<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
DSkhuyenmai/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa mã khuyến mãi</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtmakhuyenmai" value="<?php  echo $row['MaKM']?>" readonly >
                    <label>Mã khuyến mãi</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtmota" value="<?php  echo $row['Mota']?>">
                    <label>Mô tả</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="int" required name="txtgiatri" value="<?php  echo $row['Giatri']?>">
                    <label>Giá trị(tiền mặt)</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="int" required name="txtGiatriphantram" value="<?php  echo $row['Giatriphantram']?>" >
                    <label>Giá trị %</label>
                </div>
                
                <br>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
DSkhuyenmai">Quay lại</a>
                </div>
                <?php
                    }
            }
            ?> 
            
        </div>
        </div>
    </form>
</body>
</html>