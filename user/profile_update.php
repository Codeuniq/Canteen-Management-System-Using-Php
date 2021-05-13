<?php
    include ('Connection.php');
    session_start();
  	$User_Id=$_SESSION['id'];  
  	//if (isset($_POST['update']))
  	//{ 
    //$User_Id=$_POST['User_Id'];
    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Dob=$_POST['Dob'];
    $Phone=$_POST['Phone'];
    $Mail=$_POST['Mail'];

    $sql="UPDATE users SET Last_Name='$Last_Name',First_Name='$First_Name',Dob='$Dob', Mail='$Mail', Phone='$Phone' WHERE User_Id='$User_Id' ";
    $result1 = mysqli_query($con,$sql);
	//}
	header("Location:profile.php");
?>