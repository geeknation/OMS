<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OMS LOGIN</title>
		<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			.wrapper{
				width:30%;
				margin:0 auto;
				margin-top:10%;
				
			}
			form{
				padding:2%;
			}
		</style>
	</head>
	<body>
		<div class="wrapper panel panel-default">
		<div class="header panel-heading">OMS Login</div>
		
		
		<form role="form">
			<div class="console-msg"></div>
			<div class="form-group">
				<label for="username" id="username-label">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div class="form-group">
				<input type="button" class="btn btn-success btn-block" value="login" id="login-button">
			</div>
		</form>
		</div>
	</body>
	<!-- jQuery -->
    <script src="libs/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="controller/appData.js"></script>
    <script src="modalUI/appUI.js"></script>
</html>


