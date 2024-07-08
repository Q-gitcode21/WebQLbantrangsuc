<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div>
            <h2>Sửa nhập hàng</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtManhaphang" value="<?php  echo $row['Manhaphang']?>" readonly>
                    <label>Mã nhập hàng</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="date" required name="txtThoigiannhap" value="<?php  echo $row['Thoigiannhap']?>">
                    <label>Thời gian nhập</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    
                    <label></label>
                    <select name="ddlSanpham" >
                    <?php 
                     
                 
                     if (isset($data['nhapHangData']) && mysqli_num_rows($data['nhapHangData']) > 0) {
                         while ($r1 = mysqli_fetch_assoc($data['nhapHangData'])) {
                             $selected = ($r1['Masp'] == $row['Masp']) ? 'selected' : '';
                             echo '<option value="' . $r1['Masp'] . '" ' . $selected . '>' . $r1['Tensp'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có mã sản phẩm</option>';
                     }
                    ?>
                    </select>


                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtGianhap" value="<?php  echo $row['Gianhap']?>">
                    <label>Gía nhập</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSoluong" value="<?php  echo $row['Soluong']?>">
                    <label>Số lượng</label>   
                </div>
                <div class="input-box">
                <label>Đơn vị tính</label> 
                        <select name="ddlDonvitinh">
                        <option value="bộ" <?php if(isset($row['Donvitinh']) && $row['Donvitinh'] === 'bộ') echo 'selected'; ?>>bộ</option>
                        <option value="chiếc" <?php if(isset($row['Donvitinh']) && $row['Donvitinh'] === 'chiếc') echo 'selected'; ?>>chiếc</option>
                        </select>
                    </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <label></label>
                    <select name="ddlNhacungcap" >
                    <?php 
                     
                 
                     if (isset($data['nhapHangData1']) && mysqli_num_rows($data['nhapHangData1']) > 0) {
                         while ($r2 = mysqli_fetch_assoc($data['nhapHangData1'])) {
                             $selected = ($r2['Mancc'] == $row['Mancc']) ? 'selected' : '';
                             echo '<option value="' . $r2['Mancc'] . '" ' . $selected . '>' . $r2['Tenncc'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có nha cung cap</option>';
                     }
                    ?>
                    </select>

                                 
                </div>
            
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <?php
                    }
            }
            ?> 
            
        </div>
        </div>
    </form>
</body>
</html>