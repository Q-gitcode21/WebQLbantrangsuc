
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSSanpham/suadl" enctype="multipart/form-data">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                      
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa danh mục sản phẩm</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMasp" value="<?php  echo $row['Masp']?>" readonly>
                    <label>Mã sản phẩm</label>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTensp" value="<?php  echo $row['Tensp']?>">
                    <label>Tên sản phẩm</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMadm" value=""> -->
                    <label></label>
                    <select name="ddlDanhmuc" >
                    <?php 
                     
                 
                     if (isset($data['danhMucData']) && mysqli_num_rows($data['danhMucData']) > 0) {
                         while ($r1 = mysqli_fetch_assoc($data['danhMucData'])) {
                             $selected = ($r1['Madm'] == $row['Madm']) ? 'selected' : '';
                             echo '<option value="' . $r1['Madm'] . '" ' . $selected . '>' . $r1['Tendm'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có mã sản phẩm</option>';
                     }
                    ?>
                    </select>

                   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtGia" value="<?php  echo $row['Gia']?>">
                    <label>Giá</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSoluong" value="<?php  echo $row['Soluong']?>">
                    <label>Số lượng</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMota" value="<?php  echo $row['Mota']?>">
                    <label>Mô tả</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <?php
                        $hinhanhpath = "upload/" . $row['Hinhanh'];
                                                            
                        if (is_file($hinhanhpath)) {
                            $hinhanh = "<img src='http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/" . $hinhanhpath . "' width='200px'>";
                        } else {
                            $hinhanh = "no photo";
                            
                        }
                        ?>
                    <input type="file" name="txtHinhanh">
                    <?=$hinhanh?>

                    <label>Hình ảnh</label>

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