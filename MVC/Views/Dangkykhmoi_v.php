
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
    <div class="all" >
    <form id="myForm" method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/khachhang/themmoi">
    <div style="margin-left:600px;" class="content">
    <div class="form-box login">
            <h2>Đăng ký thông tin</h2>
            <?php
            if (isset($data['getId']) && mysqli_num_rows($data['getId'])>0){
           
                while($row=mysqli_fetch_array($data['getId'])){
                    ?>
            <form action="#">
            <input type="hidden" name="txtId" value="<?php echo $row['Id']?>">    
                <div class="input-box">
                    <span class="icon">
                        <img src="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txttenkhachhang" value="<?php if(isset($data['Ten'])) echo $data['Ten']?>">
                    <label>Tên KH</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtgioitinh" value="<?php if(isset($data['Gioitinh'])) echo $data['Gioitinh']?>">
                    <label>Giới tính</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtdiachi" value="<?php if(isset($data['Diachi'])) echo $data['Diachi']?>">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtsdt" value="<?php if(isset($data['SDT'])) echo $data['SDT']?>">
                    <label>SDT</label>
                </div>
                <div class="input-box">
                    
                    <input style="padding: 0 5px 0 90px;" type="date" required name="datengaysinh" value="<?php if(isset($data['Ngáyinh'])) echo $data['Ngaysinh']?>">
                    <label>Ngày sinh</label>
                </div>
                
                <button type="submit" class="btn" name="btnKHmoi">Lưu</button>
                
                <?php
                    }
            }
            ?> 
                
                
                
            
        </div>
        </div>
    </form>
    </div>
    
</body>
</html>