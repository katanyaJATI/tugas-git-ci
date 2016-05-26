<div style="padding:30px">
	<h1>DATA USER</h1>

	<table border="1" style="width:100%;">
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
		<?php 
		$no = 0;
		foreach($user as $u){
		$no++; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $u->username; ?></td>
			<td><?php echo $u->password; ?></td>
			<td>
				<?php echo anchor('home/ubah_user/'.$u->id,'Ubah'); ?>
				<?php echo anchor('home/hapus_user/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="3"></td>
			<th><a href="<?php echo base_url(); ?>index.php/home/tambah_user">Tambah</a></th>
		</tr>
	</table>
</div>