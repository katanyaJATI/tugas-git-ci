<div style="padding:30px;text-align:center">
	<h1>CRUD Insert</h1>
	<h2>Tambah Data Bookmark</h2>
	<div style="width:400px; margin:0 auto"> 

	<form action="<?php echo base_url(); ?>index.php/home/tambah_bookmark_aksi" method="POST">
		<div class="form-group">
			<label>TITLE</label>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" required="" name="title">
		</div>
		<div class="form-group">
			<label>URL</label>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" required="" name="url">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
		</div>
		<div class="form-group">
			<textarea name="description" class="form-control" style="height:100px"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<button type="reset" class="btn btn-default">RESET</button>
		</div>
	</form>

</div>