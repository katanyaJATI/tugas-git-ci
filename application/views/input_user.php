<center>
	  <h1>CRUD Insert</h1>
	  <h2>Tambah Data User</h2>
	  <form action="<?php echo base_url(); ?>index.php/home/tambah_user_aksi" method="POST">
		Username <br />
		<input type="text" name="username"> <br />
		Password <br />
		<input type="password" name="password"> <br />
		
		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
	  </form>
</center>