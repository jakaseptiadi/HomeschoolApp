<!DOCTYPE html>
<html>
<head>
	<title>HS Apps</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Aplikasi Manajemen kelas Homeschooling">
	<meta name="author" content="Fitri Ana Dewi">
	<!-- Bootstrap -->
	<?php 
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<link href="<?php echo base_url('plugin/css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('plugin/css/bootstrap.min.css');?>" rel="stylesheet">
	<style type="text/css" media="screen">
		body { padding-top: 70px; }  
	</style>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('tutor/dashboard'); ?>"><span class="glyphicon glyphicon-book"></span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('tutor/dashboard'); ?>">Dashboard</a></li>
					<li><a href="<?php echo site_url('tutor/profile'); ?>">Profile</a></li>
					<li><a href="<?php echo site_url('tutor/settings'); ?>">Settings</a></li>
					<li><a href="<?php echo site_url('tutor/help'); ?>">Help</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NAMA ANDA <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url('tutor/logout'); ?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
