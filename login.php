<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
			table{
			margin-left: 43%;
			margin-top: 50px;

		}
		input{
			font-size: 20px;
		}
		 button{
			width: 100%;
			height: 30px;
		}
		p{
			margin-left: 46%;
			color: red;
			font-size: 20px;
		}
		.p3{
			color: green;
			font-size: 20px;
			margin-left: 46%;
		}
		h1{
			margin-left: 48%;
			margin-top: 50px;
		}
		body{
			background-color: lightpink;
		}
	</style>
</head>
<body>
	<form action="loginhandle.php" method="post">
		<table>
			<tr>
				<h1>Log In</h1>
			</tr>
			<tr>
				<td><input type="text" name="username" placeholder="Enter username"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Enter password"></td>
			</tr>
			<tr>
				<td><button type="submit" value="LOGIN" name="login">LOGIN</button></td>
			</tr>
		</table>
	</form>
	<?php
	   $result="";
	   if(isset($_GET['login']))
	   	$result = $_GET['login'];
	   if($result=="success")
	   	echo "<p class='p3'>Register successfully</p>";
	   if($result=="error")
	   	echo "<p>Not register successfully</p>";
	?>
</body>
</html>