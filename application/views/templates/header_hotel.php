<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/hotel.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/bootstrap.css'); ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/style.css'); ?>">
	<style>
	.searc[type=text] {
    width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	}

	/* When the input field gets focus, change its width to 100% */
	.searc[type=text]:focus {
		width: 30%;
	}
</style>

<!-- Modernizr JS -->

<script src="<?php echo base_url('assets/hotel/js/modernizr-2.6.2.min.js'); ?>"></script>
</head>
<body>

	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center logo-wrap">
							<div id="fh5co-logo"><a href="index.html">Dasty<span>.</span></a></div>
						</div>
						<div class="col-xs-12 text-center menu-1 menu-wrap">
							<ul>
								<li class="active"><a href="<?=base_url()?>admin_hotel">Home</a></li>
								<li style="float: right;">
								<a href="<?php echo site_url('auth/login');?>"><button type="button" class="btn btn-primary">Login Admin</button>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- </div> -->
			</nav>
			<header >
				<div class="overlay"></div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo base_url('assets/hotel/bootstrap/img/22.jpg'); ?>" alt="Los Angeles" style="width:100%; height: 450;">
						</div>

						<div class="item">
							<img src="<?php echo base_url('assets/hotel/bootstrap/img/22.jpg'); ?>" alt="Chicago" style="width:100%; height: 450;">
						</div>

						<div class="item">
							<img src="<?php echo base_url('assets/hotel/bootstrap/img/22.jpg'); ?>" style="width:100%; height: 450;">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</header>
			<br>
			<br>
			<div class="container">
				<div class="container_inner default_template_holder clearfix page_container_inner">
					<div class="vc_row wpb_row section vc_row-fluid" style=" padding-top:0px; text-align:left;"><div class=" full_section_inner clearfix">
						<div class="vc_col-sm-12 wpb_column vc_column_container">
							<div class="wpb_wrapper">
								<div class="projects_holder_outer v3 portfolio_with_space portfolio_standard "><div class="filter_outer"><div class="filter_holder">
									<h2 style="color: black;">Portal Informasi hotel</h2>
									<hr>
								</div>
							</div>
							<br>
							<br>
							<div class="wpb_wrapper">
								<div class="projects_holder_outer v3 portfolio_with_space portfolio_standard "><div class="filter_outer"><div class="filter_holder">
									<ul style="color: black;">
										<li class="filter " data-filter="all">
											<span>Category</span>
										</li>
										<li class="filter active current" data-filter="portfolio_category_17">
											<span>All</span>
										</li>
										<li class="filter" data-filter="portfolio_category_2">
											<span>Expensive</span>
										</li>
										<li class="filter" data-filter="portfolio_category_5">
											<span>Cheap</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="projects_holder clearfix v3 standard">