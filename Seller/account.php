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
    <title>Seller Account</title>

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
                       <a href="index.php" style="color:white">
                                    Seller Home Page
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
                                            <a href="index.php">Seller Home</a>
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

            <!-- MY PROFILE-->
		 <div class="col-lg-6">
                                    <div class="card-header">
                                       Personal Information
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <?php 
                                        include 'display.php';
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
            <!-- END PROFILE-->
            <!-- MY ORDERS-->
			<hr>
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">My Supplies</h3>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Supply ID</th>
                                                <th>Supplied Product(s)</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        include_once 'display.php';
                                        foreach($supplys as $sp) {
                                            echo "
                                            <tr>
                                            <td>{$sp['SDate']}</td>
                                            <td>{$sp['supplyID']}</td>
                                            <td>{$sp['suppliedItem']}</td>
                                            <td >Kshs.{$sp['Total']}</td>
                                            
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
                            <h3 class="title-5 m-b-35">Withdrawal History</h3>
							<div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Type</th>
												<th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										include_once 'display.php';
										foreach($credits as $cd){
											echo "<tr>
                                                <td>{$cd['Date']}</td>
                                                <td>{$cd['Amount']}</td>
                                                <td>{$cd['Type']}</td>
												<td>{$cd['Balance']}</td>
                                            </tr>";
										}
										
										?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<div class="col-md-6 col-lg-3">
										<hr>
										 <div class="card-title">
                                            <h3 class="text-center title-2">Current Balance:</h3>
											<?php  
                                             echo "<h2 id='balance'>$Balance</h2>"?> 
                                        </div>
                                        <hr>
                                        <form>
										 <?php 
										 include_once 'display.php';
										 echo " 
										 <div class='form-group'>
                                                <label for='cc-payment' class='control-label mb-1'>Enter Amount to Withdraw</label>
                                                <input id='w-amount' name='amount' type='text' class='form-control' aria-required='true' aria-invalid='false' value=''>
                                            </div>
                                            <div class='form-group has-success'>
                                                <label for='cc-name' class='control-label mb-1'>Phone Number to Receive Payment</label>
                                                <input id='w-phone' name='phone' type='text' class='form-control cc-name valid' data-val='true' data-val-required='Please enter the name on card'
                                                    autocomplete='cc-name' aria-required='true' aria-invalid='false' aria-describedby='cc-name-error'>
                                                <span class='help-block field-validation-valid' data-valmsg-for='cc-name' data-valmsg-replace='true'></span>
                                            </div>
											";
										 
										 ?>
                                            
                                            <div>
                                                <button id="payment-button1" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Withdraw</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
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
                                <p>Copyright © 2019 onMarkLtd. All rights reserved.</p>
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
    <script type="text/javascript">
        
        $(document).ready(function(){
  $("#payment-button1").on("click",function(e){

  
e.preventDefault();
    var balance=parseInt($("#balance").text());
    var amount=parseInt($("#w-amount").val());
    var phone=$("#w-phone").val();

  if(amount>balance) {
    alert("Your have insufficient balance")
  }else {

    $.post("withdraw.php",{balance:balance,amount:amount,phone:phone}).done(function(res){

        alert(res);

        location.reload(true);
    })
  }
  })
        })
    </script>

</body>

</html>
<!-- end document-->