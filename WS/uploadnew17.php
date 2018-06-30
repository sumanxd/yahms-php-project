<?php
include_once '../FI/db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../alldata/uploadpost/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$dist=$_POST['dist'];
	$soci=$_POST['soci'];
	$regis=$_POST['regis'];
	$beni=$_POST['beni'];
	$mandal=$_POST['mandal'];
	$village=$_POST['village'];
	$father=$_POST['father'];
	$adhar=$_POST['adhar'];
	$mobile=$_POST['mobile'];
	$ano=$_POST['ano'];
	$dd=$_POST['dd'];
	$date=$_POST['date'];
	$bank=$_POST['bank'];
	$branch=$_POST['branch'];
	$amount=$_POST['amount'];


	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl18(dist,soci,regis,beni,mandal,village,father,adhar,mobile,ano,dd,date,bank,branch,amount,file,type,size) VALUES('$dist','$soci','$regis','$beni','$mandal','$village','$father','$adhar','$mobile','$ano','$dd','$date','$bank','$branch','$amount','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='postgrounding.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='postgrounding.php';
        </script>
		<?php
	}
}
?>