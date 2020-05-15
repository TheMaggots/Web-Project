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
		  <form>

		  	<div class="col-xs-12">&nbsp</div>
		  	<label class="col-xs-12"><div class="col-xs-3">User Id:</div><input type="text" name="userid" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Name of the Company :</div><input type="text" name="name_company" class="col-xs-9"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Date :</div><input type="date" name="date_of_ar"min="2018-01-01"></label>
		  	<label class="col-xs-12"><div class="col-xs-3">Eligibility Status :</div>
		  		<div class="col-xs-9">
		  		 	<div class="col-xs-2"><input type="radio" name="Eligibility" value="Eligible" class="col-xs-3">Eligible</div>
					  <div class="col-xs-2"><input type="radio"  name="Eligibility"  value="Not Eligible"class="col-xs-2">Not Eligible</div>
		  		</div>
      </label>
			<label class="col-xs-12"><div class="col-xs-3">Attendance :</div>
				<div class="col-xs-9">
					<div class="col-xs-2"><input type="radio"name="Attendance" value="Present" class="col-xs-3">Present</div>
				<div class="col-xs-2"><input type="radio"  name="Attendance"  value="Absent"class="col-xs-2">Absent</div>
				</div>
		</label>
		<label class="col-xs-12"><div class="col-xs-3">Writien test :</div>
			<div class="col-xs-9">
				<div class="col-xs-2"><input type="radio" name="WT" value="cleared" class="col-xs-3">cleared</div>
			<div class="col-xs-2"><input type="radio" name="WT"  value="Not_clear"class="col-xs-2">Not cleared</div>
			</div>
	  </label>
		<label class="col-xs-12"><div class="col-xs-3">Group discussion :</div>
			<div class="col-xs-9">
				<div class="col-xs-2"><input type="radio" name="GD" value="cleared" class="col-xs-3">cleared</div>
			<div class="col-xs-2"><input type="radio" name="GD"  value="Not_clear"class="col-xs-2">Not cleared</div>
			</div>
	  </label>
		<label class="col-xs-12"><div class="col-xs-3">Technical Interview :</div>
			<div class="col-xs-9">
				<div class="col-xs-2"><input type="radio" name="TI" value="cleared" class="col-xs-3">cleared</div>
			<div class="col-xs-2"><input type="radio" name="TI"  value="Not_clear"class="col-xs-2">Not cleared</div>
			</div>
	  </label>
		<label class="col-xs-12"><div class="col-xs-3">PIU :</div>
			<div class="col-xs-9">
				<div class="col-xs-2"><input type="radio" name="PIU" value="cleared" class="col-xs-3">cleared</div>
			<div class="col-xs-2"><input type="radio" name="PIU"  value="Not_clear"class="col-xs-2">Not cleared</div>
			</div>
	  </label>
		<label class="col-xs-12"><div class="col-xs-3">Offer Letter  :</div>
			<div class="col-xs-9">
				<div class="col-xs-2"><input type="radio" name="OL" value="cleared" class="col-xs-3">Available</div>
			<div class="col-xs-2"><input type="radio" name="OL"  value="Not_clear"class="col-xs-2">Not Available</div>
			</div>
	  </label>

			<div class="col-xs-12">&nbsp</div>
			<div class="col-xs-12"><button class="col-xs-2 col-xs-offset-5 btn btn-primary" type="Submit">Submit</button></div>
			<div class="col-xs-12">&nbsp</div>
		  </form>
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
