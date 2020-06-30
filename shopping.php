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
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.css" integrity="sha256-eAKrer0FN1K+v3ZNvznDifoX5HkJ/N0xciXznvpt4U8=" crossorigin="anonymous" />

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: right;
}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Super Market</a>
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
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="images/gry.jpg" alt="Groceries">
      <div class="carousel-caption">
        <h1>Groceries</h1>
        <p>All Groceries.!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/veg.jpg" alt="Vegetables">
      <div class="carousel-caption">
        <h1>Vegetables</h1>
        <p>All kinds of Vegetables.!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/mlk.jpg" alt="Milk Items that are seen in super market">
      <div class="carousel-caption">
        <h1>Milk Items that are seen in super market</h1>
        <p>All types of milk Items that are seen in super market.!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/elc.jpg" alt="Electronics">
      <div class="carousel-caption">
        <h1>Electronics</h1>
        <p>All Electronics.!</p>
      </div>
    </div>
   
    <div class="item">
      <img src="images/cos.jpg" alt="Cosmetics">
      <div class="carousel-caption">
        <h1>Cosmetics</h1>
        <p>All types of Cosmetics.!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/drs.jpg" alt="Dresses">
      <div class="carousel-caption">
        <h1>Dress Materials</h1>
        <p>All varieties of Dresses.!</p>
      </div>
    </div> 

  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Super Market Items that are seen in super market</h2>
  </div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/ladyfin.jpg" alt="Image5" class="img-fluid card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Ladies fingers</h5>
           
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/tindoora.jpg" alt="Image6" class="img-fluid card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Tindooras</h5>
           
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/cucumber.jpg" alt="Image7" class="img-fluid card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Cucumbers</h5>
            
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/bitgd.jpg" alt="Image8" class="img-fluid card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Bitter gourds</h5>
           
          </div>
        </div>
      </form>
    </div>
</div>
</div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="stationary.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/pcl1.jpg" alt="Image1" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Pencils</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="stationary.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/pen1.jpg" alt="Image2" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Pens</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="stationary.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/eraser1.jpg" alt="Image3" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Eraser</h5>
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="stationary.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/sharp.jpg" alt="Image4" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Sharpners</h5>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="milkpro.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/milkpct.jpg" alt="Image1" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Milk packets</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="milkpro.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/cheese.jpg" alt="Image2" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Cheese packets</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="grocery.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/tea.jpg" alt="Image3" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Tea packet</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="grocery.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/rice.jpg" alt="Image4" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Rice</h5>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="electronics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/cooker.jpg" alt="Image1" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Electric cooker</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="electronics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/mixie.jpg" alt="Image2" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Mixie</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="electronics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/grinder.jpg" alt="Image3" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Grinder</h5>
            
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="cosmetics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/mascara.jpg" alt="Image4" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Mascara</h5>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="cosmetics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/found.jpg" alt="Image5" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Foundation</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="cosmetics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/high.jpg" alt="Image6" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Highlighter</h5>
            
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="cosmetics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/moist.jpg" alt="Image7" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Moisturiser</h5>
            
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="cosmetics.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/brush.jpg" alt="Image8" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Brush</h5>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/leg.jpg" alt="Image1" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Legging</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/top.jpg" alt="Image2" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Night top</h5>
            
          </div>
        </div>
      </form>
    </div>
    
    <div class="col-md-3 col-sm-6 my-5 my-md-0">
      <form action="vegetables.php" method="post">
        <div class="card shadow">
          <div>
            <img src="./images/ngtdrs.jpg" alt="Image3" class="img-fluid card-img-top" name="productimage">
          </div>
          <div class="card-body">
            <h5 class="card-title" name="productname">Night dress</h5>
            
        </div>
      </form>
    </div>
  </form>
</div>
</div>
</div>
</section>

<div class="footer">
  <p><h3>Online super market</h3></p>
</div>

</body>
</html>