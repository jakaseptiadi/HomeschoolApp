<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container">
		<div>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				Danger Alert
			</div>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				Success Alert
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<?php foreach ($threenews as $key) { ?>
				<div class="panel panel-headline">
					<div class="panel-heading">
					<h3 class="panel-title"><?php echo $key->news_title; ?></h3>
						<p class="panel-subtitle"><?php echo $key->news_date; ?> by Fitri Ana Dewi</p>
					</div>
					<div class="panel-body">
						<p class="text-center"><img src="<?php echo base_url('uploads/news')."/".$key->news_photo;?>" class="img" width="300px"></p>
						<p class="text-justify">
							<?php echo $key->news_content; ?>
						</p>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-3">
				<div class="panel panel-headline">
					<div class="panel-heading">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
