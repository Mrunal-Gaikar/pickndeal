<?php
$product_id=$_POST['product_id'];
$product_type=$_POST['product_type'];



session_start();
if(isset($_SESSION['user_name']))
{
//echo "user logged in"."<br>";
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="project1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
	{
	      die("Connection failed:".mysqli_connect_error());
    }
	else
	{ if($product_type=="Camera"){
		$sql="SELECT * from cart";
	    $result=mysqli_query($conn,$sql);
	    $rowcount=mysqli_num_rows($result);
	    $count=0;
	    if($rowcount>0)
	    {
		   while($count<$rowcount)
		  {
			 $row=mysqli_fetch_array($result);
			 if($row['product_id']==$product_id)
			 {
				 $product_name=$row['product_name'];
				 $city_name=$row['city_name'];
				 $product_type=$row['product_type'];
				 $brand_type=$row['brand_type'];
				 $image=$row['image'];
				 $product_description=$row['product_desc'];
				 $cost=$row['cost'];
			 }
			 $count++;
		  }	
	    }}
     else{
         $sql="SELECT * from phone";
	    $result=mysqli_query($conn,$sql);
	    $rowcount=mysqli_num_rows($result);
	    $count=0;
	    if($rowcount>0)
	    {
		   while($count<$rowcount)
		  {
			 $row=mysqli_fetch_array($result);
			 if($row['product_id']==$product_id)
			 {
				 $product_name=$row['product_name'];
				 $city_name=$row['city_name'];
				 $product_type=$row['product_type'];
				 $brand_type=$row['brand_type'];
				 $image=$row['image'];
				 $product_description=$row['product_desc'];
				 $cost=$row['cost'];
			 }
			 $count++;
		  }	
	    }}
    }
$sql1="INSERT into mycart(product_id,product_name,city_name,product_type,brand_type,image,product_desc,cost)
values('$product_id','$product_name','$city_name','$product_type','brand_type','$image','$product_description','$cost')";
mysqli_query($conn,$sql1);
    header("Location:http://localhost:8080/pickdeal/mycart.php?product_type=$product_type");
    
}	
else
{
	header("Location:http://localhost:8080/pickdeal/login.html");
}
?>