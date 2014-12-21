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
		<title>Make Order</title>
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="libs/bootstrap-datepicker/css/datepicker.css" type="text/css">
		<style>
			.wrap {
				width: 90%;
				margin: 0 auto;
				overflow:hidden;
				padding-top:1%;
			}
			.thebutton {
				margin: 1%;
				overflow: hidden;
				padding: 1%;
			}
			#side-menu{
				width:20%;
				float:left;
			}
			.content{
				width:70%;
				float:left;
				margin:1%;
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
		
		<div class="wrap">
			<div id="side-menu">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active">
						<a href="index.php">Home</a>
					</li>
					<li role="presentation">
						<a href="myorders.php">Orders</a>
					</li>
					
				</ul>
		
			</div>
			<div class="content">
				<div class="panel thebutton">
			<input type="button" id="addOrderItem" class="btn btn-success pull-right" value="Add Item">
		</div>
				<p>
			Order Number:
			<h3 id="order-number">
				<?php
				include "libs/uuid/Uuid.php";
				use Rhumsaa\Uuid\Uuid;
				use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
				
				$uuid=Uuid::uuid4();
				
				echo $uuid->toString();
				
				?>
			</h3>
		</p>
		<div class="item-base">
			<div class="well well-lg">
				<h2>
					Please add items to your order
				</h2>
			</div>
		</div>
			</div>

		</div>
		<?php
		include "modalUI/modals.php";
		?>
		<script type="text/javascript" src="libs/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="libs/bootstrap/dist/js/bootstrap.js"></script>
		<script type="text/javascript" src="libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="modalUI/appUI.js"></script>
		<script type="text/javascript" src="controller/appData.js"></script>
	</body>
</html>
<?php
function generateToken($length = 6) {
	return substr(str_shuffle('abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ1234567890'), rand(0, 60 - $length), $length);
}
?>