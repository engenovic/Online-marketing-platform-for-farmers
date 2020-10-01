<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Buyer Account</title>

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
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                       <a href="#" style="color:white">
                                    Welcome back User!
                                </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="index.php">Buyer Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">My Account</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- My Profile-->
			 <div class="col-lg-6">
                                    <div class="card-header">
                                       Personal Information
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <?php 
                                        include_once 'display.php';
                                            echo "
                                           <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>User Name:</strong></label>
                                                </div>
                                                <span class='help-block'>{$username}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Full Name:</strong></label>
                                                </div>
                                                <span class='help-block'>{$fullName}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Phone:</strong></label>
                                                </div>
                                                <span class='help-block'>+254{$phone}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>Email Address:</strong></label>
                                                </div>
                                                <span class='help-block'>{$email}</span>
                                            </div>
                                            <div class='row form-group'>
                                                <div class='col col-sm-5'>
                                                    <label for='input-small' class=' form-control-label'><strong>County:</strong></label>
                                                </div>
                                                <span class='help-block'>{$county}</span>
                                            </div>
                                            ";
                                        ?>
                                            
                                           
                                        </form>
                                    </div>
                                </div>
                                <div>
                                                <a href="updateProfile.php"><button id="payment-button" type="button" class="btn btn-lg btn-info btn-block>
                                                    <span id="payment-button-amount style=width="size:300px">Update My Information</span>
                                                    
                                                </button>
                                            </a>
                                            </div>
			<!---//End of Profile-->
            <!-- MY ORDERS-->
			<hr>
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">My Orders</h3>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>Order ID</th>
                                                <th>Ordered Item(s) </th>
                                                <th class="text-right">Price per unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        include_once 'display.php';
                                       foreach($orders as $order) {
                                            echo "
                                            <tr>
                                                <td>{$order['Date']}</td>
                                                <td>{$order['orderID']}</td>
                                                <td>{$order['orderedItem']}</td>
                                                <td class='text-right'>{$order['price']}</td>
                                            </tr>
                                            
                                      
                                            ";
                                           }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- END OF MY ORDERS-->

            <!-- My PAYAMENTS-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Purchase History</h3>
							<div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>Amount</th>
                                                <th>Mpesa Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           include_once 'display.php';
                                           foreach($debits as $debit){
                                            echo "<tr>
                                                <td>{$debit['Date']}</td>
                                                <td>{$debit['Amount']}</td>
                                                <td>{$debit['mpesaCode']}</td>
                                            </tr>";
                                             }
                                             ?>
                                          
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <a titlt= "print screen" alt="print screen";
                                    onclick= "window.print();" target="_blank"
                                    style="cursor:pointer;">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i name="print" ></i>PRINT</button></a>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 onMarkLtd. All rights reserved. Designed by Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
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