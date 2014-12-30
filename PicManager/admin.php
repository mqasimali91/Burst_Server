<?php
session_start();
?>
<?php
 //connect to the database
    include_once ('connection.php'); 
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`records` where `active` = 1";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>
<link href="css/B_blue.css" rel="stylesheet" type="text/css" />
<style type="text/css">
        .records {
			
            width: 100%;
            margin: 5px;
            padding:2px 5px;
            border:1px solid #600;
			height:400px;
			
			
        }
        
        .record {
            color: #474747;
            margin: 5px 0;
            padding: 3px 5px;
        	background:#E6E6E6;  
            border: 1px solid #B6B6B6;
            letter-spacing: 2px;
            height:30px;
        }
        .record:hover {
            background:#09C;
        }
        
        
        .round {
        	-moz-border-radius:8px;
        	-khtml-border-radius: 8px;
        	-webkit-border-radius: 8px;
        	border-radius:8px;    
        }    
        
        p.createdBy{
            padding:5px;
            width: 510px;
        	font-size:15px;
        	text-align:center;
        }
        p.createdBy a {color: #666666;text-decoration: none;} 
        #Outalertwind{
       display:none;
        } 
        #panel{
        display:none;
        }       
    </style>
		<link href="css/pagination.css" rel="stylesheet" type="text/css" />
		<link href="styles/style3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

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

<script type="text/javascript">
$(document).ready(function()
{	
	jcarouselHorizontal();
	jqueryCycle();
	jcarouselVertical();
	socialIcon();
	back2top();
	lavaLamp();
	});
</script>

</head>

<body>
    <!-- /////header///// -->
    <div class="header">
    	
        <div class="wrap">
            <div class="company-logo">
                <div class="logo"><a href="">home</a></div>
            </div>
    
             
        	</div><!--end wrap-->
        </div>
    <!-- /////header end////// -->
    <!-- /////banner/////-->
    <div class="banner_small">
        <div class="wrap">
            <div class="page_title">
                    <h1>Welcome Admin </h1> <a href="createNewUser.php" style="float: right; width:100px; margin-top: -40px; margin-right:200px;" class="primary_btn">Create New User</a>
           			<a href="changeserver.php" style="float: right; width:100px; margin-top: -40px; margin-right:50px;" class="primary_btn">Change Server</a>
           </div>        
        </div>
    </div>
   <!-- /////banner end/////-->

    <!-- ////wrapper////// -->
	<div id="wrapper">
        <!-- /////Main container///// -->
        <div id="main-container">
       		<!-- ////left content/////-->
             <div class="records round">
        <div class="record round"><?php
            //show records
			
			echo "<h2><span style='float:left'>ID</span><span style='margin-left:-490px; width:20px;'>Name</span><span style='margin-left:160px; width:20px;'>Cell #</span>
			";
			echo "</div>";
			$statement="compusers";
            $query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
            
        	while ($row = mysql_fetch_assoc($query)) {
				$ref=$row['phone'];
				
				//echo $ref;
        ?>
        	
            <div class="record round"><div id="wrap"><?php echo "<div id='duar'>{$row['id']}</div><div id='tit_dis'>{$row['name']}</div>
        <div id='for_dis'>{$row['phone']}</div></span>
        <a href='view_photos.php?name=$ref' target='_blank'><Button id='view_pics'>View</Button></a>
        ";?></div></div>
        <?php    
            }
        ?>
    </div>
    <?php
	
	echo edit_anyCategory($email,$statement,$limit,$page);
?>
    </div>
        	<!-- ////left content end//// -->
        	
            <!-- ////rignt container//// -->
            
            <!-- ////rignt container end//// -->
		</div> 
        <!-- /////END Main container///// -->
    </div>
    <!-- ////wrapper///// -->

    <!-- ////footer///// -->
    <div class="footer">
    	
       
        <div class="strip_2">
            <div class="strip_2_shadow">
                <div class="wrap">
                    <div class="footer-logo">Mobile App</div>
                    <p>© Copyright 2012 Mobile App </p>
                </div>   
            </div>     
        </div><!--strip_2-->
        
    </div>
    <!-- ///footer end////-->
        
    <div id="goto_top"></div>
</body>
</html>
