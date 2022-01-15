<?php include "conn.php";

$edit = $db->update('pegawai', 
								"id_pegawai = '$_POST[id_pegawai]',
								nama = '$_POST[nama]',
								tgl_lahir = '$_POST[tgl_lahir]',
								jk =' $_POST[jk]',
								alamat = '$_POST[alamat]',
								status = '$_POST[status]',
								email = '$_POST[email]'","id_pegawai='$_POST[id_pegawai]';");

			if ($edit) {

				echo "<script>alert('berhasil')</script>";
				echo "<script>document.location.href='../index.php?page=customer'</script>";
			
	}
 ?>