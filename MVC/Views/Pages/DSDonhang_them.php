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
    <form id="myForm" method="post" action="./DonHang/themmoi">
    <div class="content">
    <div class="form-box login">
            <h2>Thêm Đơn Hàng</h2>
            <form action="#">

                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMakhachhang" value=""> -->
                    <select name="txtMaKH" class="dd4">
                      <option value="">Chọn mã Khách Hàng</option>
                   <?php 
                    
                     
                     if(isset($data['getMaKH']) && mysqli_num_rows($data['getMaKH']) > 0){
                       
                         while($r3 = mysqli_fetch_assoc($data['getMaKH'])){
                             echo '<option value="' . $r3['MaKH'] . '">' . $r3['MaKH'] . '</option>';
                         }
                     } else {
                         echo '<option value="">Không có khách hàng</option>';
                     }
                     ?>
                     </select>
                </div>            
                <div class="input-box">
                    <span class="icon">
                        <img src="./Public/Picture/Pic_login/email.png" alt="" width="15px">
                    </span>
                    <!-- <input type="text" required name="txtMasanpham" value=""> -->
                    <select name="txtMasp" class="dd4" id="product-select">
                      <option value="">Chọn mã sản phẩm</option>
                      <?php 
                     
                    if(isset($data['getMasp']) && mysqli_num_rows($data['getMasp']) > 0){
                      
                        while($r1 = mysqli_fetch_assoc($data['getMasp'])){
                            echo '<option value="' . $r1['Masp'] .'">' . $r1['Masp'] . '</option>';
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
                    <!-- <input type="text" required name="txtMadonhang" value=""> -->
                    <select name="txtMadonhang" class="dd4">
                      <option value="">Chọn mã đơn hàng</option>
                      <?php 
                     
                    if(isset($data['getMadonhang']) && mysqli_num_rows($data['getMadonhang']) > 0){
                      
                        while($r2 = mysqli_fetch_assoc($data['getMadonhang'])){
                            echo '<option value="' . $r2['Madonhang'] . '">' . $r2['Madonhang'] . '</option>';
                        }
                    } else {
                        echo '<option value="">Không có đơn hàng</option>';
                    }
                    ?>
                  </select>
                  
                </div>
                
                <div class="input-box">
                    <span class="icon">
                    <img src="./Public/Picture/Pic_login/khoa.png" alt="" width="15px">
                    </span>
                    <input id="soLuong" type="text" required name="txtSoluong" value="<?php if(isset($data['Soluong'])) echo $data['Soluong']?>">
                    <label>Số Lượng</label>
                </div>
                <div class="input-box">
              
                <select name="txtMaVoucher" class="dd4" id="voucher">
                      <option value="">Chọn mã Voucher</option>
                      <?php 
                     
                    if(isset($data['getGiatri']) && mysqli_num_rows($data['getGiatri']) > 0){
                      
                        while($r4 = mysqli_fetch_assoc($data['getGiatri'])){
                            echo '<option value="' . $r4['Giatri'] . '">' . $r4['Giatri'] . '</option>';
                        }
                    }
                    if(isset($data['getGiatript']) && mysqli_num_rows($data['getGiatript']) > 0){
                      
                        while($r2 = mysqli_fetch_assoc($data['getGiatript'])){
                            echo '<option value="' . $r4['Giatriphantram'] . '">' . $r4['Giatriphantram'] . '</option>';
                        }
                    }
                     else {
                        echo '<option value="">Không có đơn hàng</option>';
                    }
                    ?>
                  </select>
                    <!-- <input type="text" required name="txtVoucher" value=""> -->
                   
                </div>
                <div class="input-box">
                  
                    <!-- <input type="text" required name="txtTongtien" value=""> -->

                    <p id="ketQua"><label >Tổng Tiền</label></p>
                    <input type="hidden" id="txtTongtien" name="txtTongtien">
                        
                  
                </div>
                <div></div>
                <div class="input-box">
                    
                    <!-- <input type="date" required name="txtNgaydathang" value="<?php if(isset($data['Ngaydathang'])) echo $data['Ngaydathang']?>">
                      -->
                      <input type="text" name="txtNgaydathang" value="<?php echo date('Y-m-d'); ?>" />

                    <label>Ngày Đặt Hàng</label>
                </div>
                <div class="input-box">
                    
                    <input type="text" required name="txtDiachi" value="<?php if(isset($data['Diachi'])) echo $data['Diachi']?>">
                    <label>Địa Chỉ</label>
                </div>
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang">Quay lại</a>
                </div>
                
                
                
            
        </div>
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
            var quantity = parseInt($('#soLuong').val()) ;
            var voucher = parseFloat($('#voucher').val()) ;

            $('#output').html(
                'Giá: ' + productPrice + '<br>' +
                'Số lượng: ' + quantity + '<br>' +
                'Voucher: ' + voucher
            );

            var totalAmount = (productPrice * quantity) - voucher;
            totalAmount = Math.max(totalAmount, 0);
            $('#ketQua').html('Tổng tiền: ' + totalAmount);
            $('#txtTongtien').val(totalAmount);
            console.log('Giá trị của thẻ input ẩn:', $('#txtTongtien').val()); 
        });
    });
</script>

</body>
</html>