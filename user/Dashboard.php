<!DOCTYPE html>
<?php

session_start();

?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<style>
* {
    box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
    /*height: 300px;  Should be removed. Only for demonstration */
}

.left,right {
  width: 25%;
}

.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<style>
.transparent_btn {
	display: inline-block;
	padding: 10px 14px;
	
	color: #FFFF00; 
	
	border: 1px solid #FFFF00;
	width:300px;
	text-decoration: none;
	font-size: 25px;
	line-height: 120%;
	background-color: rgba(255,255,255, 0);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background-color 300ms ease;
	-moz-transition: background-color 300ms ease;
	transition: background-color 300ms ease;
	cursor: pointer;
}
.transparent_btn:hover {
	background-color: rgba(255,255,255, 0.3);
	color: #000000;
}

body{
    height: 100%;
    width:100%;
    margin: 0;
}

.bg {
    /* The image used */"Images/Logo.png");

    /* Full height */
    height: 100%;
    width:100%;
	
	background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/cps1.png" alt="Canteen Management System" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li>
                            <a href="purchase.php">
                                <i class="fa fa-cart-plus"></i>Purchase</a>
                        </li>
						<li>
                            <a href="food_menu.php">
                                <i class="fa fa-table"></i>Menu</a>
                        </li>
						<li>
                            <a href="orders.php">
                                <i class="far fa-clock"></i>Orders</a>
                        </li>
						<li>
                            <a href="notifications.php">
                                <i class="far fa-bell"></i>Notifications</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Services</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
									<a href="#">
									<i class="far fa-check-square"></i>About-Us</a>
								</li>
								<li>
									<a href="#">
									<i class="far fa-check-square"></i>Contact-Us</a>
								</li>
								<li>
									<a href="#">
									<i class="far fa-check-square"></i>Feed Back</a>
								</li>
								<li>
									<a href="#">
									<i class="far fa-check-square"></i>Help Center</a>
								</li>
                            </ul>
                        </li>
					</ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
	
		
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for products &amp; price..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
							<div class="title-3" align='right'>
					
	<!-- Php codes -->
                            
<?php
    include('Connection.php');
    if($_SESSION["id"]) 
    {
        $user=$_SESSION["id"];
        $pass=$_SESSION["pwd"];
        $balance=0;
        $sql="select * from users ;";
        $result=mysqli_query($con,$sql);

        for($i=0;$i<mysqli_num_rows($result);$i++)
        {
            //  $use[]=mysqli_result($result,$i,"UserId");
            //  $pas[]=mysqli_result($result,$i,"Password");
            //  $phot[]=mysqli_result($result,$i,"Photo");
            //  $mail[]=mysqli_result($result,$i,"Mail");
         
         $row = mysqli_fetch_array($result);

        
        if(($user==$row['User_Id']) && ($pass==$row['Password']))
        {
            $photo="profile.jpg";
            $email=$row['Mail'] ;
            $balance=$row["Wallet"];
        }    
        }
    }

     
    // echo "$user $balance uploads/$photo $email"; 
                                                
                echo "  <input class='au-input' type='text' value='Balance: ₹ $balance' readonly/>
                            </div>
                            <div>
                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                        <div class='image'>
                                            <img src='uploads/$photo' alt='$user' width='30' height='30'/>
                                        </div>
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#'>$user</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='uploads/$photo' alt='$user' />
                                                    </a>
                                                </div>
                                                <div class='content'>
                                                    <h5 class='name'>
                                                        <a href='#'>$user</a>
                                                    </h5>
                                                    <span class='email'>$email</span>
                                                </div>
                                            </div>";
 ?>


                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="recover.php">
                                                        <i class="zmdi zmdi-settings"></i>Change Password</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="AddMoney.php">
                                                        <i class="zmdi zmdi-money-box"></i>Add Money</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            
			<!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
					
    <table border="0" align='left' width="55%">
		<tr align='left'><th colspan='7' ><BR>&nbsp;Welcome,<BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You will find the latest information about us on this page. Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps everyone. If you want to contact us, please fill the contact form on our page. </th></tr>
	</table>

					
    <table border="3" align='right' width="40%">

	<tr align='center'><th colspan='7' > August, 2020</th></tr>
     <tr align="center"><th > Sun</th> <th>Mon</th> <th>Tue</th> <th>Wed</th> <th>Thu</th> <th>Fri</th> <th>Sat</th> </tr>
	<?php
	$date=1;
	$cdate=date("Y/m/d");
	$cdd=$cdate[8].$cdate[9];
	//echo ("<td></td> <td></td> <td></td> ");
	while($date<31) 
	{
		echo "<tr align='center'>";
		for($j=0;$j<7;$j++)
		{	
			if($j==0 && $date==1)
			{
				echo ("<td ></td> ");
				//echo ("<td></td> <td></td> <td></td> ");
				continue;
			}
			if($j==1 && $date==1)
			{
				echo ("<td></td> ");
				//echo ("<td></td> <td></td> <td></td> ");
				continue;
			}
			if($j==2 && $date==1)
			{
				echo ("<td></td> ");
				//echo ("<td></td> <td></td> <td></td> ");
				continue;
			}
			if($j==3 && $date==1)
			{
				echo ("<td></td> ");
				//echo ("<td></td> <td></td> <td></td> ");
				continue;
			}
            if($j==4 && $date==1)
            {
                echo ("<td></td> ");
                //echo ("<td></td> <td></td> <td></td> ");
                continue;
            }
            if($j==5 && $date==1)
            {
                echo ("<td></td> ");
                //echo ("<td></td> <td></td> <td></td> ");
                continue;
            }
			if( $date<=31)
			{
				if($cdd==$date)
				{
					echo ("<td bgcolor='yellow'><b>$date</b></td>");
					$date++;
				}
				else if($j==0)
				{
				echo "<td ><font color='red'><b>$date</b></font></td>";
				$date++;
				}
				else
				{
					echo "<td >$date</td>";
					$date++;
				}
				if($date==31)
				{
					echo "<td >$date</td>";
                    echo "<td >&nbsp;</td>";
                    echo "<td >&nbsp;</td>";
                    echo "<td >&nbsp;</td>";
                    echo "<td >&nbsp;</td>";
                    echo "<td >&nbsp;</td>";
					$date++;
				}
                //else if ($date>31)
                //{
                //    echo "<td >&nbsp;</td>";
                //    $date++;
                //}
			
			}
		}
		echo "</tr>";
	}
?>
</table>

<BR><BR><BR><Br><BR><BR><BR><Br><BR>
<div>
<center>
<div class="w3-content w3-section" >
  <img class="mySlides" src="image1.jpg" alt='img1' width="500" height="200" border="5">
  <img class="mySlides" src="image2.jpg" alt='img2' width="500" height="200" border="5">
  <img class="mySlides" src="image4.jpg" alt='img4' width="500" height="200" border="5">
  <img class="mySlides" src="image5.jpg" alt='img5' width="500" height="200" border="5">
  
</div>
</center>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

					</div>
					
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
		

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
