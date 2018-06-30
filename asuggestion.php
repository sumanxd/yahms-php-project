<?php
require('FI/db1.php');
?>
<html>
<head>
	<title>Suggestion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<section class="container-fluid">
<div class="container-fluid">
			<div class="row">	
				<a class="toggleMenu" href="#">Menu</a>
				<center>
					<ul class="nav">
						<li><a href="index.html">HOME</a></li>
						<li  class="test">
							<a href="projectnew.php">District Profile</a>
								<ul>
									<li>
										<a href="#">About Us</a>										
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
						<li><a href="#">Functional Indicators</a>
							<ul>
								<li><a href="#">Curative Treatment</a>
									<ul>
										<li><a href="FI/cattle.php">Cattle</a></li>
										<li><a href="FI/buffalo.php">Buffalo</a></li>
										<li><a href="FI/sheepgoat.php">Sheep & Goat</a></li>
										<li><a href="FI/poultry.php">Poultry</a></li>
										<li><a href="FI/dogs.php">Dogs</a></li>
										<li><a href="FI/cats.php">Cats</a></li>
										<li><a href="FI/horses.php">Horses</a></li>
										<li><a href="#">Others</a></li>
									</ul>
								</li>
								<li><a href="FI/deworming.php">Preventive Deworming</a> </li>
								<li><a href="FI/castrations.php">Castrations</a> </li>
								<li><a href="FI/vaccinations.php">Vaccinations</a> </li>
								<li><a href="FI/ai.php">Artificial Insemination(AI)</a> </li>
								<li><a href="FI/fodderdevlopment.php">Fodder Devlopment</a> </li>
								<li><a href="FI/calf.php">Calf Births</a> </li>
								<li><a href="FI/fertilitycamps.php">Fertility Camps</a> </li>
								<li><a href="FI/farmerawarness.php">Farmer Awarness</a> </li>
								<li><a href="FIextensionprograms.php">Extension Programs</a> </li>
								
							</ul>
						</li>
						<li><a href="coreindicators.php">Core Indicators</a>
							
						</li>
						<li><a href="#">Welfare Schemes</a>
							<ul>
								<li><a href="#">Sheep</a>
									<ul>
										<li><a href="WS/postgrounding.php">Post Grounding</a> </li>
										<li><a href="WS/grounding.php">Grounding</a></li>
										<li> <a href="WS/pregrounding.php">Pre Grounding</a></li>
										
									</ul>
								</li>
								<li><a href="#">Fodder Seed</a>
									<ul>
										<li><a href="WS/fodder/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/fodder/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Chaff Cutter</a>
									<ul>
										<li><a href="WS/chaff/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/chaff/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Back Yard Poultry</a>
									<ul>
										<li><a href="WS/back/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/back/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Sunandini calf-Milk Program</a>
									<ul>
										<li><a href="WS/sunandini/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/sunandini/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Miltch Animals</a>
									<ul>
										<li><a href="WS/miltch/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/miltch/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								<li><a href="#">Piggeries</a>
									<ul>
										<li><a href="WS/pig/indent.php">Indent From The Field</a> </li>
										<li><a href="WS/pig/payment.php">Payment Particulars</a></li>
									</ul>
								</li>
								
							</ul>
						</li>
						<li><a href="suggestion.php">Suggestion(Collecter)</a></li>
						<li><a href="asuggestion.php">Suggestion(Admin)</a></li>
						<li><a href="#">Success Stories</a></li>
						
						<li><a href="#">Log In</a>
							<ul>
								<li><a href="collecter/login.php">Collector</a></li>
								<li><a href="admin/login.php">Admin</a></li>
								<li><a href="mandaladmin/login.php">Mandal Admin</a></li>
								<li><a href="#">Ad/AH</a></li>
							</ul>
						</li>												
					</ul>
				</center>
			</div>
</div>		
<div class="container">			
			<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">						
								<center><h2>Suggestion</h2></center>
						<tbody>
							<?php
							$sel_query="Select suggestion from tbl30 ORDER BY id desc LIMIT 0 , 1;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>								
								<center><h5><textarea rows="4" cols="50" readonly><?php echo $row["suggestion"]; ?></textarea></h5></center>
							</tr>													
							<?php  } ?>
						</tbody>
					</table>
				</div>
			</div>	
</div>			
</section>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>