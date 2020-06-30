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


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Super Market</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home </a></li>
      <li><a href="aboutus.php"><span class="glyphicon glyphicon-globe"> Aboutus </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      
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

  <!-- Wrapper for slides -->
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
      <img src="images/mlk.jpg" alt="Milk Products">
      <div class="carousel-caption">
        <h1>Milk Products</h1>
        <p>All types of milk products.!</p>
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

  <!-- Left and right controls -->
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
    <h2 class="text-center">Super Market</h2>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/sup1.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Super Market System.</h2>
      <p class="py-5">A Super-Market is a self-service store offering a wide variety of items related to food, household or daily use. Includes both purchase and sale of products. Designed to make the existing system more informative, reliable, fast and easy for all the stake-holders.</p>
      <a href="aboutus.php" class="btn btn-success"> Know More </a>
    </div>
  </div>
</div>
</section>

</body>
</html>