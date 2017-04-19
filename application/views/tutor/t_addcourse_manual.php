<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Enroll a Course</h3>
			</div>
			<div class="panel-body">
				<div class="row">
				<!-- BIKIN PAGINATION -->
				<p><a href="<?php echo site_url('tutor/addcourse/0'); ?>">Create my ownn Course</a></p>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Course Name</th>
							<th>Course Desc</th>
							<th>Course Level</th>
							<th>Course Curriculum</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php 
							$no=1;
							foreach ($allcourses as $key) {
							echo "<td>".$no."</td>";
							echo "<td>".$key->coursebank_name."</td>";
							echo "<td>".$key->coursebank_desc."</td>";
							echo "<td>".$key->coursebank_level." Grade</td>";
							echo "<td>".$key->coursebank_curriculum."</td>";
							echo "<td><a href='".site_url('tutor/addcourse/'.$key->coursebank_id)."' class='btn btn-info'>Enroll this Course</a></td>";
							$no++;
						}
						?>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->
