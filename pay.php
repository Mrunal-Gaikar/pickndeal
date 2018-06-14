<?php
session_start();
$array=array(5239512517733016);
if($_POST["captcha"]==$_SESSION['vercode'])
{
	echo "<h3>Verification successful</h3>"."<br>";
	//echo $_POST['cno'];
	if($_POST['cno']!=$array['0'])
	{
		echo "<script>alert('Transaction is successful.Thanks for payment');</script>";
		//echo "<a href='logout.php'>Logout</a>";
//		header("Location:http://localhost:8080/pickdeal/index.php");
        ?>
        
        <a href="index.php">Back to Home</a>
        
        <?php

	}
	else
	{
		echo "Invalid Card Number";
	}
}	
else
{
	echo "Invalid Captcha! Please try again!";
}
?>