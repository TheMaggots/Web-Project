<?php require('header.php');?> 
<?php require('header2.php');?> 
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript">
      var expanded = false;
      function showCheckboxes(){
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          }
          else {
            checkboxes.style.display = "none";
            expanded = false;
          }
      }
      function myFunction(x) {
                    var change = document.getElementById("select");
                        change.innerHTML = x;
      }
    </script>
    <style type="text/css">
      .right{
        float: right;
      }
      .dropbtn {
        color: white;
        font-size: 16px;
        border: none;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
      }
      .dropdown-content form {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content form:hover {background-color: #ddd;}
      .dropdown:hover .dropdown-content {display: block;}
    </style>
  </head>
  <body>
    <div class="container">
     <h2 class="col-xs-12">Change Password</h2><br>
     <div style="align-content: center; border: 1px solid black; background-color: #ffffff"  class="col-xs-11 col-xs-offset-1">
      <div class="col-xs-12">
                  <form>
                    <label>Old Password<input type="Password" name="Old_Password"></label>
                    <label>New Password<input type="Password" name="New_Password"></label>
                    <label>Confirm Password<input type="text" name="Confirm Password"></label>
                    <label><input type="Submit" name="confirm" value=Submit></label>
                  </form>
     </div>
    </div>
  </body>
</html>