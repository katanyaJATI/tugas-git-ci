<style type="text/css">
	td, th{
		border: 0px;
		text-align:justify;
	}
</style>
<div style="padding:30px;text-align:center">
	<h1>CRUD Update</h1>
	<h2>Detail Data Bookmark</h2>
	<div style="width:400px; margin:0 auto"> 

	  <?php foreach($user as $u){ ?>
		<table style="width:100%; border:0">
			<tr>
				<th>TITLE</th>
				<th><?php echo $u->title; ?></th>
			</tr>
			<tr>
				<th>URL</th>
				<th><?php echo $u->url; ?></th>
			</tr>
			<tr>
				<th>DESKRIPSI</th>
				<th><?php echo $u->description; ?></th>
			</tr>
			<tr>
				<th colspan="2">
					<button class="button button-default"><?php echo anchor('home/lihat_bookmark','BACK'); ?></button>
					<button class="button button-default"><?php echo anchor('home/ubah_bookmark/'.$u->id,'EDIT'); ?></button>
					<button class="button button-default"><?php echo anchor('home/hapus_bookmark/'.$u->id,'HAPUS'); ?></button>
				</th>
			</tr>
			
		</table>

	  <?php } ?>
</div>
</div>