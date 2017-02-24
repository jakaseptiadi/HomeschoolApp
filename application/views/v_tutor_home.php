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
				<a class="navbar-brand" href="<?php echo site_url('ctutor/dashboard'); ?>"><span class="glyphicon glyphicon-book"></span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('ctutor/dashboard'); ?>">Dashboard</a></li>
					<li><a href="<?php echo site_url('ctutor/profile'); ?>">Profile</a></li>
					<li><a href="<?php echo site_url('ctutor/settings'); ?>">Settings</a></li>
					<li><a href="<?php echo site_url('ctutor/help'); ?>">Help</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NAMA ANDA <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url('ctutor/logout'); ?>">Logout</a></li>
						</ul>
					</li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel-body table-bordered text-center">
					<img src="" width="100%" alt="Foto tutor" class="img img-responsive">
					<h3>Nama tutor</h3>
					<a href="" class="btn btn-default">Edit profile</a>
				</div>
			</div>
			<div class="col-md-9 panel-body table-bordered">
				<h1>SUMMARY</h1>
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Paket</th>
								<th>Summary Progress</th>
								<th>Upcoming Events</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Ana</td>
								<td>A1</td>
								<td>52%</td>
								<td>Math - Admission<br>
									<p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</td>
								<td><a href="<?php echo site_url('ctutor/myclass/ana/summary'); ?>" class="btn btn-success">Go To Class</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container" style="background-color:black;color:white;font-weight:bold;">
		<br>
		<div class="row text-center">
			<p >HS Apps &copy; Fitri Ana Dewi 2017</p>
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