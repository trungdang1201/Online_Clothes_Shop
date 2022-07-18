<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php $data['page_title'] ?>| Shop bán quần áo </title>
	
	<link href="<?php echo ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/responsive.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<!-- <link href="<?= ASSETS . THEME ?>admin/css/style.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>admin/css/style-responsive.css" rel="stylesheet"> -->
	<!--[if lt IE 9]>
    <script src="<?php echo ASSETS ?>eshop/js/html5shiv.js"></script>
    <script src="<?php echo ASSETS ?>eshop/js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-57-precomposed.png">
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
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
								<?php if (isset($data['user_data'])) : ?>
									<li><a href="#"><i class="fa fa-envelope"></i> <?= $data['user_data']->name ?></a></li>
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
							<a href="index"><img src="<?php echo ASSETS ?>eshop/images/home/1200px-Dolce_&_Gabbana.svg (1).png" style="width:149px;height:69px" alt="" /></a>
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
