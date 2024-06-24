
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/button.css?v=<?php echo time(); ?>" type="text/css" />
    <link rel="stylesheet" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Public/CSS/styleDT.css?v=<?php echo time(); ?>" type="text/css" />

    <style >
        .btn_cn {
            display: flex;
            margin: 0;
        }
    </style>
</head>

<body>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý tin tức</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc/timkiem" method="post">   
                <input type="search" placeholder="Tiêu đề " name="txtTKTD" value="<?php if(isset($data['Tieude'])) echo $data['Tieude']?>">                                  
            </div>
            <div class="input-group"> 
                     
                     <input type="search" placeholder="Nội dung " name="txtTKND" value="<?php if(isset($data['Noidung'])) echo $data['Noidung']?>">                                  
                 </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>


            <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/tintuc" method="post">
                <button class="button-85" role="button">Thêm tin tức </button>
                </form>
            
            </div>

            <div class="Upload">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/tintuc/upload" method="post" enctype="multipart/form-data">
                <input type="file" name="txtFile">
                <button class="button-85" role="button">Upload</button>
                </form>
            
            </div>

            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc/timkiem" method="post">
                    <button style="width: 176px;" name="btnXuatExcel"><label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label></button></form>

                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class=""></span></th>
                        <th> Nội dung <span class=""></span></th>
                        <th> Tiêu đề <span class=""></span></th>
                        <th> Ngày tạo <span class=""></span></th>
                        
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
                                                <?php echo $row['Id']?>
                                            </td>
                                            <td> <?php echo $row['Noidung']?> </td>
                                            <td> <?php echo $row['Tieude']?> </td>
                                            <td> <?php echo $row['Ngaytao']?> </td>
                                            
                                           
                                           
                                            <td class="btn_cn">
                                            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc/sua/<?php echo $row['Id']?>" method="post">
                                                <button class="button-85"  role="button">Sửa</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </form>
                                               <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DStintuc/xoa/<?php echo $row['Id']?>" method="post">
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
