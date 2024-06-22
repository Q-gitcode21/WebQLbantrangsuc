<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/select2.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css?v=<?php echo time();?>">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSGiaohang/suadl">
    <div style="width:600px" class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa </h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <select name="selectMadonhang" class="dd4" aria-readonly="true">
                      <option value="<?php if(isset($row['Madonhang'])) echo $row['Madonhang']?>"> <?php if(isset($row['Madonhang'])) echo $row['Madonhang']; ?></option>
                      
                  </select>
                    
                </div>
                <div class="input-box">
                    
                    <input style="padding: 0px 5px 0px 200px;" type="date" required name="txtNgaydathang" value="<?php if(isset($row['Ngaydathang'])) echo $row['Ngaydathang']?>">
                    <label>Ngày đặt hàng</label>
                </div>            
                <div class="input-box">
                    
                    <input style="padding: 0px 5px 0px 200px;" type="date" required name="txtNgaynhanhang" value="<?php if(isset($row['Ngaynhanhangdukien'])) echo $row['Ngaynhanhangdukien']?>">
                    <label>Ngày nhận hàng dự kiến</label>
                </div>
                <div class="input-box">
                        <select name="selectDonvivanchuyen">
                        <option value="J&T" <?php if(isset($row['Donvivanchuyen']) && $row['Donvivanchuyen'] === 'J&T') echo 'selected'; ?>>J&T</option>
                        <option value="Giao hàng nhanh" <?php if(isset($row['Donvivanchuyen']) && $row['Donvivanchuyen'] === 'Giao hàng nhanh') echo 'selected'; ?>>Giao hàng nhanh</option>
                        <option value="Giao hàng tiết kiệm" <?php if(isset($row['Donvivanchuyen']) && $row['Donvivanchuyen'] === 'Giao hàng tiết kiệm') echo 'selected'; ?>>Giao hàng tiết kiệm</option>
                        </select>
</div>
                <div class="input-box">
                <select name="selectTrangthai">
                        <option value="Đang vận chuyển" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Đang vận chuyển') echo 'selected'; ?>>Đang vận chuyển</option>
                        <option value="Thành công" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Thành công') echo 'selected'; ?>>Thành công</option>
                        <option value="Không thành công" <?php if(isset($row['Trangthai']) && $row['Trangthai'] === 'Không thành công') echo 'selected'; ?>>Không thành công</option>
                        </select>                
 
                </div>
                
                <div>
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                
                </div>
                <?php
                    }
            }
            ?> 
            
        </div>
        </div>
    </form>
</body>
</html>