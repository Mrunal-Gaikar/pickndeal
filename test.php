<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Topkart</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
      p{
          color: black;
      }
      
      h3{
          color: black;
      }
      
  header{
    text-align: center;
    font-size: 30px;
    font-family:  sans-serif;
        color: black;
  }
  body{
    background-color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}
div div {
  text-align: center;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111111;
}
  
  #mob{
    float: left;
    
  }
  #cam{
    float:left;
    
  }  
  </style>
</head>
<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PICKnDEALS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="products.php">Products <span class="caret"></span></a>
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
       <li><a href="admin_login.html"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
    </ul>
  </div>
</nav>
 
<h2><br>PicknDeal Exclusives offers</h2>



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
    <h2><br>&nbsp;Camera </h2>
<div class="row">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}

$sql="SELECT * from cart";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
if($rowcount>0)
{
  while($count<$rowcount)
  {
  $row=mysqli_fetch_array($result);
//echo "<div style='border:1px solid black;width:40px;height:50px'>";

echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3' style='float:left; margin:2px;'>";
echo "<img src='uploads/".$row['image']."'/>";
echo "<div style='text-align:center;'>";
echo "<a href='desc.php?product_id=".$row['product_id']."&product_type=".$row['product_type']."'/>";
echo $row['product_name']."</div>";
echo "</a>";
echo "</div>";
//echo "<br>";
$count++;
}
}
/*if(isset($_SESSION['user_name']))
{
  echo "<a href='mycart.php'>"."MyCart"."</a>";
}
*/
?>
  
</div>
<h2><br>&nbsp;Mobile Phones<br><br></h2>
<div class="row">


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}

$sql="SELECT * from phone";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
if($rowcount>0)
{
  while($count<$rowcount)
  {
  $row=mysqli_fetch_array($result);
//echo "<div style='border:1px solid black;width:40px;height:50px'>";

echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3' style='float:left; margin:2px;'>";
echo "<img src='uploads/".$row['image']."'/>";
echo "<div style='text-align:center;'>";
echo "<a href='desc.php?product_id=".$row['product_id']."& product_type=".$row['product_type']."'/>";
echo $row['product_name']."</div>";
echo "</a>";
echo "</div>";
//echo "<br>";
$count++;
}
}

?>
</div> 
 
</div>

</body>
</html>