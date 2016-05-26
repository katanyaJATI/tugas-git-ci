<div style="padding:30px;text-align:center">
	<h1>CRUD Update</h1>
	<h2>Edit Data User</h2>
	<div style="width:400px; margin:0 auto"> 
	
	<form action="<?php echo base_url().'index.php/home/ubah_user_aksi';?>" method="POST">
	  <?php foreach($user as $u){ ?>
		<input type="hidden" name="id" value="<?php echo $u->id ?>">
		<div class="form-group">
			<label>Username</label>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" required="" name="username" value="<?php echo $u->username ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" required="" name="password_lm" placeholder="masukkan password lama">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" required="" name="password" placeholder="masukkan password baru">
		</div>
		<div class="form-group">
			<button type="submit" class="button button-default">UBAH</button>
			<button type="reset" class="button button-default">RESET</button>
		</div>
	</form>
		<?php } ?>
</div>