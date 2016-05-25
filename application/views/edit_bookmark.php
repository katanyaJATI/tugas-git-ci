<center>
	  <h1>CRUD Update</h1>
	  <h2>Edit Data Bookmark</h2>
	  <form action="<?php echo base_url().'index.php/home/ubah_bookmark_aksi';?>" method="POST">
	  <?php foreach($user as $u){ ?>
		Username <br />
		<input type="hidden" name="id" value="<?php echo $u->id ?>"> <br />
		<input type="text" name="title" value="<?php echo $u->title ?>"> <br />
		Password <br />
		<input type="text" name="url" value="<?php echo $u->url ?>"> <br />
		Deskripsi <br />
		<textarea name="description"><?php echo $u->description ?></textarea> <br />

		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
	  </form>
		<?php } ?>
</center>