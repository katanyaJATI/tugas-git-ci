<center>
	<h1>DATA BOOKMARK</h1>
	<a href="<?php echo base_url(); ?>index.php/crud_bookmark/tambah_bookmark">Tambah</a> <br />
	<table border="1">
		<tr>
			<td>ID</td>
			<td>title</td>
			<td>url</td>
			<td>deskripsi</td>
			<td>aksi</td>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id; ?></td>
			<td><?php echo $u->title; ?></td>
			<td><?php echo $u->url; ?></td>
			<td><?php echo $u->description; ?></td>
			<td>
				<?php echo anchor('crud_bookmark/ubah_bookmark/'.$u->id,'Ubah'); ?>
				<?php echo anchor('crud_bookmark/hapus_bookmark/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>