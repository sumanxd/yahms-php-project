<?php
require('../FI/db1.php');
include("auth.php");

?>
<html>
<head>
	<title>YAHMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.active li a.active {
    background-color: #ccc;
}
</style>
</head>
<body style="font-size:12px;">
 <div class="row" style="margin-top:40px;overflow:hidden;">
					
<div id="content" >
						
						
					
					
<div id="tab1" style="height:100%">
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
		
	</section>



</div>
			<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>
      $("#content").find("[id^='tab']").hide(); // Hide all content
      $("#tabs li:first").attr("id","current"); // Activate the first tab
      $("#content #tab1").fadeIn(); // Show first tab's content

      $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
          return;
        } else {
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }

        var tab = $(this).attr("name");
        localStorage.setItem("tab", tab);
      });

      var currTab = localStorage.getItem("tab");
      $('a[name="' + currTab + '"]').trigger("click");
	  document.getElementById("defaultOpen").click();
    </script>
	</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
</body>
</html>