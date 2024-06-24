<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css">
</head>
<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/suadl">
    <div class="content">
    <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
                        
    <div class="form-box login">
            <h2>Sửa Thông Tin Đơn Hàng</h2>
            <form action="#">
            <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMakhachhang"  value="">

                    -->
                    <select name="txtMaKH" class="dd4">
                      
                    <option value="<?php if(isset($row['MaKH'])) echo $row['MaKH']?>"> <?php if(isset($row['MaKH'])) echo $row['MaKH']; ?></option>
                     </select>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMasanpham"  value=""> -->
                    <select name="txtMasp" class="dd4" id="product-select">
                      
                      <?php 
                     
                 
                     if (isset($data['getMasp']) && mysqli_num_rows($data['getMasp']) > 0) {
                         while ($r1 = mysqli_fetch_assoc($data['getMasp'])) {
                             $selected = ($r1['Masp'] == $row['Masp']) ? 'selected' : '';
                             echo '<option value="' . $r1['Masp'] . '" ' . $selected . '>' . $r1['Masp'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có mã sản phẩm</option>';
                     }
                    ?>
                  </select>
                  </div>
                  <div id="product-price" class="input-box">
                  <label>Giá: </label> </div>
               
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/user.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMadonhang"  value=""> -->
                    <select name="txtMadonhang" class="dd4" aria-readonly="true">
                      
                    <option value="<?php if(isset($row['Madonhang'])) echo $row['Madonhang']?>"> <?php if(isset($row['Madonhang'])) echo $row['Madonhang']; ?></option>
                  </select>
                    
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input id="soLuong" type="text" required name="txtSoluong"  value="<?php  echo $row['Soluong']?>">
                    <label>Số Lượng</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtVoucher"  value=""> -->
                    <select name="txtMaVoucher" class="dd4" id="voucher">
                     
                      <?php 
                     
                  
                     if (isset($data['getGiatri']) && mysqli_num_rows($data['getGiatri']) > 0) {
                         while ($r2 = mysqli_fetch_assoc($data['getGiatri'])) {
                             $selected = ($r2['Giatr'] == $row['Giatri']) ? 'selected' : '';
                             echo '<option value="' . $r2['Giatri'] . '" ' . $selected . '>' . $r2['Giatri'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có mã Voucher</option>';
                     }
                    ?>
                  </select>
                  
                </div>
                <div>
                        <p id="ketQua"><label>Tổng Tiền</label></p>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="date" required name="txtNgaydathang"  value="<?php  echo $row['Ngaydathang']?>">
                    <label>Ngày Đặt Hàng</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input type="text" required name="txtDiachi"  value="<?php  echo $row['Diachi']?>">
                    <label>Địa Chỉ</label>
                
                <?php
                    }
            }
            ?> 
            
        </div>
        <button type="submit" class="btn" name="btnLuu">Lưu</button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var productPrice = 0;

        function calculateTotal() {
            var quantity = parseInt($('#soLuong').val()) || 0;
            var voucher = parseFloat($('#voucher').val()) || 0;
            var totalAmount = (productPrice * quantity) - voucher;
            totalAmount = Math.max(totalAmount, 0);
            $('#ketQua').html('Tổng tiền: ' + totalAmount);
        }

        $('#product-select').change(function(){
            var masp = $(this).val();
            if(masp) {
                $.ajax({
                    url: 'get_price.php',
                    type: 'POST',
                    data: {Masp: masp},
                    success: function(response){
                        
                        productPrice = parseFloat(response);
                        $('#product-price').html('Giá: ' + productPrice);
                        calculateTotal(); // Tính lại tổng tiền ngay sau khi lấy giá sản phẩm
                    }
                });
            } else {
                $('#product-price').html('Giá: ');
                productPrice = 0;
                calculateTotal(); // Tính lại tổng tiền khi không có mã sản phẩm
            }
        });


        $('#soLuong, #voucher').on('input change', calculateTotal);

        $('#submit').click(function(){
            var quantity = parseInt($('#soLuong').val()) || 0;
            var voucher = parseFloat($('#voucher').val()) || 0;

            $('#output').html(
                'Giá: ' + productPrice + '<br>' +
                'Số lượng: ' + quantity + '<br>' +
                'Voucher: ' + voucher
            );

            var totalAmount = (productPrice * quantity) - voucher;
            totalAmount = Math.max(totalAmount, 0);
            $('#ketQua').html('Tổng tiền: ' + totalAmount);
            
        });
    });
</script>
</body>
</html>