	<div class="container table-bordered">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>TUTOR LOGIN</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form role="form" action="<?php echo site_url('web/logintutor') ?>" method="post">
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password" required>
					</div>
					<button type="submit" class="btn btn-default">login</button>
				</form>
			</div>
		</div>
		<br>
	</div>
	<br>
