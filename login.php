<?php
session_start();
if (isset($_POST['submit'])){
	//
	$user = $_POST['username'];
	$pwrd = $_POST['pwrd'];
	//include database connection
	include('../includes/db_connect.php');
	if(empty($user) || empty ($pwrd)){
		echo "Missing Information";
	}else{
		$user = strip_tags($user);
		$user = $db->real_escape_string($user);
		$pwrd = strip_tags($pwrd);
		$pwrd = $db->real_escape_string($pwrd);
		//$pwrd = md5($pwrd);
		$query = $db->query("SELECT user_id, username FROM user WHERE username='$user' AND password='$pwrd'");
		if($query->num_rows===1){
			while($row = $query-> fetch_object()){
				$_SESSION['user_id'] = $row->user_id;
			}
		header('Location: index.php');
		exit();

		}else{
			echo "Missing Information";
		}

	}

}
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
</head>
<body>

<div id="container">
	<form action="login.php" method="post">
		<p>
		<label>Username</label><input type="text" name="username" />
		</p>
		<p>
		<label>Password</label><input type="password" name="pwrd" />
		</p>
		<input type="submit" name="submit" value="LogIn" />
	</form>
</div>
</body>
</html> -->
<!DOCTYPE HTML>
<html>
<head>
	<title>Awkward Hug Club: An Adventure in Satire. Flat Bootstarp  Responsive Web Template | Home :: w3layouts</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel='stylesheet' href="css/loginstyle.css"/>
	<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/login.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

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
						<li><a href="index.html">HOME</a></li>						
						<li><a href="contact.html">CONTACT</a></li>	
						<li><a href="about.html">ABOUT</a></li>
						<li class="active"><a href="login.html">SUBMIT</a></li>
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
			 <h2>Where Happiness Finds Solace</h2>
		 </div>
		 <div class="banner-links">
			 <ul>
				 <li class="active"><a href="#">This Month</a></li>
				 <li><a href="index.html">Last Month</a></li>
				 <li><a href="index.html">Cretaceous Period</a></li>
				 <div class="clearfix"></div>
			 </ul>
		 </div>
	 </div>
</div>
<!---//End-banner---->

<div id="container">
	<form action="login.php" method="post">
		<p>
		<label>Username</label><input type="text" name="username" />
		</p>
		<p>
		<label>Password</label><input type="password" name="pwrd" />
		</p>
		<input type="submit" name="submit" value="LogIn" />
	</form>
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
		 <div class="col-md-4 fotter-media">
				<h3>FOLLOW US ON....</h3>
				 <div class="social-icons">
				 <a href="https://www.facebook.com/awkwardhugclub/"><span class="fb"> </span></a>
				 <a href="#"><span class="twt"> </span></a>
				 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<!---->
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

</body>
</html>
