<html>
<head>
<title>Create User</title>
</head>
<body>
<form method="post" action="saveUser.php" >
Name:<br>
<input type="text" name="name" /><br />
Phone Number:<br>
<input type="text" name="phone" /> <br>
<br />
<input type="submit" value="Save" id="primary_btn2"
	style="margin- top: 60px; margin-left: 40px; cursor: pointer" /></form>
</body>
</html>

<?php
$page=$_GET['page'];
if($page==4){
	echo "<script language='javascript' type='text/javascript'>";

	echo "alert('User has been successfully created! ')";

	echo "</script>";
}
if($page==3){
	echo "<script language='javascript' type='text/javascript'>";

	echo "alert('This user is already exist! ')";

	echo "</script>";
}
?>