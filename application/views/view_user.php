<center>
	<h1>DATA USER</h1>
	<a href="<?php echo base_url(); ?>index.php/crud_user/tambah_user">Tambah</a> <br />
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
				<?php echo anchor('crud_user/ubah_user/'.$u->id,'Ubah'); ?>
				<?php echo anchor('crud_user/hapus_user/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>