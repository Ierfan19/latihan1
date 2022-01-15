<?php 
 include '../sistem/conn.php'
switch ($_POST['aksi']) {
		case 'tambah':
		
			$simpan = $db->insert('pegawai', "
				'$_POST[id_pegawai]',
				'$_POST[nama]',
				'$_POST[tg_lahir]',
				'$_POST[jk]',
				'$_POST[alamat]',
				'$_POST[status]',
				'$_POST[email]'");
			if($simpan){
				echo "<script>alert('berhasil')</script>";
				echo "<script>document.location.href='../index.php?page=customer'</script>";
			}
				


			break;
		case 'edit':
			$edit = $db->update('pegawai', 
								"id_pegawai='$_POST[id_pegawai]',
								nama='$_POST[nama]',
								tg_lahir='$_POST[tgl_lahir]',
								jk='$_POST[jk]',
								alamat='$_POST[alamat]',
								status='$_POST[status]',
								email='$_POST[email]'","id_pegawai='$_POST[id_pegawai]';");

			if ($edit) {

				echo "<script>alert('berhasil')</script>";
				echo "<script>document.location.href='../index.php?page=customer'</script>";
			
	}
			break;
		case 'hapus':
			
			$hapus = $db->delete('pegawai',"id_pegawai='$_GET[id_pegawai]'");

		
				echo "<script>alert('berhasil')</script>";
				echo "<script>document.location.href='../index.php?page=customer'</script>";
			break;
		default:
			// code...
			break;
	}
 ?>
	