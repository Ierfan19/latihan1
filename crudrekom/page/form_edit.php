<?php 
	include "sistem/conn.php";

	$query = $db->get('*','pegawai',"WHERE id_pegawai='$_GET[id_pegawai]'");
	$lihat = $query->fetch();

 ?>

    <link href="css/bootstrap.min.css" rel="stylesheet" >
 <div class="container">
	<h2>Formulir edit Pegawai</h2>
		<br></br>
		<form action="sistem/edit.php" method="POST">
			<div class="mb-3">
				<label class="form-label" for="id">Id pegawai</label><br>
				 <input class="form-control" type="text" id="id" name=
				 "id_pegawai" value="<?= $lihat['id_pegawai']; ?>">
			</div>
			<div class="mb-3">
				<label class="form-label" for="nama">Nama</label>
			 <input class="form-control" type="text" id="nama" name=
			 "nama" value="<?= $lihat['nama']; ?>">
			</div>
			 <div class="mb-3">
				<label class="form-label" for="tgl_lahir">Tgl lahir</label>
			 <input class="form-control" type="date" id="tgl_lahir" name=
			 "tgl_lahir" value="<?php echo date('Y-m-d',strtotime($lihat["tg_lahir"])) ?>">
			</div>
			 <div class="mb-3">
			 <label class="form-label" for="JK">Jenis Kelamin</label><br>
				<input class="form-check-input" type="radio" name="jk" value="laki-laki" <?php if ($lihat['jk']=='laki-laki' ) echo 'checked'; ?>>laki laki  
			 <input class="form-check-input" type="radio" name="jk" value="perempuan" <?php if ($lihat['jk']=='perempuan' ) echo 'checked'; ?>>perempuan 
			</div>
			 <div class="mb-3">
				<label class="form-label" for="alamat">Alamat</label>
			 <input class="form-control" type="text" id="alamat" name=
			 "alamat" value="<?= $lihat['alamat']; ?>">
			</div>
			 <div class="mb-3">
				
			 <label class="form-label" for="status">Status</label>
			 <select name="status">
			 	<?php 
			 	if ($lihat['status']== 'menikah') echo "<option value='menikah' selected>menikah</option>";
			 	else echo "<option value='menikah'>menikah</option>";
			 	if ($lihat['status']== 'belum-menikah') echo "<option value='belum-menikah' selected>belum-menikah</option>";
			 	else echo "<option value='belum-menikah'>belum-menikah</option>"; 
			 	 ?>
			 </select>
			</div> 
			<div class="mb-3">
				
			 <label for="email">Email</label><br>
			 <input class="form-control" type="email" id="email" name=
			 "email" value="<?= $lihat['email']; ?>">
			</div><input class="btn btn-primary" type="submit" name="aksi" value="edit" class=
			 "input i-blue"></br>

		</form>

</div>


