<?php
	session_start();
	require 'config.php';

	// Add products into the cart table
	if (isset($_POST['pcode'])) {

	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = $_POST['pqty'];
	 
	  $total_price = $pprice * $pqty;

	  $stmt = $conn->prepare('SELECT Masp FROM cart WHERE Masp=?');
	  $stmt->bind_param('s',$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['Masp'] ?? '';

	  if (!$code) {
	    $query = $conn->prepare('INSERT INTO cart (Tensp,Gia,Hinhanh,Soluong,total_price,Masp) VALUES (?,?,?,?,?,?)');
	    $query->bind_param('ssssss',$pname,$pprice,$pimage,$pqty,$total_price,$pcode);
	    $query->execute();

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $conn->prepare('SELECT * FROM cart');
	  $stmt->execute();
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];

	  $stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) {
	  $stmt = $conn->prepare('DELETE FROM cart');
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}

	// Set total price of the product in the cart table
	if (isset($_POST['Soluong'])) {
	  $qty = $_POST['Soluong'];
	  $pid = $_POST['pid'];
	  $pprice = $_POST['pprice'];

	  $tprice = $qty * $pprice;

	  $stmt = $conn->prepare('UPDATE cart SET Soluong=?, total_price=? WHERE id=?');
	  $stmt->bind_param('isi',$qty,$tprice,$pid);
	  $stmt->execute();
	}

	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	 
	  $id= $_POST['id'];
	  $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];
	  $date=$_POST['date'];

	  $data = '';
	  
	  $sql = "INSERT INTO orders (Id,SDT,Diachi,Trangthaidonhang,products,amount_paid,Ngaydathang) VALUES ('$id', '$phone', '$address', '$pmode', '$products','$grand_total','$date')";
	  mysqli_query($conn,$sql);
	  
	//   $stmt = $conn->prepare('INSERT INTO orders (Id,SDT,Diachi,Trangthaidonhang,products,amount_paid)VALUES(?,?,?,?,?,?)');
	//   $stmt->bind_param($id,$phone,$address,$pmode,$products,$grand_total);
	//   $stmt->execute();
	  $stmt2 = $conn->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Cảm ơn bạn đã đặt hàng!</h1>
								<h2 class="text-success">Đơn hàng bạn đã đặt thành công</h2>
								<h4 class="bg-danger text-light rounded p-2">Sản phẩm đã mua : ' . $products . '</h4>
								<h4>Ngày đặt hàng : ' . $date . '</h4>
								<h4>Số điện thoại của bạn : ' . $phone . '</h4>
								<h4>Địa chỉ của bạn: ' . $address . '</h4>
								<h4>Tổng tiền: ' . number_format($grand_total,2) . '</h4>
								<h4>Trạng thái đơn hàng : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}
?>