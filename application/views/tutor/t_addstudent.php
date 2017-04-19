<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-body">
				<div class="row">
					<!-- FORM -->
					<div class="col-md-8">
						<h2>Add New Student</h2>
							<?php if ($this->session->flashdata('failed')) { ?>
								<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php } ?>
							<form class="form form-horizontal" action="<?php echo site_url('tutor/addstudent'); ?>" method="POST">
								<div class="input-group" style="width:100%">
									<label class="control-label" for="name">name</label>
									<input name="student_name" type="text" class="form-control" placeholder="name" value="<?php if (isset($student_name)) { echo $student_name; } ?>" required>
								</div>
								<div class="input-group" style="width:100%">
									<label class="control-label" for="username">Username</label>
									<input name="student_username" value="<?php if (isset($student_username)) { echo $student_username; } ?>" type="text" class="form-control" placeholder="username" required>
								</div>
								<div class="input-group" style="width:100%">
									<label>Religion</label>
									<select class="form-control" name="student_religion" required="">
										<option name="student_religion" value="Moslem">Moslem</option>
										<option name="student_religion" value="Christian">Christian</option>
										<option name="student_religion" value="Chatolic">Chatolic</option>
										<option name="student_religion" value="Hindu">Hindu</option>
										<option name="student_religion" value="Budha">Budha</option>
										<option name="student_religion" value="Others">Others</option>
									</select>
								</div>
								<div class="input-group" style="width:100%">
									<label class="control-label" for="email">Email</label>
									<input name="student_email" value="<?php if (isset($student_email)) { echo $student_email; } ?>" type="text" class="form-control" placeholder="Email" required>
								</div>
								<div class="input-group" style="width:100%">
									<label class="control-label" for="password">password</label>
									<input name="student_password" type="password" class="form-control" placeholder="password"  required>
								</div>
								<br>
								<div class="row">
									<div class="text-right">
										<button class="btn btn-primary" name="add" type="submit" value="add">Add Student</button>
										<a href="<?php echo site_url('tutor'); ?>" style="margin-top:15px;" >Cancel</a>
									</div>
								</div>
							</form>
						</form>
					</div>
					<!-- END FORM -->

					<!-- INSTRUCTION -->
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3>Instructions</h3>
							</div>
							<div class="panel-body text-justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<!-- END INSTRUCTION -->
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
	<!-- END MAIN CONTENT -->
