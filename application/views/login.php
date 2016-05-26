<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman login | Janaka Jati Lasmana</title>
	<style type="text/css">
		#login{
			width: 500px;
			margin: 10px auto;
			border: 1px solid #000;
		}
		#login > .badan-login{
			border-top: 1px solid #000;
			padding: 30px;
		}
		.button{
			display:inline-block;
			padding:6px 12px;
			margin-bottom:0;
			font-size:14px;
			font-weight:400;
			border:1px solid #ccc;
		}
		.button-default{
			color:#000;
			background-color:rgb(236, 240, 241);
		}
		.button-default:hover{
			color:#000;
			background-color:rgb(189, 195, 199);
		}
		.form-group{
			margin-bottom:10px;
		}
		.form-control {
		  	display: block;
		  	width: 100%;
		  	height: 34px;
		  	font-size: 14px;
		  	line-height: 1.42857143;
		  	color: #555;
		  	background-color: #fff;
		  	border: 1px solid #000;
		}
		input{
			text-align:center;
		}
	</style>
</head>
<body>
<div id="login">
	<h2 style="text-align:center">Halaman Login</h2>
	<div class="badan-login">
		<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="USERNAME">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="PASSWORD">
			</div>
			<div class="form-group" style="text-align:right">
				<button type="submit" class="button button-default" name="login">LOGIN</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>