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
    <form id="myForm" method="post" action="./tintuc/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm tin tức</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtid" value="<?php if(isset($data['Id'])) echo $data['Id']?>">
                    <label>ID</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtnoidung" value="<?php if(isset($data['Noidung'])) echo $data['Noidung']?>">
                    <label>Nội dung</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txttieude" value="<?php if(isset($data['Tieude'])) echo $data['Tieude']?>">
                    <label>Tiêu đề</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    </span>
                    <input type="date" required name="txtngaytay" value="<?php if(isset($data['Ngaytao'])) echo $data['Ngaytao']?>">
                    <label>Ngày tạo</label>
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>