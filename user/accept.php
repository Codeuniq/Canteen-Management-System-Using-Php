<?php
  include ('Connection.php');
  session_start();
  //$user=$_SESSION['id'];  
  //if (isset($_POST['Approve']))
  //{   
    
    $Id = $_POST['id'];
   // $sql=mysqli_query($con,"select * from `orders` where id = $Id ");
    //$row=mysqli_fetch_array($sql);
    //$Id=$row["id"];

    $query=mysqli_query($con,"UPDATE `orders` SET `Status` = 'Delivered' WHERE id = $Id ");

    //$text="Your post \'".$desc."\' is approved by admin. <a style=\'"."color:blue;"."\' href=\'"."Feed.php#show_post".$Post_Id."\'>Click here</a> to view your post.";

    //$query3=mysqli_query($con,"INSERT INTO `notifications` (`UserId`, `Content`, `Date`, `Time`, `Status`) VALUES ('$UserId', '$text', '$Date', '$Time', 'unread')");
   
 // }  
?>


