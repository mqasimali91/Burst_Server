<?php
include_once 'connection.php';

$name=$_GET['id'];
//$phone=$_POST['phone'];

if($name=="1"){
	$sql = "UPDATE changeserver SET status='1' WHERE id=1";
	if(mysql_query($sql) === TRUE)
	{
		$sql2 = "UPDATE changeserver SET status='0' WHERE id=2 OR id=3";
		if(mysql_query($sql2) === TRUE){
			echo "success 1";
		}
	}
	else{
		die('Error: ' . mysql_error());
	}
}
else if($name=="2"){
	$sql = "UPDATE changeserver SET status='1' WHERE id=2";
	if(mysql_query($sql) === TRUE)
	{
		$sql2 = "UPDATE changeserver SET status='0' WHERE id=1 OR id=3";
		if(mysql_query($sql2) === TRUE){
			echo "success 2";
		}
	}
}
else if($name=="3"){
	$sql = "UPDATE changeserver SET status='1' WHERE id=3";
	if(mysql_query($sql) === TRUE)
	{
		$sql2 = "UPDATE changeserver SET status='0' WHERE id=2 OR id=1";
		if(mysql_query($sql2) === TRUE){
			echo "success 3";
		}
	}
}

?>