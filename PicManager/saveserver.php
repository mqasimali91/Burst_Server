<?php
include_once 'connection.php';

$name=$_POST['radiog_dark'];
//$phone=$_POST['phone'];
if($name=="smarnovative 1"){
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
else if($name=="smarnovative 2"){
	$sql = "UPDATE changeserver SET status='1' WHERE id=2";
	if(mysql_query($sql) === TRUE)
	{
		$sql2 = "UPDATE changeserver SET status='0' WHERE id=1 OR id=3";
		if(mysql_query($sql2) === TRUE){
			echo "success 2";
		}
	}
}
else if($name=="smarnovative 3"){
	$sql = "UPDATE changeserver SET status='1' WHERE id=3";
	if(mysql_query($sql) === TRUE)
	{
		$sql2 = "UPDATE changeserver SET status='0' WHERE id=2 OR id=1";
		if(mysql_query($sql2) === TRUE){
			echo "success 3";
		}
	}
}
if($name=="smarnovative 1"){
	$data = array(
  'http://qasimali.byethost8.com/PicManager/updateServer.php?id=1',
  'http://smarnovative.com/picManager/updateServer.php?id=1'
	);
	$r = multiRequest($data);
	echo "<script language='javascript' type='text/javascript'>";

	echo "window.location.href='changeserver.php?'+'page=3'";
	//echo "success";
	echo "</script>";
	echo '<pre>';
	print_r($r);
}
else if($name=="smarnovative 2"){
	$data = array(
  'http://wv.smarnovative.com/picManager/updateServer.php?id=2',
  'http://qasimali.byethost8.com/PicManager/updateServer.php?id=2'
	);
	$r = multiRequest($data);
	echo "<script language='javascript' type='text/javascript'>";

	echo "window.location.href='changeserver.php?'+'page=3'";
	//echo "success";
	echo "</script>";
	echo '<pre>';
	print_r($r);
}
else if($name=="smarnovative 3"){
	$data = array(
  'http://wv.smarnovative.com/picManager/updateServer.php?id=3',
  'http://smarnovative.com/picManager/updateServer.php?id=3'
	);
	$r = multiRequest($data);
	echo "<script language='javascript' type='text/javascript'>";

	echo "window.location.href='changeserver.php?'+'page=3'";
	//echo "success";
	echo "</script>";
	echo '<pre>';
	print_r($r);
}
function multiRequest($data, $options = array()) {

	// array of curl handles
	$curly = array();
	// data to be returned
	$result = array();

	// multi handle
	$mh = curl_multi_init();

	// loop through $data and create curl handles
	// then add them to the multi-handle
	foreach ($data as $id => $d) {

		$curly[$id] = curl_init();

		$url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
		curl_setopt($curly[$id], CURLOPT_URL,            $url);
		curl_setopt($curly[$id], CURLOPT_HEADER,         0);
		curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);

		// post?
		if (is_array($d)) {
			if (!empty($d['post'])) {
				curl_setopt($curly[$id], CURLOPT_POST,       1);
				curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
			}
		}

		// extra options?
		if (!empty($options)) {
			curl_setopt_array($curly[$id], $options);
		}

		curl_multi_add_handle($mh, $curly[$id]);
	}

	// execute the handles
	$running = null;
	do {
		curl_multi_exec($mh, $running);
	} while($running > 0);


	// get content and remove handles
	foreach($curly as $id => $c) {
		$result[$id] = curl_multi_getcontent($c);
		curl_multi_remove_handle($mh, $c);
	}

	// all done
	curl_multi_close($mh);

	return $result;
}
//$name=mysql_real_escape_string($name);
//$phone=mysql_real_escape_string($phone);
/*
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
 }*/
?>