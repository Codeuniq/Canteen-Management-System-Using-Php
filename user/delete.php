<?php
    include ('Connection.php');
    session_start();
  	//$user=$_SESSION['id'];  
  	if (isset($_POST['delete']))
  	{ 
    	$Item_Id=$_POST['id'];
    	$sql="Delete FROM menu WHERE Item_Id=$Item_Id";
    	$result1 = mysqli_query($con,$sql);
	}
?>