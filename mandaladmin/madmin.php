<?php
require('../FI/db1.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>

</style>
</head>
<body>
	<section class="container-fluid">
		<div class="container-fluid">
			<div class="row">
	
				<a class="toggleMenu" href="#">Menu</a>
				<center>
					<ul class="nav">
						
						<li  class="test">
							<a href="#">District Profile</a>
								<ul>
									<li>
										<a href="#">About Us</a>
										<!-- <ul>
											<li><a href="cattle.php">Cattle</a></li>
											<li><a href="buffalo.php">Buffalo</a></li>
											<li><a href="sheep.php">Sheep & Goat</a></li>
											<li><a href="poultry.php">Poultry</a></li>
											<li><a href="dogs.php">Dogs</a></li>
											<li><a href="cats.php">Cats</a></li>
											<li><a href="horses.php">Horses</a></li>
											<li><a href="#">Others</a></li>
										</ul> -->
									</li>
									<li><a href="../profile/deworming.php">Objectives</a></li>
									<li><a href="../profile/castrations.php">Staff Position</a></li>
									<li><a href="../profile/vaccinations.php">No Of Veterinary Institutes</a></li>
									<li><a href="../profile/ai.php">Performance Of The District</a></li>
									<li><a href="../profile/fodder.php">Livestock Population</a></li>
									<li><a href="../profile/calf.php">Core Indicators</a></li>
									<li><a href="../profile/fertilitycamps.php">Schemes</a></li>
									<li><a href="../profile/farmerawarness.php">Any Others</a></li>
									
									
								</ul>
						</li>
						<!-- <li><a href="#">Monthly Progressive Reports</a></li> -->
						
						<li><a href="#"></a></li>
						<!-- <li><a href="#">Administrative Works</a></li> -->
						<li><a href="#">Functional Indicators</a>
							<ul>
								<li><a href="#">Curative Treatment</a>
									<ul>
										<li><a href="cattle.php">Cattle</a></li>
										<li><a href="buffalo.php">Buffalo</a></li>
										<li><a href="sheepgoat.php">Sheep & Goat</a></li>
										<li><a href="poultry.php">Poultry</a></li>
										<li><a href="dogs.php">Dogs</a></li>
										<li><a href="cats.php">Cats</a></li>
										<li><a href="horses.php">Horses</a></li>
										<li><a href="#">Others</a></li>
									</ul>
								</li>
								<li><a href="deworming.php">Preventive Deworming</a> </li>
								<li><a href="castrations.php">Castrations</a> </li>
								<li><a href="vaccinations.php">Vaccinations</a> </li>
								<li><a href="ai.php">Artificial Insemination(AI)</a> </li>
								<li><a href="fodderdevlopment.php">Fodder Devlopment</a> </li>
								<li><a href="calf.php">Calf Births</a> </li>
								<li><a href="fertilitycamps.php">Fertility Camps</a> </li>
								<li><a href="farmerawarness.php">Farmer Awarness</a> </li>
								<li><a href="extensionprograms.php">Extension Programs</a> </li>
								
							</ul>
						</li>
						<li><a href="coreindicators.php">Core Indicators</a>
							<li><a href="">Monthly Progressive Report</a>
						<ul>
											<li><a href="monthly.php">Functional Indicator</a></li>
											<li><a href="core.php">Core Indicator</a></li>
											<li><a href="">Disease Diagnosis</a></li>
											<li><a href="">TSLDA Agency</a></li>
											<li><a href="">Publicity Report</a></li>
										</ul>
						</li>
						</li>
						<li><a href="#">Welfare Schemes</a>
							<ul>
								<li><a href="#">Sheep</a>
									<ul>
										<li><a href="postgrounding.php">Post Grounding</a> </li>
										<li><a href="grounding.php">Grounding</a></li>
										<li> <a href="pregrounding.php">Pre Grounding</a></li>
										<li> <a href="36column.php">36 Column</a></li>
									</ul>
								</li>
								<li><a href="#">Fodder Seed</a>
									<ul>
										<li><a href="findent.php">Indent From The Field</a> </li>
										<li><a href="fpayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Chaff Cutter</a>
									<ul>
										<li><a href="cindent.php">Indent From The Field</a> </li>
										<li><a href="cpayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Back Yard Poultry</a>
									<ul>
										<li><a href="bindent.php">Indent From The Field</a> </li>
										<li><a href="bpayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Sunandini calf-Milk Program</a>
									<ul>
										<li><a href="sindent.php">Indent From The Field</a> </li>
										<li><a href="spayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Miltch Animals</a>
									<ul>
										<li><a href="mindent.php">Indent From The Field</a> </li>
										<li><a href="mpayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Piggeries</a>
									<ul>
										<li><a href="pindent.php">Indent From The Field</a> </li>
										<li><a href="ppayment.php">Payment Particulars</a></li>
									</ul>
								</li>
								
							</ul>
						</li>
						<li><a href="suggestion.php">Suggestions</a></li>
						<li><a href="#">Success Stories</a></li>
						
						<li><a href="logout.php">Log Out</a>
							
						</li>
						
						
					</ul>
				</center>
			</div>
		</div>

		
	</section>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../script.js"></script>

</body>
</html>