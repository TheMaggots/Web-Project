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
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">Internal Assessment</button>
		<div class="content"><br>
		<div class="col-xs-12">Upload an excel file</div>
			<div class="col-xs-12"><input type="file" name="ARI"></div>
			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-10 col-xs-offset-1" style="background: #fff;">Note:The excel should be consisting of columns <br> User_Id(int(12))->exam_name(char(20))(type:CRT,TT,DT)->exam_score(float(3))->exam_rank(int(4)).</div>
			<div class="col-xs-12">&nbsp</div>
			<button type="Submit" class="col-xs-2 col-xs-offset-5 btn btn-primary">Submit</button>
			<div class="col-xs-12">&nbsp</div>
		</div>
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">External Assessment</button>
		<div class="content"><br>
			<div class="col-xs-12">Upload an excel file</div>
			<div class="col-xs-12"><input type="file" name="ARE"></div>
			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-10 col-xs-offset-1" style="background: #fff;">Note:The excel should be consisting of columns<br> User_Id(int(12))->assessment_partner(char(20))(cocubes,AMCAT,eLitmus)->assessment_id(int(12))->quants(float(3))->english(float(3))->logic(float(3))->coding(float(3))->domain(float(3)).</div>
			<div class="col-xs-12">&nbsp</div>
			<button type="Submit" class="col-xs-2 col-xs-offset-5 btn btn-primary">Submit</button>
			<div class="col-xs-12">&nbsp</div>
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
