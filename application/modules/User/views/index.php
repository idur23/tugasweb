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
		        <h1 class="h2">User</h1>
		      </div>
		      <div class="container">
		        <table id="table" class="table" border="1" cellspacing="0" width="100%">
		        	<thead>
		                <tr>
		                	<th>No</th>
		                	<th>Foto</th>
		                	<th>NIK</th>
		                	<th>Fullname</th>
		                	<th>Email</th>
		                	<th>Aksi</th>
		                </tr>
		            </thead>
		            	<?php $no=1; ?>
		            	<?php foreach ($user as $key => $value) {?>
		            	<tr>
							<td><?php echo $no++ ?></td>
							<td><img src="<?php echo base_url(); ?>upload/<?php echo $value['nama_berkas'] ?>" width="100px" height="100px"></td>
							<td><?php echo $value['nik'] ?></td>
							<td><?php echo $value['fullname'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td>
								<a href="<?php echo base_url('user/hapus/'.$value['id']); ?>"><button class="btn btn-danger">Hapus</button></a>
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