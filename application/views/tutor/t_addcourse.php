<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $table_title; ?></h3>
				<ol class="breadcrumb">
				  <li><a href="<?php echo site_url('tutor/courses'); ?>">Courses</a></li>
				  <li class="active"><?php echo $table_title; ?></li>
				</ol>
			</div>
			<div class="panel-body">
				<div class="row">
					<p class="text-right"><a href="<?php echo site_url('tutor/createcourse'); ?>">Create my ownn Course</a></p>
					<?php 
					foreach($css_files as $file): ?>
					<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
				<?php endforeach; ?>
				<?php foreach($js_files as $file): ?>
					<script src="<?php echo $file; ?>"></script>
				<?php endforeach; ?>
				<?php echo $output; ?>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->
