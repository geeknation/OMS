<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Make Order</title>
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="libs/bootstrap-datepicker/css/datepicker.css" type="text/css">

	</head>
	<body>
		<p>
			Order Number:
			<h3 id="order-number">
				<?php
					echo generateToken(); 
				?>
			</h3>
		</p>
		
		<input type="button" id="addOrderItem" value="Add Item">
		<div class="item-base">
			
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
function generateToken($length=6){
    return substr(str_shuffle('abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ1234567890'),rand(0,60-$length),$length);
}
?>