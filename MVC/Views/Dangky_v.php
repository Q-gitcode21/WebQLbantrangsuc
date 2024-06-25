<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/login.css?v=<?php echo time();?>">
    
    <style>
        .content{
            margin-top: 70px;
        }
        .formDangnhap{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
                }
    </style>
    
</head>
<body>
    
    <div class="formDangnhap">
        <!-- <span class="close">&times;</span> -->
        <form method="post" action="./Dangky/dangky">
        <div style="background-color:white;" class="content" >
        
        <div class="form-box login">
            <h2>Đăng ký</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="email" required name="txtEmaildky">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="password" required name="txtMatkhaudky">
                    <label>Password</label>
                </div>
                
                <button type="submit" class="btn" name="btnDangky">Đăng ký</button>
                <div class="login-register">
                    <p>Bạn đã có tài khoản?&nbsp;<a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Login" class="register-link"> Đăng nhập</a></p>
                    
                </div>
            
        </div>
    </div>
        </form>
    </div>
<!-- </div> -->
<!-- <script src="./Public/JS/script.js"></script> -->
    
</body>
</html>
