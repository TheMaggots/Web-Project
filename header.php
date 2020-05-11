<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='bootstrap1.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
    	.top{
    		color: #ffffff;
    		text-decoration: none; 
    	}
    	.w3-button {width:150px;}
    	hr {
    		clear: both;
    		visibility: hidden;
  		}

	  	body {
  			font-family: Arial;
  			margin: 0;
	   	}
    </style>
</head>
<body>
	<div class="header1">
		<div class="container"  style="padding: 5px">
			<span class="col-xs-8">
				<span style="color: #ffffff; background-color: #cc0000; padding:5px;"><big><b>GITAM Bengaluru</b></big></span>
				<h3 style="color: #cc0000;">PLACEMENTS</h3>
			</span>
			<span class="col-xs-4">
				<img src="pages/images/gitam.jpeg" width="200px">
			</span>	
		</div>	
		<div class="container2">
			<div class="col-xs-12" style="background-color: #cc0000; padding: 20px">
				<div class="col-xs-1"></div>
				<div class="col-xs-2"><a href="gb_dotp_admin.php" class="top">Home</a></div>
				<div class="col-xs-2"><a href="pages/index.php" class="top">Logout</a></div>
				<div class="dropdown col-xs-7">
                	<div class="col-xs-2 col-xs-offset-10">
                		<span class="top">Settings</span>
                		<div class="dropdown-content">
                			<ul type="none" style="padding-left: 0; width:200px; background-color: #FFFFFF; display: outline-block;">
                				<li onclick="myFunction('Pass')"><a href="gb_dotp_ChangePassword1.php" style="color: black;">Change Password</a></li>
                  				<li onclick="myFunction('Individual')"><a href="gb_dotp_admin_change_details.php" style="color: black;">Modify profile data</a></li>
                			</ul>
                		</div>
                  	</div>
                </div>
			</div>
		</div>		
	</div>