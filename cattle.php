<!DOCTYPE html>
<html>
<head>
	<title>Dropdowns</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="container-fluid">
		<div class="container">
			<div class="row">
				<a class="toggleMenu" href="#">Menu</a>
				<center>
					<ul class="nav">
						<li class="test">
							<a href="#">Functional Indicators</a>
								<ul>
									<li>
										<a href="#">Curative Treatment</a>
										<ul>
											<li><a href="cattle.php">Cattle</a></li>
											<li><a href="buffalo.php">Buffalo</a></li>
											<li><a href="sheep.php">Sheep & Goat</a></li>
											<li><a href="poultry.php">Poultry</a></li>
											<li><a href="dogs.php">Dogs</a></li>
											<li><a href="cats.php">Cats</a></li>
											<li><a href="horses.php">Horses</a></li>
											<li><a href="#">Others</a></li>
										</ul>
									</li>
									<li><a href="deworming.php">Preventive Deworming</a></li>
									<li><a href="castrations.php">Castrations</a></li>
									<li><a href="vaccinations.php">Vaccinations</a></li>
									<li><a href="ai.php">Artificial Inseminations</a></li>
									<li><a href="fodder.php">Fodder Devlopment</a></li>
									<li><a href="calf.php">Calf Births</a></li>
									<li><a href="fertilitycamps.php">Fertility Camp</a></li>
									<li><a href="farmerawarness.php">Farmer Awarness</a></li>
									<li><a href="program.php">Extension Programs</a></li>									
								</ul>
						</li>
						<li><a href="#">Core Indicators</a></li>
						<li><a href="#">Welfare Schemes</a></li>
						<li><a href="#">Administrative Works</a></li>
						<li><a href="#">Suggestions</a></li>
						<li><a href="#">Success Stories</a></li>
					</ul>
				</center>
			</div>
		</div>
		<div class="container">
			<form>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">yearly</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" name="yearly" type="text" placeholder="yearly">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Monthly </label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" name="Monthly" placeholder="Monthly">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Daily</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" name="Daily" placeholder="Daily">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Farmer's</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" name="Farmer's" placeholder="Farmer's">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Village</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" placeholder="Village">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Mandal</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" placeholder="Mandal">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Tentative</label>
                <select class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" style="padding:7px;">
                  <option value="Select Option" >Select Option</option>
				  <option value="Systemic">Systemic</option>
				  <option value="Digestive">Digestive</option>
				  <option value="Respiratory">Respiratory</option>
				  <option value="Urogential">Urogential</option>
				  <option value="Dermatology">Dermatology</option>
                  <option value="Major Surgery">Major Surgery</option>
                  <option value="Minor Surgery">Minor Surgery</option>
                  <option value="Specimen collected" style="background-color: brown;color: white">Specimen collected</option>
                  <option value="Remarks">Remarks</option>
                  <option value="Results">Results</option>
                  <option value="Others">Others</option>
                  <option value="Total">Total</option>
				</select>
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">History</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" placeholder="History">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <label class="col-md-3 col-md-offset-1 col-sm-offset-1">Treatment</label>
                <input class="col-md-7 col-md-offset-1 col-sm-offset-1 form-control" size="50" type="text" placeholder="Treatment">
            </div><br><br>
            <div class="form-inline col-md-12 row ">
                <input class="btn col-md-4 col-xs-6 col-md-offset-5" type="file" name="file-upload" style="padding:4px; ">
            </div><br><br><br><br>
            <div class="form-group col-md-12 col-xs-12 row">
                <button  class="btn col-md-2 col-xs-3 col-md-offset-6 col-xs-offset-3 col-sm-offset-3" >Submit</button>
            </div>
            </form>
		</div>
	</section>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
</body>
</html>