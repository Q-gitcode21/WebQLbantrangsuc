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
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css?v=<?php echo time();?>">
</head>
<body>
    <form id="myForm" method="post" action="./Taikhoan/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm tài khoản</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtId" value="<?php if(isset($data['id'])) echo $data['id']?>">
                    <label>ID</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="email" required name="txtEmail" value="<?php if(isset($data['email'])) echo $data['email']?>">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTendangnhap" value="<?php if(isset($data['tendn'])) echo $data['tendn']?>">
                    <label>Tên đăng nhập</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="password" required name="txtMatkhau" value="<?php if(isset($data['matkhau'])) echo $data['matkhau']?>">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    
                    <input style="padding: 0 5px 0 90px;" type="date" required name="dateNgaytao" value="<?php if(isset($data['ngaytao'])) echo $data['ngaytao']?>">
                    <label>Ngày tạo</label>
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSTaikhoan">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>