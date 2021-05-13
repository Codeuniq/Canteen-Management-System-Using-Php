<?php
    include ('Connection.php');
    session_start();
  	//$user=$_SESSION['id'];  
  	if (isset($_POST['delete']))
  	{ 
    	$User_Id=$_POST['id'];
    	$sql="Delete FROM users WHERE User_Id= '$User_Id' ";
    	$result1 = mysqli_query($con,$sql);
	}
?>