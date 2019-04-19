<?php
  if(isset($_POST['login'])){
  	$username = $_POST['username'];
  	$password = $_POST['password'];
   }
   $conn = mysqli_connect("localhost","root","","phppractice");
   $sql = "SELECT * FROM user where(username='$username' and password='$password')";
   $result = mysqli_query($conn,$sql);
   $re  = mysqli_num_rows($result);
   if($re==1){
   	header("Location:http://localhost/phppractice/login.php?login=success");
   	exit();
   }
   else{
   	header("Location:http://localhost/phppractice/login.php?login=error");
   	exit();
   }

?>