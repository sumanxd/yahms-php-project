<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
h2
{
font-family:Times New Roman;
}
p,li
{
font-family:Georgia;
font-size:18px;
line-height:40px;
}
td
{
font-family:Georgia;
}
</style>
</head>
<body>
<section class="container">
	<section style="background-color:AntiqueWhite; padding:50px" id="demo1">
		<h2 style="color:blue;">History/Introduction</h2>
		<p>The District Veterinary & Animal Husbandry Office, Yadadri-Bhuvanagiri is established under G.O. Ms. No. 137, finance (HRM-1) Dept., dated: - 11.10.2016 and G.O.Rt. No.169, Animal Husbandry, Dairy Development & Fisheries (AH), Dept., Dt .11.10.2016
		</p>
		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:BurlyWood; padding:50px" id="demo2">
		<h2 style="color:Coral;padding-top:40px">Objectives</h2>
		<ul>
			<li>To provide health coverage including diagnosis, treatment and preventive inoculations against contagious diseases.</li>
			<li>To upgrade the local non descriptive Livestock by introduction superior germ through Artificial Insemination</li>
			<li>To propagate improved varieties of Fodder Crops and their nutritive value for better production and also to educate the farmers about feeding and the management of livestock.</li>
			<li>To implement the livestock based programs under PKP, RKVY, NLM, SC, BC Corporation and other weaker section programmers under state government to uplift the standard and improve economy of the weaker section.</li>
		</ul>
		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:DarkGray; padding:50px" id="demo3">
		<h2 style="color:green; padding-top:40px">Staff Position</h2>
		<table class="table table-hover table-bordered">
	
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinarynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $exe="select * from staff";
   $res=mysqli_query($conn,$exe);
  
?>
<!DOCTYPE html>
<head>
<title></title>
<style>
#tbl {
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">

  <tr>
  <th>SI.NO.</th>
     
	 <th>NAME Of THE CATEGORY</th>
	  <th>NO. OF POSTS SANCTIONED</th>
	   <th>NO. OF POSTS FILLED</th>
	   <th>NO. OF VACANT</th>
	   
	  
	   </tr>
	   <tr>
	      <?php
   while($row = mysqli_fetch_array($res))

  {
	  ?>
		
		<td><?php echo $row['sid']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['post_sanctioned']; ?></td>
		<td><?php echo $row['post_filled']; ?></td>
	
		<td><?php echo $row['no_vacant']; ?></td>
		<td><a href="Fetch/edit.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
		
   </tr>
   <?php }
?>
   
   <?php 
  $add=mysqli_query($conn,'SELECT SUM(post_sanctioned),SUM(post_filled),SUM(no_vacant) from `staff`');
  while($row1=mysqli_fetch_array($add))
  {
    $mark=$row1['SUM(post_sanctioned)'];
    $mark1=$row1['SUM(post_filled)'];  
	$mark2=$row1['SUM(no_vacant)'];
 ?>
 
  <tr>
   <td><?php echo "" ?></td>
    <th>Total</th>
	
    <td><?php echo $mark ?></td>
    <td><?php echo $mark1 ?></td>
	<td><?php echo $mark2 ?></td>
  </tr>
  <?php }
 ?>
      <form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2 " style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:DarkKhaki; padding:50px " id="demo4">
		
		<table class="table table-hover table-bordered">
			
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinarynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $exe="select * from veterinaryno";
   $res=mysqli_query($conn,$exe);
  
?>
<!DOCTYPE html>
<head>
<title></title>
<style>
#tbl {
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">

<table border="1px solid grey"; id="tbl" align="center">
<h2 style="color:Crimson; padding-top:40px">Number of Veterinary Institutes</h2>
  <tr>
  <th>SI.NO.</th>
     
	 <th>TYPE OF VETERINARY INSTITUTION</th>
	  <th>NO. OF VETERINARY INSTITUTIONS</th>
	   <th>MANNED BY</th>
	 
	   </tr>
	   <tr>
	      <?php
   while($row = mysqli_fetch_array($res))

  {
	  ?>
		
		<td><?php echo $row['sid']; ?></td>
		<td><?php echo $row['type_inst']; ?></td>
		<td><?php echo $row['no_inst']; ?></td>
		<td><?php echo $row['manned']; ?></td>
		<td><a href="editvete.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
		
   </tr>
   <?php }
?>
   
   <?php 
  $add=mysqli_query($conn,'SELECT SUM(no_inst) from `veterinaryno`');
  while($row1=mysqli_fetch_array($add))
  {
    $mark=$row1['SUM(no_inst)'];
    
 ?>
 
  <tr>
   <td><?php echo "" ?></td>
    <th>Total</th>
	
    <td><?php echo $mark ?></td>
    
  </tr>
  <?php }
 ?>

	    </table>
	 
	</body><html>

			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6 " style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:DarkSeaGreen; padding:50px" id="demo5">
		<h2 style="color:orange; padding-top:40px">Functional Indicators/ Performance of the district</h2>
		<table class="table table-hover table-bordered">
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinarynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $exe="select * from fi";
   $res=mysqli_query($conn,$exe);
  
?>
<!DOCTYPE html>
<head>
<title></title>
<style>
#tbl {
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">

<table border="1px solid grey"; id="tbl" align="center">

  <tr>
  <th>SI.NO.</th>
     
	 <th>PERFORMANCE INDICATOR</th>
	  <th>ANNUAL TARGET 2017-18</th>
	   <th>TARGET(up to december 2017)</th>
	   <th>ACHIEVE</th>
	   <th>%</th>
	 
	   </tr>
	   <tr>
	      <?php
   while($row = mysqli_fetch_array($res))

  {
	  ?>
		
		<td><?php echo $row['sid']; ?></td>
		<td><?php echo $row['pind']; ?></td>
		<td><?php echo $row['annt']; ?></td>
		<td><?php echo $row['target']; ?></td>
		<td><?php echo $row['ach']; ?></td>
		<td><?php echo $row['%']; ?></td>
		
		<td><a href="editfi.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
		
   </tr>
   <?php }
?>
 
	    </table>
	 
	 </form></body><html>

		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:LightSteelBlue;padding:50px " id="demo6">
		<h2 style="color:brown; padding-top:40px">Livestock population</h2>
		<table class="table table-hover table-bordered">
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinarynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $exe="select * from livestock";
   $res=mysqli_query($conn,$exe);
  
?>
<!DOCTYPE html>
<head>
<title></title>
<style>
#tbl {
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">

<table border="1px solid grey"; id="tbl" align="center">
<h3 align="center">LiveStock Population</h3>
  <tr>
  <th>SI.NO.</th>
     
	 <th>Type Of Animal</th>
	  <th>Total Population In The Division</th>
	   <th>Newly Inducted sheep + Lambs Born</th>
	 
	   </tr>
	   <tr>
	      <?php
   while($row = mysqli_fetch_array($res))

  {
	  ?>
		
		<td><?php echo $row['sid']; ?></td>
		<td><?php echo $row['type_animal']; ?></td>
		<td><?php echo $row['total_pop']; ?></td>
		<td><?php echo $row['sheep_lambs']; ?></td>
		<td><a href="editlive.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
		
   </tr>
   <?php }
?>
   
   <?php 
  $add=mysqli_query($conn,'SELECT SUM(total_pop),SUM(sheep_lambs) from `livestock`');
  while($row1=mysqli_fetch_array($add))
  {
    $mark=$row1['SUM(total_pop)'];
	$mark1=$row1['SUM(sheep_lambs)'];

    
 ?>
 
  <tr>
   <td><?php echo "" ?></td>
    <th>Total</th>
	
    <td><?php echo $mark ?></td>
	 <td><?php echo $mark1 ?></td>
	
    
  </tr>
  <?php }
 ?>

	    </table>
	 
	 </form></body><html>

		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:Moccasin; padding:50px" id="demo7" >
		<h2 style="color:Purple; padding-top:40px">Core indicators</h2>
		<table class="table table-hover table-bordered">
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinarynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $exe="select * from coreind";
   $res=mysqli_query($conn,$exe);
  
?>
<!DOCTYPE html>
<head>
<title></title>
<style>
#tbl {
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">

<table border="1px solid grey"; id="tbl" align="center">
<h3 align="center">Core Indicators</h3>
  <tr>
  <th>SI.NO.</th>
     
	 <th>Name Of The Core Indicators</th>
	  <th>Annual Target</th>
	   <th>Cumulative Target (Up To Dec 2017)</th>
	    <th>Cumulative Achievement (Up To Dec 2017)</th>
	    <th>%</th>
	   
	 
	   </tr>
	   <tr>
	      <?php
   while($row = mysqli_fetch_array($res))

  {
	  ?>
		
		<td><?php echo $row['sid']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['ann_target']; ?></td>
		<td><?php echo $row['cum_target']; ?></td>
		<td><?php echo $row['cum_ach']; ?></td>
		<td><?php echo $row['%']; ?></td>
		<td><a href="editcore.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
		
   </tr>
   <?php }
?>
  
	    </table>
	 
	 </form></body><html>

		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6  col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	<br/>
	<section style="background-color:Plum; padding:50px" id="demo8">
		<h2 style="color:Teal; padding-top:40px ">Schemes</h2>
		<ul>
			<li>Special Packages for shepherds:  So far 1, 30,305 sheep (6,205 units) were distributed in the district.</li>
			<li>Milk Production: 5.40 Lakh of milk produced per day in the district. This district is 1st in the state in milk   production.</li>
			<li>Fodder Seed: 40 MTs of Jowar and 15.815 PC-23 Fodder seed, 10 MT’s of Stylo Fodder seed has been supplied on 75% Subsidy to the farmers.</li>
			<li>Chaff Cutters:  (19) Chaff Cutters have been supplied on 50% subsidy and supply of (50) Chaff cutters on 50% subsidy  are under process.</li>
		</ul>
		<form>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	</br>
	<section style="background-color:tan; padding:50px" id="demo9">
		<h2 style="color:Turquoise; padding-top:40px">AnyOthers</h2>
		<form>
			<textarea rows="7" cols="50"></textarea>
			<div class="row" style="padding-top:40px">
				<input type="file" value="upload" class="btn btn-danger col-lg-6 col-sm-6" style="max-width:210px">
				<input type="submit" value="submit" class="btn btn-success col-lg-offset-4 col-sm-offset-4 col-lg-2 col-sm-2" style="width:10%">
			</div>
		</form>
	</section>
	
</section>
</body>
</html>
 