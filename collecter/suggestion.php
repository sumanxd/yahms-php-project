<?php
require('../FI/db1.php');
include("auth.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Suggestion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<section class="container-fluid">
		
<div class="container">
		<div class="container" >
			<center><a href="collecter.php">Go Back To Collecter Page</a><center>
			<h1 style="text-align:center">Suggestion to Doctors</h1>
		</div>
			<form action="suggestionupload.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()"  id="myfrm1">
			<center>
			<textarea rows="4" cols="50" name="suggestion"></textarea>
			
             <br><br><br><br>
                <button  class="btn col-md-2 col-xs-3 col-md-offset-2 col-xs-offset-1 col-sm-offset-1" style="margin-left: 397px; position: relative; bottom: 39px;" name="btn-upload">Submit</button></center>
            </div>
            </form>
		</div>		
</section>

	
</body>
</html>