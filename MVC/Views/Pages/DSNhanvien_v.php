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
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý nhân viên</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien/timkiem" method="post">         
                <input type="search" placeholder="Mã Nhân Viên " name="txtTimkiemma" value="<?php if(isset($data['Manhanvien'])) echo $data['Manhanvien']?>">
                                             
            </div>
            <div class="input-group"> 
                  
                <input type="search" placeholder="Tên Nhân Viên" name="txtTimkiemten" value="<?php if(isset($data['Tennhanvien'])) echo $data['Tennhanvien']?>">
                                             
            </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>
            <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/NhanVien" method="post">
                <button class="button-85" role="button">Thêm Nhân Viên</button>
                </form>
            
            </div>
            <div >
                <!-- <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanvien/timkiem" method="post">
                    <button type="submit" class="button-85" name="btnXuatExcel2">Xuất Excel</button>
                </form> -->
            
            </div>
            <div >
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Nhanvien_file" method="post">
                    <button type="submit" class="button-85" name="btnNhapexcel">Nhập Excel</button>
                </form>
            
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanvien/timkiem" method="post">
                        <button style="width: 176px;" name="btnXuatExcel2"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Mã Nhân Viên <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tên Nhân Viên <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Giới Tính <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ngày Sinh <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Điện Thoại <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Địa Chỉ <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Phòng Ban <span class="icon-arrow">&UpArrow;</span></th>
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
                                                <?php echo $row['Manhanvien']?>
                                            </td>
                                            <td> <?php echo $row['Tennhanvien']?> </td>
                                            <td> <?php echo $row['Gioitinh']?> </td>
                                            <td> <?php echo $row['Ngaysinh']?> </td>
                                            <td> <?php echo $row['Dienthoai']?> </td>
                                            <td> <?php echo $row['Diachi']?> </td>
                                            <td> <?php echo $row['Phongban']?> </td>
                                           
                                           
                                            <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien/sua/<?php echo $row['Manhanvien']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;
                                            </form>
                                               <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSNhanVien/xoa/<?php echo $row['Manhanvien']?>" method="post">
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
