<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-profile" style="min-height: 500px;">
			<div class="clearfix">
				<!-- LEFT COLUMN -->
				<div class="profile-left">
					<!-- PROFILE HEADER -->
					<div class="profile-header">
						<div class="overlay"></div>
						<div class="profile-main">
							<img src="<?php echo base_url('assets/img/user-medium.png');?>" class="img-circle" alt="Avatar" style="width: 96px;">
							<h3 class="name">Samuel Gold</h3>
							<span class="online-status status-available">Available</span>
						</div>
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									45 <span>Projects</span>
								</div>
								<div class="col-md-4 stat-item">
									15 <span>Awards</span>
								</div>
								<div class="col-md-4 stat-item">
									2174 <span>Points</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE HEADER -->
					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<h4 class="heading">About</h4>
							<p>Interactively fashion excellent information after distinctive outsourcing.</p>
						</div>
						<div class="text-center"><a href="#editprofilemodal" data-toggle="modal" data-target="#editprofilemodal" class="btn btn-primary">Edit Profile</a></div>
					</div>
					<!-- END PROFILE DETAIL -->
				</div>
				<!-- END LEFT COLUMN -->
				<!-- RIGHT COLUMN -->
				<div class="profile-right">
					<!-- TABBED CONTENT -->
					<div class="custom-tabs-line tabs-line-bottom left-aligned">
						<ul class="nav" role="tablist">
							<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
							<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">7</span></a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-bottom-left1">
							<ul class="list-unstyled activity-timeline">
								<li>
									<i class="fa fa-comment activity-icon"></i>
									<p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
									</li>
							</ul>
							<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
						</div>
						<div class="tab-pane fade" id="tab-bottom-left2">
							<div class="table-responsive">
								<table class="table project-table">
									<thead>
										<tr>
											<th>Title</th>
											<th>Progress</th>
											<th>Leader</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="#">Spot Media</a></td>
											<td>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
														<span>60% Complete</span>
													</div>
												</div>
											</td>
											<td><img src="<?php echo base_url('assets/img/user-medium.png');?>" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
											<td><span class="label label-success">ACTIVE</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END TABBED CONTENT -->
				</div>
				<!-- END RIGHT COLUMN -->
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<div class="modal fade" id="editprofilemodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>