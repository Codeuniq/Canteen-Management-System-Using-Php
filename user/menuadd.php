<?php
    include ('Connection.php');
    session_start();
  	$user=$_SESSION['id'];  
    $Item_Stock=$_POST['Item_Stock'];
    $Item_Price=$_POST['Item_Price'];
    $Item_Name=$_POST['Item_Name'];
    $sql="INSERT INTO `menu` (`Item_Name`, `Item_Price`, `Item_Stock`) VALUES('$Item_Name','$Item_Price','$Item_Stock')";
    $result1 = mysqli_query($con,$sql);
	//}
	header("Location:update_menu.php");
?>