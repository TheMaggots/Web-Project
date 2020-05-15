<?php require ('headernew.php')?>
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
		<?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
			<div name="message"><?php echo $_GET['msg']; ?> </div>
	<?php } ?>
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">Set Data Manually</button>
		<div class="content">
			<form action="ARE_COCBE.php" method="post">

		  	<div class="col-xs-12">&nbsp</div>
		  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Assessment patner :</div><input type="text" name="Assessment_patner" value="Cocubes"class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Assessment Date :</div><input type="Date" name="Assessment_date" class="col-xs-9"></label>
		    <label class="col-xs-12"><div class="col-xs-3">Assessment ID :</div><input type="number" name="Assessment_id" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Overall Aptitude :</div><input type="number" name="ARECAP"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">English :</div><input type="number" name="ARECE"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Quantitative :</div><input type="number" name="ARECQ"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Analytical :</div><input type="number" name="ARECA"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Domain :</div><input type="number" name="ARECD"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Computer Fundamentals :</div><input type="number" name="ARECCF"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Coding :</div><input type="number" name="ARECC"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">WET :</div><input type="number" name="ARECW"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Personality :</div><input type="number" name="ARECP"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Over all Score  :</div><input type="number" name="ARECTS"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Overall Rank :</div><input type="number" name="ARECTR"min="1"max="100" class="col-xs-9"></label>
				<label class="col-xs-12"><div class="col-xs-3">Analyst :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="CANLP" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="CANLP"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Customer Service Executive :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Customer_Service_Executive" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Customer_Service_Executive"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Graduate Engineer (Plant) :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Graduate_Engineer_Plant" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Graduate_Engineer_Plant"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Graduate Engineer (R&D) :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Graduate_Engineer_RD" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Graduate_Engineer_RD"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Network Engineer :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Network_Engineer" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Network_Engineer"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Operations Executive :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Operations_Executive" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Operations_Executive"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Sales Executive :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Sales_Executive" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Sales_Executive"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Software Developer :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Software_Developer" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Software_Developer"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Software Engineer :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Software_Engineer" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Software_Engineer"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>
				<label class="col-xs-12"><div class="col-xs-3">Software Tester :</div>
					<div class="col-xs-9">
						<div class="col-xs-2"><input type="radio" name="Software_Tester" value="Eligible" class="col-xs-3">Eligible</div>
					<div class="col-xs-2"><input type="radio" name="Software_Tester"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
					</div>
				</label>

			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
			<div class="col-xs-12">&nbsp</div>
		  </form>
		</div>
		<button type="button" class="collapsible btn btn-primary col-xs-9" align="center">Upload File</button>
		<div class="content"><br>
				<div class="col-xs-12">Upload an excel file<br>To download template click <a href="ARE_COC.xlsx" download>HERE</a></div>
				<div class="col-xs-12"><input type="file" name="ARI"></div>
				<div class="col-xs-12">&nbsp</div>
				<button type="Submit" class="col-xs-2 col-xs-offset-5 btn btn-primary">Submit</button>

			</div>

			</div>
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
