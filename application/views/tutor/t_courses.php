<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<div class="col-xs-7">
					<h3 class="panel-title">Courses</h3>
				</div>
				<div class="col-xs-5">
					<a href="<?php echo site_url('tutor/addcourse'); ?>" class="btn btn-primary">Enroll New Course</a>
				</div>
				<br/>
			</div>
			<div class="panel-body">
				<div class="row">
				<?php
				if ($counter>0) {
					foreach ($get_course as $key) { ?>
				<div class="col-md-4"><div class="panel panel-default"><div class="panel-body"><p><?php echo $key->coursebank_name.' - Grade '.$key->coursebank_level."</p><p class='text-right'>(".$key->course_progress.'/100)'; ?></p></div><div class="panel-footer"><a href="<?php echo site_url('tutor/courses/'.$key->course_id); ?>" class="btn btn-success">Go To Class</a> <a class="text-danger" href="<?php echo site_url('tutor/dropcourse/'.$key->course_id); ?>">Drop Course</a></div></div></div>
				<?php 
					}
				}else{
					echo "<br><div class='panel-body'>".$_SESSION['nav_stuselect_name']." isn't enroll any course</div>";
				}
				?>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->
