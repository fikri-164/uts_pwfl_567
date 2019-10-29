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
                        <a href="<?php echo base_url('C_mhs/hapusmhs/').$itemmhs['id']; ?>">Hapus</a>
                    </td>
				</tr>
			</tbody>
			<?php  } ?>
		</table>
		
	</center>

</body>
</html>