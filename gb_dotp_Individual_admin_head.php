<?php require('headernew.php');?> 
<?php require('header2.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement report</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin-Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <body  style="background-color:#121212;">

<div class="content-wrapper" style="background-color:#121212;">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

<div class="col-xs-12" style="background-color:#121212;"> 
    <div class="col-xs-9" style="background-color:blacck;color:white;"><h3>Manage Individual Student</h3></div>
    <hr class="col-xs-14  bg-success text-white" style="border: 0;border-top: 1px solid blue;margin: 20px 0;visibility:visible;">
    <div class="col-xs-1">&nbsp</div>
    
</div>
<form action="in.php" method="post">
<div class="col-xs-12">
     
      <
      <div class="col-xs-12" style="background-color:#121212;color:white">
        <div class="col-xs-1">Batch:</div>
        <div class="dropdown col-xs-1">
             <select name="year" style="background-color:black;">
                  <option value="2017" style="background-color:black;">2017</option>
                  <option value="2018" style="background-color:black;">2018</option>
                  <option value="2019" style="background-color:black;">2019</option>
                  <option value="2020" style="background-color:black;">2020</option>
                  <option value="2021" style="background-color:black;">2021</option>
              </select>
        </div>
        <div class="col-xs-4">
          <div class="col-xs-5" >Search By:</div>
              <select class="col-xs-7"  style="background-color:black;" name="student">
                  <option value="name">Student Roll No</option>
                  <option value="rollno">Student Name</option>
              </select>
        </div>
          <div class="col-xs-6"  style="color:black;">
              <input class="col-xs-7" type="text" placeholder="Enter the Roll no:" name="user">
              <div class="col-xs-1"></div>
              <input style="background-color:green;"type="submit" name="formSubmit" class="btn btn-primary" value="Submit">
              
          </div>
        </div>
    </div>
    <div class="col-xs-1"></div>
  </div>
</div>
</form>
