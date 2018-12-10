<?php
	$uname = $_POST['user'];
	$pwd = $_POST['pass'];

	include("connection.php");
	$sql = "SELECT * FROM police_login WHERE username='$uname' AND password='$pwd'";
	$result = mysqli_query($dbcon, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		session_start();
		$_SESSION["username"] = $uname;
		header('Location: ./	policehome.php');		
	}
	else 
	{
		echo "<script> alert('Wrong username / password!'); </script>";
		echo "<script> window.location.replace('policelogin.php'); </script>";
	}
?>