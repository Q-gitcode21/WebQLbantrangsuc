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
    <form id="myForm" method="post" action="./NhanVien/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm nhân viên</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtManhanvien" value="<?php if(isset($data['Manhanvien'])) echo $data['Manhanvien']?>">
                    <label>Mã Nhân Viên</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTennhanvien" value="<?php if(isset($data['Tennhanvien'])) echo $data['Tennhanvien']?>">
                    <label>Tên Nhân Viên</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtGioitinh" value=""> -->
                    <select required name="txtGioitinh" class="dd4">
                    <option  value="Chọn Giới Tính">Chọn Giới Tính</option>
                      <option  value="Nam">Nam</option>
                      <option  value="Nữ">Nữ</option>
                      <option  value="Khác">Khác</option>
                      
                      
                      
                  </select>
                    
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>

                    <input type="date" name="txtNgaysinh" value="<?php echo date('Y-m-d'); ?>" />

                    <label>Ngày Sinh</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtDienthoai" value="<?php if(isset($data['Dienthoai'])) echo $data['Dienthoai']?>">
                    <label>Điện thoại</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtDiachi" value="<?php if(isset($data['Diachi'])) echo $data['Diachi']?>">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-box">
                    
                    <!-- <input type="text" required name="txtPhongban" value=""> -->
                    <select required name="txtPhongban" class="dd4">
                    <option  value="Chọn Phòng Ban">Chọn Phòng Ban</option>
                      <option  value="Sale">Sale</option>
                      <option  value="Kế Toán">Kế Toán</option>
                      <option  value="Khác">Khác</option>
                      
                      
                      
                  </select>
                    <label>Phòng Ban</label>
                </div>
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>