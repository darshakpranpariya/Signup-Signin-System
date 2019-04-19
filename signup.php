<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
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

		<form action="signuphandle.php" method="post">
			<table><tr>
				<h1>Sign UP</h1></tr>
			<tr>
				<td><input type="text" name="first" placeholder="Enter first name"></td>
			</tr>
			<tr>
				<td><input type="text" name="last" placeholder="Enter last name"></td>
			</tr>
			<tr>
				<td><input type="text" name="email" placeholder="Enter email id"></td>
			</tr>
			<tr>
				<td><input type="text" name="username" placeholder="Enter username"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Enter password"></td>
			</tr>
			<tr>
				<td><button type="submit" value="signup" name="submit">SIGNUP</button></td>
			</tr>
		</table>
		</form>
		 <?php
		 	$result="";
			 if(isset($_GET['signup'])) 
				$result = $_GET['signup'];
			if($result=="empty"){
				echo "<p>enter all field of form</p>";
				exit();
			}
			if ($result=="char"){
				echo "<p>enter correct first/last name</p>";exit();
			} 
			if($result=="email") {
				echo "<p class='p3'>enter correct email address</p>";exit();
			}
			if($result=="success") {
				echo "<p class='p3'>signup successfully</p>";exit();
			}
		?> 
</body>
</html>