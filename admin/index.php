<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>
		<link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.min.css" type="text/css">
		<style type="text/css">
			.wrapper{
				width:40%;
				margin:0 auto;
				margin-top:10%;
			}
			form{
				padding:1%;
			}
			.header{
				text-align:center;
				font-weight: bold;
				
			}
		</style>
	</head>
	<body>
		<div class="wrapper panel panel-default">
		<div class="header panel-heading">OMS ADMIN</div>
		<p></p>
		
		<form role="form">
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
	<script type="text/javascript" src="../libs/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var loginButton=$("#login-button");
			var username='';
			var password='';
			loginButton.click(function(){
				username=$("#username").val();
				password=$("#password").val();
				
				$.ajax({
					url:"login.php",
					dataType:"json",
					type:"post",
					cache:false,
					beforeSend:function(){
						
					},
					success:function(){
						
					},
					error:function(){
						
					}
				}).done(function(data){
					console.log(data);
				});
				
				
				
			});
		});
	</script>
</html>

