<?php
include_once '../FI/db1.php';

$suggestion=$_POST['suggestion'];

$sql="INSERT INTO  tbl29(suggestion) VALUES
('$suggestion')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Message sent successfully");</script>';
}
header("refresh:0; url=collecter.php");

?>
