<!doctype html>
<html lang="en">

<head>
	<title>Homeschooling App</title>
	<meta name="author" content="jaka septiadi">
	<meta name="description" content="Free Homeschooling App">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- CSS -->
	<!-- ADMIN LTE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/chat-styles.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.css'); ?>">
	<!--link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.min.css'); ?>"-->
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/bikin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/bikin2.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/plugins/select2/select2.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/skins/_all-skins.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css'); ?>">
	
	<!-- FILE SHARING CSS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/file_sharing/css/shop-homepage.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/file_sharing/css/bootstrap.min.css'); ?>">
	
	<!-- KLOROFIL CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/icon-sets.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->

	<!-- KLOROFIL SCRIPT -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
	<link rel="icon" type="image/png'); ?>" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png'); ?>">
		
	<style type="text/css">
		html, body {
			max-width: 100%;
			overflow-x: hidden;
		}
		body{
			padding-top: 70px;
			/*font-family: verdana;*/
		}
		#search_data{ width:400px; padding:10px; display:block; border-radius:3px; border:1px solid silver; margin:0 auto;  }

		#search_all li {
	        background: none repeat scroll 0 0 red;
	        /*border-bottom: 1px solid #E3E3E3;*/
	        list-style: none outside none;
	        padding: 5px 5px 5px 5px;
	        text-align: left;
	        width: 400px;
	        margin: 0 auto;	
	        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    }
		#show_result li {
	        background: none repeat scroll 0 0 #FFFFFF;
	        /*border-bottom: 1px solid #E3E3E3;*/
	        list-style: none outside none;
	        padding: 5px 5px 5px 5px;
	        text-align: left;
	        width: 400px;
	        margin: 0 auto;	
	        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    }
	    #show_result > li a {
		    color: inherit;
		    padding: 12px 12px;
		    text-decoration: none;
		    display: block;
		}
	    #show_result a:hover {background-color: #f1f1f1}
		#show_result:hover .show_result {
		  /*  display: block;*/
		}
	    .auto_list {
	        border: 1px solid #FFFFFF;
	        border-radius: 0px 0px 0px 0px;
	        position: absolute; 
	    }
	    #pic{ vertical-align: middle; }
	</style>

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		
		<!-- MAIN -->
		<div class="mai">
			<!-- NAVBAR -->
			<nav id="ana_navbar" class="navbar navbar-default navbar-fixed-top">
				
				<div class="container-fluid">
					<div class="navbar-btn">
						<!-- <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button> -->
					</div>
					
					<div class="navbar-btn">
					<!-- HEIGHT ICON 32PX -->
						<!-- <img src="<?php echo base_url('asset/img/homeschool-logo.png'); ?>" width="200px" height="32px"> -->
					</div>
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					
					<!-- NAV BAR MENU -->
					
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="<?php echo site_url('z_forum/forum'); ?>"><i class="lnr lnr-users"></i> <span>Discussion</span></a></li>
						</ul>
						
						
						
						<!-- NAV BAR KANAN -->
						
						<ul class="nav navbar-nav navbar-right">
							<?php echo form_open('z_search/search', "class='navbar-form navbar-left hidden-xs'") ?>
							<!-- <form class="navbar-form navbar-left hidden-xs" action="z_search/search"> -->
							
								<div class="input-group">
									<input type="text" class="form-control" id="search_data" name="search_users" onkeyup="ajaxSearch();" placeholder="Search friends...">
										<span class="input-group-btn">
							                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							                </button>
						              	</span>
									<!--span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span-->
								</div>
								<div id="result">
		                        	<div id="show_result"></div> 
                   				</div>
                   				
							</form>



							<li><a href="<?php echo site_url('z_home/home'); ?>"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
							<li><a href="<?php echo site_url('z_message/message_view'); ?>"><i class="lnr lnr-inbox"></i> <span>Message</span></a></li>
							<li><a href="<?php echo site_url('z_resource/resource'); ?>"><i class="lnr lnr-file-empty"></i> <span>Resource</span></a></li>
							
							
							<!-- NOTIFIKASI -->
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger"></span>
								</a>
								<ul class="dropdown-menu notifications">
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" width="24" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['tutor_name']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('z_tutor/profile'); ?>"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="<?php echo site_url('z_tutor/settings'); ?>"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="<?php echo site_url('z_resource/my_resource'); ?>"><i class="lnr lnr-file-empty"></i> <span>My Resource</span></a></li>
									<li><a href="<?php echo site_url('tutor/dashboard'); ?>"><i class="lnr lnr-envelope"></i> <span>Back To E-learning</span></a></li>
									<li><a href="<?php echo site_url('tutor/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>

				</div>
			</nav>
			<!-- END NAVBAR -->