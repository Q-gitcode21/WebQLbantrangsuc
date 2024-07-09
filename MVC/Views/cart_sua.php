<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
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
    <div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Showproduct_c"><i></i>&nbsp;&nbsp;Luxury</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Showproduct_c"><i ></i>Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Danh mục</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Checkout_c"><i class="fas fa-money-check-alt mr-2"></i>Thanh toán</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Cart_c"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div>
    <form method="post" action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Ctdonhang/timkiem"></form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Quản lý đơn hàng</h1>
           
            <div class="input-group"> 
            <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Ctdonhang/timkiem" method="post">         
                <input type="search" placeholder="Mã Đơn Hàng " name="txtTimkiemmadon" value="<?php if(isset($data['Madonhang'])) echo $data['Madonhang']?>">
                                             
            </div>
            <button style="border: none; background: transparent;" type="submit" name="btnTimkiem"><i class="fa fa-search" ></i></button>
            </form>
            <!-- <div class="Insert">
                <form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/DonHang" method="post">
                <button class="button-85" role="button">Thêm Đơn Hàng</button>
                </form>
            
            </div> -->
           
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Mã đơn hàng <span class="icon-arrow">&UpArrow;</span></th>
                       
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
                                            
                                            <td> <?php echo $row['SDT']?> </td>
                                            
                                            <td> <?php echo $row['Diachi']?> </td>
                                            <td> <?php echo $row['Trangthaidonhang']?> </td>
                                            <td> <?php echo $row['products']?> </td>
                                            <td> <?php echo $row['amount_paid']?> </td>
                                            <td data-column="Ngaydathang"> <?php echo $row['Ngaydathang']?> </td>
                                            
                                            <?php
                                                 if ($row['Trangthaidonhang'] == 'Chờ xác nhận') {
    // Hiển thị nút Sửa
                                                 echo '<td class="btn_cn">';
                                                echo '<form action="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Ctdonhang/xoa/' . $row['Madonhang'] . '" method="post">';
                                                echo '<button class="button-85" role="button" onclick="return confirm(\'Bạn có chắc muốn huỷ đơn\')">Huỷ</button>  ';
                                                echo '</form>';

                                                 }
                                           ?>
                                           
                                            
                                            
                                        </tr>

                                <?php

                            }
                        }
                    ?>
            </tbody>
            </table>
        </section>
    </main>
    </div>  
        
    
    <!-- <script src="./Public/JS/datatable.js"></script> -->
   
</body>

</html>