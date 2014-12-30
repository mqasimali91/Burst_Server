<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{
	//echo "success";
}
mysql_select_db("soundcloud", $con);
?>