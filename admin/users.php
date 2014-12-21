<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Manage Users</title>
		<link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<!-- <link rel="stylesheet" href="../libs/sb/sb-admin-2.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/dataTables.bootstrap.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/morris.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/timeline.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/metisMenu/metisMenu.min.css" type="text/css">
		 --><link rel="stylesheet" href="../libs/font-awesome/font-awesome.min.css" type="text/css">
		<style>
			.wrap{
				width:70%;
				margin:0 auto;
				background:#FFFFFF !important;
				overflow:hidden;
				border:solid thin #C0BFBE;
				padding:1%;
				margin-top:-1.6%;
			}
			#side-menu{
				width:20%;
				float:left;
				
			}
			#content{
				width:70%;
				float:left;
				padding:2%;
			}
			.subnav{
				width:100%;
				overflow: hidden;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"> <img alt="Brand" src="..."> </a>
				</div>
			</div>
		</nav>
		
		<div class="wrap">
			<div class="subnav">
					<input type="button" class="btn btn-success pull-right" id="create-user" value="Create user"/>
				</div>
			<div id="side-menu">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation">
						<a href="#" id="pending-orders">Pending Orders</a>
					</li>
					<li role="presentation">
						<a href="#" id="products">Products</a>
					</li>
					
					<li role="presentation" class="active">
						<a href="#" id="users" >Users</a>
					</li>
					<li role="presentation">
						<a href="#" id="customers">Customers</a>
					</li>
				</ul>
			</div>
			<div id="content">
				
				<div id="data-content">
					
					
				</div>
			</div>
			
		</div>
		<?php
			include "modals-UI/modal.php";
		?>
		
	</body>
	<script type="text/javascript" src="../libs/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../libs/columns/js/jquery.columns.min.js"></script>
	<link rel="stylesheet" href="../libs/columns/css/clean.css" type="text/css"/>
	<script type="text/javascript" src="app-UI.js"></script>
	<script type="text/javascript" src="app-Data.js"></script>
	
	
	<script>
		jQuery(document).ready(function(){
			loadUsers();
		});
	</script>
</html>

