<?php
  include ('Connection.php');
  session_start();
  $user=$_SESSION['id'];  
  if (isset($_POST['Confirm']))
  {   
    $Order_Id=$_POST['id'];
    $total=0;
    $sql=mysqli_query($con,"select * from `orders` where Order_Id = '$Order_Id';");
    //$row=mysqli_fetch_array($sql);
    
    $text="Your order has been recieved.";
    $query3=mysqli_query($con,"INSERT INTO `status` (`User_Id`, `Notification`) VALUES ('$user', '$text')");
   
  }   
?>


