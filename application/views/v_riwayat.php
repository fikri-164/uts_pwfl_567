<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>DATA MAHASISWA</h3></center>
</head>
<body>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>No. Hp Lama</th>
					<th>No. Hp Baru</th>
					<th>Tanggal di Ubah</th>
				</tr>	
				<?php  $no = 1; foreach ($riwayat as $itemmhs ) {?>
			</thead><tbody>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['no_hp_lama']; ?></th>
					<th><?php echo $itemmhs['no_hp_baru']; ?></th>
					<th><?php echo $itemmhs['tgl_diubah']; ?></th>
				</tr>
			</tbody>
			<?php  } ?>
		</table>
		
	</center>
</body>
</html>