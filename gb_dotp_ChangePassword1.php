<?php require('headernew.php');?> 
<?php require('header2.php');?> 
<head>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color:#121212;">
   <div class="container text-black">
    <div class="col-xs-10 col-xs-offset-1" style="font-weight: lighter;"><h2>Change Password</h2></div>
    <hr class="col-xs-12  bg-success text-white" style="border: 0;border-top: 1px solid blue;margin: 20px 0;visibility:visible;">
    <div style="align-content: center; background-color: #000c18"  class="col-xs-10 col-xs-offset-1">
       <form style="background-color:grey;">
         <div class="col-xs-12">&nbsp</div>
         <label class="col-xs-12""><div class="col-xs-3" style="color:white;font-weight: lighter">Old Password</div><input type="Password" name="Old_Password" class="col-xs-9"></label>
         <div class="col-xs-12">&nbsp</div>
         <label class="col-xs-12"><div class="col-xs-3" style="color:white;font-weight: lighter">New Password</div><input type="Password" name="New_Password" class="col-xs-9"></label>
         <div class="col-xs-12">&nbsp</div>
         <label class="col-xs-12"><div class="col-xs-3" style="color:white;font-weight: lighter">Confirm Password</div><input type="text" name="Confirm Password" class="col-xs-9"></label>
         <div class="col-xs-12">&nbsp</div>
         <div class="col-xs-4"></div>
         <div class="col-xs-2"><button type="Submit" style="background-color:green;"class="btn btn-primary col-xs-12">Submit</button></div>
         <div class="col-xs-5"> </div>
         <div class="col-xs-12">&nbsp</div>
       </form>
     </div>
   </div>
   <div class="col-xs-10 col-xs-offset-1">&nbsp</div>
 </body>
