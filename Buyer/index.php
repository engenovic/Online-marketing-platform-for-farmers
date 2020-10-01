<?php 
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../feedback/denyAccess.php?error=You must login as a buyer!! ");
}

include_once 'display.php';
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
		}, false)

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
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
					<li class="text-center border-right text-white">
					<a href="account.php" class="text-white">
								<i></i>My Account</a>
						</li>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="trackOrder.php" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> +254707142565
						</li>
						<li class="text-center border-right text-white">
							<a href="../Home/logout.php" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Sign Out </a>
						</li>
					</ul>
					
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select County</option>
					<option>Murang'a</option>
					<option>Kirinyaga</option>
					<option>Embu</option>
					<option>Nyeri</option>
					<option>Kiambu</option>
				</optgroup>
				<optgroup label="Murang'a">
					<option>Murang’a South</option>
					<option> Mathioya</option>
					<option>Kangema</option>
					<option>Gatanga</option>
					<option>Kigumo</option>
					<option>Kandara</option>
					<option>Kahuro</option>
					<option>Kiharu</option>
				</optgroup>
				<optgroup label="Kirinyaga">
					<option>Kirinyaga Central</option>
					<option>Kirinyaga East</option>
					<option> Kirinyaga West</option>
					<option>Mwea East</option>
					<option>Mwea West</option>
				</optgroup>
				<optgroup label="Embu">
					<option>Manyatta</option>
					<option>Runyenjes</option>
					<option>Mbeere North</option>
					<option>Mbeere South</option>
				</optgroup>
				<optgroup label="Nyeri">
					<option>Nyeri South</option>
					<option>Nyeri Central</option>
					<option>Mathira West</option>
					<option>Mathira East</option>
					<option>Mukurweini</option>
					<option>Tetu</option>
				</optgroup>
				<optgroup label="Kiambu">
					<option>​​ Kikuyu</option>
					<option>Limuru</option>
					<option>Gatundu South</option>
					<option>Gatundu North</option>
					<option>Kabete</option>
					<option>​​ Lari</option>
					<option>Kiambu Town</option>
					<option>Ruiri</option>
					<option>Kiambaa</option>
					<option>Juja</option>
					<option>Thika Town</option>
					<option>Githunguri</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid" style="height:70px;width:70px">onMark Ltd
						</a>
					</h1>
					<h2><?php echo "Welcome"." ". $_SESSION['username'] ?></h2>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- cart details -->
						
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2" style=" position: fixed !important ;
  top: 10!important; left:20 !important; margin-left:700px !important;z-index: 4 !important" id="cart_body">
                 <a href="checkout.php">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1 ">
								<form action="checkout.php" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i><span id="cart_items">0</span>
									</button>
								</form>
							</div>
							</a>
						</div>
						
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
						 <option value="Fruits">All Categories</option>
							<option value="Fruits">Fruits </option>
							<option value="Flowers">Flowers </option>
							<option value="Vegetables">Vegetables</option>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Buyer Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Fruits
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Available Fruits Products</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">

												<?php 

                                                foreach ($fruits as $fruit) {
                                                	# code...
                                                	echo '
                                                <li>
													<a href="product.php?id='.$fruit["productid"].'&cat=1">'.$fruit["prodName"].'</a>
												</li>
                                                	';
                                                }
												 ?>
										
									
											</ul>
										</div>
								
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Flowers
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Available Flowers Categories</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<?php 

                                                foreach ($flowers as $flower) {
                                                	# code...
                                                	echo '
                                                <li>
													<a href="product.php?id='.$flower["productid"].'&cat=2">'.$flower["prodName"].'</a>
												</li>
                                                	';
                                                }
												 ?>
												
											</ul>
										</div>
						
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Vegetables
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Available Vegetable categories</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<?php 

                                                foreach ($vegetables as $vegetable) {
                                                	# code...
                                                	echo '
                                                 <li>
													<a href="product.php?id='.$vegetable["productid"].'&cat=3">'.$vegetable["prodName"].'</a>
												</li>
                                                	';
                                                	
                                                }
												 ?>
												
											</ul>
										</div>
								
										
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>We connect
								<span>You</span> directly</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">to Trusted
								<span></span>
								Sellers
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Take 
								<span>Home</span> high</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Quality
								<span>Products</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get 
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">on
								<span>Products you Buy</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Make 
								<span>your</span> Money</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Count!
								<span>Join us... and let's keep moving</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>F</span>ruits
				</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Access sweet Fruits</h3>
							<div class="row">

								<?php
                              foreach ($products as $product) {
                              	# code...
                              	if($product["CategoryID"]==1 AND $product['ProductID']==2) {
                              	    echo '

<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/1.png" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#">'.$product["prodName"].'</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">Kshs.'.$product["UPrice"].'.00</span>
												<del>Kshs.'.$product["UPrice"].'.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" id="pid" value="'.$product["PID"].'" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" id="name" value="'.$product["prodName"].'" />
														<input type="hidden" name="amount" id="price" value="'.$product["UPrice"].'.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="KSHS." />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="button" name="submit" value="Add to cart" class="button btn submit" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
		

                              	    ';


                           


                              	    
                              	}
                              }
                              
								  ?>

							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Vegetables</h3>
							<div class="row">
							
	<?php
                              foreach ($products as $product) {
                              	# code...
                              	if($product["CategoryID"]==3 AND $product['ProductID']==1) {
                              	    echo '

<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/3.png" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#">'.$product["prodName"].'</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">Kshs.'.$product["UPrice"].'.00</span>
												<del>Kshs.'.$product["UPrice"].'.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" id="pid" value="'.$product["PID"].'" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" id="name" value="'.$product["prodName"].'" />
														<input type="hidden" name="amount" id="price" value="'.$product["UPrice"].'.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="KSHS." />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="button" name="submit" value="Add to cart" class="button btn submit" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
		

                              	    ';


                           


                              	    
                              	}
                              }
                              
								  ?>

							</div>
						</div>
						<!-- //second section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Flowers</h3>
							<div class="row">
					<?php
                              foreach ($products as $product) {
                              	# code...
                              	if($product["CategoryID"]==2 AND $product['ProductID']==1) {
                              	    echo '

<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/2.png" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#">'.$product["prodName"].'</a>
                                               
											</h4>


											<div class="info-product-price my-2">
												<span class="item_price">Kshs.'.$product["UPrice"].'.00</span>
												<del>Kshs.'.$product["UPrice"].'.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" id="pid" value="'.$product["PID"].'" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" id="name" value="'.$product["prodName"].'" />
														<input type="hidden" name="amount" id="price" value="'.$product["UPrice"].'.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="KSHS." />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="button" name="submit" value="Add to cart" class="button btn submit" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
		

                              	    ';


                           


                              	    
                              	}
                              }
                              
								  ?>
							</div>
						</div>
						
						<!-- //fourth section -->
					</div>
					
				</div>
				
	<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>

						
						</div>
						<a class="btn btn-primary">5</a>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Counties We operate in</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Murang’a</a>
									</li>
									<li class="my-1">
										<a href="#">Embu</a>
									</li>
									<li>
										<a href="#">Kirinyaga</a>
									</li>
									<li class="my-1">
										<a href="#">Kiambu</a>
									</li>
									<li>
										<a href="#">Nyeri</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">HeadQuarters</h3>
							We are based in Kigogoini opposite
							           Dedan Kimathi University of Technology
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Customer Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/m1.png" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">American Rose</a>
											<a href="" class="price-mar mt-2">Kshs.23.00</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/m3.png" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Lavender Orange</a>
											<a href="" class="price-mar mt-2">Kshs.30.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/m2.png" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Ambrane Lemon</a>
											<a href="" class="price-mar mt-2">Kshs.25.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over Kshs.1</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md- my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>To Your Location</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="product.php">Fruits</a>
							</li>
							<li class="mb-3">
								<a href="product.php">Flowers</a>
							</li>
							<li class="mb-3">
								<a href="product.php">Vegetables</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm- mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="../Home/about.php">About Us</a>
							</li>
							<li class="mb-3">
								<a href="../Home/contact.php">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="index.php">Home</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md- mt-4">
						<h3 class="text-white font-weight-bold mb-3">Talk to Us</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 123 Nyeri, KENYA.</li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +25477142565 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com">ngenovic@onMarkLtd.co.ke</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md- mt-4">
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 219 onMarkLtd. All rights reserved | Designed by Engineer</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function () {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop:$(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


	<script type="text/javascript">
	 var quantity=0
	$(document).ready(function(){

		var submit=document.querySelector(".submit");

		$(".submit").on("click",function(){

			var pid=$("#pid").val();
			var name=$("#name").val();
			var price=$("#price").val();
			 quantity+=1;

         
		var	formData = new FormData(this.parentElement.parentElement);
			//var formElements = document.forms['myform'].elements['inputTypeName'].value;
         
         $("#cart_items").text(quantity);
			console.log(quantity);

// for(var pair of formData.entries()) {
//    console.log(pair[0]+ ', '+ pair[1]); 
// }
			//send to the database
		$.post( "insertcart.php", { id:formData.get("add"),quantity:1,price:formData.get("amount"),name:formData.get("item_name")  })
  .done(function( data ) {
    if(data=="success") {
  	alert("Item Added to Cart")
  }else {
  	alert("Failed to add Item to Cart")
  }
  });

		})


		//redirect when click card
		$("#cart_body").on("click",()=>{

			window.location="checkout.php";
		})
	})


</script>
</body>

</html>