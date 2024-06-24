<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css">
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/select2.css?v=<?php echo time();?>">

    <style>
        .quaylai {
    text-align: center;
    justify-content: center;
    padding-top: 5px;
          }
    .main-content{
      width: 100%;
      display: flex;
    }
    </style>
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/dulieu.css?v=<?php echo time();?>">
    <style>
      .content{
        width: 550px;
        margin:10px;
        height: 600px;
        
      }
      .input-box input{
        width : 100%;
      }
      
    </style>
</head>
<body>
   
    
    <form id="myForm" method="post" action="./Giaohang/themmoi">
    <div class="content">
    <div  class="form-box login">
    
            <h2>Giao hàng</h2>
            

                <div class="input-box">
                <span class="icon">
                    <img src="./Public/Picture/id-card_9424609.png" alt="" width="15px">
                    </span>
                    <input style="padding: 0px 5px 0px 200px;" name="selectMadonhang" type="text" id="madonhangInput" readonly>
                    <label >Mã đơn hàng</label>


                    
                </div>
                <div class="input-box">
                    
                    <input style="padding: 0px 5px 0px 200px;" type="date" required name="txtNgaydathang" id="ngaydathangInput" readonly >
                    <label>Ngày đặt hàng</label>
                </div>            
                <div class="input-box">
                    
                    <input style="padding: 0px 5px 0px 200px;" type="date" required name="txtNgaynhanhang" value="<?php if(isset($data['Ngaynhanhangdukien'])) echo $data['Ngaynhanhangdukien']?>">
                    <label>Ngày nhận hàng dự kiến</label>
                </div>
                <div class="input-box">
                  <select name="selectDonvivanchuyen">
                  <option selected value="0">Chọn đơn vị vận chuyển</option>
                  <option value="J&T">J&T</option>
                  <option value="Giao hàng nhanh">Giao hàng nhanh</option>
                  <option value="Giao hàng tiết kiệm">Giao hàng tiết kiệm</option>
                </select>

                </div>
                <div class="input-box">
                  <select name="selectTrangthai">
                  <option selected value="0">Chọn trạng thái</option>
                  <option value="Đang vận chuyển">Đang vận chuyển</option>
                  <option value="Thành công">Thành công</option>
                  <option value="Không thành công">Không thành công</option>  
                </select>

                </div>
                
                
                <button type="submit" class="btn" name="btnLuu">Lưu</button>
                <br>
                <div class="quaylai">
                <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSGiaohang">Quay lại</a>
                </div>   
                
                
                </div>                
                
                
                
                
                
                
            
        
        </div>
        </form>
        
    
    

</body>
</html>