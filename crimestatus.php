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
             input:hover{
            	border-color: red;

            }
            input{
            	margin: 10px;
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
			<div id="header">
                
				<center><h1>Check your complaint status</h1></center>
			</div>
			<div id="main">
				
				
				
				
				<form action="crimestatus.php" method="POST">
                <div class="form-group">
                <center><br> <input type="text" class="form-control" name="aadhar" placeholder="Enter adhar NO:"></center>
                </div>
					
					<br><center><input type="submit" class="btn btn-primary" value="CHECK"></center><br>
				</form>	
				
				
				    <?php
      require('connection.php');
	  
	  if(isset($_POST['aadhar'])){
                                
 $query = "SELECT name, phone, aadhar, level_name, zone_name, descr, status_name FROM record,status,level,zone where aadhar='{$_POST['aadhar']}' AND record.status_id=status.status_id AND record.zone_id=zone.zone_id AND record.level_id=level.level_id";
   
  
               
    $result = $dbcon-> query($query);
    
    if($result-> num_rows > 0){
        
        echo"  
                            <table align=center class=table>
        <tr>
          
            <th> NAME </th>
            <th> PHONE NUMBER</th>
            <th> AADHAR NUMBER </th>
            <th> CRIME LEVEL </th>
            <th> CRIME ZONE</th>
            <th> DESCRIPTION</th>
			<th> STATUS </th>
			
			
        
        </tr>";
        
        while($row = $result-> fetch_assoc())
        {
            echo "<tr>
           
           <td>".$row["name"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["aadhar"]."</td>
            <td>".$row["level_name"]."</td>
            <td>".$row["zone_name"]."</td>
            <td>".$row["descr"]."</td>
			<td>".$row["status_name"]."</td>
            </tr>";
        };
        echo "</table>";
    }
    else{
        
        echo "0 result";
    }
	  }    
       
     
    
    ?>
				
				
				
			</div>
			<div id="logout">
            
			
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
        
	<body>
</html>
	