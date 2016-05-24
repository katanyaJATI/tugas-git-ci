<center>
	<h1>CRUD</h1>
	<a href="tambah.php">Tambah</a> <br />
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>password</td>
			<td>aksi</td>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id; ?></td>
			<td><?php echo $u->username; ?></td>
			<td><?php echo $u->password; ?></td>
			<td>
				<a href="">Lihat</a>
				<a href="">Edit</a>
				<a href="">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>