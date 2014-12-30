<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create User</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />

<link
	href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic'
	rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300'
	rel='stylesheet' type='text/css' />

<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>

<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/feature_carousel.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<!--  Javascript files for Individual Project Slides in Recent Projects  -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	jcarouselVertical();
	socialIcon();
	back2top();
	lavaLamp();
	contactValidate();
	jqueryCycle();
});
</script>


</head>



<body>
<!--////////header////////-->
<div class="header">
<div class="wrap">
<div class="company-logo">
<div class="logo"><a href="admin.php">home</a></div>
</div>

</div>
<!--end wrap--></div>
<!--////////header end////////-->

<!-- //////banner//////// -->
<div class="banner_small">
<div class="wrap">
<div class="page_title">
<h1>Welcome Admin</h1>
</div>
</div>
</div>
<!--////////banner end //////// -->

<!-- //////wrapper (main content) //////// -->
<div id="wrapper"><!--////Main container////-->
<div id="main-container"><!-- ////left containet//// -->
<div class="left-content">
<div class="title_styling">
<h1>Create New User</h1>
<div class="title_underline"></div>

</div>
<p style="font-size: 14px; font-weight: bold; color: red;">Don't use plus(+) sign in phone nember, use country code without plus sign. </p>
<form class="cmxform" id="commentForm" method="post"
	action="saveUser.php">
<fieldset>
<p><label for="cname"> Name</label> <input id="cname" name="name"
	type="text" size="30" class="contact-input required" /></p>

<p><label for="cname"> Cell #</label> <input id="cname" name="phone"
	type="text" size="30" class="contact-input required" /></p>

<p><input class="primary_btn" type="submit" value="Submit" /> <input
	class="primary_btn" type="reset" value="Reset" /></p>
</fieldset>
</form>
<?php
$page=$_GET['page'];
if($page==4){
	
	echo "<p style='color: green; font-size: 20px; font-weight: bold; margin-top:30px'>User has been successfully created!</p>";
}
if($page==3){
	
	echo "<p style='color: red; font-size: 20px; font-weight: bold; margin-top:30px'>* This user is already exist! </p>";
}
?>
</div>

<!--End left-content--></div>
<!--//// End Main container////--></div>
<!-- //////End wrapper////////- -->

<!-- //////footer////// -->
<div class="footer">


<div class="strip_2">
<div class="strip_2_shadow">
<div class="wrap">
<div class="footer-logo">Mobile App</div>
<p>© Copyright 2012 Mobile App</p>
</div>
</div>
</div>
<!-- strip_2 --></div>
<!-- //////footer end////// -->

<div id="goto_top"></div>
</body>
</html>
