<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Tables</h3>
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
				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
