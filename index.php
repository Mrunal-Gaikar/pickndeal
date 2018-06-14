<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-commerce</title>
  <meta charset="utf-8">
 
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body {
    font-family: "Lato", sans-serif;
}
      .carousel-caption{
          text-align: center;
          height:50%;
          color:black;
         
      }
</style>
</head>
<body style="background: url('background.jpg');background-repeat: no-repeat;background-size:100%">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PICKnDEALS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="products.php">Camera</a></li>
          <li><a href="products.php">Phone</a></li>
                 </ul>
      </li>
      <li><a href="about.html">About us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php
        session_start();
        if(isset($_SESSION['user_name'])){
          ?>  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li><?php
        }       
        
        ?>
       <li><a href="admin_login.html"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
    </ul>
  </div>
</nav>
  


  <h2 style="text-align:'middle'; color: white;"><br>Deals You Can't Miss</h2><br><br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height:300px; background-color: white; width:100%;">

      <div class="item active">
        <img src="dell.jpg" align="middle" alt="Camera" style="width:30%; margin:3%; left:200px;" >
        <div class="carousel-caption" >
          <h3>Dell XPS 13</h3>
          <p>The Most Immersive Experience Yet</p>
        </div>
      </div>

      <div class="item">
        <img src="camera.jpg" align="middle" alt="Camera" style="width:20%; margin:3%">
        <div class="carousel-caption">
          <h3>Canon Cameras</h3>
          <p>Capture Every Moment</p>
        </div>
      </div>
    
      <div class="item">
        <img src="pixel.jpg" align="middle" alt="Phone" style="width:20%; margin:3%">
        <div class="carousel-caption">
          <h3>Pixel 2 XL</h3>
          <p>The "Smart" Phone</p>
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

    </div>
</body>
</html>