<!DOCTYPE html>
<html>
<head>
	<title>CRUD CI</title>
	<style type="text/css">
		table, td, th {
		    border: 1px #ccc solid;
		    padding: 6px;
		}
		input{
			text-align: center;
		}
		.tabel-responsive > table{
		  min-height: .01%;
		  overflow-x: auto;
		  width: 100%;
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
		.button{
			display:inline-block;
			padding:6px 12px;
			margin-bottom:0;
			font-size:14px;
			font-weight:400;
			background-image:none;
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
		#container {
			width:80%;
			margin: 0 auto;
			padding: 0px;
			border: 1px solid #000;
		}

		.nav {
		 
			font-weight: 500;
			font-size: 13px;	
		 
			position: relative;
			padding: 0 0 0 4px;
			margin: 0;
		}


		.nav a, td a, th a{
			color: #000;
			text-decoration: none;
		}
		.nav a:hover, td a:hover, th a:hover{
			color: #ccc;
		}
		.nav > li {
			display: inline-block;
			text-align: center;
		}
		.nav > li > a {
			padding:20px 18px;
			display: block;
		}

		.footer{
			border-top: 1px solid #000;
			text-align: center;
			padding: 20px;
		}
	</style>
</head>
<body>
