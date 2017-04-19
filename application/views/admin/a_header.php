<!doctype html>
<html lang="en">

<head>
	<title>Homeschooling App</title>
	<meta name="author" content="fitri ana dewi">
	<meta name="description" content="Free Homeschooling App">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/icon-sets.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css'); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
	<link rel="icon" type="image/png'); ?>" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png'); ?>">

	<script src="<?php echo base_url('assets/js/jquery/jquery-2.1.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/klorofil.min.js'); ?>"></script>
	
	<style type="text/css">
		html, body {
			max-width: 100%;
			overflow-x: hidden;
		}
		body{
			padding-top: 70px;
		}
	</style>
</head>

<body>
	<!-- NAVBAR -->
	<nav id="ana_navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-btn">
				<!-- HEIGHT ICON 32PX -->
				<img src="<?php echo base_url('assets/img/favicon.png'); ?>" width="32px">
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars icon-nav"></i>
				</button>
			</div>
			<div id="navbar-menu" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-database"></i> <span><?php echo $_SESSION['tablename']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<?php
								foreach ($tablelist as $key) {
									foreach ($key as $value) { 
										if ($value!=$_SESSION['tablename'] and $value!="t_news" and $value!="t_inbox") {
											
										?>
										<li><a href="<?php echo site_url('admin/table/'.$value); ?>"><i class="lnr lnr-database"></i> <span><?php echo $value; ?></span></a></li>
									<?php 
										}
									}
								}
							?>
						</ul>
					</li>
					<li><a href="<?php echo site_url('admin/inbox'); ?>"><i class="lnr lnr-inbox"></i> <span>inbox</span></a></li>
					<li><a href="<?php echo site_url('admin/news'); ?>"><i class="lnr lnr-text"></i> <span>news</span></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('admin/logout'); ?>"><i class="lnr lnr-exit"></i> <span>logout</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->