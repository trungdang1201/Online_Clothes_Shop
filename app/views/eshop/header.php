<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Group 4 - Online Clothes Shop</title>
	
	<link href="<?php echo ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/responsive.css" rel="stylesheet">
	
	<link href="<?php echo ASSETS . THEME ?>css/404.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/cart.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/checkout.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/footer.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/header.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/home.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/login.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/products.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/shop.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/ico/favicon.ico">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> (+84) 98 999 9999</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@group4.com</a></li>
								<?php if (isset($data['user_data'])) : ?>
									<li><a href="#">
										<i class="fa fa-user"></i> <b><?= $data['user_data']->name ?></b>
									</a></li>
								<?php endif; ?>
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
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="<?php echo ASSETS ?>eshop/images/home/Dolce_&_Banana.png" style="width:149px;height:69px" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
									<li><a href="<?= ROOT ?>profile"><i class="fa fa-user"></i> Account</a></li>
								<?php endif; ?>
								<li><a href="<?=ROOT?>checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?=ROOT?>cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if (isset($data['user_data'])) : ?>
									<li><a href="<?= ROOT ?>logout"><i class="fa fa-lock"></i> Logout</a></li>
								<?php else : ?>
									<li><a href="<?= ROOT ?>login"><i class="fa fa-lock"></i> Login</a></li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
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
								<li><a href="<?=ROOT?>index" class="active">Home</a></li>
								<li class="dropdown"><a href="<?=ROOT?>shop">Shop</a>
								</li>
							</ul>
						</div>
					</div>
					<?php if(isset($show_search)) :?>
					<div class="col-sm-3">
						<form method="get">
						<div class="search_box pull-right">
							<input name="find" type="text" placeholder="Search" />
						</div>
					</form>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->
