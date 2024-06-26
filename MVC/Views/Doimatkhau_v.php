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
        <form method="post" action="./doimatkhau">
        <div style="background-color:white;" class="content" >
        
        <div class="form-box login">
            <h2>Đổi mật khẩu</h2>
            
              <?php 
             $id =$_GET['id']; echo $id;
              ?>
                <input type="hidden" name="txtId" value="<?php if(isset($data['id'])) echo $data['id']?>">    
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="email" name="txtEmaildky" value="<?php if(isset($data['email'])) echo $data['email']?>">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="password" required name="txtMatkhaulan1">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="password" required name="txtMatkhaulan2">
                    <label>Nhập lại password</label>
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                
            
        </div>
    </div>
        </form>
    </div>
<!-- </div> -->
<!-- <script src="./Public/JS/script.js"></script> -->
    
</body>
</html>
