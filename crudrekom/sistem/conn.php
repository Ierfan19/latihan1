<?php 
	class proses{

		function __construct() {

			$server = "localhost";
			$user = "root";
			$password = "";
			$dbname = "rekom";
			$kon = $this->con = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

		}

		function get($cel = null, $table = null, $property = null) {

			$qw = "SELECT $cel FROM $table $property";
			$ret = $this->con->query($qw);

			return $ret;
		}

		function insert($table = null, $val = null) {

			$qw = "INSERT INTO $table VALUES ($val)";
			$ret = $this->con->query($qw);

			return $ret;
		}

		function update($table = null, $val = null, $property) {

			$qw = "UPDATE $table SET $val WHERE $property";
			$ret = $this->con->query($qw);

			return $ret;			
		}

		function delete($table = null, $property) {

			$qw = "DELETE FROM $table WHERE $property";
			$ret = $this->con->query($qw);

			return $ret;
		}
	}
	$db = new proses;


	switch ($_POST['aksi']) {
		case 'tambah':
		
			$simpan = $db->insert('pegawai', 
				"'$_POST[id_pegawai]',
				'$_POST[nama]',
				'$_POST[tgl_lahir]',
				'$_POST[jk]',
				'$_POST[alamat]',
				'$_POST[status]',
				'$_POST[email]'");

				echo "<script>alert('berhasil')</script>";
				echo "<script>document.location.href='../index.php?page=customer'</script>";


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