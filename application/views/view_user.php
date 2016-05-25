<center>
	<h1>DATA USER</h1>
	<a href="<?php echo base_url(); ?>index.php/home/tambah_user">Tambah</a> <br />
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id; ?></td>
			<td><?php echo $u->username; ?></td>
			<td><?php echo $u->password; ?></td>
			<td>
				<?php echo anchor('home/ubah_user/'.$u->id,'Ubah'); ?>
				<?php echo anchor('home/hapus_user/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>