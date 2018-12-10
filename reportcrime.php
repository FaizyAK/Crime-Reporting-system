<!DOCTYPE html>
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
			#level_zone_info{
				width=100px;
				float:left;
			}
			#main1{
				text-align:center;
				font-weight:bold;
				width=350px;
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
				<li><a href = "comingsoon.php" id="not_f">Services</a></li>
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
				<center><h1>Report A Crime</h1></center>	
			</div>
			<div id="content">
	
			<div id="main1">

<form action="" id="report_form" method="post">
	<h2>YOUR DETAILS</h2>
  <div class="form-group">
    <input type="text" name = "name" class="form-control" placeholder="Enter your name" required>
  </div>
  <div class="form-group">
	<input type="text" name="phone" class="form-control" placeholder= "Enter your phone" required>
	<input type="text" name = "aadhar" class="form-control" placeholder= "Enter your Aadhar" required>
  </div>
  <h2>CRIME DETAILS</h2>

  <label for="crime level"> Select Crime Level</label>
						<br>
						<select name='level_id' class="form-control level_id" >
						<option >1-MINOR</option>
						<option >2-MAJOR</option>
						</select><br>

	<label for="Crime Location"> Select Crime LocationID</label>
					<br>
						<select name='zone_id' class="form-control level_id">
						<option >1-DERLAKATTE</option>
						<option >2-KANKANADY</option>
						<option >3-ADYAR</option>
						<option >4-TALAPPADY</option>
						<option >5-VAMANJOOR</option>
						</select><br>
	<label>Crime detail :<br> <textarea class="form-control level_id" placeholder="Enter the crime detail" rows=4 name="descr" column=30 required></textarea></label><br>									
  <button type="submit" name="submit" class="btn btn-danger">REPORT CRIME</button>
</form>
				

				<?php

  require('connection.php');
  if(isset($_POST['submit'])){

		/* $sql="CALL INSERTDATA('".$_POST['name']."','".$_POST['phone']."','".$_POST['aadhar']."','".$_POST['level_id']."','".$_POST['zone_id']."','".$_POST['descr']."')"; */
		
		$sql = "INSERT INTO record (name, phone, aadhar, level_id, zone_id, descr) VALUES ('{$_POST['name']}','{$_POST['phone']}','{$_POST['aadhar']}','{$_POST['level_id']}','{$_POST['zone_id']}','{$_POST['descr']}');";
	
		$result = mysqli_query($dbcon, $sql);
  echo "Done!";
  }
			?>





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
