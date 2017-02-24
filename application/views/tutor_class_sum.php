<div class="container">
	<div class="row">
		<?php include_once 'tutor_sidenav.php'; ?>
		<div class="col-md-9 panel-body table-bordered">
			<h1>CLASS SUMMARY</h1>
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Paket</th>
							<th>Summary Progress</th>
							<th>Upcoming Events</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach ($siswa as $kelas) {
						$nama_siswa = $kelas->nama_siswa;
						$email_siswa= $kelas->email_siswa;
						$kode_paket = $kelas->kode_paket;
						?>
						<tr>
							<td><?php echo $nama_siswa;?></td>
							<td><?php echo $kode_paket;?></td>
							<td>52%</td>
							<td>Math - Admission<br>
								<p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</td>
							<td>
								<form role="form" action="<?php echo site_url('tutor/myclass/summary'); ?>" method="post">
									<input type="password" value="<?php echo $email_siswa; ?>" name="email_siswa" hidden>
									<button class="btn btn-info" type="submit"> Go To Class</button>
								</form>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
