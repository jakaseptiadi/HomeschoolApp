<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Dashboard</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title text-right">No Course Enrolled</h3>
							</div>
							<div class="panel-body text-right">
								<a href="<?php echo site_url('tutor/addcourse'); ?>" class="text-danger"><span class="lnr lnr-enter"></span>Enroll New Course</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title text-right">3 New Messages</h3>
							</div>
							<div class="panel-body text-right">
								<a href="<?php echo site_url('tutor/'); ?>" class="text-info"><span class="lnr lnr-enter"></span> Go To Message Box</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title text-right">3 Requested Events</h3>
							</div>
							<div class="panel-body text-right">
								<a href="<?php echo site_url('tutor/schedule'); ?>" class="text-info"><span class="lnr lnr-enter"></span> Go To Schedule</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title text-right">3 Requested Courses</h3>
							</div>
							<div class="panel-body text-right">
								<a href="<?php echo site_url('tutor/courses'); ?>" class="text-info"><span class="lnr lnr-enter"></span> Go To Courses</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-7">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Course Progress</h3>
							</div>
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr><th>No.</th><th>Course Name</th><th>Last Activity</th><th>Progress</th><th>Action</th></tr>
									</thead>
									<tbody>
										<?php if ($coursec>0) {
											$i=1;
											foreach ($courses as $key) {
											?>
										<tr><td><?php echo $i; ?></td><td><?php echo $key->coursebank_name; ?></td><td>Oct 21, 2016</td><td><?php echo $key->course_progress; ?>/100</td><td><a href="<?php echo site_url('tutor/courses/')."/".$key->course_id; ?>" title="Go To This Course"><span class="lnr lnr-enter"></span></a></td></tr>
										<?php $i++;
											}
										} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="panel panel-scrolling">
							<div class="panel-heading">
								<h3 class="panel-title">Recent Student Activity</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled activity-list">
									<li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Update new Log Book - This week will be very fun! .... <span class="timestamp">20 minutes ago</span></p></a></li>
									<li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Finished Quiz Remember The Name @Indonesian Civics Education <span class="timestamp">20 minutes ago</span></p></a></li>
									<li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Update new Log Book - This week will be very fun! .... <span class="timestamp">20 minutes ago</span></p></a></li>
									<li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Finished Quiz Remember The Name @Indonesian Civics Education <span class="timestamp">20 minutes ago</span></p></a></li><li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Update new Log Book - This week will be very fun! .... <span class="timestamp">20 minutes ago</span></p></a></li>
									<li><img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Avatar" class="img-circle pull-left avatar"><p><a class="text-muted" href="#"> Finished Quiz Remember The Name @Indonesian Civics Education <span class="timestamp">20 minutes ago</span></p></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- end panel body -->
		</div>

	</div>
</div>
<!-- END MAIN CONTENT -->
