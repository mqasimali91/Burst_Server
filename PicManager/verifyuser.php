<?php
include("connection.php");

$phone=$_GET['phone'];
$resulted = mysql_query("SELECT * FROM compusers WHERE phone='$phone'");
if(mysql_fetch_assoc($resulted)){
echo "verified";
}
else{
	die('Error: ' . mysql_error());
}
?>