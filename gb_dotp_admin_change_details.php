<?php require('headernew.php');?> 
<?php require('header2.php');?> 
<head>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color:#121212">
  <div class="container text-black">
   <h2 class="col-xs-12 " style="font-weight:lighter;">Change Details</h2>
   <hr class=" col-xs-14 bg-success text-white" style="border: 0;border-top: 1px solid blue;margin: 20px 0;visibility:visible;">
   <div style="align-content: center; border: 1px solid black; background-color:#000c18;color:white; " class="col-xs-12 ">
     <div class="col-xs-12">
       <form>
         <div class="col-xs-12">
           <label class="col-xs-2">
            &emsp;<img src="pic1.jpg" width="100px"><br>
            <div>
              <label for="files" class="btn col-xs-4" style="color:white;font-weight:lighter;">Change Profile Picture</label>
              <input class="col-xs-8" id="files" style="visibility:hidden;" type="file">
            </div>
          </label>
         </div>
          <label class="col-xs-12"><div class="col-xs-2" style="color:white;font-weight:lighter;">Name</div><div class="col-xs-10"><input type="text" name="New_Name" value="Dr.Kishore Buddha" class="col-xs-12" style="color:black;"></div></label>
          <label class="col-xs-12"><div class="col-xs-2"style="color:white;font-weight:lighter;">Mobile</div><div class="col-xs-10"><input type="text" name="New_Contact" value="9701516999" class="col-xs-12" style="color:black;"></div></label>
          <label class="col-xs-12"><div class="col-xs-2"style="color:white;font-weight:lighter;">Email</div><div class="col-xs-10"><input type="text" name="New_Email" value="gitamblr.tpo@gitam.in" class="col-xs-12" style="color:black;"></div></label>
          <label class="col-xs-12"><div class="col-xs-2"style="color:white;font-weight:lighter;">Designation</div><div class="col-xs-10"><input type="text" name="New_Designation" value="Placement Director" class="col-xs-12" style="color:black;"></div></label>
          <div class="col-xs-12">&nbsp</div>
          <label class="col-xs-12"><div class="col-xs-5"></div><div class="col-xs-2"><input style="background-color:green;"type="Submit" name="confirm" value=Submit class="col-xs-9 btn btn-primary"></label>
          <div class="col-xs-12">&nbsp</div>
       </form>
     </div>
    </div>
  </body>
</html>
