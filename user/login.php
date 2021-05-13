<?php
session_start();
$message="";
if(count($_POST)>0) 
{
include('Connection.php');
$result = mysqli_query($con,"SELECT * FROM users WHERE User_Id = '" . $_POST["id"] . "' and Password = '". $_POST["pwd"]."';");

$check =mysqli_num_rows($result);



if($check>0) {
  for($i=0;$i<$check;$i++)
 {
  $_SESSION["pwd"]=$_POST["pwd"];
  $_SESSION["id"]=$_POST["id"];
 }
}
 else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"]))
{ include('file.php');
  if($admin==$_SESSION["id"])
    header("Location:ADashboard.php");
  else
    header("Location:Dashboard.php");
  //echo $_SESSION["id"];
  //echo $admin;
  
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body >
	<br><BR><br><BR><br><BR><br><BR><br>
<!-- partial:index.partial.html -->

<div id="bg"></div>

<form action="" method="post">
    
  <label for=""></label>
  <input type="text" name="id" id="" placeholder="Username" class="email" required="required">
    
  <label for=""></label>
  <input type="password" name="pwd" id="" placeholder="Password" class="pass" required="required">
    
  <button type="submit">login to your account</button>
  <BR><br>
    <div class="message"> <?php if($message!="") { echo $message; } ?></div>
</form>
  <script  src="js/index.js"></script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
