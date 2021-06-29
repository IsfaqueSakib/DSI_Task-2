<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Amazon Affillate</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{URL::to('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">

								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">

								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>

								<li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>Doll</h1>

								</div>
								<div class="col-sm-6">
									<img src="images/home/doll.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1>One Plus</h1>
								</div>
								<div class="col-sm-6">
									<img src="images/home/mobile.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1>Wrist Watch</h1>
								</div>
								<div class="col-sm-6">
									<img src="images/home/watch.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
		<!--		<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><



							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Electronics</a></h4>
								</div>
							</div>

						</div>



					</div>
				</div> -->

				<div class="col-sm-9 padding-right padding-left">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="https://www.amazon.com/Fisher-Price-Soothing-Motions-Bassinet-Windmill/dp/B01K7VHW0C/?_encoding=UTF8&pd_rd_w=1c54g&pf_rd_p=569948c0-0104-4e94-8b17-3cb0be30a6e8&pf_rd_r=R6G431EA2F0T74VAE19E&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_wg=W2mXC&ref_=pd_gw_unk"><img src="images/home/fisher.jpg" alt="" /></a>
											<h2><span>&#2547;</span> 11,840</h2>
											<p>Fisher</p>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/Lenovo-IdeaPad-Processor-Graphics-81W0003QUS/dp/B0862269YP/ref=sr_1_10?dchild=1&fst=as%3Aoff&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_w=AOe5W&pd_rd_wg=W2mXC&pf_rd_p=83ab1c34-7657-4d09-b72d-0a3e4b634b1d&pf_rd_r=R6G431EA2F0T74VAE19E&qid=1616788602&rnid=16225007011&s=computers-intl-ship&sr=1-10"><img src="images/home/laptop.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 42,700</h2>
										<p>Lenovo IdeaPad 3 14" Laptop</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/Kenneth-Cole-Unlisted-Shirts-Sleeve/dp/B0762T3BHV/?_encoding=UTF8&pd_rd_w=ZF9xy&pf_rd_p=7eac7129-d774-4c12-bb48-89122ac8b50a&pf_rd_r=R6G431EA2F0T74VAE19E&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_wg=W2mXC&ref_=pd_gw_unk&th=1"><img src="images/home/shirt.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 1,360</h2>
										<p>Kenneth Cole Unlisted Men's Dress Shirt</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/Garmin-Forerunner-Running-Watch-Black/dp/B0160BC1FO/?_encoding=UTF8&pd_rd_w=U0s18&pf_rd_p=61a95fae-e859-4f27-858a-6146c1ae863a&pf_rd_r=R6G431EA2F0T74VAE19E&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_wg=W2mXC&ref_=pd_gw_unk"><img src="images/home/watch.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 13,500</h2>
										<p>Garmin Forerunner 235, GPS Running Watch, Black</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/Bedtime-Originals-Express-Plush-Elephant/dp/B00GHAGGOG/?_encoding=UTF8&pd_rd_w=WSzey&pf_rd_p=0a0fec03-b408-45eb-8e57-18d0d31850f9&pf_rd_r=R6G431EA2F0T74VAE19E&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_wg=W2mXC&ref_=pd_gw_unk"><img src="images/home/doll.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 840</h2>
										<p>Bedtime Originals Choo Choo Express Plush Elephant - Humphrey</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<a href="https://www.amazon.com/Lenovo-Android-Octa-Core-Processor-ZA5T0263US/dp/B083JVJQH4/ref=sr_1_11?dchild=1&fst=as%3Aoff&pd_rd_r=1e22e775-b9cf-4f07-8342-d3a717f6a1db&pd_rd_w=AOe5W&pd_rd_wg=W2mXC&pf_rd_p=83ab1c34-7657-4d09-b72d-0a3e4b634b1d&pf_rd_r=R6G431EA2F0T74VAE19E&qid=1616788725&rnid=16225007011&s=computers-intl-ship&sr=1-11"> <img src="images/home/tab.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 12,600</h2>
										<p>Lenovo Tab M10 Plus, 10.3" FHD Android Tablet</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/OnePlus-Glacial-Unlocked-Android-Smartphone/dp/B08723759H/ref=sr_1_10?dchild=1&keywords=mobile&qid=1616790080&sr=8-10"><img src="images/home/mobile.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 42,200</h2>
										<p>OnePlus 8 Glacial Green</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/Razer-Cynosa-Chroma-Gaming-Keyboard/dp/B075KMZ4MX/ref=sr_1_4?dchild=1&keywords=keyboard&qid=1616790262&sr=8-4" ><img src="images/home/keyboard.jpg" alt="" /> </a>
										<h2><span>&#2547;</span> 4,058</h2>
										<p>Razer Cynosa Chroma Gaming Keyboard</p>
								</div>
							</div>
						</div>
          </div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="https://www.amazon.com/BLACK-DECKER-Countertop-Convection-CTO6335S/dp/B0043E6PLC/ref=sr_1_2_sspa?dchild=1&keywords=oven&qid=1616790392&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExRkNQUFdHQVpUQlQ3JmVuY3J5cHRlZElkPUEwNTA4ODkzM0Q3ME9QU1FQMVhPTiZlbmNyeXB0ZWRBZElkPUEwMjg1ODAxM0JYMTk0V09aU0s2WSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU="><img src="images/home/oven.jpg" alt="" /></a>
										<h2><span>&#2547;</span> 7,600</h2>
										<p>Black Convection Toaster Oven</p>
									</div>
								</div>
							</div>
						</div>

					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer>



    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
