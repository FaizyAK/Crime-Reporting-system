<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Crime Report</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href= "css/style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
        <script src="js/jquery.min.js"></script>

        <!-- Latest compiled Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>
        
		<style>
			form{
				text-align:center;
			}
			.form-group{
            	max-width: 300px;
            	margin: auto;
			}
			.level_id{
            	width: 300px;
            	margin: auto;
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
		<div id="container">
			<div id="content">
				<div id="header">
					<u><center><h1>Welcome Police</h1></u></center>
				</div>
				<div id="main2">
			
			
					<form action="updatestatus.php" method="post">
					<div class="form-group">
					<br> <input type="text" name="case_id" placeholder="Enter CASE NO:" class="form-control">
					<br>
					</div>
					<label for="Select status"> Update Status:</label>
						<select name='status' class="form-control level_id">
						<option >1-PENDING</option>
						<option >2-ONGOING</option>
						<option >3-CLOSED</option>
						</select><BR><BR>

					<br><input type="submit" value="Done" class="btn">
					</form>	
				
					<?php
				
				require('connection.php');
				
				if(isset($_POST['case_id'])){
					
					$query1 = "UPDATE record SET status_id= '{$_POST['status']}' WHERE ID = '{$_POST['case_id']}' ;";
					
					$result = mysqli_query($dbcon, $query1);
					
					echo"done!";
				}
				?>
					
			<div id="logout">
			<button type="button"  class="btn btn-danger" onclick="logout();"> Logout </button>
			</div>
			</div>
			<div class="row footer">
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
            </div>
		</div>
		<script>
				function logout()
				{
					//alert('You \'re succsefully logged out!');
					window.location.replace('policelogin.php?id=loggedOut');
				}
			</script>
	<body>
</html>
	