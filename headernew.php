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
				<span style="color: #ffffff; background-color: #cc0000; padding:5px; font-weight: lighter;"><big><b>GITAM Career Guidance Cell</b></big></span>
				<h3 style="color: #cc0000;">Placements & Training Dept.</h3>
			</span>
			<span class="col-xs-4">
				<img src="gitam.jpeg" width="100px">
			</span>	
		</div>	
        <!--<nav class="navbar" style="background-color: #cc0000;">
            <div class="container">
                <ul class="col-xs-12" type="none">
                    <li style="color: #ffffff; padding: 20px" class="col-xs-2"><a href="gb_dotp_admin.php">Home</a></li>
                    <li style="color: #ffffff; padding: 20px" class="col-xs-2"><a href="pages/">Logout</a></li>
                    <li style="color: #ffffff; padding: 20px" class="col-xs-2"><a href="about.php">Settings</a></li>
                </ul>
            </div>
        </nav>-->
        <nav>
		<div class="container2">
			<div class="col-xs-12" style="background-color:#000080; padding: 20px">
				<div class="col-xs-1"></div>
				<div class="col-xs-2"><a href="gb_dotp_admin.php" class="top" style="color: white; font-weight: lighter;">Home</a></div>
				<div class="col-xs-2"><a href="pages/index.php" class="top" style="color: white; font-weight: lighter;">Logout</a></div>
				<div class="dropdown col-xs-7">
                	<div class="col-xs-2 col-xs-offset-10">
                		<span class="top">Settings</span>
                		<div class="dropdown-content">
                			<ul type="none" style="padding-left: 0; width:200px; background-color: #FFFFFF; display: outline-block; font-weight: lighter;">
                				<li onclick="myFunction('Pass')"><a href="gb_dotp_ChangePassword1.php" style="color: black; font-weight: lighter;">Change Password</a></li>
                  				<li onclick="myFunction('Individual')"><a href="gb_dotp_admin_change_details.php" style="color: black; font-weight: lighter;">Modify profile data</a></li>
                			</ul>
                		</div>
                  	</div>
                </div>
			</div>
		</div>	
        </nav>	
	</div>
