<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/bootstrap.css'); ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/hotel/css/detail.css'); ?>">

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
								<li class="active"><a href="<?=base_url()?>hotel">Home</a></li>
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
		</div>
		<br>
		<br>
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="profile-img">
							<img src="<?=base_url()?>assets/picture/<?=$data->foto?>" class="img-responsive" alt=""/>
						</div>
						<!-- Profile Image -->
					</div>
					<div class="col-md-9">
						<div class="name-wrapper">
							<h1 class="name"><?php echo $data->title?></h1>
							<span><?php echo $data->title2?></span>
						</div>
						<p>
							<?php echo $data->description?>
						</p>
						<br>
						<strong>TERSEDIA :</strong>
						<section class="section-wrapper">
							<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div class="row">
											<div class="col-sm-3">
												<div class="item-stats">
													<div class="item-stats-value">&#9830;  <?php echo $data->rincian1?></div>
													<div class="item-stats-name">&#9830; <?php echo $data->rincian2?></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="item-stats">
													<div class="item-stats-value">&#9830;  <?php echo $data->rincian3?></div>
													<div class="item-stats-name">&#9830; <?php echo $data->rincian4?></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="item-stats">
													<div class="item-stats-value">&#9830;  <?php echo $data->rincian5?></div>
													<div class="item-stats-name">&#9830; <?php echo $data->rincian6?></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="item-stats">
													<div class="item-stats-value">&#9830;  <?php echo $data->rincian7?></div>
													<div class="item-stats-name">&#9830; <?php echo $data->rincian8?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="section-wrapper portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="section-title">
							<h2>Portfolio</h2>
						</div>
					</div>

					<div class="col-md-9">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>	
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>
							<div class="col-md-4 col-sm-6">
								<a class="portfolio-item" href="#">
									<div class="portfolio-thumb">
										<img src="<?php echo base_url('assets/hotel/bootstrap/img/abc.jpg'); ?>" alt="">
									</div>
								</a>
								<!-- .portfolio-item -->
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</section>
		<!-- .portfolio -->
		<section class="section-contact section-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="section-title">
							<h2>Contact</h2>
						</div>
					</div>

					<div class="col-md-9">
						<div class="row">
							<div class="col-md-3">
								<address>
									<strong>Address</strong><br>
									<?php echo $data->alamat?>
								</address>
							</div>
							<div class="col-md-3">
								<address>
									<strong>Phone Number</strong><br>
									<?php echo $data->nomor?>
								</address>
							</div>
							<div class="col-md-3">
								<address>
									<strong>Email</strong><br>
									<a href=""><?php echo $data->email?></a>
								</address>
							</div>

						</div>
						<!--.row-->

					</div>
				</div>
				<!--.row-->

			</div>
			<!--.container-fluid-->
		</section>
		<br>
		<br>
		<!--.section-contact-->
		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018 <a href="#">Listing</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by Muhammad Syahputra</a> / Demo Images: <a href="https://www.facebook.com/photo.php?fbid=887620094773707&set=a.107113956157662.1073741825.100005771738672&type=3&theater" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/hotel/js/jquery.min.js'); ?>"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url('assets/hotel/js/jquery.easing.1.3.js'); ?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('assets/hotel/js/bootstrap.min.js'); ?>"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url('assets/hotel/js/jquery.waypoints.min.js'); ?>"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url('assets/hotel/js/jquery.stellar.min.js'); ?>"></script>
		<!-- Flexslider -->
		<script src="<?php echo base_url('assets/hotel/js/jquery.flexslider-min.js'); ?>"></script>
		<!-- Main -->
		<script src="<?php echo base_url('assets/hotel/js/main.js'); ?>"></script>
		<script src="<?php echo base_url('assets/hotel/js/detail.js'); ?>"></script>

	</body>
	</html>
