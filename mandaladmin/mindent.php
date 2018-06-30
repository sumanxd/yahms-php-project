<?php
require('../FI/db1.php');
include('auth.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Milch Indent</title>
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
<div class="container">
<div class="container" >
			<h1 style="text-align:center">Milch Indent</h1>
			
		</div>
			<form name="form_update" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             
			 <div class="container"><br><br>

<?php

	$sql = "SELECT username,email,password FROM tbl32 WHERE username = '" . $_SESSION['username'] . "'";
	$result1 = mysqli_query($con,$sql) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result1);
	$name=$row['username'];
	
?>
<script>
$(document).ready(function () {
var b="<?php echo $name ?>";

var b1="Addagudur";
var b2="Alair";
var b3="Athmakur";
var b4="Bhongiri";
var b5="BibiNagar";
var b6="Bommalaramaram";
var b7="Choutuppal";
var b8="Motakondur";
var b9="Mothkur";
var b10="Narayanpur";
var b11="Pochampally";
var b12="Rajapet";
if(b==b1)
{
$("#village").html
("<option>--Select Village--</option><option>Addagudur</option><option>Chinnapadishala</option><option>kanchanpally</option>");
        } 
		else if (b==b2) {
            $("#village").html
("<option>--Select Village--</option><option>Alair</option><option>Kolanpaka</option><option>Sharajpet</option>");
        } else if (b==b3) {
            $("#village").html
("<option>--Select Village--</option><option>Atamakur</option><option>Parupally</option><option>Kullera</option><option>Kapraipally</option><option> Pallerla</option>");
        } else if (b==b4) {
            $("#village").html
("<option>--Select Village--</option><option>Bhongir</option><option>Raigiri</option><option>Pagidipally</option><option>Chandupatla</option><option>Wadaparthy</option><option> Bollepally</option><option> Anajipoor</option><option> NR.Pally</option>");
        }
		else if (b==b5) {
            $("#village").html
("<option>--Select Village--</option><option>Bibinagar</option><option>Chinnaravulapally</option><option>Kondamadugu</option><option>Brahmanpally</option><option>Venkiryal</option>");
        }
		else if (b==b6) {
            $("#village").html
("<option>--Select Village--</option><option>B.Ramaram</option><option>Mariyala</option><option>Medipally</option><option>Jalapur</option>");
        }
		else if (b==b7) {
            $("#village").html
("<option>--Select Village--</option><option>Chotuppal</option><option>D.Nagaram</option><option>Malkhapur</option><option>Peddakondur</option>");
        }
		else if (b==b8) {
            $("#village").html
("<option>--Select Village--</option><option>Mothkur</option><option>Dattappaguda</option>");
        }
		else if (b==b9) {
            $("#village").html
("<option>--Select Village--</option><option>Motakondur</option><option>Chada</option><option>Chandepally</option>");
        }
		else if (b==b10) {
            $("#village").html
("<option>--Select Village--</option><option>Narayanpur</option><option>Survail</option>");
        }
		else if (b==b11) {
            $("#village").html
("<option>--Select Village--</option><option>Pochampally</option><option>Jiblakpally</option><option>Indriyal</option><option>Juloor</option>");
        }
		else if (b==b12) {
            $("#village").html
("<option>--Select Village--</option><option>Rajapet</option><option>Begumpet</option><option>Bondugula</option><option>Raghunathpur</option><option>Challur</option><option> Bollepally</option><option> Anajipoor</option><option> NR.Pally</option>");
        }
		else if (b==b13) {
            $("#village").html
("<option>--Select Village--</option><option>Ramannapet</option><option>Tummalaguda</option><option>Yellanki</option><option>Kakkireni</option><option>Munipampula</option>");
        }
		else if (b==b14) {
            $("#village").html
("<option>--Select Village--</option><option>Thurkapally</option><option>Veerareddy pally</option><option>Madhapur</option><option>Dattaipally</option>");
        }
		else if (b==b15) {
            $("#village").html
("<option>--Select Village--</option><option>Valigonda</option><option>Arror</option><option>Gokaram</option><option>Vemulakonda</option><option>Thurkapally-valigonda</option><option> Puligilla</option><option>Pahilwanpur</option><option>Sunkishala</option><option>T.Somaram</option>");
        }else if (b==b16) {
            $("#village").html
("<option>--Select Village--</option><option>Yadagirigutta</option><option>Kacharam</option><option>Mallapur</option><option>Wangapally</option><option>Chinnakandukur</option><option> Chollair</option>");
        }
		else
		{
			alert("You Have Selected Invalid Mandal");
		}

});
</script>
			 
<select id="village" name="village">
    <option value="">-- select one -- </option>
</select>

</div>
       <input type="submit" class="button button2" style="margin-left: 619px;" name="submit" value="Submit"/>    
            </form>

<div  class="table-responsive">
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">							
							<td>Id</td>							
							<td>Type</td>
							<td>Full Cost</td>
							<td>Subsidy</td>
							<td>Beneficial Contribution</td>							
							
							<td>Mandal</td>
							<td>Village Name</td>
							<td>Quantity</td>
							<td>File Name</td>													
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];
$fetch="SELECT id,chaff,cost,subs,beni,mandal,village,iq,file FROM tbl27 WHERE village = '".$name."'  LIMIT 0, 30";
$result = mysqli_query($con,$fetch);


						
if(!$result)
{
echo "Error:".(mysqli_error($con));
}

							
							while($data=mysqli_fetch_assoc($result))  
							{
								?>
								<tr>
								<td><?php echo $data['id'] ?></td>
								<td><?php echo $data['chaff'] ?></td>
								<td><?php echo $data['cost'] ?></td>
								<td><?php echo $data['subs'] ?></td>
								<td><?php echo $data['beni'] ?></td>								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								<td><?php echo $data['iq'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadmilindent/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>

</div>

			
			 </div>		
	</section>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../script.js"></script>

</body>
</html>