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
    </style>
</head>

<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý đặt hàng</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/timkiem" method="post">         
                <input type="search" placeholder="Mã Đơn Hàng " name="txtTimkiemmahang" value="<?php if(isset($data['Madonhang'])) echo $data['Madonhang']?>">
                                             
            </div>
        
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>
            <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DatHang" method="post">
                <button class="button-85" role="button">Thêm Đơn Hàng</button>
                </form>
            
            </div>
            <div >
                <!-- <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/timkiem" method="post">
                    <button type="submit" class="button-85" name="btnXuatExcel">Xuất Excel</button>
                </form> -->
            
            </div>
            <div >
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DatHang_file" method="post">
                    <button type="submit" class="button-85" name="btnNhapexcel">Nhập Excel</button>
                </form>
            
            </div>
           
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/timkiem" method="post">
                        <button style="width: 176px;" name="btnXuatExcel"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Mã Đơn Hàng <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ngày Đặt Hàng <span class="icon-arrow">&UpArrow;</span></th>
                        
                        <th> Trạng Thái Đơn Hàng <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Trạng Thái Thanh Toán <span class="icon-arrow">&UpArrow;</span></th>
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
                                            
                                            <td>
                                                <?php echo $row['Madonhang']?>
                                            </td>
                                            <td> <?php echo $row['Ngaydathang']?> </td>
                                            <td> <?php echo $row['Trangthaidonhang']?> </td>
                                            <td> <?php echo $row['Trangthaithanhtoan']?> </td>
                                            
                                          
                                          
                                           
                                            
                                            <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/sua/<?php echo $row['Madonhang']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;
                                            </form>
                                               <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSDathang/xoa/<?php echo $row['Madonhang']?>" method="post">
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
