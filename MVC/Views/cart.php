
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
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

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
      <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Sản phẩm trong giỏ hàng của bạn!</h4>
                </td>
              </tr>
              <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>
                  <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/MVC/Views/action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Bạn chắc chắn muốn xóa giỏ hàng?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Xóa giỏ hàng</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT cart.*, qlysanpham.Soluong AS maxQuantity FROM cart JOIN qlysanpham ON cart.Masp = qlysanpham.Masp');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                $i =1;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>

                <td><?php echo $i ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><?php
                                                            $hinhanhpath = "upload/" . $row['Hinhanh'];
                                                            
                                                            if (is_file($hinhanhpath)) {
                                                                $hinhanh = "<img src='http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/" . $hinhanhpath . "' width='50px' '''>";
                                                                echo $hinhanh;
                                                            } else {
                                                                $hinhanh = "no photo";
                                                            
                                                            }
                                                                        ?></td>
                <td><?= $row['Tensp'] ?></td>
                <td>
                  <i >VNĐ</i>&nbsp;&nbsp;<?= number_format($row['Gia']); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['Gia'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" max="<?= $row['maxQuantity'] ?>" value="<?= $row['Soluong'] ?>" style="width:75px;">
                </td>
                <td><i >VNĐ</i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/MVC/Views/action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php $i++; endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Showproduct_c" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Tiếp tục 
                    mua sắm</a>
                </td>
                <td colspan="2"><b>Tổng Tiền</b></td>
                <td><b><i>VNĐ</i>&nbsp;&nbsp;<?= number_format($grand_total); ?></b></td>
                <td>
                  <a href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Checkout_c" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Thanh toán</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      
      location.reload(true);
      $.ajax({
        url: 'http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/MVC/Views/action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/MVC/Views/action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>