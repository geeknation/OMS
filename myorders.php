<?php
require_once "entel_ltd/EntelAuth.php";
$auth=new EntelAuth("login.php","index.php");
$auth->checkSession();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>My Orders</title>
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<style>
			#side-menu{
				float:left;
				width: 20%;
			}
			#data-table{
				float:left;
				width:70%;
				padding-left:2%;
			}
		</style>
	</head>
	<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>
  </div>
</nav>
		<div class="wrapper">
			
			<div id="side-menu">
				<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="orders.php">Products</a></li>
</ul>
			</div>
			<div id="data-table" class="">
				
			</div>
		</div>
	</body>
	<script type="text/javascript" src="libs/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="libs/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="libs/columns/js/jquery.columns.min.js"></script>
	<script type="text/javascript" src="modalUI/appUI.js"></script>
	<script type="text/javascript" src="controller/appData.js"></script>
	<p style="visibility: hidden" class="json-data"></p>
	<link rel="stylesheet" href="libs/columns/css/clean.css" type="text/css">
</html>

