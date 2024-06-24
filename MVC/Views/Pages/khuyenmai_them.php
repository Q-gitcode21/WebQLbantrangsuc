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
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
Public/CSS/dulieu.css">
</head>
<body>
    <form id="myForm" method="post" action="./khuyenmai/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm mã khuyến mãi</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtmakhuyenmai" value="<?php if(isset($data['MaKM'])) echo $data['MaKM']?>">
                    <label>Mã khuyến mãi</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtmota" value="<?php if(isset($data['Mota'])) echo $data['Mota']?>">
                    <label>Mô tả</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtgiatri" value="<?php if(isset($data['Giatri'])) echo $data['Giatri']?>">
                    <label>Giá trị (tiền mặt)</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    </span>
                    <input type="text" required name="txtGiatriphantram" value="<?php if(isset($data['Giatriphantram'])) echo $data['Giatriphantram']?>">
                    <label>Giá trị %</label>
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/
DSkhuyenmai">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>