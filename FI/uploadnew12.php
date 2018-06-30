<?php
include_once 'db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../alldata/uploadfodder/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$seed=$_POST['seed'];
	$cost=$_POST['cost'];
	$spent=$_POST['spent'];
	$amrem=$_POST['amrem'];
	$upto=$_POST['upto'];
	$mandal=$_POST['mandal'];
	$recap=$_POST['recap'];
	$balance=$_POST['balance'];
	$village=$_POST['village'];


	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl11(seed,cost,spent,amrem,upto,mandal,recap,balance,village,file,type,size) VALUES('$seed',
		'$cost','$spent','$amrem','$upto','$mandal','$recap','$balance','$village','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='fodderdevlopment.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='fodderdevlopment.php';
        </script>
		<?php
	}
}
?>