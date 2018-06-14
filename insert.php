<?php
$product_id=$_POST['pid'];
$product_name=$_POST['pname'];
$city_name=$_POST['cname'];
$product_type=$_POST['ptype'];
$brand_type=$_POST['btype'];
$image=$_FILES['image']['name'];
$product_description=$_POST['pdesc'];
$cost=$_POST['cost'];
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
else	
{
	//echo "Connected successfully"."<br>";
    if($product_type=="Camera"){
	$sql="INSERT into cart(product_id,product_name,city_name,product_type,brand_type,image,product_desc,cost)
	values('$product_id','$product_name','$city_name','$product_type','$brand_type','$image','$product_description','$cost')";
	$result=mysqli_query($conn,$sql);


	if(!$result)
	{
		echo " Product Couldn't be Inserted".mysqli_error($con);

	}
	else
		{
			echo "<script>alert('Product inserted!');</script>";
			if($_FILES["image"]["error"]>0)
		{
			echo "Error:".$_FILES["image"]["error"]."<br>";
		}
		else
		{

			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
			
		}
		}}
    else
    {
       $product_description=mysqli_real_escape_string($conn, $product_description);
        $sql="INSERT into phone(product_id,product_name,city_name,product_type,brand_type,image,product_desc,cost)
	values('$product_id','$product_name','$city_name','$product_type','$brand_type','$image','$product_description','$cost')";
	$result=mysqli_query($conn,$sql);


	if(!$result)
	{
		echo " Product Couldn't be Inserted".mysqli_error($con);

	}
	else
		{
			echo "<script>alert('Product inserted!');</script>";
			if($_FILES["image"]["error"]>0)
		{
			echo "Error:".$_FILES["image"]["error"]."<br>";
		}
		else
		{

			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
			
		}
		}
    }
}		

		
	include("AddProduct.html");
	

?>