<?php
    include ('Connection.php');
    session_start();
  	//$user=$_SESSION['id'];  
  	//if (isset($_POST['update']))
  	//{ 
    $Item_Id=$_POST['Item_Id'];
    $Item_Stock=$_POST['Item_Stock'];
    $Item_Price=$_POST['Item_Price'];
    $Item_Name=$_POST['Item_Name'];
    $sql="UPDATE menu SET Item_Stock='$Item_Stock',Item_Name='$Item_Name',Item_Price=$Item_Price WHERE Item_Id=$Item_Id";
    $result1 = mysqli_query($con,$sql);
	//}
	header("Location:update_menu.php");
?>