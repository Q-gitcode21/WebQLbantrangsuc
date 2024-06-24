<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wMaspth=device-wMaspth, initial-scale=1.0">
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
<form id="myForm" method="post" action="./Sanpham/themmoi"  enctype="multipart/form-data">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm sản phẩm</h2>

            <form action="#">
            <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMasp" value="<?php if(isset($data['Masp'])) echo $data['Masp']?>">
                    <label>Mã sản phẩm</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtTensp" value="<?php if(isset($data['Tensp'])) echo $data['Tensp']?>">
                    <label>Tên sản phẩm</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <label></label>
                    <select name="ddlDanhmuc" id="">
                                    <option value="">Chọn danh mục</option>
                                    <?php 
                            if(isset($data['danhMucData']) && mysqli_num_rows($data['danhMucData'])>0){
                                
                                    while($r1=mysqli_fetch_array($data['danhMucData'])){
                                        echo'<option value="'.$r1['Madm'].'">'.$r1['Tendm'].'</option>';
                                        
                                    }
                            }
                            ?>

                                </select>
                                
                                <input type="text" class="form-control" name="txtMadm">
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtGia" value="<?php if(isset($data['Gia'])) echo $data['Gia']?>">
                    <label>Giá</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtSoluong" value="<?php if(isset($data['Soluong'])) echo $data['Soluong']?>">
                    <label>Số lượng</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtMota" value="<?php if(isset($data['Mota'])) echo $data['Mota']?>">
                    <label>Mô tả</label>   
                </div>
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <input type="file" required name="txtHinhanh" value="<?php if(isset($data['Hinhanh'])) echo $data['Hinhanh']?>">
                    <label>Hình ảnh</label>   
                </div>
               
            <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>
            <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSSanpham">Quay lại</a>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
                
                </div>
                
                
                
            
        </div>
        </div>
    </form>
    
</body>
</html>