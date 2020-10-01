<?php 
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../Home/index.php?error=You must login as a seller!!");
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>onMark| Seller Home</title>
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
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
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
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid" >
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid" style="height:80px, width:80px">onMark Ltd
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<!-- header lists -->
					<ul>
					<li class="text-center border-right text-white" style="margin-left:400%">
					        Best Selling Product of the week:
							Lavendus Oranges
						</li>
					</ul>
			</div>
		</div>
	</div>
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
					<li class="text-center border-right text-white">
					<a  href="account.php"  class="text-white">
								<i class></i>My Account</a>
						</li>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> +254707142565
						</li>
						<li class="text-center border-right text-white">
							<a href="../Home/logout.php"  class="text-white">
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
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->

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
							<p>We market
								<span>You</span> Products</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">in
								<span></span>
								Realtime
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Don't 
								<span>wait</span> Supply</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Your Item
								<span>Today</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get
								<span>paid</span> instantly</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">for
								<span>your products</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>We
								<span>will</span> Pick Your</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Product
								<span>from your location</span>
							</h3>
							<a class="button2" href="#">Supply Now Below</a>
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
	<!-- supply form -->
	<hr>
 <h1 class="header-w3ls">
         Supply Your Product Now!
      </h1>
      <div class="art-bothside">
         <form action="insertSupply.php" method="post">
            <div class="info-agile-persnal">
               <h3>Pickup Details</h3>
               <div class="form-group">
                  <div class="form-mid-w3ls">
                     <input type="text" placeholder="Exact Location" required="" name="location" id="location">
                  </div>
				  
                  <div class="form-mid-w3ls">
                     <input type="text" placeholder="Land Mark" required="" name="landmark" id="landmark">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="form-group" >
                  <div class="form-right-w3ls">
                     <select class="form-control country-buttom" name="county" id="county">
                           Select County
                        <option value="Nyeri">Nyeri</option>
                        <option value="Kirinyaga">Kirinyaga</option>
                        <option value="Embu">Embu</option>
                        <option value="Muranga">Murang’a</option>
                        <option value="Kiambu">Kiambu</option>
                     </select>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="info-agile-persnal">
               <h3>Product Details</h3>
               <div class="form-mid-three-w3l">
                     <div class="iner-left">
                        <label>Quality Type</label>
                     </div>
                     <div class="form-inn"  >
                        <select class="opt-select country-buttom" id="type" name="quality">
                           <option value="High">High</option>
                           <option value="Medium">Medium</option>
                           <option value="Low">Low</option>
                        </select>
                     </div>
                  </div>
               <div class="form-group-three">
                  <div class="form-left-three-w3l">
                     <div class="iner-left">
                        <label>Quantity (Kgs):</label>
                     </div>
                     <div class="form-inn" >
                        <select class="opt-select country-buttom" name="quantity" id="qty">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-mid-three-w3l">
                     <div class="iner-left">
                        <label>Product Category</label>
                     </div>
                     <div class="form-inn">
                        <select class="opt-select country-buttom" id="categories" name="category">
                           <option value="1">Fruits</option>
                           <option value="2">Flowers</option>
                           <option value="3">Vegetables</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-mid-three-w3l">
                     <div class="iner-left">
                        <label>Product Name</label>
                     </div>
                     <div class="form-inn">
                        <select class="opt-select country-buttom" name="product" id="products">
						                <!-- Fruits-->
                           <option value="Bananas">Bananas</option>
                           <option value="Oranges">Oranges</option>
                           <option value="Avocadoes">Avocadoes</option>
						   <option value="Lemons">Lemons</option>
                           <option value="Plums">Plums</option>
						            <!-- Flowers-->
                           <option value="Roses">Roses</option>
						   <option value="Carnations">Carnations</option>
                           <option value="Lilies">Lilies</option>
                           <option value="Anthurium">Anthurium</option>
						   <option value="Crocus">Crocus</option>
						               <!-- Vegetables-->
						   <option value="Spinach">Spinach</option>
						   <option value="Tomatoes">Tomatoes</option>
                           <option value="Peas">Peas</option>
                           <option value="Cucumber">Cucumber</option>
						   <option value="Chilies">Chilies</option>
                        </select>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="sub-agile-info">
           
               </div>
            </div>
            <div class="set-reset">
               <input type="submit" value="Submit" id="submit">
               <input type="reset" value="Clear Form">
            </div>
         </form>
		 
      </div>
	  
	<!-- //supply form -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
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
								<a href="about.php">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.php">Contact Us</a>
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
					scrollTop: $(this.hash).offset().top
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
  $(document).ready(function(){

var toggleProducts=(cat,prods,type)=> {

//get the products div
var products=$("#products");
let filtered=prods.filter(item=>{

	if(item.CategoryID==cat && item.Type==type)
		return item;
})
var output="";

filtered.map(item=>{
output+=`<option value="${item.PID}">${item.prodName}</option>`;



})
products.html(output);
}
$.get("data.php",{}).done(function(e){
  var cat=$("#categories").val();
  var type=$("#type").val();
 

	result=JSON.parse(e);
	toggleProducts(cat,result,type);

$("#categories").on("change",()=>{
  var cat=$("#categories").val();
  var type=$("#type").val();

toggleProducts(cat,result,type);

})

$("#type").on("change",()=>{
  var cat=$("#categories").val();
  var type=$("#type").val();
  //console.log(cat+type)
toggleProducts(cat,result,type);

})


})

$("#submit").on("click",(e)=>{
e.preventDefault();
var id=$("#products").val();
var location=$("#location").val();
var landmark=$("#landmark").val();
var county=$("#county").val();
var qty=$("#qty").val();

if(location !="" && landmark!="") {

$.post("insertSupply.php",{id:id,landmark:landmark,location:location,county:county,quantity:qty,submit:"submit"}).done((res)=>{

alert(res);
})	
}else {
	alert("Please insert location and Landmarks")
}
// $.post("insertSupply.php",{id:id,landmark:landmark,location:location,county:county}).done((res)=>{
// console.log(res)

// })
})
  })
</script>	
</body>

</html>