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
				<a class="navbar-brand" href="<?php echo site_url('cweb/'); ?>"><span class="glyphicon glyphicon-book"></span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('cweb/features'); ?>">Features</a></li>
					<li><a href="<?php echo site_url('cweb/faqs'); ?>">FAQs</a></li>
					<li><a href="<?php echo site_url('cweb/docs'); ?>">Documentation</a></li>
					<li><a href="<?php echo site_url('cweb/signup'); ?>">Signup</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url('tutor/login'); ?>">As Tutor</a></li>
							<li class="divider"></li>
							<li><a href="#">As Student</a></li>
						</ul>
					</li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<div class="container table-bordered">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>TUTOR LOGIN</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form role="form" action="<?php echo site_url('cweb/logintutor') ?>" method="post">
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password" required>
					</div>
					<button type="submit" class="btn btn-default">login</button>
				</form>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div class="container" style="background-color:black;color:white;font-weight:bold;">
		<br>
		<div class="row text-center">
			<p>HS Apps &copy; Fitri Ana Dewi 2017</p>
			<a href="">Facebook</a> | <a href="">Youtube</a> | <a href="">Instagram</a> 
		</div>
		<br>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo base_url('plugin/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('plugin/js/bootstrap.min.js');?>"></script>
</body>
</html>