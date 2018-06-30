<?php
include_once 'db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../alldata/uploadvacci/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$vacc_name=$_POST['vacc_name'];
	$vacc_spent=$_POST['vacc_spent'];
	$vacc_discared=$_POST['vacc_discared'];
	$vacc_inhand=$_POST['vacc_inhand'];
	$mandal=$_POST['mandal'];
	$village=$_POST['village'];
	$vacc_date=$_POST['vacc_date'];
	$vacc_bottlesrec=$_POST['vacc_bottlesrec'];
	$vacc_bottlesdis=$_POST['vacc_bottlesdis'];
	$vacc_bottlesinhand=$_POST['vacc_bottlesinhand'];
	$vacc_remarks=$_POST['vacc_remarks'];


	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl9(vacc_name,vacc_spent,vacc_discared,vacc_inhand,mandal,village,vacc_date,vacc_bottlesrec,vacc_bottlesdis,vacc_bottlesinhand,vacc_remarks,file,type,size) VALUES('$vacc_name',
		'$vacc_spent','$vacc_discared','$vacc_inhand','$mandal','$village','$vacc_date','$vacc_bottlesrec','$vacc_bottlesdis','$vacc_bottlesinhand','$vacc_remarks','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='vaccinations.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='vaccinations.php';
        </script>
		<?php
	}
}
?>