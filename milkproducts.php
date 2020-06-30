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
     $(".addItemBtn").click(function(e){
       e.preventDefault();
       var $form = $(this).closest(".form-submit");
       var pid = $form.find(".pid").val();
       var pname = $form.find(".pname").val();
       var pprice = $form.find(".pprice").val();
       var pimage = $form.find(".pimage").val();
       var pcode = $form.find(".pcode").val();

       $.ajax({
        url: 'action.php',
        method: 'post',
        data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
        success:function(response){
          $("#message").html(response);
          window.scrollTo(0,0);
          load_cart_item_number();
        }
       })
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
  <div id="message"></div>
  <div class="row mt-2 pb-3">
    <?php 
      include 'config.php';
      $stmt = $conn->prepare("SELECT * FROM milkproducts");
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()):
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
      <div class="card-deck">
        <div class="card p-2 border-secondary mb-2">
          <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
          <div class="card-body p-1">
            <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
            <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>
          </div>
          <div class="card-footer p-1">
            <form action="" ></form>
            <form action="" class="form-submit">
              <input type="hidden" class="pid" value="<?= $row['id']?>">
              <input type="hidden" class="pname" value="<?= $row['product_name']?>">
              <input type="hidden" class="pprice" value="<?= $row['product_price']?>">
              <input type="hidden" class="pimage" value="<?= $row['product_image']?>">
              <input type="hidden" class="pcode" value="<?= $row['product_code']?>">
              <button class="btn btn-success btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div> 
</div>

</body>
</html>