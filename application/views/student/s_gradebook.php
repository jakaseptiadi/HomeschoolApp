<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $table_title; ?></h3>
				<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
			</div>
			<div class="panel-body">
				<div class="row">
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
