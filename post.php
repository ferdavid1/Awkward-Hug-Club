<?php
ob_start();
if(!isset($_GET['id'])){
	header('Location: index.php');
	exit();
}else{
	$id = $_GET['id'];
}
include('includes/db_connect.php');
if(!is_numeric($id)){
	header('Location: index.php');
}
$sql = "SELECT title, body, image, caption FROM posts WHERE post_id = '$id'";
$query = $db -> query($sql);
if($query->num_rows !=1){
	header['Location: index.php'];
	exit();
}
ob_end_clean();
//header("Content-Type: image/jpeg");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>The Awkward Hug Club</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" contest="IE=9" /> 
    <?php echo '<script language="javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>'?>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/loginstyle.css" rel='stylesheet' type='text/css' />
    <link href="css/blog-post.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <?php echo '<script language ="javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>' ?>
    <!----webfonts---->
        <link href="http://fonts.googleapis.com/css?family=Oswald:100,400,300,700" rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic" rel='stylesheet' type='text/css'>
        <!----//webfonts---->
        <?php echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>' ?>
        <!--end slider -->
                <!--script-->
<?php echo '<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>' ?>
<!--/script-->
<?php echo'<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $("html,body").animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>' ?>
<!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
<!--[endif]-->
</head>
<body>
<!---strat-banner---->
<div class="banner">                
     <div class="header">  
          <div class="container">
              <div class="logo">
               <!-- <a href="index.html"> <img src="images/logo.png" title="soup" /></a> -->
             </div>
             <!---start-top-nav---->
             <div class="top-menu">
                  <span class="menu"> </span> 
                   <ul>
                        <li class="active"><a href="index.php">HOME</a></li>                        
                        <li><a href="../blog/contact.html">CONTACT</a></li> 
                        <li><a href="../blog/about.html">ABOUT</a></li>
                        <li><a href="admin/login.php">SUBMIT</a></li>
                        <li><a href="admin/logout.php">LOGOUT</a></li>
                        <div class="clearfix"> </div>
                 </ul>
             </div>
             <div class="clearfix"></div>
                    <?php echo '<script language="javascript">
                    $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                    });
                    </script>' ?>
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
                        <div class="content-grid-info">
                            <?php 
                                $row = ($query->fetch_object());
                                echo "<h2>".$row->title."</h2>";
                                echo "<p>" .$row->body."</p>";
                            ?>
                            
                        </div>   
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

<?php 
    echo "<script language='javascript'>
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
</script>"; ?>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> 
<a href="googleanalytics.html"></a>"

</body>
</html>