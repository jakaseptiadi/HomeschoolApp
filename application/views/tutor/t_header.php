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
	<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
	<link rel="icon" type="image/png'); ?>" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png'); ?>">
	<script src="<?php echo base_url('assets/js/jquery/jquery-2.1.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/chartist/chartist.min.js'); ?>"></script>
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
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<br>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url('tutor/dashboard'); ?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo site_url('tutor/schedule'); ?>" class=""><i class="lnr lnr-calendar-full"></i> <span>Schedule</span></a></li>
						<li><a href="<?php echo site_url('tutor/courses'); ?>" class=""><i class="lnr lnr-license"></i> <span>Courses</span></a></li>
						<li><a href="<?php echo site_url('tutor/gradebook'); ?>" class=""><i class="lnr lnr-book"></i> <span>Grade Book</span></a></li>
						<li><a href="<?php echo site_url('tutor/Logbook'); ?>" class=""><i class="lnr lnr-text-format"></i> <span>Log Book</span></a></li>
						<li><a href="<?php echo site_url('tutor/studentrecord'); ?>" class=""><i class="lnr lnr-user"></i> <span>Student Record</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav id="ana_navbar" class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
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

						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<?php 
									if ($_SESSION['nav_stulist']==0) {
										echo "<a href=#' class='dropdown-toggle' data-toggle='dropdown'><i class='lnr lnr-user'></i> <span>You have no student yet</span></a>";
									}else{
										echo "<a href=#' class='dropdown-toggle' data-toggle='dropdown'><i class='lnr lnr-user'></i> <span>".$_SESSION['nav_stuselect_name']."</span></a>";
									}
								?>
								<ul class="dropdown-menu">
								<?php
								if ($_SESSION['nav_stulist']>0) {
									foreach ($nav_stulist as $key) {
										if ($key->student_id!=$_SESSION['nav_stuselect_id']) { ?>
											<li><a href="<?php echo site_url('tutor/navselectnew')."/".$key->student_id; ?>"><i class="lnr lnr-user"></i> <?php echo $key->student_name; ?></a></li>
										<?php 
										}
									}
								}
								?>
									<li><a href="<?php echo site_url('tutor/addstudent'); ?>"><i class="lnr lnr-plus-circle"></i> Add A Student</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('tutor/setting'); ?>"><i class="lnr lnr-cog"></i> <span>Setting</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" width="24" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['tutor_name']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('tutor/profile'); ?>"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="<?php echo site_url('tutor/mylog'); ?>"><i class="lnr lnr-book"></i> <span>My Logbook</span></a></li>
									<li><a href="<?php echo site_url('tutor/help'); ?>"><i class="lnr lnr-question-circle"></i> <span>Help</span></a></li>
									<li><a href="<?php echo site_url('tutor/community'); ?>"><i class="lnr lnr-envelope"></i> <span>Goto Community (Coming Soon)</span></a></li>
									<li><a href="<?php echo site_url('tutor/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->