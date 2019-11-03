<<<<<<< HEAD
<div class="content-wrapper">
  <div class="container">
	<section class="content">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="box box-warning">
				    <div class="box-header with-border">
				        <h3 class="box-title">
				        <i class="fa fa-fw fa-plus"></i>Input Data Mahasiswa</h3>   
				        <div class="btn-group pull-right">
				            		<a href="<?php echo base_url('C_page/mhs/'); ?>" class="btn btn-flat btn-danger btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp; Kembali</a>
				        </div>
				    </div>
			
				<!-- <table> -->
					<form action="<?php echo base_url('C_mhs/tambahmhs'); ?>" method="POST" class="form-horizontal" role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="nim" name="nim" placeholder="Isikan NIM">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Mahasiswa">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
		                  		<div class="col-sm-8">
				                    <select name="jk" class="form-control">
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
				                </div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isikan Alamat">
		                  		</div>
		                	</div>

		                	<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">No. Hp</label>
								<div class="col-sm-8">
		                    		<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Isikan No. Hp">
		                  		</div>
		                	</div>

		                	<div class="box-footer">
		                		<label for="inputEmail3" class="col-sm-2 control-label"></label>
		                		<div class="col-sm-8">
		                			<button type="submit" class="btn btn-warning">Simpan</button>
		                		</div>
		              		</div>
						</div>
					</form>
				<!-- </table> -->
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
	<center><h3>INPUT DATA MAHASISWA</h3></center>
</head>
<body>
	<table>
		<form action="<?php echo base_url('C_mhs/tambahmhs'); ?>" method="POST">
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value=""></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td> : </td>
				<td><input type="text" name="nama" value=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" value=""></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="no_hp" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"/><td>
			</tr>
		</form>
	</table>
	
</body>
</html>
>>>>>>> f61187f15a9e036df61543a699c67a3f5e884015
