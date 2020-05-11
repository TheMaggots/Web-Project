<?php require('headernew.php');?> 
<?php require('header2.php');?> 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 </head>
 <body>
   <div class="container2">
    <div class="col-xs-10 col-xs-offset-1"><h2>Change Password</h2></div>
    <div style="align-content: center; border: 1px solid black; background-color: #ffffff"  class="col-xs-10 col-xs-offset-1">
       <form>
         <br>
         <br>
         <label class="col-xs-12">Old Password<input type="Password" name="Old_Password"></label>
         <label class="col-xs-12">New Password<input type="Password" name="New_Password"></label>
         <label class="col-xs-12">Confirm Password<input type="text" name="Confirm Password"></label>
         <div class="col-xs-5"></div>
         <label class="col-xs-2"><input type="Submit" name="confirm" value=Submit style="background-color: blue;"></label>
       </form>
     </div>
   </div>
   <div class="col-xs-10 col-xs-offset-1">&nbsp</div>
 </body>
</html>