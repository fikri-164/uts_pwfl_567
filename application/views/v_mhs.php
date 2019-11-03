<<<<<<< HEAD
<div class="content-wrapper">
    <div class="container">
		<section class="content">
			
			<div class="box box-warning">
	      		<div class="box-header">
			        <h3 class="box-title">
			        	<i class="fa fa-fw fa-user"></i> Data Mahasiswa
			        </h3>
	        		<div class="btn-group pull-right">
	            		<a href="<?php echo base_url('C_page/tambahmhs/'); ?>" class="btn btn-flat btn-primary btn-sm"><span class="fa fa-plus-square"></span>&nbsp; Tambah</a>
	          		</div>
	        	</div>
			<div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
				<thead>
	                <tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Hp</th>
						<th width="140">Action</th>
					</tr>	
				<?php  $no = 1; foreach ($amhs as $itemmhs ) {?>
				</thead>
				
					<tr>
						<th><?php echo $no++; ?></th>
						<th><?php echo $itemmhs['nim']; ?></th>
						<th><?php echo $itemmhs['nama_mhs']; ?></th>
						<th><?php echo $itemmhs['jenis_kelamin']; ?></th>
						<th><?php echo $itemmhs['alamat']; ?></th>
						<th><?php echo $itemmhs['no_hp']; ?></th>
						<td align="center">

							<a href="<?php echo base_url('C_page/editmhs/').$itemmhs['id']; ?>" class="btn btn-flat btn-primary btn-sm"><span class="fa fa-edit"></span></a>

							<a href="<?php echo base_url('C_mhs/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?')" class="btn btn-flat btn-danger btn-sm"><span class="fa fa-trash"></span></a>

							<a href="<?php echo base_url('C_page/riwayatmhs/').$itemmhs['nim']; ?>" class="btn btn-flat btn-warning btn-sm"><span class="fa fa-eye">Riwayat</span></a>
	                    </td>
					</tr>
				
				<?php  } ?>
			</table>
		</div>
		</div>
	</div>
</div>
=======
<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>DATA MAHASISWA</h3></center>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('C_page/tambahmhs');?>">Tambah  </a> &nbsp; &nbsp;
		</h3>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>Nama Mhs</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Hp</th>
					<th>Action</th>
				</tr>	
				<?php  $no = 1; foreach ($amhs as $itemmhs ) {?>
			</thead><tbody>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nama_mhs']; ?></th>
					<th><?php echo $itemmhs['jenis_kelamin']; ?></th>
					<th><?php echo $itemmhs['alamat']; ?></th>
					<th><?php echo $itemmhs['no_hp']; ?></th>
					<td align="center">
                        <a href="<?php echo base_url('C_page/editmhs/').$itemmhs['id']; ?>">Edit</a>
                        <a href="<?php echo base_url('C_mhs/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?')">Hapus</a>
                        <a href="<?php echo base_url('C_page/riwayatmhs/').$itemmhs['nim']; ?>">Riwayat</a>
                    </td>
				</tr>
			</tbody>
			<?php  } ?>
		</table>
		
	</center>

</body>
</html>
>>>>>>> f61187f15a9e036df61543a699c67a3f5e884015
