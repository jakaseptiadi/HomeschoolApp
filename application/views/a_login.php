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

	<style type="text/css">
		body
		{
			background-image: url("<?php echo base_url('assets/img/selected by freepik.jpg'); ?>");
			background-color: #ddd;
			background-size: 100%;
			background-blend-mode: darken;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}

	</style>
</head>

<body>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-headline">
						<div class="panel-heading text-center">
							<h3 class="panel-title">SIGNIN ADMIN</h3>
						</div>
						<div class="panel-body text-center">
							<div>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									Danger Alert
								</div>
							</div>
							<img src="<?php echo base_url('assets/img/admin.png');?>" width="200px">
							<p class="text-justify">
								<form class="form form-horizontal" action="<?php echo site_url('admin'); ?>" method="POST">
								<label class="control-label" for="email">Email/Username</label>
								<div class="form-group">
									<input name="email" type="text" class="form-control" placeholder="Email/username" id="email" required="">
								</div>
								<label class="control-label" for="katasandi">Password</label>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password" id="katasandi" required="">
								</div>
								<div class="row">
									<div class="col-xs-6 text-left">
										<a class="btn btn-default" href="<?php echo site_url(''); ?>">Back To Home</a>
									</div>
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary" name="signin" type="submit" value="signin">Sign In</button>
									</div>
								</form>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
