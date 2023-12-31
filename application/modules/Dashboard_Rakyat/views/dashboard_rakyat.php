<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Rakyat/header'); ?>
</head>
<body>
	<?php $this->load->view('Rakyat/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Rakyat/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Profil</h1>
		      </div>
		      <table class="table" width="100" align="center">
					<tr>
						<td>NIK</td>
						<td>
							<input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" value="<?php echo $this->session->userdata('nik') ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
							<img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $this->session->userdata('nama_berkas') ?>" name="berkas" width="150px" height="150px">
						</td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>
						<input type="text" class="form-control" placeholder="Fullname" id="fullname" name="fullname" value="<?php echo $this->session->userdata('fullname') ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>
							<input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $this->session->userdata('email') ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>
							<input type="text" class="form-control" placeholder="Telepon" id="telp" name="telp" value="<?php echo $this->session->userdata('telp') ?>" readonly>
						</td>
					</tr>
				</table>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Rakyat/js'); ?>
</html>