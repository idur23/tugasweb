<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('Admin/header'); ?>
</head>
<body>
	<?php $this->load->view('Admin/navbar'); ?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('Admin/side'); ?>
			<main class="col-md-9 ms-sm-auto col-lg-8 px-md-1">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		        <h1 class="h2">Petugas & Admin</h1>
		      </div>
		      <div class="container">
		        <table width="100%">
					<tr align="right">
						<td><a href="<?php echo base_url('tambah_Petugas/tambah'); ?>"><button class="btn btn-info">Tambah Data</button></td>
					</tr>
				</table>
				<br>
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		        	<thead>
		                <tr>
		                	<th>No</th>
		                	<th>Foto</th>
		                	<th>NIK</th>
		                	<th>Fullname</th>
		                	<th>Email</th>
		                	<th>Role</th>
		                	<th>Aksi</th>
		                </tr>
		            </thead>
		            	<?php $no=1; ?>
		            	<?php foreach ($petugas as $key => $value) {?>
		            	<tr>
							<td><?php echo $no++ ?></td>
							<td><img src="<?php echo base_url(); ?>upload/<?php echo $value['nama_berkas'] ?>" width="150px" height="150px" class="img-fluid"></td>
							<td><?php echo $value['nik'] ?></td>
							<td><?php echo $value['fullname'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $value['role'] ?></td>
							<td>
								<a href="<?php echo base_url('tambah_Petugas/edit/'.$value['id']); ?>"><button class="btn btn-info">Edit</button></a>
								<a href="<?php echo base_url('tambah_Petugas/hapus/'.$value['id']); ?>"><button class="btn btn-danger">Hapus</button></a>
							</td>
		            	</tr>
		            <?php } ?>
		        </table>
		    </div>
		  	</main>
		</div>
	</div>
</body>
<?php $this->load->view('Admin/js'); ?>
</html>