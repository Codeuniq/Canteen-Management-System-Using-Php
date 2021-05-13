<!DOCTYPE html>
<?php

session_start();

?>
<html lang="en">
<style>
table {
    width: 70%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
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
                <a href="https://parkurcars.000webhostapp.com/">
                    <img src="images/icon/cps1.png" alt="Car Parking System" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li class="active" >
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
        $sql="select * from users";
        $result=mysqli_query($con,$sql);

        for($i=0;$i<mysqli_num_rows($result);$i++)
        {
         
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
												
				echo "	<input class='au-input' type='text' value='Balance: ₹ $balance' readonly/>
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
                    
                    <?php
                    include('Connection.php');
                    if($_SESSION["id"]) 
                    {
                        $user=$_SESSION["id"];
                        $pass=$_SESSION["pwd"];

                        $sql="SELECT * FROM menu WHERE Item_Stock>0";
                        $result1 = mysqli_query($con,$sql);
                    }

                    echo "<form name='frmbuy' action=''>";
                    echo "<table>
                    <tr>
                    <th width='80'>Sl No.</th>
                    <th>Item Name</th>
                    <th width='100'>Price </th>
                    <th width='100'>Count </th>
                    <th width='100'>Total Cost</th>
                    </tr>";

                    $i=1;
                    $sum=0.00;
                    while($row = mysqli_fetch_array($result1)) {
                        if(!empty($_POST['check_list'])) {
                            foreach($_POST['check_list'] as $check) {
                                if ($row['Item_Name'] == $check ) {
                            
                                    //echo $row['Item_Name'];
                      
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['Item_Name'] . "</td>";
                        echo "<td width='100'> <input style='width:80px;' value='".$row['Item_Price']."' type='text' id='price".$i."' disabled ></td>";
                        echo "<td width='100'> <input style='width:80px;' type='text' value='1' id='count".$i."' name='count".$i."' disabled></td>";
                        echo "<td width='100'> <input style='width:80px;' type='text' value='".$row['Item_Price']."' id='total".$i."' name='total".$i."' disabled></td>";
                        echo "</tr>";
                        $sum+=$row['Item_Price'];
                        $i++;
                         }
                            }
                        }
                    }
                    echo "<tr>
                        <th colspan='4'>Total Amount</th>
                        <th><input style='width:80px;' type='text' value='$sum' id='sumtotal' disabled></th>
                        </tr>";
                    echo "</table>";
                    mysqli_close($con);
                    ?>
                    <br>
                    <input type="button" class='btn btn-success' value="Calculate" onclick="Calc();">
                    <input type="button" class='btn btn-success' value="Confirm" onclick="Confirm();">
                    </form>
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

<script type="text/javascript">
  function Calc()
  { 
    var sumtot=0
    <?php
    include('Connection.php');
    $sql="SELECT * FROM menu WHERE Item_Stock>0";
    $result1 = mysqli_query($con,$sql);
    $i=1;
    while($row = mysqli_fetch_array($result1)) {
        if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
                if ($row['Item_Name'] == $check ) {
                    //$countitem[$i]=$_POST['count$i'];
                echo"  
                count=document.getElementById('count$i').value
                price=document.getElementById('price$i').value
                var sum = count*price
                var sumtot=sumtot+sum
                document.getElementById('total$i').value = sum 
                document.getElementById('sumtotal').value = sumtot ";
                //
                $i++;
                }
            }
        }
    }

    ?>
  }
  function Confirm(id)
  {
    <?php
    include('Connection.php');
    $sql="SELECT * FROM menu WHERE Item_Stock>0";
    $result1 = mysqli_query($con,$sql);
    $i=1;
    date_default_timezone_set('Asia/Kolkata');
    $Date=date("d/m/Y");
    $Time=date("h:i:s A");
    $tid=rand(1000,1000000);
    $orid="od_".$user.$tid;
    $trd="tr_".$user.$tid;
    while($row = mysqli_fetch_array($result1)) {
        if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
                if ($row['Item_Name'] == $check ) {
                $itemcount=1;
                $total=$itemcount*$row['Item_Price'];
                $sql="INSERT INTO `orders` (`Order_Id`, `Date`, `Time`, `User_Id`, `Item_Name`, `Item_Price`, `Item_Count`, `Total`) VALUES ('$orid', '$Date', '$Time', '$user', '".$row['Item_Name']."', '".$row['Item_Price']."', '$itemcount', '$total')";
                mysqli_query($con,$sql);
                $text="Purchased $itemcount $check..";
                $sql1="INSERT INTO `transaction` (`trans_Id`, `User_Id`, `trans_Date`, `trans_Time`, `Details`, `Amount`) VALUES('$trd','$user','$Date','$Time','$text','$total')";
                mysqli_query($con,$sql1);
                mysqli_query($con,"UPDATE `users` SET Wallet = Wallet-$total WHERE `User_Id` = '$user';");
                mysqli_query($con,"UPDATE `menu` SET Item_Stock = Item_Stock-$itemcount WHERE `Item_Name` ='$check' ");
                $i++;
                }
            }
        }
    }

    ?>
    $.ajax({
          type: "POST",
          url: "confirm.php",
          async: false,
          data: {
            id : id,
            Confirm: 1,
          },
          success: function(){
            
          },
 
        complete: function() {
            // success alerts
            alert('Your oder has been placed');
            window.location.href='orders.php';

        }
        });
    
    
  }
</script>

</body>

</html>
<!-- end document-->
