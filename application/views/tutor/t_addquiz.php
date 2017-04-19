<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Add A Quiz</h3>
				<ol class="breadcrumb">
					<li><a href="<?php echo site_url('tutor/courses'); ?>">Courses</a></li>
					<li><a href="<?php echo site_url('tutor/courses/'.$get_course->course_id); ?>"><?php echo $get_course->coursebank_name; ?></a></li>
					<li><a href="<?php echo site_url('tutor/courses/'.$get_course->course_id.'#Skill'.$get_skill->skill_id); ?>"><?php echo $get_skill->skill_desc; ?></a></li>
					<li class="active">Add A Quiz</li>
				</ol>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-9">
						<form action="" method="POST" role="form">
							<div class="form-group">
								<label>Quiz Title</label>
								<input type="text" class="form-control" name="quiz_title">
							</div>
							<div class="form-group">
								<label>Quiz Description</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Quiz Questions Total</label>
								<input type="number" class="form-control" min="1" name="quiz_count">
							</div>
							<div class="form-group">
								<label>Question</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Choice A</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Choice B</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Choice C</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Choice D</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Choice E</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Answer</label>
								<select class="form-control">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
									<option>E</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Next</button>
						</form>
					</div>
					<div class="col-sm-3">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Instructions</h3>
							</div>
							<div class="panel-body">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->