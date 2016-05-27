<div style="padding:30px">
	<h1>DATA BOOKMARK</h1>
	<div class="table-responsive">
		<table style="width:100%">
			<tr style="border:0">
				<td style="border:0" colspan="3"></td>
				<th colspan="2"><a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark">+ Tambah</a></th>
			</tr>
			<tr>
				<th>No.</th>
				<th>title</th>
				<th>url</th>
				<th colspan="2">aksi</th>
			</tr>
			<?php 
			$no = 0;
			foreach($user as $u){
			$no++; ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo anchor('home/detail_bookmark/'.$u->id,$u->title); ?></td>
				<td><a href="<?php echo $u->url; ?>" target="_blank"><?php echo $u->url; ?></a></td>
				<td>
					<button class="button button-default"><?php echo anchor('home/ubah_bookmark/'.$u->id,'UBAH'); ?></button>
				</td>
				<td>
					<button class="button button-default"><?php echo anchor('home/hapus_bookmark/'.$u->id,'HAPUS'); ?></button>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>