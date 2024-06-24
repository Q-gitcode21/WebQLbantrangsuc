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
    <form id="myForm" method="post" action="./DatHang/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm Đơn Hàng</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMadonhang" value="<?php if(isset($data['MaDonhang'])) echo $data['MaDonhang']?>">
                    <label>Mã Đơn Hàng</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <!-- <input type="date" required name="txtNgaydathang" value="<?php if(isset($data['Ngaydathang'])) echo $data['Ngaydathang']?>"> -->
                    <input type="date" name="txtNgaydathang" value="<?php echo date('Y-m-d'); ?>" />
                    <label>Ngày Đặt Hàng</label>
                </div>
              
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <select required name="txtTrangthaidonhang" class="dd4">
                    <option  value="Chọn Trạng Thái Đơn Hàng">Chọn Trạng Thái Đơn Hàng</option>
                      <option  value="Chờ Xác Nhận">Chờ Xác Nhận</option>
                      <option  value="Đã Xác Nhận">Đã Xác Nhận</option>
                      <option  value="Chờ Huỷ Hàng">Chờ Huỷ Hàng</option>
                      <option  value="Đã Huỷ Hàng">Đã Huỷ Hàng</option>
                      <option  value="Đã Nhận Hàng">Đã Nhận Hàng</option>
                      <option  value="Chưa Nhận Hàng">Chưa Nhận Hàng</option>
                      
                      
                  </select>
                  
                </div>
                <div class="input-box">
                    
                <select required name="txtTrangthaithanhtoan" class="dd4" >
                      <option  value="Chọn Trạng Thái Thanh Toán">Chọn Trạng Thái Thanh Toán</option>
                      <option  value="Chưa Thanh Toán">Chưa Thanh Toán</option>
                      <option  value="Đã Thanh Toán">Đã Thanh Toán</option>
                     
                  </select>
                   
                </div>
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang">Quay lại</a>
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>