<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>EDIT DATA MAHASISWA</h3></center>
</head>
<body>
<?php foreach ($aamhs as $itemmhs ) {?>
	<table>

		<form action="<?php echo base_url('C_mhs/editmhs'); ?>" method="POST">
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $itemmhs['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $itemmhs['nama_mhs']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="jk">
						<option value="Laki-laki" <?php echo $operasi == 'Laki-laki'?'selected':''?> >Laki-laki</option>
						<option value="Perempuan" <?php echo $operasi == 'Perempuan'?'selected':''?> >Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="panjang" value="<?php echo $itemmhs['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="panjang" value="<?php echo $itemmhs['no_hp']; ?>"></td>
			</tr>
		</form>
		<?php  } ?>
	</table>
	
</body>
</html>