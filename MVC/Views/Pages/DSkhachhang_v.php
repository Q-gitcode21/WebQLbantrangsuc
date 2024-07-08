
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/styleDT.css?v=<?php echo time(); ?>" type="text/css" />
    <style >
        .btn_cn {
            display: flex;
            margin: 0;
        }
    </style>
</head>

<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý khách hàng</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang/timkiem" method="post">   
                <input type="search" placeholder="Tên KH " name="txtTKTKH" value="<?php if(isset($data['Ten'])) echo $data['Ten']?>">                                  
            </div>
            <div class="input-group"> 
                     
                     <input type="search" placeholder="ID " name="txtTKMKH" value="<?php if(isset($data['Id'])) echo $data['Id']?>">                                  
                 </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>

            <!-- <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/khachhang" method="post">
                <button class="button-85" role="button">Thêm khách hàng</button>
                </form>
            
            </div> -->
            
            <!-- <div class="Upload">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/khachhang/upload" method="post" enctype="multipart/form-data">
                <input type="file" name="txtFile">
                <button class="button-85" role="button">Upload</button>
                </form>
            </div> -->

            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang/timkiem" method="post">
                    <button style="width: 176px;" name="btnXuatExcel"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tên KH <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Giới tính <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Địa chỉ <span class="icon-arrow">&UpArrow;</span></th>
                        <th> SĐT <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ngày sinh <span class="icon-arrow">&UpArrow;</span></th>
                        <!-- <th style="padding-left:50px"> Chức năng <span class="icon-arrow">&UpArrow;</span></th> -->
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
                                                <?php echo $row['Id']?>
                                            </td>
                                            <td> <?php echo $row['Ten']?> </td>
                                            <td> <?php echo $row['Gioitinh']?> </td>
                                            <td> <?php echo $row['Diachi']?> </td>
                                            <td> <?php echo $row['SDT']?> </td>
                                            <td> <?php echo $row['Ngaysinh']?> </td>
                                           
                                            <!-- <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang/sua/<?php echo $row['Id']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;
                                            </form>
                                               <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DSkhachhang/xoa/<?php echo $row['Id']?>" method="post">
                                                <button class="button-85" onclick="return confirm('Bạn có chắc muốn xóa')" role="button" >Xóa</button>
                                               </form>
                                            </td> -->
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
