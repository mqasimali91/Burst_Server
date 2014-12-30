<?php
include_once 'connection.php';

$name=$_POST['name'];
$phone=$_POST['phone'];

$name=mysql_real_escape_string($name);
$phone=mysql_real_escape_string($phone);
$result = mysql_query("SELECT * FROM compusers WHERE phone='$phone'");
if(!mysql_fetch_assoc($result)){
	$sql = "INSERT INTO compusers (name, phone)
VALUES ('$name', '$phone')";

	if (mysql_query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<script language='javascript' type='text/javascript'>";

		echo "window.location.href='createNewUser.php?'+'page=4'";
		//echo "success";
		echo "</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else{
	echo "<script language='javascript' type='text/javascript'>";

		echo "window.location.href='createNewUser.php?'+'page=3'";
		//echo "success";
		echo "</script>";
}
?>