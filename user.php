<?php require ('header.php')?>
<?php require('header2.php')?>
<head>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 1px solid white;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
	<div class="container">
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">Set Data Manually</button>
		<div class="content">
		  <form>
		  	<div class="col-xs-12">&nbsp</div>
		  	<label class="col-xs-12"><div class="col-xs-3">Unique Id:</div><input type="text" name="uniqueid" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Password:</div><input type="text" name="Password" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Campusid:</div><input type="text" name="Campusid" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Type:</div>
		  		<div class="col-xs-9">
		  			<div class="col-xs-2"><input type="radio" id="student" name="type" value="student" class="col-xs-3"><label for="student">student</label></div>
					<div class="col-xs-2"><input type="radio" id="admin" name="type" value="admin" class="col-xs-3"><label for="admin">admin</label></div>
		  		</div>
			</label>
			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
			<div class="col-xs-12">&nbsp</div>
		  </form>
		</div>
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">Upload File</button>
		<div class="content"><br>
		  <div class="col-xs-12">Upload an excel file<br>To download template click <a href="user.xlsx" download>HERE</a></div>
			<div class="col-xs-12"><input type="file" name="ARI"></div>
			<div class="col-xs-12">&nbsp</div>
			<button type="Submit" class="col-xs-2 col-xs-offset-5 btn btn-primary">Submit</button>

		</div>
	</div>
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
  			coll[i].addEventListener("click", function() {
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    		if (content.style.display === "block") {
      			content.style.display = "none";
    		} else {
    		  content.style.display = "block";
    		}
  			});
		}
	</script>
</body>
