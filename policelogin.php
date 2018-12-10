<!DOCTYPE html>

<?php
	session_start();
	session_destroy();
	
	if (isset($_GET['id'])){
		if ($_GET['id'] == 'loggedOut'){
			echo "<script> alert('Logged out Successfully'); </script>";
			
		}
	}
	
?>


<html lang="en">
	<head>
		<title>Crime Reporting</title>
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
			
			#main1{
				text-align:center;
				font-weight:bold;
				width=350px;
				height:100%;
			}
			fieldset{
				align: left;
			}
			
            #header{
                background:lightblue;
                padding: 2px;
            }

            #imp{
            	color:red;
            }

            input:hover{
            	border-color: red;

            }
            input{
				margin: auto;
				margin-bottom:10px;
            }

            .form-group{
                
            	max-width: 300px;
            	margin: auto;
            }

            .level_id{
            	width: 300px;
            	margin: auto;
            }
			/* .select{
				padding:10px;
			}
			.label{
				padding:10px;
			} */
        
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
				<li><a href = "comingsoon.php">Services</a></li>
				<li><a href = "comingsoon.php" >News</a></li>
				<li><a href = "policelogin.php" >Police Login</a></li>
				<li><a href = "" >Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>

</header>
		<div id="container">
			<div id="header">
				<center><h1>Police Log In</h1></center>	
			</div>
			<div id="content">
	
			<div id="main1">

<form action="loginvalid.php" id="report_form" method = "post">
	
  <div class="form-group">
    <input type="text" name = "user" class="form-control" placeholder="Enter your Username" required>
  </div>
  <div class="form-group">
	<input type="password" name="pass" class="form-control" placeholder= "Enter your Password" required>
	
  </div>
  
  <button type="submit" class="btn btn-danger">LOG IN</button>
</form>
			</div>
				</div>
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
		</div>

	
	</body>
</html>
