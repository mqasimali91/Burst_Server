
<?php

include("connection.php");

$phone=$_POST['phone'];

//$name=mysql_real_escape_string($name);
$lati=$_POST['lati'];
$lati=mysql_real_escape_string($lati);

$longi=$_POST['longi'];
$longi=mysql_real_escape_string($longi);

$resulted = mysql_query("SELECT * FROM compusers WHERE phone='$phone'");
if(mysql_fetch_assoc($resulted)){

	$today = date("F j, Y, g:i a");
	$dated=date("Y-m-d");
	//echo $today;
	$kilobyte = 1024;
	$megabyte = $kilobyte * 1024;
	//
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["pics"]["name"]);
	$extension = end($temp);
	if ((($_FILES["pics"]["type"] == "image/gif")
	|| ($_FILES["pics"]["type"] == "image/jpeg")
	|| ($_FILES["pics"]["type"] == "image/jpg")
	|| ($_FILES["pics"]["type"] == "image/pjpeg")
	|| ($_FILES["pics"]["type"] == "image/x-png")
	|| ($_FILES["pics"]["type"] == "image/png"))
	&& ($_FILES["pics"]["size"] < $megabyte)
	&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
		}
		else
		{

			$folder ="images/".$phone;
			$bookname=$_FILES["pics"]["name"];
			//$folder=$folder."/".$bookname."/";

			if(!file_exists($folder)) {
				//echo $today;
				mkdir($folder);

			}
		}
	}
	move_uploaded_file($_FILES["pics"]["tmp_name"] , "$folder"."/".$_FILES["pics"]["name"]);
	$imgsrc=$_FILES["pics"]["name"];
		
	$folder=$folder."/".$imgsrc;
		
	$sql="INSERT INTO usersdata (lati, longi, picurl, dated, phone)
					VALUES
					('$lati', '$longi', '$folder', '$dated', '$phone')";

	if (!mysql_query($sql))
	{
		echo "There is error with service";
		die('Error: ' . mysql_error());
	}
	else
	{
		echo "Uploaded successfully!";
	}
}
else{
	echo "invalid user";
}
 

?>