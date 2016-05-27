<!DOCTYPE html>
<html>
<head>
	<title>CRUD CI</title>
	<style type="text/css">
		body{
			background-color: #ecf0f1;
		}
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
		.button-info{
			color:#fff;
			background-color:rgb(52, 152, 219);
		}
		.button-info:hover{
			color:#fff; 
			background-color:rgb(41, 128, 185);
		}
		.button-success{
			color:#fff; 
			background-color:rgb(46, 204, 113);
		}
		.button-success:hover{
			color:#fff;
			background-color:rgb(39, 174, 96);
		}
		.button-danger{
			color:#fff;
			background-color:rgb(231, 76, 60);
		}
		.button-danger:hover{
			color:#fff;
			background-color:rgb(192, 57, 43);
		}
		.button-warning{
			color:#fff;
			background-color:rgb(241, 196, 15);
		}
		.button-warning:hover{
			color:#fff;
			background-color:rgb(243, 156, 18);
		}
		#container {
			width:80%;
			margin: 0 auto;
			padding: 0px;
			border: 1px solid #000;
			background-color: #fff;
		}

		.nav {
		 
			font-weight: 500;
			font-size: 13px;	
		 
			position: relative;
			padding: 0 0 0 4px;
			margin: 0;
		    background-color: #95a5a6;
		}

		.nav a{
			color: #fff;
			text-decoration: none;
		}
		td a, th a{
			color: #000;
			text-decoration: none;
		}
		td a:hover, th a:hover{
			color: #2c3e50;
			text-decoration: none;
		}
		.nav > li {
			display: inline-block;
			text-align: center;
		}
		.nav > li > a {
			padding: 15px;
			display: block;
			background-color: #7f8c8d;
		}
		.nav > li:hover > a {
			background-color: #95a5a6;
		}

		.footer{
			border-top: 1px solid #000;
			text-align: center;
			padding: 20px;
			background-color: #95a5a6;
		}
	</style>
</head>
<body>
