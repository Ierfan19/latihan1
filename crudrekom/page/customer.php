<?php 

	include "sistem/conn.php";
	$qw = $db->get("*","pegawai"," ");

 ?>
				<div class="recentOrders">
					<div class="cardHeader">
						<h2>Tabel Pegawai</h2>
						<a href="index.php?page=form_tambah" class="btn delivered">Tambah</a>
					</div>
					<table>
						<thead>
							<tr>
								<td>id pegawai</td>
								<td>nama</td>
								<td>tgl_lahir</td>
								<td>Jenis Kelamin</td>
								<td>Alamat</td>
								<td>Status</td>
								<td>Email</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($qw as $tampil) {
							 ?>
							<tr>
								<td><?= $tampil["id_pegawai"]; ?></td>
								<td><?= $tampil["nama"]; ?></td>
								<td><?= $tampil["tg_lahir"]; ?></td>
								<td><?= $tampil["jk"]; ?></td>
								<td><?= $tampil["alamat"]; ?></td>
								<td><?= $tampil["status"]; ?></td>
								<td><?= $tampil["email"]; ?></td>
								<td><?="<a class='status inprogress' href='index.php?page=form_edit&id_pegawai=".$tampil['id_pegawai']."'>Edit</a>"?> <form action="sistem/conn.php?id_pegawai=<?= $tampil['id_pegawai']; ?>" method="POST">
					<input type="hidden" name="id" value="<?= $tampil['id_pegawai']; ?>"><button class="status return" name="aksi" value="hapus">Hapus</button>
				</form></td>
							</tr>
							<?php 
							} ?>
						</tbody>
					</table>
				</div>