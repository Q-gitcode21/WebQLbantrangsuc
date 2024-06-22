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
    <form id="myForm" method="post" action="./Nhacungcap/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm nhà cung cấp</h2>
            <form action="#">

               
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTenncc" value="<?php if(isset($data['tenncc'])) echo $data['tenncc']?>">
                    <label>Tên NCC</label>
                </div>               
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtDiachi" value="<?php if(isset($data['diachi'])) echo $data['diachi']?>">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSodienthoai" value="<?php if(isset($data['sdt'])) echo $data['sdt']?>">
                    <label>Số điện thoại</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="email" required name="txtEmail" value="<?php if(isset($data['email'])) echo $data['email']?>">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtMasothue" value="<?php if(isset($data['mst'])) echo $data['mst']?>">
                    <label>Mã số thuế</label>
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a class="the-a" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhacungcap">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>