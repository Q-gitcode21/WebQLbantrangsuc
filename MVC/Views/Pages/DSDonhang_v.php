<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/styleDT.css">
    <style >
        .btn_cn {
            display: flex;
            margin: 0;
        }
        .main.table{
            width: 950px;
        }
    </style>
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
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý đơn hàng</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/timkiem" method="post">         
                <input type="search" placeholder="Mã Đơn Hàng " name="txtTimkiemmadon" value="<?php if(isset($data['Madonhang'])) echo $data['Madonhang']?>">
                                             
            </div>
            <div class="input-group"> 
                  
                  <input type="search" placeholder="Mã Khách Hàng" name="txtTimkiemmakhach" value="<?php if(isset($data['Makhachhang'])) echo $data['Makhachhang']?>">
                                               
              </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>
            <!-- <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DonHang" method="post">
                <button class="button-85" role="button">Thêm Đơn Hàng</button>
                </form>
            
            </div> -->
            <div >
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonHang/timkiem" method="post">
                    <button type="submit" class="button-85" name="btnXuatExcel1">Xuất Excel</button>
                </form>
            
            </div>
            <div >
                <!-- <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DonHang_file" method="post">
                    <button type="submit" class="button-85" name="btnNhapexcel">Nhập Excel</button>
                </form> -->
            
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonHang/timkiem" method="post">
                        <button style="width: 176px;" name="btnXuatExcel1"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Mã đơn hàng <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Id khách hàng<span class="icon-arrow">&UpArrow;</span></th>
                        <th> SĐT <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Địa chỉ <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Trạng thái <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Sản phẩm <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tổng tiền <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ngày Đặt Hàng <span class="icon-arrow">&UpArrow;</span></th>
                        <th style="padding-left:50px"> TOOL <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0 ){
                            $i=0;
                            while($row=mysqli_fetch_assoc($data['dulieu'])){
                                
                                ?>
                                        <tr>
                                            <td data-column="Madonhang"> <?php echo $row['Madonhang']?> </td>
                                            <td>
                                                <?php echo $row['Id']?>
                                            </td>
                                            <td> <?php echo $row['SDT']?> </td>
                                            
                                            <td> <?php echo $row['Diachi']?> </td>
                                            <td> <?php echo $row['Trangthaidonhang']?> </td>
                                            <td> <?php echo $row['products']?> </td>
                                            <td> <?php echo $row['amount_paid']?> </td>
                                            <td data-column="Ngaydathang"> <?php echo $row['Ngaydathang']?> </td>
                                            
                                            
                                           
                                           
                                            <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/sua/<?php echo $row['Madonhang']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;
                                            </form>
                                               <!-- <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDonhang/xoa/<" method="post">
                                                <button class="button-85" onclick="return confirm('Bạn có chắc muốn xóa')" role="button" >Xóa</button>
                                               </form> -->
                                            </td>
                                        </tr>

                                <?php

                            }
                        }
                    ?>
            </tbody>
            </table>
        </section>
    </main>
    <div class="content-2">
    
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
                    
                    <input style="padding: 0px 5px 0px 200px;" type="date" required name="txtNgaynhanhang" id="ngaynhanhangInput" value="<?php if(isset($data['Ngaynhanhangdukien'])) echo $data['Ngaynhanhangdukien']?>">
                    <label>Ngày nhận hàng dự kiến</label>
                </div>
                <div class="input-box">
                <label style="padding-left: 300px;" for="selectDonvivanchuyen">Chọn đơn vị vận chuyển</label>
                  <select name="selectDonvivanchuyen" required>
                  
                  <option value="J&T">J&T</option>
                  <option value="Giao hàng nhanh">Giao hàng nhanh</option>
                  <option value="Giao hàng tiết kiệm">Giao hàng tiết kiệm</option>
                </select>

                </div>
                <div class="input-box">
                <label style="padding-left: 300px;" for="selectTrangthai">Trạng thái</label>
                  <select aria-readonly="true" name="selectTrangthai">
                  <!-- <option selected value="0">Chọn trạng thái</option> -->
                  <option value="Đang vận chuyển">Đang vận chuyển</option>
                  <!-- <option value="Thành công">Thành công</option>
                  <option value="Không thành công">Không thành công</option>   -->
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
        
    </div>
    
    <!-- <script src="./Public/JS/datatable.js"></script> -->
    <script>
    
    // Gắn bộ lắng nghe sự kiện cho các hàng trong bảng
    const tableRows = document.querySelectorAll('#customers_table tr');
    tableRows.forEach((row) => {
        row.addEventListener('click', handleRowClick);
    });

    // Xử lý sự kiện khi hàng được chọn
    function handleRowClick(event) {
        // Lấy giá trị Madonhang từ hàng đã chọn
         const madonhang = event.currentTarget.querySelector('td[data-column="Madonhang"]').textContent;
         const ngaydathang = event.currentTarget.querySelector('td[data-column="Ngaydathang"]').innerText;
        console.log(ngaydathang);

        // Điền giá trị vào trường nhập
        document.getElementById('madonhangInput').value = madonhang;
        document.getElementById('ngaydathangInput').value = ngaydathang;
    }
</script>

</body>

</html>
