<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:black; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}




</style>
</head>
<body>
<?php
require('../FI/db1.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `tbl32` WHERE username='$username'
and password='".($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: madmin.php");
         }else{
	echo "<script type='text/javascript'> alert('Username or password is incorrect');location.href='login.php'</script>";
	}
    }else{
?>


<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		   <form action="" method="post" name="login">
  <div class="form-group">
<select id="mandal" name="username">

    <option value="item0">--Select Mandal--</option>
	<option value="Addagudur">Addagudur</option>
    <option value="Alair">Alair</option>
    <option value="Athmakur">Athmakur</option>
    <option value="Bhongiri">Bhongiri</option>
    <option value="BibiNagar">BibiNagar</option>
    <option value="Bommalaramaram">Bommalaramaram</option>
    <option value="Choutuppal">Choutuppal</option>
    <option value="Motakondur">Motakondur</option>
    <option value="Mothkur">Mothkur</option>
    <option value="Narayanpur">Narayanpur</option>
    <option value="Pochampally">Pochampally</option>
    <option value="Rajapet">Rajapet</option>
    <option value="item13">Ramannapet</option>
    <option value="item14">Thurkapally</option>
    <option value="item15">Valigonda</option>
    <option value="item16">Yadagirigutta</option>
        
</select>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="password" name="password" required>
  </div>
  
  
    <div class="form-check">
    
    <button type="submit" class="btn btn-login float-right" name="go" type="submit" value="Login">Submit</button>
	<p>Go back to main page? <a href='../index.html'>Click Here</a></p>
  </div>
  
</form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Welcome AHC</h2>
            <p>Welcome to our Login & Registration panel.</p>
        </div>	
  </div>
    </div>
    
    
            </div>	   
		    
		</div>
	</div>
</div>
</section>






<?php } ?>
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
</body>
</html>