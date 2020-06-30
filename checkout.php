<?php

require 'config.php';

$grand_total = 0;
$allItems = '';
$items = array();

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
	$grand_total +=$row['total_price'];
	$items[] = $row['ItemQty'];
}
$allItems = implode(", ", $items);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMT</title>
	<link rel="icon" type="image/png" href="logo.png"/>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      
      $("#placeOrder").submit(function(e){
        e.preventDefault();
        $.ajax({
         url: 'action.php',
         method: 'post',
         data: $('form').serialize()+"&action=order",
         success: function(response){
         	$("#order").html(response);
         }
        });
      });

     load_cart_item_number();

     function load_cart_item_number(){
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {cartItem: "cart_item"},
        success:function(response){
          $("#cart-item").html(response);
        }
      });
     }
    });
  </script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.css" integrity="sha256-eAKrer0FN1K+v3ZNvznDifoX5HkJ/N0xciXznvpt4U8=" crossorigin="anonymous" />
<style>
body  {
  background-image: url(images/backbru.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
</style>


</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-th-large"> Super Market</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="shopping.php">Items that are seen in super market
        <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="clothes.php">Women ware(clothes)</a></li>
          <li><a href="mensclothes.php">Mens ware(clothes)</a></li>
          <li><a href="shoes.php">Women footware</a></li>
          <li><a href="mensfoot.php">Mens footware</a></li>
          <li><a href="stationary.php">Stationary</a></li>  
          <li><a href="kitchen.php">Kitchen items</a></li>
          <li><a href="electronics.php">Electronics</a></li>
          <li><a href="furniture.php">Furniture items</a></li>
          <li><a href="cosmetics.php">Cosmetics</a></li>
          <li><a href="grocery.php">Groceries</a></li>
          <li><a href="leafy.php">Leafy vegetables</a></li>
          <li><a href="fruits.php">Fruits</a></li>
          <li><a href="milkproducts.php">Milk products</a></li>
          <li><a href="vegetables.php">Vegetables</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="checkout.php"><span class="glyphicon glyphicon-new-window"></span> Checkout </a></li>
      <li class="active"><a href="cart.php"><span></span><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></span></a></li>	
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6 px-4 pb-4" id="order">
			<h4 class="text-center text-info p-2">Complete your order!</h4>
			<div class="jumbotron p-3 mb-2 text-center">
				<h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
				<h6 class="lead"><b>Delivery Charge : </b>Free</h6>
				<h5><b>Total Amount Payable : </b><?= number_format($grand_total,2)?>/-</h5>
			</div>
			<form action="" method="post" id="placeOrder">
				<input type="hidden" name="products" value="<?= $allItems ?>">
				<input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
				</div>
				<div class="form-group">
					<input type="tel" name="phone" class="form-control" placeholder="Enter your phone" required>
				</div>
				<div class="form-group">
					<textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter your delivery address here..." required></textarea>
				</div>
				<h6 class="text-center lead">Select payment mode</h6>
				<div class="form-group">
					<select name="pmode" class="form-control">
						<option value="" selected disabled>-Select payment mode-</option>
						<option value="cod">Cash on delivery</option>
						<option value="netbanking">Net banking</option>
						<option value="cards">Debit/Credit card</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>