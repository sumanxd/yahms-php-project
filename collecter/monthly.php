<?php
require('../FI/db1.php');

include("auth.php");

?>
<html>
<head>
	<title>Functional Indicator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-size:12px;">
<section class="container-fluid">
<div class="container">
			<div class="row">
	<center><a href="collecter.php">Go Back To Collecter Page</a></center>
				<a class="toggleMenu" href="#">Menu</a>
				<center>
					<ul class="nav">
						
						<li><a href="">District Profile</a>
						<li><a href="">Monthly Progressive Report</a>
						<ul>
											<li><a href="monthly.php">Functional Indicator</a></li>
											<li><a href="core.php">Core Indicator</a></li>
											<li><a href="">Disease Diagnosis</a></li>
											<li><a href="">TSLDA Agency</a></li>
											<li><a href="">Publicity Report</a></li>
										</ul>
						</li>
						<li><a href="#">Welfare Schemes</a>
							<ul>
											<li><a href="">Sheep</a>
										<ul>
											<li><a href="pregrounding.php">Pre Grounding</a></li>
											<li><a href="postgrounding.php">Post Grounding</a></li>
											<li><a href="grounding.php">Grounding</a></li>
											<li><a href="36column.php">36 Column</a></li>
										</ul>
											</li>
											<li><a href="">Fodder Sheed</a>
										<ul>
											<li><a href="fodderindent.php">Indent</a></li>
											<li><a href="fodderpayment.php">Payment Particular</a></li>
																					
										</ul>
											</li>
											<li><a href="">Chaff Cutter</a>
											<ul>
											<li><a href="chaffindent.php">Indent</a></li>
											<li><a href="chaffpayment.php">Payment Particular</a></li>
																					
										</ul></li>
											<li><a href="">Backyard Poultry</a>
											<ul>
											<li><a href="backyardindent.php">Indent</a></li>
											<li><a href="backyardpayment.php">Payment Particular</a></li>
																					
										</ul></li>
											<li><a href="">Sunandini Calf Milk Program</a>
											<ul>
											<li><a href="sunandiniindent.php">Indent</a></li>
											<li><a href="sunandinipayment.php">Payment Particular</a></li>
																					
										</ul></li>
											<li><a href="">Milch Animals</a>
											<ul>
											<li><a href="milchindent.php">Indent</a></li>
											<li><a href="milchpayment.php">Payment Particular</a></li>
																					
										</ul></li>
											<li><a href="">Piggeries</a></li>
											<li><a href="">Others</a></li>
							</ul>
						</li>
						
						
						<li>
			<a href="logout.php">Log Out</a>
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
<h1 style="text-align:center">Cattle</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadcattle/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>
<div  class="table-responsive">
<h1 style="text-align:center">Buffalo</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl1 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadbuffalo/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>
					<div  class="table-responsive">
					<h1 style="text-align:center">Sheep & Goat</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl2 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadsheep/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>
<div  class="table-responsive">
<h1 style="text-align:center">Poultry</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl3 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadpoultry/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>	

<div  class="table-responsive">
<h1 style="text-align:center">Dogs</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl4 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploaddogs/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Cats</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl5 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadcats/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Horses</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Select</td>
							<td>Tentative</td>
							<td>History</td>							
							<td>Treatment</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,tentative,history,treatment,file FROM tbl6 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['tentative'] ?></td>
								<td><?php echo $data['history'] ?></td>
								<td><?php echo $data['treatment'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadhorse/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>


<div  class="table-responsive">
<h1 style="text-align:center">Deworming</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Village</td>
							<td>Goat</td>
							<td>Sheep</td>							
							<td>Calf</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,goat,sheep,calf,file FROM tbl7 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['goat'] ?></td>
								<td><?php echo $data['sheep'] ?></td>
								<td><?php echo $data['calf'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploaddewo/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>


<div  class="table-responsive">
<h1 style="text-align:center">Castration</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Village</td>
							<td>Cast</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,cast,file FROM tbl8 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['cast'] ?></td>

								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadcast/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Vaccination</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Name</td>
							<td>Quantity Spent</td>
							<td>Quantity Discarded</td>
							<td>Quantity in Hand</td>							
							<td>Mandal</td>
							<td>Village</td>
							<td>Batch no</td>
							<td>Bottles Received</td>
							<td>Bottles Disposed</td>							
							<td>Bottles in hand</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,vacc_name,vacc_spent,vacc_discared,vacc_inhand,mandal,village,vacc_date,vacc_bottlesrec,vacc_bottlesdis,vacc_bottlesinhand,vacc_remarks,file FROM tbl9 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['vacc_name'] ?></td>
								<td><?php echo $data['vacc_spent'] ?></td>
								<td><?php echo $data['vacc_discared'] ?></td>
								<td><?php echo $data['vacc_inhand'] ?></td>
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								<td><?php echo $data['vacc_date'] ?></td>
								
								<td><?php echo $data['vacc_bottlesrec'] ?></td>
								<td><?php echo $data['vacc_bottlesdis'] ?></td>
								<td><?php echo $data['vacc_bottlesinhand'] ?></td>
								<td><?php echo $data['vacc_remarks'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadvacci/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>					


<div  class="table-responsive">
<h1 style="text-align:center">AI</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Village</td>
							<td>Number</td>
							<td>Breed</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,number,ai_bb,file FROM tbl10 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
							
								<td><?php echo $data['farmer'] ?></td>
								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>								
								<td><?php echo $data['number'] ?></td>
								<td><?php echo $data['ai_bb'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadai/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Fodder</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Seed</td>
							<td>Cost</td>
							<td>Spent</td>
							<td>Remitted</td>							
							<td>Uptodate</td>
							<td>Mandal</td>
							<td>batch</td>
							<td>Amount</td>
							<td>Village</td>
							
							
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,seed,cost,spent,amrem,upto,mandal,recap,balance,village,file FROM tbl11 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['seed'] ?></td>
								<td><?php echo $data['cost'] ?></td>
								<td><?php echo $data['spent'] ?></td>
								<td><?php echo $data['amrem'] ?></td>
								<td><?php echo $data['upto'] ?></td>
								<td><?php echo $data['mandal'] ?></td>
						
								<td><?php echo $data['recap'] ?></td>								
								<td><?php echo $data['balance'] ?></td>
								<td><?php echo $data['village'] ?></td>
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadfodder/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Fertility Camp</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Village</td>
							<td>Camps</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,camps,file FROM tbl12 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
							
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['camps'] ?></td>

								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadfertility/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>					

<div  class="table-responsive">
<h1 style="text-align:center">Farmer Awareness</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Yearly</td>
							<td>Monthly</td>
							<td>Daily</td>
							<td>Farmer</td>							
							
							<td>Mandal</td>
							<td>Village</td>
							<td>Program</td>

							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,yearly,monthly,daily,farmer,mandal,village,program,file FROM tbl13 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['yearly'] ?></td>
								<td><?php echo $data['monthly'] ?></td>
								<td><?php echo $data['daily'] ?></td>
								<td><?php echo $data['farmer'] ?></td>
								
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								<td><?php echo $data['program'] ?></td>
								
								
						
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadfarmer/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

								</tr>
								<?php
								
							}
}
								?>
						</table>
						
					</div>

<div  class="table-responsive">
<h1 style="text-align:center">Extension Programs</h1>
						<table class="table table-bordered">
						
							<tr style="font-weight:bold;">
							
							<td>Id</td>							
							<td>Date</td>
							<td>Mandal</td>
							
							<td>Village</td>
							<td>Program</td>
							<td>File</td>
							<td>View File</td>
							</tr>
<?php
if(isset($_POST['village']))
{
$name = $_POST['village'];

$fetch="SELECT id,date,mandal,village,program,file FROM tbl14 WHERE village = '".$name."'  LIMIT 0, 30";
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
								<td><?php echo $data['date'] ?></td>
								<td><?php echo $data['mandal'] ?></td>
								<td><?php echo $data['village'] ?></td>
								
								<td><?php echo $data['program'] ?></td>
								
								<td><?php echo $data['file'] ?></td>
								<td><a href="../alldata/uploadex/<?php echo $data['file'] ?>" target="_blank">view file</a></td>

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