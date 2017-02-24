<div class="container table-bordered">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>SIGN UP</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<form role="form" action="<?php echo site_url('web/signup'); ?>" method="post">
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email" name="email" onchange="cek_email()" required>
					<p class="help-block">Tulislah alamat email yang valid dan belum pernah terdaftar di situs ini.</p>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="password" required>
					<p class="help-block">Minimal mengandung satu Huruf Kapital, satu huruf kecil, dan satu angka.</p>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" type="text" name="nama" required>
					<p class="help-block">Tulislah nama lengkap anda.</p>
				</div>
				<button type="submit" class="btn btn-default">DAFTAR</button>
			</form>
		</div>
		<div class="col-md-5">
			<div class="panel-body table-bordered">
				<h2>Petunjuk</h2>
				<ol>
					<li>Hanya tutor yang dapat mendaftarkan diri secara mandiri di form ini</li>
					<li>Siswa mendapat akun login dari tutor</li>
				</ol>
			</div>
		</div>
	</div>
	<br>
</div>
<br>