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

<style>
body  {
  background-image: url(images/back.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
 .loginbox{
  width: 320px;
  height: 420px;
  background-color: rgba(211, 211, 211, 0.5);
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
} 
.loginbox p{
  margin: 0;
  padding: 0;
  font-weight: bold;
}
.loginbox input{
  width: 100%;
  margin-bottom: 20px; 
}
</style>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Super Market</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home </a></li>
      <li><a href="aboutus.php"><span class="glyphicon glyphicon-globe"> Aboutus </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>

<div class="loginbox">
  <h1 align="center">Login</h1>
  <form action="validation.php" method="post">
    <p>Username</p>
    <input type="text" name="user" placeholder="Enter your name" class="form-control" required>
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
    <button type="submit" class="btn btn-success">Login</button>
  </form>
</div>
</body>
</html>