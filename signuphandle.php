<?php
   if(isset($_POST['submit'])){
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];}
    
	$conn = mysqli_connect("localhost","root","","phppractice");

	if(empty($first) || empty($last) || empty($email) || empty($username) || empty($password)){
		header("Location:http://localhost/phppractice/signup.php?signup=empty");
		exit();
	}
	else{
		if(preg_match("[a-zA-Z]",$first) || preg_match("[a-zA-Z]",$last) ){
			header("Location:http://localhost/phppractice/signup.php?signup=char");
			exit();
		}
		elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			header("Location:http://localhost/phppractice/signup.php?signup=email");
			exit();
		}
		else{
			$sql="INSERT INTO user (first,last,email,username,password) VALUES ('$first','$last','$email','$username', '$password')";
			$result = mysqli_query($conn,$sql);
			header("Location:http://localhost/phppractice/signup.php?signup=success");
			exit();
		}
	}
?>
