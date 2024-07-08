<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(Tensp, '(',Soluong,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<?php
if(session_id()=='') session_start();
if(isset($_SESSION['Id'])== false){
    echo'<script>alert("Chưa đăng ký tài khoản");
    window.location.href = "http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Dangky";
    </script>';    
}
$id=$_SESSION['Id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Showproduct_c"><i ></i>&nbsp;&nbsp;LUXURY</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/Showproduct_c"><i></i>Sản phẩm</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li> -->
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
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Hoàn thành đơn hàng của bạn!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Sản phẩm : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Phí ship : </b>Free</h6>
          <h5><b>Tổng tiền : </b><?= number_format($grand_total) ?>&nbsp;VNĐ</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                
                    while($row=mysqli_fetch_array($data['dulieu'])){
                        ?>
          <div class="form-group">
            <input type="hidden" name="id" class="form-control"  required value="<?php  echo $row['Id']?>">
          </div>
          <div class="form-group">
            <input type="hidden" name="date" class="form-control"  required value="<?php echo date('Y-m-d'); ?>">
          </div>
          
          <label for="phone">Số điện thoại</label>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required value="<?php  echo $row['SDT']?>">
          </div>
          <label for="address">Địa chỉ</label>
          <div class="form-group">
            <input name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..." value="<?php  echo $row['Diachi']?>" ></input>
          </div>
          <?php
                    }
            }
            ?> 
          <h6 class="text-center lead">Phương thức thanh toán</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              
              <option value="Chờ xác nhận">Thanh Toán Khi Nhận Hàng</option>
              
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Đặt hàng" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'http://localhost/Web%20qu%E1%BA%A3n%20l%C3%BD/MVC/Views/action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
   // load_cart_item_number();

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