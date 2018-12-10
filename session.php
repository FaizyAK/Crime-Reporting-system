<?php
   include('connection.php');
   session_start();
   
   $user_check=$_SESSION['login_user'];
   
   $sec_sql=mysqli_query($dbcon,"select username from police_login where username = '$user_check'");	

	$row=mysqli_fetch_array($sec_sql,MYSQLI_BOTH);
	
	$login_session=$row['username'];
	
	if(!isset($_SESSION['login_user'])){
		
		header("location:policelogin.php");
		
		
	}






?>