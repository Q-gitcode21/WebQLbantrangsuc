
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wManhaphangth=device-wManhaphangth, initial-scale=1.0">
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
    </style>
</head>

<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/timkiem"></form>
    <main class="table" Manhaphang="customers_table">
        <section class="table__header">
            <h1>Quản lý nhập hàng</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/timkiem" method="post">         
                <input type="search" placeholder=" nhập hàng" name="txtTimkiemManhaphang" value="<?php if(isset($data['Manhaphang'])) echo $data['Manhaphang']?>">
                                             
            </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>
            <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Nhaphang" method="post">
                <button class="button-85" role="button">Thêm nhập hàng</button>
                </form>

            </div>
            <div class="Upload">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Nhaphang/upload" method="post" enctype="multipart/form-data">
                <input type="file" name="txtFile">
                <button class="button-85" role="button">Upload</button>
                </form>
            
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/timkiem" method="post">
                        <button style="width: 176px;" name="btnXuatExcel"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>
                </div>
            </div>

            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Mã nhập hàng<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Thời gian nhập <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Mã sản phẩm <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Gía nhập <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Số lượng<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Đơn vị tính<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tổng tiền<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nhà cung cấp <span class="icon-arrow">&UpArrow;</span></th>

                        <th style="padding-left:50px"> Chức năng <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0 ){
                            $i=0;
                            while($row=mysqli_fetch_assoc($data['dulieu'])){
                                
                                ?>
                                        <tr>
                                            
                                            <td>
                                                <?php echo $row['Manhaphang']?>
                                            </td>
                                            <td> <?php echo $row['Thoigiannhap']?> </td>
                                            <td> <?php echo $row['Masp']?> </td>
                                            <td> <?php echo $row['Gianhap']?> </td>
                                            <td> <?php echo $row['Soluong']?> </td>
                                            <td> <?php echo $row['Donvitinh']?> </td>
                                            <td> <?php echo $row['TongTien']?> </td>
                                           
                                            <td> <?php echo $row['Mancc']?> </td>
                                            <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/sua/<?php echo $row['Manhaphang']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;
                                            </form>
                                               <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhaphang/xoa/<?php echo $row['Manhaphang']?>" method="post">
                                                <button class="button-85" onclick="return confirm('Bạn có chắc muốn xóa')" role="button" >Xóa</button>
                                               </form>
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
    <!-- <script src="./Public/JS/datatable.js"></script> -->

</body>

</html>
