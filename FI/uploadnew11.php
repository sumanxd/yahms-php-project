<?php
include_once 'db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../alldata/uploadai/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$yearly=$_POST['yearly'];
	$monthly=$_POST['monthly'];
	$daily=$_POST['daily'];
	$farmer=$_POST['farmer'];
	$mandal=$_POST['mandal'];
	$village=$_POST['village'];
	$number=$_POST['number'];
	$ai_bb=$_POST['ai_bb'];


	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl10(yearly,monthly,daily,farmer,mandal,village,number,ai_bb,file,type,size) VALUES('$yearly',
		'$monthly','$daily','$farmer','$mandal','$village','$number','$ai_bb','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='ai.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='ai.php';
        </script>
		<?php
	}
}
?>