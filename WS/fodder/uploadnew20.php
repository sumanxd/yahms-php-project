<?php
include_once '../../FI/db1.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../alldata/uploadindent/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$seed=$_POST['seed'];
	$cost=$_POST['cost'];
	$subs=$_POST['subs'];
	$beni=$_POST['beni'];
	$mandal=$_POST['mandal'];
	$village=$_POST['village'];
	$quan=$_POST['quan'];

	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl19(seed,cost,subs,beni,mandal,village,quan,file,type,size) VALUES('$seed','$cost','$subs','$beni','$mandal','$village','$quan','$final_file','$file_type','$new_size')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='indent.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='indent.php';
        </script>
		<?php
	}
}
?>