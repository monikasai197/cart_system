<?php
session_start();
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
     
    $(".itemQty").on('change', function(){
      var $el = $(this).closest('tr'); 

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {qty:qty,pid:pid,pprice:pprice},
        success: function(response){
          console.log(response);
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
     <div class="col-lg-15">
      <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else{echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-danger alert-dismissible mt-3">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong>
      </div>
       <div class="table-responsive mt-2">
         <table class="table table-bordered table-striped text-center">
           <thead>
           <tr>
             <td colspan="7">
               <h3 class="text-center text-info m-0">Products in your cart !</h3>
             </td>
           </tr>
           <tr>
             <th>ID</th>
             <th>Image</th>
             <th>Product</th>
             <th>Price</th>
             <th>Quantity</th>
             <th>Total price</th>
             <th>
               <a href="action.php?clear=all" class="badge-danger badge p-2" onclick="return confirm('Are you sure want to clear your cart ?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
             </th>
           </tr>
           </thead>
           <tbody>
             <?php 
               require 'config.php';
               $stmt = $conn->prepare("SELECT * FROM cart");
               $stmt->execute();
               $result = $stmt->get_result();
               $grand_total = 0;
               while($row = $result->fetch_assoc()):
             ?>
             <tr>
               <td><?= $row['id'] ?></td>
               <input type="hidden" class="pid" value="<?= $row['id'] ?>">
               <td><img src="<?= $row['product_image'] ?>" width="50"></td>
               <td><?= $row['product_name'] ?></td>
               <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</td>
               <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
               <td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width: 75px;"></td>
               <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2) ?>/-</td>
               <td>
                 <a href="action.php?remove=<?= $row['id']?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item in your cart?')"><i class="fas fa-trash-alt"></i></a>
               </td>
             </tr>
             <?php $grand_total +=$row['total_price'] ?>
             <?php endwhile; ?>
             <tr>
               <td colspan="3">
                 <a href="shopping.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue shopping</a>
               </td>
               <td colspan="2"><b>Grand Total</b></td>
               <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2) ?>/-</td>
               <td>
                 <a href="checkout.php" class="btn btn-info <?= ($grand_total >1)?"":"disabled"; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
</div>

</body>
</html>