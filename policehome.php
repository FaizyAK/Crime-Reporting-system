<?php
	session_start();
	
	if(!$_SESSION['username'])
	{
		echo "<script> alert('You must login first!'); </script>";
        echo "<script> window.location.replace('policelogin.php'); </script>";
	}	
?>

<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Police Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href= "css/style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
        <script src="js/jquery.min.js"></script>

        <!-- Latest compiled Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>
        

		<style type="text/css">
			*{
				/* font-size: 30px; */
			}
			.logout{
				float: right;
				font-size: 20px;
				text-align: center;
				color: white;
			}
			.logout:hover{
				color: green;
			}
			a{
				text-decoration: none;
				
			}
			a:hover{
				color: red;
			}
			ul{
				list-style-type: none;
			}
			.bname{
				line-height: 90px;
				
				padding-left:40%;
			}
			
			.page_content{
					padding-left:150px;
					font-size:20px;
			}
			footer{
				margin-top : 450px;
				background: black;
				height: 90px;
				position: absolute;
				width: 100%;
				color: white;
				text-align: center;
			}
			.footertext{
				line-height: 30px;
			}
			button{
				float: right;
				margin-right:150px;
				
			}
			button:hover{
				
			}
		</style>
	</head>
	<body>
	<header class = "header">

<!-- row 1 start -->
<div class="row row1">
	 <div class="container">
		 <div class="col-md-6 row1_col1">
			 <!-- <img src="images/download.png" width="100px" height=""> -->
			 <h1><span id='pd1' class="pd"> POLICE DE</span><span class="pd" id='pd2'>PARTMENT</span></h1>
			</div>
		   
		 <div class="col-md-6 row1_col2">
			 
			<img src="images/nia.jpg" width="200px" height="">
			 <img src="images/cbi.png" width="90px" height="">
			 
		 </div>
	 </div>
</div>
<!-- row 1 end -->

<!-- nav row strat -->
<nav class = "navbar navbar-style">
	<div class = "container">
		<div class = "navbar-header">
			<button type = "button" class = "navbar-toggle" data-toggle="collapse" data-target="#micon">
				<span class = "icon-bar" ></span>
				<span class = "icon-bar" ></span>
				<span class = "icon-bar" ></span>    
			</button>
		</div>

		<div class="collapse navbar-collapse" id="micon">
			<ul class="nav navbar-nav navbar">
				<li><a href = "index.html" >Home</a></li>
				<li><a href = "comingsoon.php" >Services</a></li>
				<li><a href = "comingsoon.php" >News</a></li>
				<li><a href = "policelogin.php" >Police Login</a></li>
				<li><a href = "" >Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>

</header>
<section>	

		<div id="container">
			<div id="header">
				<h1 class="bname">Welcome Police</h1>
				<br> <button type="button"  class="btn btn-danger" onclick="logout();"> Logout </button>
			</div>
			<div id="main" class="page_content">
				<ul>
				<li><a class="plink" href="crime_record.php">Reported crimes</a></li>
				<li><a class="plink" href="updatestatus.php">Update Reported Crime status</a></li>
			</div>
			<!--<div id="logout">
				<button  type="button"><a href="index.php" class="logout"> Logout</a></button>
			
			</div>-->
		</div>
		</section>
		<section class="footer">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row footer-row">
                            <div class="col-md-4 col1">
                                <center>CRIME REPORT AGENCY IND</center>
                            </div>

                            <div class="col-md-4">
                                <center>All Rights Reserved &copy; 2018</center>
                            </div>

                            <div class="col-md-4">
                                <center>PiJaanWEB </center>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			<script>
				function logout()
				{
					//alert('You \'re succsefully logged out!');
					window.location.replace('policelogin.php?id=loggedOut');
				}
			</script>
	<body>
</html>
