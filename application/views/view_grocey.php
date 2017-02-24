<?php 
include_once 'web_headergr.php';
?>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>ssss</h1>
			</div>
	    	<div class="col-md-8 panel-body table-bordered">
				<!-- <h3><?php echo $judul;?></h3> -->
				<div class="panel-body">
				<?php echo $output; ?>
				</div>
			</div>
    	</div>
    </div>
    <br>