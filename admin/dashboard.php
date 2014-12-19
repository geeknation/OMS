<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Dashboard||OMS</title>
		<link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/sb-admin-2.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/dataTables.bootstrap.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/morris.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/timeline.css" type="text/css">
		<link rel="stylesheet" href="../libs/sb/metisMenu/metisMenu.min.css" type="text/css">
		<link rel="stylesheet" href="../libs/font-awesome/font-awesome.min.css" type="text/css">
		<style type="text/css">
			.wrap {
				width: 88.5%;
				background: rgb(255,255,255);
				border: solid thin #ccc;
				margin: 0 auto;
				padding: 2%;
				margin-top: -2%;
				overflow:hidden;
			}
			.side-menu {
				width: 20%;
				float:left;
			}
			.content-loader{
				width:70%;
				float:right;
			}
			div.search-box{
				padding:.5%;
			}
			div.search-container{
				float:right !important;
			}
			span.title-label{
				width:30% !important;
				font-size:2em;
			}
			.fa{
				height:inherit !important;
				padding:18.5%;
			}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>

						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="wrap">
			<div class="side-menu">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active">
						<a href="#" id="pending-orders">Pending Orders</a>
					</li>
					<li role="presentation">
						<a href="#" id="products">Products</a>
					</li>
					
					<li role="presentation">
						<a href="#" id="users">Users</a>
					</li>
					<li role="presentation">
						<a href="#" id="customers">Customers</a>
					</li>
				</ul>
			</div>
			<div class="content-loader">
				<div class="search-box row">
					<span class="title-label">
						Pending Orders
					</span>
					<div class="input-group col-md-6 search-container">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-success" type="button">
								<i class="fa fa-search"></i>
							</button> </span>

					</div><!-- /input-group -->
				</div>
				<!-- end of top section --><hr/>
				<div class="console">
					
				</div>
			</div>
		</div>
		<?php
			include "modals-UI/modal.php";
		?>
	</body>
	<script type="text/javascript" src="../libs/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="app-UI.js"></script>
	<script type="text/javascript" src="app-Data.js"></script>
</html>

