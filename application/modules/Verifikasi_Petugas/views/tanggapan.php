<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Petugas/header'); ?>
</head>
<body>
	<?php $this->load->view('Petugas/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Petugas/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Tanggapan</h1>
		      </div>
		      <div class="container">
				<?php
				if (isset($error)) {
					echo "ERROR UPLOAD : <br/>";
					print_r($error);
					echo "<hr/>";
				}
				?>
				<?php foreach ($pengaduan as $key => $value) {?>
		       <form action="<?php echo base_url(). 'Verifikasi_Petugas/tambah_aksi'; ?>"method="post">
					<table class="table" width="100" align="center">
						<tr>
							<td>Judul</td>
							<td>
								<input type="hidden" name="id_pengaduan" id="id" value="<?php echo $value->id ?>">
								<input type="text" readonly class="form-control" placeholder="Judul" id="judul" name="judul" value="<?php echo $value->judul ?>">
								<input type="hidden" name="id_petugas" value="<?php echo $this->session->userdata('id'); ?>">
							</td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>
								<input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" value="<?php echo $value->nik ?>" readonly >
							</td>
						</tr>
						<tr>
							<td>Foto</td>
							<td>
								<img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $value->berkas ?>" name="berkas" width="160px" height="160px">
								<input type="hidden" name="old" value="<?php echo $value->berkas ?>">
							</td>
						</tr>
						<tr>
							<td>Tanggapan</td>
							<td>
								<textarea type="text" class="form-control" placeholder="Tanggapan" id="tanggapan" name="tanggapan" ></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button class="btn btn-info" type="submit">Simpan</button>
			<?php } ?>
								<a href="<?php echo base_url('Verifikasi_Petugas'); ?>" class="btn btn-danger" >Batal</a>
							</td>
						</tr>
					</table>
				</form>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Petugas/js'); ?>
</html>