<<<<<<< HEAD
<div class="content-wrapper">
  <div class="container">
	<section class="content">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="box box-warning">
				    <div class="box-header with-border">
				        <h3 class="box-title">
				        <i class="fa fa-fw fa-edit"></i>Edit Data Mahasiswa</h3>   
				        <div class="btn-group pull-right">
				            <a href="<?php echo base_url('C_page/mhs/'); ?>" class="btn btn-flat btn-danger btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp; Kembali</a>
				        </div>
				    </div>

					<?php foreach ($aamhs as $itemmhs ) {?>
					<form action="<?php echo base_url('C_mhs/editmhs'); ?>" method="POST" class="form-horizontal" role="form">
						<div class="box-body">
							<input type="hidden" value="<?php echo $itemmhs['id']; ?>" name="id"></input>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $itemmhs['nim']; ?>" placeholder="Isikan NIM">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $itemmhs['nama_mhs']; ?>" placeholder="Isikan Nama Mahasiswa">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
		                  		<div class="col-sm-8">
				                    <select name="jk" class="form-control">
										<option value="Laki-laki" <?php echo $itemmhs['jenis_kelamin'] == 'Laki-laki'?'selected':''?> >Laki-laki</option>
										<option value="Perempuan" <?php echo $itemmhs['jenis_kelamin'] == 'Perempuan'?'selected':''?> >Perempuan</option>
									</select>
				                </div>
		                	</div>
	
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $itemmhs['alamat']; ?>" placeholder="Isikan Alamat">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">No. Hp</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $itemmhs['no_hp']; ?>" placeholder="Isikan No. Hp">
		                  		</div>
		                	</div>
						
							<div class="box-footer">
		                		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		                		<div class="col-sm-8">
		                			<button type="submit" value="Update" class="btn btn-warning">Update</button>
		                		</div>
		              		</div>
						</div>
					</form>
					<?php  } ?>

				</div>			
			</div>
		</div>
	</section>
  </div>
</div>
=======
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
				<input type="hidden" value="<?php echo $itemmhs['id']; ?>" name="id"></input>
			</tr>
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
						<option value="Laki-laki" <?php echo $itemmhs['jenis_kelamin'] == 'Laki-laki'?'selected':''?> >Laki-laki</option>
						<option value="Perempuan" <?php echo $itemmhs['jenis_kelamin'] == 'Perempuan'?'selected':''?> >Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" value="<?php echo $itemmhs['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="no_hp" value="<?php echo $itemmhs['no_hp']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Update" class="btn btn-primary"/><td>
			</tr>
		</form>
		<?php  } ?>
	</table>
	
</body>
</html>
>>>>>>> f61187f15a9e036df61543a699c67a3f5e884015
