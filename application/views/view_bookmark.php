<div style="padding:30px">
	<h1>DATA BOOKMARK</h1>
	<table border="1" style="width:100%;">
		<tr>
			<th>No.</th>
			<th>title</th>
			<th>url</th>
			<th>deskripsi</th>
			<th>aksi</th>
		</tr>
		<?php 
		$no = 0;
		foreach($user as $u){
		$no++; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $u->title; ?></td>
			<td><?php echo $u->url; ?></td>
			<td><?php echo $u->description; ?></td>
			<td>
				<?php echo anchor('home/ubah_bookmark/'.$u->id,'Ubah'); ?>
				<?php echo anchor('home/hapus_bookmark/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="4"></td>
			<td><a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark">Tambah</a></td>
		</tr>
	</table>
</div>