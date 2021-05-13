<?php 
session_start();

include('Connection.php');

$pass=$_POST['cpwd'];
$pass1=$_POST['pwd1'];
$pass2=$_POST['pwd2'];
date_default_timezone_set('Asia/Kolkata');
$Date=date("d/m/Y");
$Time=date("h:i:s A");

if($pass1!=$pass2)
{
	echo "<script>alert('Confirm password')
	window.location.href='recover.php'
	</script>";
	exit;
}

if($_SESSION["id"]) 
	{
		$user=$_SESSION["id"];
		
		$sql="select * from users where User_Id='$user'";
		$result=mysqli_query($con,$sql);

		for($i=0;$i<mysqli_num_rows($result);$i++)
		{
			$row = mysqli_fetch_array($result);
			
			if(($user==$row['User_Id']) && ($pass==$row['Password']))
			{   			
				mysqli_query($con,"update users set Password='$pass1' where User_Id='$user'");
				$sql="INSERT INTO `status`(`User_Id`, `Notification`) VALUES ('$user','Password changed, on $Date $Time. ')";
				$result=mysqli_query($con,$sql);
				echo "<script>alert('Successfully Updated')
				window.location.href='logout.php'
				</script>";
				exit;
			}    
    
		}
	}
 echo "<script>alert('Invalid user Credintial')
	window.location.href='recover.php'
	</script>";
	exit;
mysqli_close($con)
?> 
