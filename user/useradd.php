<?php
    include ('Connection.php');
    session_start();
  	//$user=$_SESSION['id'];
    $Wallet=0.0;

    $Password=$_POST['Password'];
    $User_Id=$_POST['User_Id'];
    $Phone=$_POST['Phone'];

    $sql="INSERT INTO `users` (`User_Id`, `First_Name`, `Last_Name`, `Dob`, `Password`, `Phone`, `Mail`, `Wallet`) VALUES ('$User_Id','First_Name','Last_Name','Dob','$Password','$Phone','Mail','$Wallet')";
    $result1 = mysqli_query($con,$sql);
	//}
	header("Location:users.php");
?>