<?php
foreach ($siswa as $kelas) {
	$nama = $kelas->nama_siswa;
	$email_siswa= $kelas->email_siswa;
	$kode_paket = $kelas->kode_paket;
	$foto = $kelas->foto_siswa;
	}?>
<div class="col-md-3">
	<div class="panel-body table-bordered">
		<div class="bs-component table-bordered panel-body">
			<h3 class="text-center">Profil Siswa</h3>
			<img src="<?php echo base_url($foto); ?>" width="100%" alt="Foto tutor" class="img img-responsive">
			<h3><?php echo $nama ?></h3>
			<a href="" class="btn btn-info">Modal ke Detail Profil</a>
		</div>
		<div class="bs-component">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="<?php echo site_url('tutor/myclass/summary'); ?>">Summary</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/schedule'); ?>">Schedule</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/lessonplan'); ?>">Lesson Plan</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/gradebook'); ?>">Grade Book</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/records'); ?>">Records</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/logbook'); ?>">Log Book</a></li>
				<li><a href="<?php echo site_url('tutor/myclass/reports'); ?>">Reports</a></li>
			</ul>
		</div>
		<br>
	</div>
</div>