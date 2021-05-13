<?php 

session_start();

include('Connection.php');

$user=$_POST['User_Id'];
$Add=$_POST['add'];
//$user=$_POST['user'];
$pass=$_POST['Password'];
if($Add<=0)
{
echo "<script>alert('IInvalid Money')
	window.location.href='AddMoney.php'
	</script>";
	exit; 
}

if($_SESSION["id"]) 
{
	$user=$_SESSION["id"];
	$sql="select * from users";
	$result=mysqli_query($con,$sql);
	date_default_timezone_set('Asia/Kolkata');
    $Date=date("d/m/Y");
    $Time=date("h:i:s A");


	for($i=0;$i<mysqli_num_rows($result);$i++)
	{
		$row = mysqli_fetch_array($result);
		if(($user==$row['User_Id']) && ($pass==$row['Password']))
		{
			
			$sql2= "update users set Wallet=Wallet+$Add where User_Id='$user'";
			$result2=mysqli_query($con,$sql2);
			$sql="INSERT INTO `status`(`User_Id`, `Notification`) VALUES ('$user','₹ $Add added to Wallet, on $Date $Time. ')";
			$result=mysqli_query($con,$sql);
			echo "<script>alert('Successfully Updated')
				window.location.href='notifications.php'
				</script>";
				exit;
		}
		echo "<script>alert('Invalid user Credintial')
	window.location.href='AddMoney.php'
	</script>";
	exit;   
    }
 }

mysqli_close($con)
?> 




