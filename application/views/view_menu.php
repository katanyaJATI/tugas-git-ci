<div id="container">
    <ul class="nav" style="height:50px">
	</ul>
	<div class="nav" style="background-color: #fff; border-top:1px solid #000;border-bottom:1px solid #000; text-align:right;padding:10px">
		<li style="float:left"><h3>Selamat Datang, <?php echo $this->session->userdata("nama"); ?> ...</h3></li>
		<li><a href="<?php echo base_url(); ?>index.php/home">HOME</a></li>
		<li><a href="<?php echo base_url(); ?>index.php/home/lihat_user">MENU USER</a></li>
		<li><a href="<?php echo base_url(); ?>index.php/home/lihat_bookmark">MENU BOOKMARK</a></li>
        <li><a href="<?php echo base_url('index.php/home/logout'); ?>">LOGOUT</a></li>
	</div>
