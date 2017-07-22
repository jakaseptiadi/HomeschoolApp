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
									<!-- ADD RES BUTTON -->
									<div class="btn-group dropup">
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Resource&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#" data-toggle="modal" data-target="#addfile<?php echo $no; ?>">Add a File</a></li>
											<li><a href="<?php echo site_url('tutor/addquiz/'.$get_course->course_id.'/'.$key->skill_id);?>">Add a Quiz</a></li>
										</ul>
									</div>
									<!-- ADD FILE MODAL -->
									<div class="modal fade" id="addfile<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="Add a File">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<form action="<?php echo site_url('tutor/addfile/'.$get_course->course_id.'/'.$get_course->coursebank_id.'/'.$key->skill_id); ?>" method="POST" role="form" enctype="multipart/form-data" />
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Add a File</h4>
												</div>
												<div class="modal-body">
														<div class="form-group">
															<label class="control-label">Course</label>
															<p><?php echo $get_course->coursebank_name.' - Grade '.$key->coursebank_level; ?></p>
														</div>
														<div class="form-group">
															<label class="control-label">Skill</label>
															<p><?php echo $key->skill_desc; ?></p>
														</div>
														<div class="form-group">
															<label for="filetitle">File title</label>
															<input type="text" name="filetitle" class="form-control" id="filetitle" placeholder="File Title">
														</div>
														<div class="form-group">
															<label for="file">File</label>
															<input type="file" name="filename" class="form-control" id="file" placeholder="File">
														</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													<button type="button" class="btn btn-primary">Upload Resource</button>
												</div>
												</form>
											</div>
										</div>
									</div>
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