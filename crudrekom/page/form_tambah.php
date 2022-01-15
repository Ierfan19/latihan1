<div class="recentOrders">
	<div class="cardHeader">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
		
<h2>Formulir Tambah Siswa</h2>
<br></br>

	</div>
<form action="sistem/conn.php" method="POST">

<div class="mb-3">
				<label class="form-label" for="id">Id pegawai</label><br>
				 <input class="form-control" type="text" id="id" name=
				 "id_pegawai">
			</div>
			<div class="mb-3">
				<label class="form-label" for="nama">Nama</label>
			 <input class="form-control" type="text" id="nama" name=
			 "nama">
			</div>
			 <div class="mb-3">
				<label class="form-label" for="tgl_lahir">Tgl lahir</label>
			 <input class="form-control" type="date" id="tg_lahir" name=
			 "tgl_lahir">
			</div>
			 <div class="mb-3">
			 <label class="form-label" for="JK">Jenis Kelamin</label><br>
				<input class="form-check-input" type="radio" name="jk" value="laki-laki">laki laki  
			 <input class="form-check-input" type="radio" name="jk" value="perempuan">perempuan 
			</div>
			 <div class="mb-3">
				<label class="form-label" for="alamat">Alamat</label>
			 <input class="form-control" type="text" id="alamat" name=
			 "alamat">
			</div>
			 <div class="mb-3">
				
			 <label class="form-label" for="status">Status</label>
			 <select name="status">
			 	<option>menikah</option>
			 	<option>belum-menikah</option>
			 </select>
			</div> 
			<div class="mb-3">
				
			 <label for="email">Email</label><br>
			 <input class="form-control" type="email" id="email" name=
			 "email">
			</div><input class="btn btn-primary" type="submit" name="aksi" value="tambah" class=
			 "input i-blue"></br>

		</form>

</div>