<?php
require('../FI/db1.php');
include("auth.php");

?>
<html>
<head>
	<title>36 Column</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
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
<div class="container">
<div class="container" >
			
		</div>
			<form name="form_update" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             
			 <div class="container"><br><br>
<select id="mandal">
    <option value="item0">--Select Mandal--</option>
	<option value="item1">Addagudur</option>
    <option value="item2">Alair</option>
    <option value="item3">Athmakur</option>
    <option value="item4">Bhongiri</option>
    <option value="item5">BibiNagar</option>
    <option value="item6">Bommalaramaram</option>
    <option value="item7">Choutuppal</option>
    <option value="item8">Motakondur</option>
    <option value="item9">Mothkur</option>
    <option value="item10">Narayanpur</option>
    <option value="item11">Pochampally</option>
    <option value="item12">Rajapet</option>
    <option value="item13">Ramannapet</option>
    <option value="item14">Thurkapally</option>
    <option value="item15">Valigonda</option>
    <option value="item16">Yadagirigutta</option>
    
    
</select>

<select id="village" name="village">
    <option value="">-- select one -- </option>
</select>
</div>
       <input type="submit" class="button button2" style="margin-left: 619px;" name="submit" value="Submit"/>    
            </form>
<div  class="table-responsive">
<h1 style="text-align:center">Pre Grounding</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>District</td>
							<td>Society</td>							
							<td>Registration</td>							
							
							<td>Benificiary Account Number</td>
							<td>Mandal</td>
							<td>Village</td>
							<td>Farmer</td>
							<td>Adhar</td>
							<td>Mobile</td>							
							<td>Ano</td>
							<td>DD</td>
							
							<td>Date</td>
							<td>Bank Name</td>
							<td>Branch Name</td>
							<td>Amount</td>	
							<td>File Name</td>													
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,dist,soci,regis,beni,mandal,village,father,adhar,mobile,ano,dd,date,bank,branch,amount,file FROM tbl18 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['dist'] ?></td>
								<td><?php echo $data['soci'] ?></td>
								<td><?php echo $data['regis'] ?></td>
								<td><?php echo $data['beni'] ?></td>								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['father'] ?></td>
								<td><?php echo $data['adhar'] ?></td>
								<td><?php echo $data['mobile'] ?></td>
								
								
								<td><?php echo $data['ano'] ?></td>
								<td><?php echo $data['dd'] ?></td>
								<td><?php echo $data['date'] ?></td>
								<td><?php echo $data['bank'] ?></td>
								<td><?php echo $data['branch'] ?></td>								
								<td><?php echo $data['amount'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadpost/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>
<div  class="table-responsive">
<h1 style="text-align:center">Post Grounding</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Policy</td>
							<td>Starting</td>
							<td>Ending</td>
							<td>Amount(INC)</td>							
							
							<td>Mandal</td>
							
							<td>Villege</td>
							<td>Date of distribution</td>
							<td>Amount Utilize</td>							
							<td>Date</td>
							<td>Quntity of Feed</td>
							<td>Amount Utilize</td>
							
							<td>Subsidy</td>
							<td>Non Subsidy</td>
							<td>Remarks</td>
							<td>Total Expenditure</td>
							<td>File Name</td>													
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT tbl16.id,tbl16.policy,tbl16.date,tbl16.date2,tbl16.amd,tbl16.mandal,tbl16.village,tbl16.date3,tbl16.auti,tbl16.date5,tbl16.qfeed,tbl16.auti2,tbl16.subs,tbl16.nsub,tbl16.remark,tbl16.file,(tbl16.amd+tbl16.auti+tbl16.auti2+tbl17.apai+tbl17.amountp) AS texp FROM tbl16 JOIN tbl17 ON tbl17.id=tbl16.id WHERE tbl16.village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['policy'] ?></td>
								<td><?php echo $data['date'] ?></td>
								<td><?php echo $data['date2'] ?></td>
								<td><?php echo $data['amd'] ?></td>								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['date3'] ?></td>
								<td><?php echo $data['auti'] ?></td>
								<td><?php echo $data['date5'] ?></td>
								<td><?php echo $data['qfeed'] ?></td>
								<td><?php echo $data['auti2'] ?></td>
								
								<td><?php echo $data['subs'] ?></td>
								<td><?php echo $data['nsub'] ?></td>
								<td><?php echo $data['remark'] ?></td>
								<td><?php echo $data['texp'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadpre/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

		<div  class="table-responsive">
						<h1 style="text-align:center">Grounding</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Voucher</td>
							<td>Date</td>
							<td>Place</td>
							<td>Seller</td>							
						
							<td>Mandal</td>
							
							<td>Villege</td>
							<td>Seller Address</td>
							<td>Seller Adhar</td>							
							<td>Seller Account</td>
							<td>Amount paid</td>
							
							<td>Cheque No</td>
							<td>Date</td>
							<td>Vehicle no</td>
							<td>Name Of The Transporter</td>
							<td>Amount paid</td>
							<td>Cheque No</td>
							
							<td>File Name</td>													
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,vou,date,place,seller,mandal,village,sadd,sadhar,sacc,apai,cdb,date2,vnol,ntra,amountp,dbch,file FROM tbl17 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['vou'] ?></td>
								<td><?php echo $data['date'] ?></td>
								<td><?php echo $data['place'] ?></td>
								<td><?php echo $data['seller'] ?></td>								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>								
								<td><?php echo $data['sadd'] ?></td>
								<td><?php echo $data['sadhar'] ?></td>
								<td><?php echo $data['sacc'] ?></td>
								<td><?php echo $data['apai'] ?></td>
								<td><?php echo $data['cdb'] ?></td>
								<td><?php echo $data['date2'] ?></td>
								<td><?php echo $data['vnol'] ?></td>
								<td><?php echo $data['ntra'] ?></td>
								<td><?php echo $data['amountp'] ?></td>
								<td><?php echo $data['dbch'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadgro/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>




					
					
			
</div>
				
</section>
<script>
$(document).ready(function () {
    $("#mandal").change(function () {
        var val = $(this).val();
        if (val == "item1") {
        $("#village").html
("<option>Addagudur</option><option>Chinnapadishala</option><option>kanchanpally</option>");
        } 
		else if (val == "item2") {
            $("#village").html
("<option>Alair</option><option>Kolanpaka</option><option>Sharajpet</option>");
        } else if (val == "item3") {
            $("#village").html
("<option>Atamakur</option><option>Parupally</option><option>Kullera</option><option>Kapraipally</option><option> Pallerla</option>");
        } else if (val == "item4") {
            $("#village").html
("<option>Bhongir</option><option>Raigiri</option><option>Pagidipally</option><option>Chandupatla</option><option>Wadaparthy</option><option> Bollepally</option><option> Anajipoor</option><option> NR.Pally</option>");
        }
		else if (val == "item5") {
            $("#village").html
("<option>Bibinagar</option><option>Chinnaravulapally</option><option>Kondamadugu</option><option>Brahmanpally</option><option>Venkiryal</option>");
        }
		else if (val == "item6") {
            $("#village").html
("<option>B.Ramaram</option><option>Mariyala</option><option>Medipally</option><option>Jalapur</option>");
        }
		else if (val == "item7") {
            $("#village").html
("<option>Chotuppal</option><option>D.Nagaram</option><option>Malkhapur</option><option>Peddakondur</option>");
        }
		else if (val == "item8") {
            $("#village").html
("<option>Mothkur</option><option>Dattappaguda</option>");
        }
		else if (val == "item9") {
            $("#village").html
("<option>Motakondur</option><option>Chada</option><option>Chandepally</option>");
        }
		else if (val == "item10") {
            $("#village").html
("<option>Narayanpur</option><option>Survail</option>");
        }
		else if (val == "item11") {
            $("#village").html
("<option>Pochampally</option><option>Jiblakpally</option><option>Indriyal</option><option>Juloor</option>");
        }
		else if (val == "item12") {
            $("#village").html
("<option>Rajapet</option><option>Begumpet</option><option>Bondugula</option><option>Raghunathpur</option><option>Challur</option><option> Bollepally</option><option> Anajipoor</option><option> NR.Pally</option>");
        }
		else if (val == "item13") {
            $("#village").html
("<option>Ramannapet</option><option>Tummalaguda</option><option>Yellanki</option><option>Kakkireni</option><option>Munipampula</option>");
        }
		else if (val == "item14") {
            $("#village").html
("<option>Thurkapally</option><option>Veerareddy pally</option><option>Madhapur</option><option>Dattaipally</option>");
        }
		else if (val == "item15") {
            $("#village").html
("<option>Valigonda</option><option>Arror</option><option>Gokaram</option><option>Vemulakonda</option><option>Thurkapally-valigonda</option><option> Puligilla</option><option>Pahilwanpur</option><option>Sunkishala</option><option>T.Somaram</option>");
        }else if (val == "item16") {
            $("#village").html
("<option>Yadagirigutta</option><option>Kacharam</option><option>Mallapur</option><option>Wangapally</option><option>Chinnakandukur</option><option> Chollair</option>");
        }
    });
});
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
	
</body>
</html>