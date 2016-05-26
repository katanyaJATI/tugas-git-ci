<div style="padding:30px;text-align:center">
	  <h1>CRUD Insert</h1>
	  <h2>Tambah Data Bookmark</h2>
	  <form action="<?php echo base_url(); ?>index.php/home/tambah_bookmark_aksi" method="POST">
		Title <br />
		<input type="text" name="title"> <br />
		Url <br />
		<input type="text" name="url"> <br />
		Deskripsi <br />
		<textarea name="description"></textarea> <br />
		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
	  </form>
</div>