<?php
include("connection.php");
$q=$_GET['q'];
//echo $q;
$resulted = mysql_query("SELECT * FROM usersdata WHERE id='$q'");
while($row=mysql_fetch_assoc($resulted)){
	$delpic=$row['picurl'];
}
$sql="DELETE  FROM usersdata WHERE id='$q'";
if(mysql_query($sql) === TRUE)
{
	echo "success".$q;
if (file_exists($delpic)) {
    unlink($delpic);
    //echo 'File '.$filename.' has been deleted';
  }
}
else{
	echo "fail";
}
?>