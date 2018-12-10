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
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href= "css/style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="js/jquery.min.js"></script>

        <!-- Latest compiled Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>
        
        <style>
            .header{
                height:230px;
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
			<div id="header">
				<center><u><h1>Reported Crimes</h1></u></center><br>
			</div>
			<div id="main">
				
				
				    <?php
      require('connection.php');
	  	  
	  
	  
	  
	 
	$qry= "SELECT exec_time from trigger_time";
                                
 $query = "SELECT `id`,`name`, `phone`, `aadhar`, `level_id`, `zone_id`, `descr`, `status_id` FROM `record`";
    
           
           
               
               
    $result = $dbcon-> query($query);
    
    if($result-> num_rows > 0){
        
        echo' 
                            <table class="table">
        <tr>
			<th>Case Number</th>
            <th> Name </th>
            <th> Phone Number</th>
            <th> Aadhar Number </th>
            <th> Level_ID </th>
            <th> Zone_ID</th>
            <th> Description </th>
			<th> Status_ID </th>
			
			
        
        </tr>';
        
        while($row = $result-> fetch_assoc())
        {
            echo "<tr>
           <td>".$row["id"]."</td>
           <td>".$row["name"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["aadhar"]."</td>
            <td>".$row["level_id"]."</td>
            <td>".$row["zone_id"]."</td>
            <td>".$row["descr"]."</td>
			<td>".$row["status_id"]."</td>
            </tr>";
        };
        echo "</table>";
    }
    else{
        
        echo "0 result";
    }
	
	
	$result1 = $dbcon-> query($qry);
           
      if($result1-> num_rows > 0){
			$row = $result1-> fetch_assoc();
			
	  echo "Last Reported  Time:  ".$row["exec_time"].".";   
	  }
	  
    ?>
				
				
				
			</div>
				
        </div>
        <div id="logout">
			<button type="button"  class="btn btn-danger" onclick="logout();"> Logout </button>
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

            <script>
				function logout()
				{
					//alert('You \'re succsefully logged out!');
					window.location.replace('policelogin.php?id=loggedOut');
				}
			</script>
	<body>
</html>
	