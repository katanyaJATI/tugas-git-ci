<center>
	  <h1>CRUD Update</h1>
	  <h2>Edit Data User</h2>
	  <form action="<?php echo base_url().'index.php/crud_user/ubah_user_aksi';?>" method="POST">
	  <?php foreach($user as $u){ ?>
		Username <br />
		<input type="hidden" name="id" value="<?php echo $u->id ?>"> <br />
		<input type="text" name="username" value="<?php echo $u->username ?>"> <br />
		Password <br />
		<input type="password" name="password" value="<?php echo $u->password ?>"> <br />
		
		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
	  </form>
		<?php } ?>
</center>