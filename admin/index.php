<?php 
session_start();
if(!isset($_SESSION['Admin'])) {
	header("Location: ../feedback/denyAccess.php?error=Access Denied");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Dashboard</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" >
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
								
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
                            <div class="header-button">
                                <div class="account-wrap" style="margin-left:580%;margin-Top:10%" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="Ngeno Victor" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Engineer</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Engineer Ngeno</a>
                                                    </h5>
                                                    <span class="email">engenovic@onMarkLtd.co.ke</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="../Home/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
        
                                            </div>
                                            <div class="account-dropdown__footer">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
					 <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                include_once  'binding.php';
                                            echo "$Mnum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Users</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                            <h2><?php
                                                include_once 'binding.php';
                                            echo "$Spnum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Current Supplies</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                            <h2><?php
                                                include_once 'binding.php';
                                            echo "$Mnnum_rows" ;
                                                ?>
                                                </h2>
                                                <span>Average Transactions</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
						
									<div>
						<div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                              
                                        
											  <h3 class="title-5 m-b-35">A. Pending Supplies</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>supply ID</th>
                                                <th>Supplier Name</th>
                                                <th>Supplied Products</th>
                                                <th class="text-right">Total Quote Price</th>
                                                <th class="text-right">Supplied Date</th>
                                                <th class="text-right">County</th>
                                                <th class="text-right">Location</th>
                                                <th class="text-right">Landmark</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        include_once 'binding.php';
                                        foreach($supplies as $supply) {
                                            echo "
                                            <tr>
                                            <td>{$supply['supplyid']}</td>
                                            <td>{$supply['fullName']}</td>
                                            <td>{$supply['SuppliedProduct']}</td>
                                            <td class='text-right'>Khs.{$supply['Total']}</td>
                                            <td class='text-right'>{$supply['SDate']}</td>
                                            <td class='text-right'>{$supply['County']}</td>
                                            <td class='text-right'>{$supply['Location']}</td>
                                            <td class='text-right'>{$supply['Landmark']}</td>
                                            
                                         </tr>
                                            ";
                                           }
                                        ?>
										
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
                        </div>
									
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
						</div>
                        <hr>
					<h2> B. Buyer Transaction Summaries</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Buyer Name</th>
                                                <th>Ordered Date</th>
                                                <th class="text-right">Ordered Items</th>
                                                <th class="text-right">Total Debited </th>
												<th class="text-right">Order Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                        include_once 'binding.php';
                                        foreach($buyers as $buyer) {
                                            echo "
                                            
                                            <tr>
                                            <td>{$buyer['orderid']}</td>
                                            <td>{$buyer['fullName']}</td>
                                            <td>{$buyer['Date']}</td>
                                            <td class='text-right'>{$buyer['OrderedItem']}</td>
                                            <td class='text-right'>Kshs.{$buyer['Total']}</td>
                                         </tr>
                                            ";
                                           }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
                        </div>
						
                                            <hr>
						       <h2> C. Seller Transaction Summaries</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>supply ID</th>
                                                <th>Seller Name</th>
                                                <th>Supplied Date</th>
                                                <th class="text-right">Supplied Items</th>
                                                <th class="text-right">Total Credited</th>
												<th class="text-right">Supply Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        include_once 'binding.php';
                                        foreach($sellers as $seller) {
                                            echo "
                                            
                                            <tr>
                                            <td>{$seller['supplyid']}</td>
                                            <td>{$seller['fullName']}</td>
                                            <td>{$seller['SDate']}</td>
                                            <td class='text-right'>{$seller['SuppliedItem']}</td>
                                            <td class='text-right'>Kshs.{$seller['Total']}</td>
                                         </tr>
                                            ";
                                           }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
                        </div>
                        <hr> 
                        <h4> D. User Data and Financial Info </h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i> User data</h3>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>User ID</td>
                                                    <td>Name</td>
                                                    <td>User Type</td>
                                                    <td>Change Status</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            include_once 'binding.php';
                                            foreach($Users as $user)
                                            {
                                                echo "<tr>
                                                <td>
                                                    <label class='au-checkbox'>
                                                        <input type='checkbox'>
                                                        <span class='au-checkmark'></span>
                                                    </label>
                                                </td>
                                                <td>
                                                <div class='table-data__info'>
                                                <h6>{$user['username']}</h6>
                                                </td>
                                            </div>
                                                <td>
                                                    <div class='table-data__info'>
                                                        <h6>{$user['fullName']}</h6>
                                                        <span>
                                                            <a href='#'>{$user['email']}</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span >{$user['mtype']}</span>
                                                </td>
                                                <td>
                                                    <div class='rs-select2--trans rs-select2--sm'>
                                                        <select class='select' id={$user['username']} name='property'>
                                                            <option selected='selected'>Access</option>
                                                            <option value=''>Remove</option>
                                                        </select>
                                                        <div class='dropDownSelect2'></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class='more'>
                                                        <i class='zmdi zmdi-more'></i>
                                                    </span>
                                                </td>
                                            </tr>";
                                            }
                                            ?>   
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div><a titlt= "print screen" alt="print screen";
                                    onclick= "window.print();" target="_blank"
                                    style="cursor:pointer;">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i name="print" ></i>PRINT</button></a>
                                <!-- END USER DATA-->
                            </div>
                            <hr>
                            <div class="col-lg-6">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30"> $$Financial Accounting</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                        <thead>
                                                <tr>
                                                   <td>Transaction ID </td>
                                                    <td>Date</td>
                                                    <td>Amount</td>
                                                    <td>Type </td>
                                                    <td>Balance</td>
                                                </tr>
                                                <hr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            include_once  'binding.php';
                                            foreach($Trans as $ts){
                                                echo"<tr>
                                                <td>{$ts['TransID']}</td>
                                                <td>{$ts['DATE']}</td>
                                                <td>{$ts['Amount']}</td>
                                                <td>{$ts['transType']}</td>
                                                <td>{$ts['balance']}</td>
                                                </tr>";
                                            }
                                            ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
									<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="#"></i>PRINT</button>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
			
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <hr>
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 onMarkLtd. All rights reserved. Designed by Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
   $(document).ready(function(){

//change
$(".select").on("change",(e)=>{


var userid=e.target.id;

$.post("deleteProduct.php",{userid:userid}).done((res)=>{

    alert(res);
    location.reload(true);

})

})
   }) 

</script>
</body>

</html>
<!-- end document-->
