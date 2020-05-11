<head>
	<style type="text/css">
	.dropbtn {
        font-size: 16px;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .navtop{
      	color: white;
      }
      .dropdown-content ul li:hover {background-color: #eeeeee;}
      .dropdown:hover .dropdown-content {display: block;}
</style>
</head>
<body>
 <div class="container2">
	<div class="col-xs-12">&nbsp;</div>
	<div class="col-xs-12">
		<div class="col-xs-1"></div>
		<div class="table1" class="col-xs-10">
			<table class="col-xs-11 col-xs-offset-1 tab1">
				<tr>
					<td rowspan="4" class="col-xs-1"><img src="pic1.jpg" width="100%"></td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>
				<tr style="background-color: #999999">
					<td class="col-xs-6" style="color: white;">Dr.Kishore Buddha</td>
          <nav>
					<td class="col-xs-1 navtop">
						<div class="dropdown">
                			<div class="dropbtn" id="select" style="color: white;">Manage</div>
                			<div class="dropdown-content">
                				<ul type="none" style="padding-left: 0; width:200px; background-color: #eeeeee; display: inline-block;">
                					<li onclick="myFunction('All')"><a href="gb_dotp_All_students.php" style="color: black; font-weight: lighter;">All Students</a></li>
                  					<li onclick="myFunction('Individual')"><a href="gb_dotp_Individual_admin_head.php" style="color: black; font-weight: lighter;">Individual</a></li>
                  					<li onclick="myFunction('New Student')"><a href="gb_dotp_new_student.php" style="color: black; font-weight: lighter;">New Student</a></li>
                				</ul>
                  			</div>
                		</div>
                	</td>
					<td class="col-xs-1 navtop"><div class="dropdown">
										<div class="dropbtn" id="select" style="color: white;">Uploads</div>
										<div class="dropdown-content">
											<ul type="none" style="padding-left: 0; width:200px; background-color: #eeeeee; display: inline-block;">
												<li onclick="myFunction()"><a href="user.php" style="color: black; font-weight: lighter;">Users</a></li>
												<li onclick="myFunction()"><a href="Personaldetails.php" style="color: black; font-weight: lighter;">Personal details</a></li>
												<li onclick="myFunction()"><a href="CDT.php" style="color: black; font-weight: lighter;">CDT</a></li>
												<li onclick="myFunction()"><a href="ITA.php" style="color: black; font-weight: lighter;">ITA</a></li>
												<li onclick="myFunction()"><a href="ARI.php" style="color: black; font-weight: lighter;">ARI</a></li>
												<li onclick="myFunction()"><a href="ARE_AMCAT.php" style="color: black; font-weight: lighter;">ARE AMCAT</a></li>
												<li onclick="myFunction()"><a href="AD.php" style="color: black; font-weight: lighter;">Acadamic details</a></li>
												</ul>
											</div>
									</div>
								</td>
					<td class="col-xs-1 navtop"><a href="pages/calendar.html" style="color: white; font-weight: lighter;">Calendar</a></td>
        </nav>
				</tr>
				<tr>
					<td colspan="4">
						<div class="col-xs-7">Designation: Placement Director</div>
						<div>Mobile:+91-9701516999 &nbsp; &nbsp; Email:gitamblr.tpo@gitam.in</div>
					</td>
				</tr>
        		<tr>
        			<td colspan="4">
            		<div class="col-xs-7">&nbsp</div>
            		</td>
        		</tr>
			</table>
		</div>
		<div class="col-xs-1"></div>
	</div>
</div>
<div class="col-xs-12">&nbsp;</div>
