<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header('Location: login.php');
		exit();
}
include('../includes/db_connect.php');
//post count
$post_count = $db->query("SELECT * FROM posts");
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>The Awkward Hug Club</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" contest="IE=9" />
	<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/loginstyle.css" rel='stylesheet' type='text/css' />
	<link href="../css/blog-post.css" rel='stylesheet' type='text/css' />
	<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href="http://fonts.googleapis.com/css?family=Oswald:100,400,300,700" rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic" rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
				<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
<!---strat-banner---->
<div class="banner">				
	 <div class="header">  
		  <div class="container">
			  <div class="logo">
				<!--	<a href="index.html"> <img src="images/logo.png" title="soup" /></a> -->
			 </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="../index.php">HOME</a></li>						
						<li><a href="contact.html">CONTACT</a></li>	
						<li><a href="about.html">ABOUT</a></li>
						<li><a href="login.php">SUBMIT</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
		 </div>
	 </div>
	 <div class="container">
		 <div class="banner-head">
			 <h1>The Awkward Hug Club</h1>
			 <h2>*Hugging Always Consensual And Not Required For Membership*</h2>
		 </div>
		 <div class="banner-links">
			 <ul>
				 <li class="active"><a href="#">This Month</a></li>
				 <li><a href="index.html">Last Month</a></li>
				 <li><a href="index.html">The Dawn of Time</a></li>
				 <div class="clearfix"></div>
			 </ul>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3>POST OF THE MONTH</h3>
						 <h4>August 29th, 2016</h4>
						 <div class="clearfix"></div>
					 </div>
						<div class="content-grid-info">
					 <!-- 	<script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fawkwardhugclub.com%2Fblog%2Fatom.xml&chan=y&num=4&desc=1&date=y&utf=y"  charset="UTF-8" type="text/javascript"></script>
						<noscript>
						<a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fawkwardhugclub.com%2Fblog%2Fatom.xml&chan=y&num=4&desc=1&date=y&utf=y&html=y">View RSS feed</a>
						</noscript>
						-->
						 <h3><a href="single.html">Man at Farmer's Market's Birkenstocks become sentient, attempt to buy quinoa in bulk</a></h3>
						 <p>Bystanders watch in awe from a careful distance as the trendy shoes purchase alternative grain</p>
						 <img src="images/birkenstocks.jpg" alt=""/>
						 <a class="bttn" href="Newpost.html">MORE</a>
						 <table>
						 	<tr>
						 		<td>Total Posts...</td>
						 		<td><?php echo $post_count->num_rows?></td>
						 	</tr>
						 </table>

				</div>   
				 </div>
				 <!--
				 <div class="content-grid-sec">
					 <div class="content-sec-info">
							 <h3><a href="single.html">ALIQUAM TINCIDUNT MAURI</a></h3>
							 <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
							 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
							 <img src="images/c2.jpg" alt=""/>
							 <a class="bttn" href="single.html">MORE</a>
					 </div>
				 </div>
				 <div class="content-grid-sec">
					 <div class="content-sec-info">
							 <h3><a href="single.html">VESTIBULUM COMMODO FELIS</a></h3>
							 <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
							 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
							 <img src="images/c3.jpg" alt=""/>
							 <a class="bttn" href="single.html">MORE</a>
					 </div>
				 </div>
				 -->
				 <div class="pages">
					 <ul>
						 <li class="active"><a href="#">1</a></li>
						 <li><a href="#">2</a></li>
						 <li><a href="#">3</a></li>
						 <li><a href="#">4</a></li>
						 <li><a href="#">5</a></li>
						 <li><a href="#">6</a></li>
						 <li><a href="#">Previous</a></li>
						 <li><a href="#">Next</a></li>
					 </ul>
				 </div>				 
			 </div>
			 
			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						<form>
							<input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
							<input type="submit" value="">
						</form>
				 </div>
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <li class="active"><a href="#">Local</a></li>
					 <li><a href="post.html">Politics</a></li>
					 <li><a href="post.html">Sports</a></li>
					 <li><a href="post.html">Miscellany</a></li>
				 </div>
				 <div class="archives">
					 <h3>ARCHIVES</h3>
					 <li class="active"><a href="#">June 2016</a></li>

				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--fotter-->
<div class="fotter">
	 <div class="container">
		 <div class="col-xs-4 fotter-info">
			 <h3>ABOUT US</h3>
			 <p>The Awkward Hug Club is a rare species of hermit crab, found only in deep jungle regions of Indonesia</p>
			 <p><a href="https://en.oxforddictionaries.com/definition/satire">If you remain confused</a></p>
		 </div>
		<div class="col-xs-4 fotter-list">
			 <h3>ABOUT THE WORLD</h3>
			 <ul>
			 <li><a href="#">This world is a cold, merciless place</a></li>
			 <li><a href="#">Your death is inevitable</a></li>
			 <li><a href="#">Come here for funny jokes</a></li>
			 </ul>
		 </div> 
		 <div class="col-xs-4 fotter-media">
				<h3>FOLLOW US ON....</h3>
				 <div class="social-icons">
				 <a href="https://www.facebook.com/awkwardhugclub/"><span class="fb"> </span></a>
				 <a href="#"><span class="twt"> </span></a>
			    </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>

<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<a href="googleanalytics.html"></a>

</body>
</html>