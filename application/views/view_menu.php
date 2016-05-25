<center>
	<h1>PILIH MENU</h1>
	<h3>
		Hai, <?php echo $this->session->userdata("nama"); ?>... 
		<a href="<?php echo base_url('index.php/home/logout'); ?>">Logout</a>
	</h3>
	<a href="<?php echo base_url('logout') ?>"></a>
	<a href="<?php echo base_url(); ?>index.php/home/lihat_user">MENU USER</a> <br />
	<a href="<?php echo base_url(); ?>index.php/home/lihat_bookmark">MENU BOOKMARK</a> <br />
</center>