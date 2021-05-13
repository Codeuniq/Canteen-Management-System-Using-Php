<?php
    include ('Connection.php');
    session_start();
  	//$user=$_SESSION['id'];  
  	//if (isset($_POST['update']))
  	//{ 
    $User_Id=$_POST['User_Id'];
    $Phone=$_POST['Phone'];
    $Mail=$_POST['Mail'];
    $Wallet=$_POST['Wallet'];

    $sql="UPDATE users SET Phone='$Phone',Mail='$Mail',Wallet='$Wallet' WHERE User_Id = '$User_Id' ";
    $result1 = mysqli_query($con,$sql);
	  //}
	header("Location:users.php");
?>