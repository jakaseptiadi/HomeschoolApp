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
	<!-- JavaScript -->
	<script src="<?php echo base_url('assets/js/jquery/jquery-2.1.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/klorofil.min.js'); ?>"></script>
	<style type="text/css">html, body {max-width: 100%;overflow-x: hidden;}body{padding-top: 70px;background-image: url("<?php echo base_url('assets/img/selected by freepik.jpg'); ?>");background-color: #ddd;background-size: 100%;background-blend-mode: darken;background-repeat: no-repeat;background-attachment: fixed;}</style>
</head>

<body>
	<!-- WRAPPER -->
	<div>
		<!-- SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-btn">
						<a href="<?php echo site_url(''); ?>" type="button" class="btn-toggle-fullwidth">
							<span>
								<!-- HEIGHT ICON 32PX -->
								<img src="<?php echo base_url('assets/img/favicon.png'); ?>" width="32px">
							</span>
						</a>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url(''); ?>">Home</a></li>
							<li><a href="<?php echo site_url('news'); ?>">News</a></li>
							<li><a href="<?php echo site_url('help'); ?>">Help</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#signinmodal" data-toggle="modal" data-target="#signinmodal">Signin</a></li>
							<li><a href="#signupmodal" data-toggle="modal" data-target="#signupmodal"">Signup</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MODAL SIGNIN -->
			<div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="SigninOption">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="SigninOption">Signin Option</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-6">
									<a href="<?php echo site_url('tutor'); ?>">
										<h2 class="text-center">Tutor</h2>
										<img src="<?php echo base_url('assets/img/tutor.png') ; ?>" class="img img-responsive" style="width:100%;">
									</a>
								</div>
								<div class="col-sm-6">
									<a href="<?php echo site_url('student'); ?>">
										<h2 class="text-center">Student</h2>
										<img src="<?php echo base_url('assets/img/student.png') ; ?>" class="img img-responsive" style="width:100%;">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL SIGNIN -->

			<!-- MODAL SIGNUP -->
			<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="Signuptitle">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="Signuptitle">Tutor Signup</h4>
						</div>
						<div class="modal-body">
							<div class="row panel-body">
							<!-- START FORM SIGNUP -->
								<div class="col-md-7">
									<div class="text-center">
									<img src="<?php echo base_url('assets/img/tutor.png') ; ?>" style="width:200px;">
									</div>
									<form class="form form-horizontal" action="<?php echo site_url('web/signup'); ?>" method="POST">
										<div class="input-group" style="width:100%">
											<label class="control-label" for="name">Full Name</label>
											<input name="name" type="text" class="form-control" placeholder="Full Name" id="name" pattern="[a-zA-Z'-]+[a-zA-Z '-]{2,50}" required>
											 <p class="help-block">Minimum 2 Characters.</p>
										</div>
										<div class="input-group" style="width:100%">
											<label class="control-label" for="username">Username</label>
											<input name="username" type="text" class="form-control" placeholder="username" id="username" pattern="[a-z0-9_]{2,30}" required>
											<p class="help-block">Only Alphanumeric, and underscore allowed.</p>
										</div>
										<div class="input-group" style="width:100%">
											<label class="control-label" for="email">Email</label>
											<input name="email" type="email" class="form-control" placeholder="Email" id="email" required>
										</div>
										<div class="input-group" style="width:100%">
											<label class="control-label" for="password">Password</label>
											<input name="password" type="password" class="form-control" placeholder="Password" id="password" pattern=".{8,}" required>
											<p class="help-block">Minimum 8 Characters.</p>
										</div>
										<button style="margin-top:15px;" class="btn btn-primary" name="signup" value="signup" type="submit">Signup</button>
									</form>
									<br>
								</div>
								<!-- END FORM SIGNUP -->
								<!-- START INSTRUCTION -->
								<div class="col-md-5">
									<div class="panel panel-headline panel-info">
										<div class="panel-heading">
											<h3 class="panel-title">Instruction</h3>
										</div>
										<div class="panel-body">
											<ol>
												<li>The first Instruction</li>
												<li>Second Instruction</li>
												<li>Third Instruction</li>
											</ol>
										</div>
									</div>
								</div>
								<!-- END INSTRUCTION -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL SIGNUP -->