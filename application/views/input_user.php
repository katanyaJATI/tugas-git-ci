<div style="padding:30px;text-align:center">
	<h2>Tambah Data User</h2>
	<div style="width:400px; margin:0 auto"> 

		<form action="<?php echo base_url(); ?>index.php/home/tambah_user_aksi" method="POST">
			<div class="form-group">
				<label>Username</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" required="" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" required="" name="password">
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			<button type="reset" class="btn btn-default">RESET</button>
			</div>
		</form>

	</div>
</div>