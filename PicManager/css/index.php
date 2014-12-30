<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BookShop ::  Home</title>

<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Dosis:200,300" rel="stylesheet" type="text/css" />


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

<!--  Javascript files for Individual Project Slides in Recent Projects  -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	slider();
	pageTab();
	video();
	jqueryCycle();
	jcarouselVertical();
	socialIcon();
	back2top();
	lavaLamp();
});
</script>
<script type="text/javascript">
$(document).ready(function () {
	$("#businessTabClick").click(function(){
	$(".banner").hide();
	$(".banner2").fadeIn(3000);
	//$("#setrequire").fadeIn(3000);
	//$("#pick_lo").hide();
	$("#locationhead").css({"color":"#CCC"});
	$("#iosappsPort").css({"background":"#333"});
		$("#changeH").css({"height":"1600px"});
	});
});
		
</script>
<script type="text/javascript">
$(document).ready(function () {
	$("#businessTabClick1").click(function(){
	$(".banner2").hide();
	$(".banner").fadeIn(3000);
	//$("#setrequire").fadeIn(3000);
	//$("#pick_lo").hide();
	$("#locationhead").css({"color":"#CCC"});
	$("#iosappsPort").css({"background":"#333"});
		$("#changeH").css({"height":"1600px"});
	});
});
		
</script>
<script type="text/javascript">
$(document).ready(function () {
	$("#businessTabClick2").click(function(){
	$(".banner2").hide();
	$(".banner").fadeIn(3000);
	//$("#setrequire").fadeIn(3000);
	//$("#pick_lo").hide();
	$("#locationhead").css({"color":"#CCC"});
	$("#iosappsPort").css({"background":"#333"});
		$("#changeH").css({"height":"1600px"});
	});
});
		
</script>

</head>

<body>
    <!--////////header////////-->
    <?php
    include("header.php");
	?>
        
    <!-- //////banner//////// -->
    <div class="banner">
    	<div class="banner_container">
            <div id="banner_rotator">
                <div class="banner-content-left">
                    <div class="banner-title">
                            Your Mobile Rewards  
                            
                            Program
                    </div>
                <h5> Benefits </h5>
                    <ul>
                        <li> Always convenient</li>
                        <li> Get rewarded for everyday purchases</li>
                        <li> And best of all…its FREE</li>
                    </ul>
                    <div class="primary_btn">
                        <a href="business.php" class="italic" style="font-size:18px;">Are You a Business ?</a>
                    </div>
                </div><!-- End banner-2 -->
                
                <div class="banner-content-left">
                    <div class="banner-title">
                            Earn Points, 
                            <br />
                            Get Rewards 
                    </div>
                 <h5> Benefits </h5>
                    <ul>
                        <li> Always convenient</li>
                        <li> Get rewarded for everyday purchases</li>
                        <li> And best of all…its FREE</li>
                    </ul>
                    <div class="primary_btn">
                        <a href="business.php" class="italic" style="font-size:18px;">Are You a Business ?</a>
                    </div>
                </div><!-- End banner-1 -->
                
                </div>
            
            <div id="phone">
                <div id="mobile_carousel">
                    <div class="carousel-feature"><a href="#"><img alt="" src="images/iphone_ban_1.png" class="carousel-image" /></a></div>
                    <div class="carousel-feature"><a href="#"><img alt="" src="images/iphone_ban_1.png" class="carousel-image" /></a></div>
                    <div class="carousel-feature"><a href="#"><img alt="" src="images/iphone_ban_1.png" class="carousel-image" /></a></div>
                </div>
                <div id="ratings">
                    
                    <div class="rating-text">
                        
                    </div>
                </div><!-- End ratings -->
            </div><!-- End phone -->
        </div><!-- End wrap -->     
    </div>
    <!--////////banner end //////// -->
     <!--//////bussiness tab ///////--->
     <div class="banner2" style="display:none;" id="business">
    	<div class="banner_container">
           
                <div class="banner-content-left">
                    <div class="banner-title" style="margin-top:100px;">
                            Sign Up Today!  
                           
                    </div>
                 <h5> Benefits to business </h5>
                    <ul>
                        <li> Build loyal customers.</li><br  />
                        <li> Increase frequency of purchases.</li><br  />
                        <li> Promote and market your business.</li>
                    </ul>
                    <div class="primary_btn">
                        <a href="signup.php" class="italic" style="font-size:24px;">Sign Up </a>
                    </div>
                </div><!-- End banner-1 -->
            </div>
            
            <div id="phone">
                <div id="mobile_carousel">
                    
                    
                    <a href="#"><img alt="" src="images/LogoColorTextRight.jpeg" class="carousel-image" /></a>
                </div>
                
                    <div class="rating-text">
                        
                    </div>
                </div><!-- End ratings -->
            </div><!-- End phone -->
        </div><!-- End wrap -->     
    </div>
     
     <!-- end business tab ////////----->
    <!-- //////wrapper (main content) //////// -->
    <div id="wrapper">
        <div id="main-container">
        
            <!-- ///////left container//////// -->
            <div class="tabs">
            <ul class="tabnavigation">
                <li><a href="#first" id="businessTabClick1">Overview</a></li>
                <li><a class="selected" href="#second" id="businessTabClick2">Screenshot</a></li>
                
            </ul>
            <!--  overview  -->    
            <div style="display: none;" id="first">
                <div class="tab-content" id="overview">
                        <div class="features">
                            <div class="title_styling">
                                <h1> How it Works </h1>
                                <div class="title_underline"></div>
                            </div>
                            <div class="features-right">
                                <div class="features-icon"><img alt="" src="images/Downloads.png" style="width:30px;" /> </div>
                                <h2>Convenient</h2>
                                <p>
                                    Start earning rewards with just a few clicks. Log on with your facebook account for an even quicker set up time. 
                                </p>
                                
                            </div>
                            <div class="features-left">
                                <div class="features-icon"><img alt="" src="images/business.jpg" style="width:30px;" /> </div>
                                <h2>Save Money</h2>
                                <p>Find local businesses that reward you for coming back, which will in turn save you money on your everyday purchases.</p>
                            </div>
                            
                             <div class="features-right">
                                <div class="features-icon"><img alt="" src="images/reward.png" style="width:40px;"/> </div>
                                <h2>Earn Rewards</h2>
                                <p>Get rewarded for being a loyal customer with our mobile app. Earn points for every dollar you spend and redeem for various rewards.<br  /><br  /></p>
                            </div>
                            <div class="features-left">
                                <div class="features-icon"><img alt="" src="images/features-logo3.png" style="width:30px;" /> </div>
                                <h2>Easy to Use</h2>
                                <p>BookShop allows you to conveniently track your rewards all in one place.  All you do is download BookShop, add your favorite businesses, take a photo of your receipt, and earn rewards!</p>
                            </div>
                        </div> 
                        
                        <div class="demo-video margin-bottom">
                            <div class="title_styling">
                                
                                
                            </div>
                            
                                
                            <div class="video-dis">
                                
                                <div class="video_pager"></div>
                                
                            </div>
                         </div><!-- End demo-video -->
                    </div><!-- End overview -->
            </div>
            <!--  End overview  --> 
               
            <!--  Screenshots  -->    
            <div style="display: block;" id="second">
                <div class="tab-content" id="screenshot">
                        <div class="title_styling">
                            <h1>Custom Icon</h1>
                            <div class="title_underline"></div>
                        </div>
                        <div class="screenshot-box">
                            <div class="screenshot_left">
                                <img alt="" src="images/screenshot_1.png"/>
                            </div>
                            <h2>Great Icon design</h2>
                            <p>If you are going to use a passage of<span class="italic_bold"> Lorem Ipsum,</span> you need to be sure there isn't anything embarrassing  hidden in the middle of text. All the Lorem Ipsum <span class="italic_bold">generators</span> on the Internet.</p>
                        </div>
                        <div class="title_styling">
                            <h1> Stylish Home screen </h1>
                            <div class="title_underline"></div>
                        </div>
                        <div class="screenshot-box">
                            <div class="screenshot_right">
                                <img alt="" src="images/screenshot_2.png"/>
                            </div>
                            <h2>Home Screen</h2>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing  hidden in the <span class="italic_bold">middle of text.</span> All the Lorem Ipsum generators on the Internet.</p>
                                <br />
                               
                        </div>
                        <div class="title_styling">
                            <h1> Navigation</h1>
                            <div class="title_underline"></div>
                        </div>
                        <div class="screenshot-box">
                            <div class="screenshot_left">
                                <img alt="" src="images/screenshot_3.png"/>
                            </div>
                            <h2>Menu</h2>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be <span class="italic_bold">sure there isn't </span>anything embarrassing  hidden in the middle of text. All the Lorem Ipsum generators on the Internet. </p>
                            <p> Various versions have evolved over the years, <span class="italic_bold">sometimes by accident,</span> sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
            </div>
            <!--  End Screenshots  --> 
               
            <!--  FAQ  -->    
            <div style="display: none;" id="third">
                <div class="tab-content" id="support">
                        
                        <ul>
                            <li class="faq_container">
                               
                               
                            </li>
                            <li class="faq_container">
                                <h2>
                                    <span class="qes">01.</span>Customer Loyalty
                                </h2>
                                <div class="answer">
                                    <div class="ans"></div><p>Encourage customers to come back sooner and spend more by offering rewards. </p>
                                </div>
                            </li>
                            <li class="faq_container">
                                <h2>
                                    <span class="qes">02.</span>Customize a Deal
                                </h2>
                                <div class="answer">
                                    <div class="ans"></div><p>Create and customize a program that works for your business. </p>
                                </div>
                            </li>  
                             <li class="faq_container">
                                <h2>
                                    <span class="qes">03.</span>See Effect to Bottom line
                                </h2>
                                <div class="answer">
                                    <div class="ans"></div><p>Learn relationship between rewards and sales. </p>
                                </div>
                            </li> 
                            <li class="faq_container">
                                <h2>
                                    <span class="qes">04.</span>Market Your Business
                                </h2>
                                <div class="answer">
                                    <div class="ans"></div><p>Engage customers and give them that one more reason to come back . </p>
                                </div>
                            </li>    
                        </ul>               
                    </div>
            </div>
            <!--  End FAQ  -->    
        </div>
            <!-- /////End left container///////// -->
            
            <!-- ///////-rignt container///////// -->
            <div id="right-container">
                <div id="right-content">
                    
                        
                       
                                  
                    <a href="#"><span class="app-store">Download from Apple Store</span></a>
                    <a href="#"><span class="google-play">Download from Android Market</span></a>
                    
                   
                                
                             </div>                    
                </div>
            </div>
            <!-- ///////// End rignt container///////// -->
    
        </div>
        <!-- ///////// End Main container///////// -->

    </div> 
    <!-- //////End wrapper////////- -->
    
    <!-- //////footer////// -->
   <?php
   include("footer.php");
   ?>
    <!-- //////footer end////// -->
    <div id="goto_top"></div>
</body>
</html>

