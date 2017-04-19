<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Courses</h3>
				<ol class="breadcrumb">
					<li><a href="<?php echo site_url('tutor/courses'); ?>">Courses</a></li>
					<li class="active"><?php echo $get_course->coursebank_name.' - Grade '.$get_course->coursebank_level; ?></li>
				</ol>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-9">
						<!-- SKILL COURSE PRINT -->
						<?php foreach ($skill_list as $key) {$no=$key->skill_id; ?>
						<div class="panel panel-info">
							<!-- SKILL TITLE -->
							<div class="row panel-body">
								<div class="col-md-9">
									<h4><?php echo $no.". ".$key->skill_desc; ?></h4>
								</div>
								<div class="col-md-3">
									<a class="btn btn-primary" role="button" data-toggle="collapse" href="#Skill<?php echo $no; ?>" aria-expanded="false" aria-controls="Skill<?php echo $no; ?>">
										Show/Hide
									</a>
								</div>
							</div>
							<!-- SKILL CONTENT -->
							<div class="row panel-body">
								<div class="collapse in" id="Skill<?php echo $no; ?>">
									<!-- LIST OF FILE AND RESOURCES -->
									<?php
									foreach ($resources as $key) {
										echo $key->res_name;
										echo $key->res_file;
										echo $key->res_type;
										echo $key->coursebank_id;
										echo $key->skill_id;
									}
									?>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<!-- END OF CONTENT SKILL -->
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Fast Link</h3>
							</div>
							<div class="panel-body text-justify">
								<?php foreach ($skill_list as $key) {$no=$key->skill_id; 
									$key->skill_desc;
									?>
									<a href="#Skill<?php echo $no; ?>"><?php echo $no.". Ptong stringnya"; ?></a><br>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>