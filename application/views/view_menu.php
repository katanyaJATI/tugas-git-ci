<div id="container">
    <ul class="nav">
		<li><a href="<?php echo base_url(); ?>index.php/home/lihat_user">MENU USER</a></li>
		<li><a href="<?php echo base_url(); ?>index.php/home/lihat_bookmark">MENU BOOKMARK</a></li>
        <li><a href="<?php echo base_url('index.php/home/logout'); ?>">LOGOUT</a></li>
	</ul>
	<div style="border-top:1px solid #000;border-bottom:1px solid #000; text-align:right;padding:10px">
	Hai, <?php echo $this->session->userdata("nama"); ?>...
	</div>
