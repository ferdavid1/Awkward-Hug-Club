<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('../includes/db_connect.php');
if(!isset($_SESSION['user_id'])){
header('Location: login.php');
	exit();
}
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if(isset($_POST['submit'])){
    //get the blog data
    $title = $_POST['title'];
    $body = $_POST['body'];
    $category = $_POST['category'];
    $title = $db->real_escape_string($title);
   	$body = $db->real_escape_string($body);
    $user_id = $_SESSION['user_id'];
    $date = date('Y-m-d G:i:s');
    $body = htmlentities($body);
    $text = $_POST['text'];
    #$target = "post_images/";
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	#echo getcwd();
    if($title && $body && $category){
        $query = $db->query("INSERT INTO posts(user_id, title, body, category_id, posted, image_id, image, caption) VALUES ('$user_id', '$title', '$body', '$category', '$date', '1', '{$image}', '{$text}')");
    	if($query) {
            echo "Post Added";
		}else{
			echo "Image Database error";
		} 
	 	#if(move_uploaded_file($_FILES['image']['tmp_name'], $target.$image)){
	 		#echo "Image uploaded locally";
		#}else{
			#echo "Error uploading image";
		#}
	}else {
        echo "Missing information";
    }
    
}
?>

<!DOCTYPE html>
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
						<li><a href="../index.php">HOME</a></li>						
						<li><a href="contact.html">CONTACT</a></li>	
						<li><a href="about.html">ABOUT</a></li>	
						<li class="active"><a href="submit.php">SUBMIT</a></li>
						<div class="clearfix"> </div>
				 </ul>
			 </div>
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
			 <h2>New Story</h2>
		 </div>		
	 </div>
</div>
<!---//End-banner---->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
	            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
	               <!-- Blog Post -->

                    <!-- Title -->
                    <p>
                    <label></label><input type="text" name="title" />
                    </p>
                    <!-- Author -->
                    <p class="lead">
                        by <a href="#">Anonymous</a>
                    </p>
                    <p> 
                    <label for="body">Body:</label>
                    </p>
                    <textarea name="body" cols=50 rows=10></textarea>
                    <p>
                    <label> Category:</label>
                    <select name="category">
	                    <?php
	                        $query = $db->query("SELECT * FROM categories");
	                        while($row = $query->fetch_object()) {
	                            echo "<option value='".$row->category_id."'>".$row->category."</option>";
	                        }
	                    ?>
		            </select>
		            </p>
		            <input value="1000000" name="size" type="hidden"/>
                	<input type="file" name="image"/>
                	<textarea name = "text" cols = "10" rows="1" placeholder="Caption this!"></textarea>
                	<!-- <input type="submit" name="upload" value = "Upload Image">
                	 -->
                	<hr>
		            <input type="submit" name="submit" value="Submit" />
		            <hr>          
	            </form> 
	        </div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	           
                <!-- Preview Image -->
                
              <!--  <script>
                $(document).on('ready', function() {
                    $("#input-4").fileinput({showCaption: false});
                });
                </script>

				<div class="col-md-6 contact-right">
        				<h3>Post To...</h3>
        				 	<div class="social-icons">
		        				 <a href="fblogin.html"><span class="fb"> </span></a>
		        				 <a href="#"><span class="twt"> </span></a>
        				 </div>
        			 </div>    
					 <div class="clearfix"></div>
			</p>
			
				
		 </div> -->
                <!-- Post to FB --> 


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
                      
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


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
           
            

                
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

