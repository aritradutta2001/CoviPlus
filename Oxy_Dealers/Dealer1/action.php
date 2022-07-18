<?php

	session_start();
	require 'config.php';

	// Add products into the cart table
	if (isset($_POST['pid']))
	{
	  $pid = $_POST['pid'];
	  $username = $_SESSION['username'];
	  $plitre = $_POST['plitre'];
	  $pprice = $_POST['pprice'];
	  $pcode = $_POST['pcode'];
	  $pqty = 1;
	  $total_price = $pprice * $pqty;
	  $stmt = $conn->prepare("SELECT code FROM cart WHERE username='$username' and code=?");
	  $stmt->bind_param('s',$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = isset($r['code']);

	  if (!$code) 
	
	  {
	    $query = $conn->prepare("INSERT INTO cart (username,date,litre,price,qty,total_price,code) VALUES ('$username',curdate(),'$plitre','$pprice','$pqty','$total_price','$pcode')");
	   
	    $query->execute();
	
	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } 
	  else 
	  {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	  
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') 
	{
	  $username = $_SESSION['username'];
	  $stmt = $conn->prepare("SELECT * FROM cart where username='$username' ");
	  $stmt->execute() or die("username error");
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) 
	{
		$username = $_SESSION['username'];
	  $id = $_GET['remove'];

	  $stmt = $conn->prepare("DELETE FROM cart WHERE id=?");
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) 
	{
		$username = $_SESSION['username'];
	  $stmt = $conn->prepare("DELETE FROM cart where username='$username' ");
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}

	// Set total price of the product in the cart table
	if (isset($_POST['qty'])) {
	  $username = $_SESSION['username'];
	  $qty = $_POST['qty'];
	  $pid = $_POST['pid'];
	  $pprice = $_POST['pprice'];

	  $tprice = $qty * $pprice;

	  $stmt = $conn->prepare("UPDATE cart SET qty=$qty, total_price=$tprice where username='$username' and price=$pprice");
	  $stmt->bind_param('isi',$qty,$tprice,$pid);
	  $stmt->execute();
	}

	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $username = $_SESSION['username'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $conn->prepare("INSERT INTO orders(name,username,main_date,email,phone,address,pmode,products,amount_paid)VALUES('$name','$username',curdate(),'$email','$phone','$address','$pmode','$products','$grand_total')");

	  $stmt->execute();
	  $stmt2 = $conn->prepare("DELETE FROM cart where username='$username'");
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $phone . '</h4>
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}
?>
