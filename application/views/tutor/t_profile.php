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
							<img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" class="img-circle" alt="Avatar" width="200px">
						</div>
						<div class="profile-stat">
							<div class="row">
								<div class="col-md-4 stat-item">
									<?php echo $_SESSION['nav_stulist']; ?> <span>Students</span>
								</div>
								<div class="col-md-4 stat-item">
									<?php echo $counterr; ?> <span>Resources</span>
								</div>
								<div class="col-md-4 stat-item">
									<?php echo $counterq; ?> <span>Questions</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE HEADER -->
					<!-- PROFILE DETAIL -->
					<div class="profile-detail">
						<div class="profile-info">
							<ul class="list-unstyled list-justify">
								<li>Name <span><?php echo $_SESSION['tutor_name']; ?></span></li>
								<li>Email <span><?php echo $_SESSION['tutor_email']; ?></span></li>
							</ul>
							<div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
						</div>
					</div>
					<!-- END PROFILE DETAIL -->
				</div>
				<!-- END LEFT COLUMN -->
				<!-- RIGHT COLUMN -->
				<div class="profile-right">
					<!-- TABBED CONTENT -->
					<div class="custom-tabs-line tabs-line-bottom left-aligned">
						<ul class="nav" role="tablist">
							<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">My Students</a></li>
							<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">My Resources</a></li>
							<li><a href="#tab-bottom-left3" role="tab" data-toggle="tab">My Questions</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-bottom-left1">
						<p class="text-right"><a href="<?php echo site_url('tutor/addstudent'); ?>" class="btn btn-primary">Add New Student</a></p>
							<?php if ($_SESSION['nav_stulist']==0) {
								echo "You have no student yet";
							} else{ ?>
							<div class="table-responsive">
								<table class="table project-table">
									<thead>
										<tr>
											<th>Name</th>
											<th>Progress</th>
											<th>Last Active</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($mystu as $key) { ?>
										<tr>
											<td><a href="<?php echo site_url('tutor/navselectnew')."/".$key->student_id; ?>" class="text-muted"><i class="lnr lnr-user"></i> <?php echo $key->student_name; ?></a></td>
											<td>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
														<span>60% Complete</span>
													</div>
												</div>
											</td>
											<td>21 October 2016</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<?php }
							?>
						</div>
						<div class="tab-pane fade" id="tab-bottom-left2">
						<p class="text-right"><a class="btn btn-primary">Add New Resource</a></p>
						<?php if ($counterr==0) {
								echo "You have no resources yet";
							} else{ ?>
							<div class="table-responsive">
								<table class="table project-table">
									<thead>
										<tr>
											<th>Resource Name</th>
											<th>Resource File</th>
											<th>Course Name</th>
											<th>Skill Desc</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($myres as $key) { ?>
										<tr>
											<td>Resource Name</td>
											<td>Resource File</td>
											<td>Course Name</td>
											<td>Skill Desc</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
							<?php } ?>
						</div>
						<div class="tab-pane fade" id="tab-bottom-left3">
						<p class="text-right"><a class="btn btn-primary">Add New Question</a></p>
						<?php if ($counterq==0) {
								echo "You have no questions yet";
							} else{ ?>
							<div class="table-responsive">
								<table class="table project-table">
									<thead>
										<tr>
											<th>Quiz Name</th>
											<th>Course Name</th>
											<th>Skill Desc</th>
											<th>Question</th>
											<th>Answer</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($myquest as $key) { ?>
										<tr>
											<td>Quiz Name</td>
											<td>Course Name</td>
											<td>Skill Desc</td>
											<td>Question</td>
											<td>Answer</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
							<?php } ?>
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
