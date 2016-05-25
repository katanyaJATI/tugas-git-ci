<center>
	<h1>DATA BOOKMARK</h1>
	<a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark">Tambah</a> <br />
	<table border="1">
		<tr>
			<th>ID</th>
			<th>title</th>
			<th>url</th>
			<th>deskripsi</th>
			<th>aksi</th>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id; ?></td>
			<td><?php echo $u->title; ?></td>
			<td><?php echo $u->url; ?></td>
			<td><?php echo $u->description; ?></td>
			<td>
				<?php echo anchor('home/ubah_bookmark/'.$u->id,'Ubah'); ?>
				<?php echo anchor('home/hapus_bookmark/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</center>