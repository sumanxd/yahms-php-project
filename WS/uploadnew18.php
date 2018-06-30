<?php
include_once '../FI/db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../alldata/uploadgro/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$vou=$_POST['vou'];
	$date=$_POST['date'];
	$place=$_POST['place'];
	$seller=$_POST['seller'];
	$mandal=$_POST['mandal'];
	$village=$_POST['village'];
	$sadd=$_POST['sadd'];
	$sadhar=$_POST['sadhar'];
	$sacc=$_POST['sacc'];
	$apai=$_POST['apai'];
	$cdb=$_POST['cdb'];
	$date2=$_POST['date2'];
	$vnol=$_POST['vnol'];
	$ntra=$_POST['ntra'];
	$amountp=$_POST['amountp'];
	$dbch=$_POST['dbch'];

	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl17(vou,date,place,seller,mandal,village,sadd,sadhar,sacc,apai,cdb,date2,vnol,ntra,amountp,dbch,file,type,size) VALUES('$vou','$date','$place','$seller','$mandal','$village','$sadd','$sadhar','$sacc','$apai','$cdb','$date2','$vnol','$ntra','$amountp','$dbch','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='grounding.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='grounding.php';
        </script>
		<?php
	}
}
?>