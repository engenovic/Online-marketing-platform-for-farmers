<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../feedback/denyAccess.php?error=You must login as a buyer!! ");
}

include 'display.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>onMark| Buyer Home</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Online Horticultural and Information System"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>

 <li class="list-inline-item active">
                                            <a href="index.php">Go to Home</a>
                                        </li>
	<h2 style="margin-left: 400px"> Update Your Information Below </h2>
 
	           <div class="row" style="margin-left: 300px">
                            <div class="col-lg-9" >
                                <?php
          if(isset($_GET['success'])) {
            echo "<div class='bg-success'>.".$_GET['success']."</div>";
          }
                                 ?>
                                <div class=>
                                    <div class="card-header"><strong>Enter New Data </strong></div>
                                   <div class="card-body card-block">
                                        <form action="updateB.php" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" value="<?php echo $email ?>"  class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="number" id="phone" name="phone" value="<?php echo $phone ?>" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="New Password" class="form-control" required="">
                                                </div>
                                         
                                            </div>
                                            <input type="hidden" name="session" value="<?php echo $_SESSION['username']  ?>">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="text" id="Fname" name="Fname" value="<?php echo $fname ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="text" id="Lname" name="Lname" value="<?php echo $lname ?>" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class></i>
                                                    </div>
                                                    <input type="text" id="county" name="county" placeholder="Kirinyaga" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm" style="width: 450px; margin-left: 200px" name="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>	
                            <div class="col-md-12">
                                <div class="copyright" style="margin-left: 350px">
                                    <p>Copyright © 2019 onMarkLtd. All rights reserved. Designed by Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
</body>
</html>