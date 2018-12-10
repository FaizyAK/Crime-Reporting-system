<html>
	<head> 
		<title>Crime Reporting</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href= "css/style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            #header{
                background:lightblue;
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
             <h1> Police Department</h1>
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
                <li><a href = "" >Services</a></li>
                <li><a href = "" >News</a></li>
                <li><a href = "login.html" >Police Login</a></li>
                <li><a href = "" >Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

</header>
		<div id="container">
			<div id="header">
				<h1>Crime Report</h1>
			</div>
			<div id="main">
			
			
				<form action="reported_success.php" method="post">
					Your Details
					<br>Enter your name: <input type="text" name="name">
					<br>Enter your phone number: <input type="text" name="phone">
					<br>Enter your Aadhar: <input type="text" name="aadhar">
					<br><h3>Crime Details</h3>
					<br>Select the crime level: <input type="text" name="clevel">
					<br>Crime Location: <input type="text" name="clocation">
					<br>Crime Description: <input type="text" name="cdesc" placeholder="Enter the details of the crime including any identification of culprit if available">
					<br><input type="submit" value="Submit">
				</form>	
				
				<?php
                                     
  require('connection.php');                                  
  if(isset($_POST['name'])){  
      
		$sql = "INSERT INTO record (name, phone, aadhar, level_id, zone_id, descr) VALUES ('{$_POST['name']}','{$_POST['phone']}','{$_POST['aadhar']}','{$_POST['clevel']}','{$_POST['clocation']}','{$_POST['cdesc']}');";
  		
		$result = mysqli_query($dbcon, $sql);	
  echo "Done!";}
			?>
			</div>
			<div id="footer">
				Copyright &copy; 2017
			</div>	
		</div>
	</body>
</html>