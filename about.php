<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','visionwoodworksllc@gmail.com');
	define('MESSAGE_SUBJECT','Vision Woodworks Website Email');
	define('REPLY_TO', 'visionwoodworksllc@gmail.com');
	define('FROM_ADDRESS', 'visionwoodworksllc@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="">
<meta name="keywords" content=""/>
<meta name="author" content="Carter Guthrie carterguthrie.com">

<title>Vision Woodworks | About</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
<!-- LIGHTBOX links -->
<link rel="stylesheet" href="styles/css/blueimp-gallery.css">
<link rel="stylesheet" href="styles/css/bootstrap-image-gallery.css">
<!-- END OF LIGHTBOX links -->

</head>

<body>
<!-- LIGHTBOX controls -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                     
                    </button>
                    <button type="button" class="btn btn-primary next">
                        
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF LIGHTBOX controls -->

<!-- Website content -->

<div class="container-fluid">
	
<!-- Row: mobile nav -->
	<div class="row">
		<div class="col-xs-12 hidden-md hidden-lg">
		   <br>
			<img src="images/layout/menu-icon2.png" class="toggle no-border" width="55px" align="right" alt="carterguthrie.com menu icon">
  	  	
   				<nav class="mobile-nav toggle-info">
   					<ul> <br><br><br>
   						<li class="main-nav-style mobile-main-nav"><a href="index.php" title="carterguthrie.com home">HOME</a></li>
					<br>
					
					<li class="main-nav-style mobile-main-nav"><a href="about.php" title="carterguthrie.com graphic design">ABOUT</a></li> 
									<br>
					<li class="main-nav-style mobile-main-nav"><a href="decks.php" title="carterguthrie.com web design">DECKS</a></li>
					
					<br>
					<li class="main-nav-style mobile-main-nav"><a href="fences.php" title="carterguthrie.com photo and video">FENCES</a></li>
					
					<br>
					<li class="main-nav-style mobile-main-nav"><a href="arbors.php" title="carterguthrie.com boltz on board">ARBORS</a></li>
					
					<br>
					<li class="main-nav-style mobile-main-nav"><a href="hardscape.php" title="carterguthrie.com imminent radio">HARDSCAPE</a></li>
					
					<br>
					<li class="main-nav-style mobile-main-nav"><a href="interiorremodel.php" title="carterguthrie.com etc designs">INTERIOR REMODEL</a></li>
					
					<br><br>
					<li class="main-nav-style mobile-main-nav"><a href="contact.php" title="carterguthrie.com about">CONTACT</a></li>
					
   					</ul>
   			</nav>
   			<br><br>			
		</div>
	</div>
	


	<div class="row hidden-xs">
		<div class="col-xs-12 col-sm-2">
		  <br>	
			<a href="https://www.thumbtack.com/nc/matthews/yard-fencing-companies/" id="thumbtack-medallion" target="_blank"><img src="https://static.thumbtack.com/media/widgets/featured-pro.png" alt="Thumbtack Best Pro of 2015" class="no-border"></a><script src="https://static.thumbtack.com/media/widgets/medallion-links.js"></script>
			</div>
			
		<div class="col-xs-12 col-sm-8"></div>
		
		<div class="col-xs-12 col-sm-2">
			<h2><a href="contact.php" title="Get A Quote">GET A QUOTE</a></h2>
			<img src="images/layout/hammertime.gif" alt="Get A Quote" class="img-responsive no-border align-center" width="100px">
		</div>
	</div>		

	
<!-- Row: Navigation -->
	
	<div class="row">
		
		<div class="hidden-xs hidden-sm col-md-2">
		
			<nav class="fixed-nav">
				<ul>
					<li class="main-nav-style"><a href="about.php" title="carterguthrie.com home">ABOUT</a></li>
					<br>
					<li class="main-nav-style"><a href="decks.php" title="carterguthrie.com graphic design">DECKS</a></li> 				<br>
					<li class="main-nav-style"><a href="fences.php" title="carterguthrie.com web design">FENCES</a></li>
					<br>
					<li class="main-nav-style"><a href="arbors.php" title="carterguthrie.com photo and video">ARBORS</a></li>
					<br>
					<li class="main-nav-style"><a href="hardscape.php" title="carterguthrie.com boltz on board">HARDSCAPE</a></li>
					<br>
					<li class="main-nav-style"><a href="interiorremodel.php" title="carterguthrie.com imminent radio">INTERIOR<br>&nbsp;&nbsp;REMODEL</a></li>
					<br>
					<li class="main-nav-style"><a href="contact.php" title="carterguthrie.com boltz on board">CONTACT</a></li>
					

				</ul>
						  		
					<a href="https://www.facebook.com/carterthedesigner" title="carter guthrie facebook" target="_blank"><img src="images/layout/fb2.png" onmouseover="this.src='images/layout/fb.png'" onmouseout="this.src='images/layout/fb2.png'" alt="Facebook: Carter Guthrie" width="40px" class="img-responsive align-center floated-left move"></a>
			</nav>
		<br><br><br>
		</div>
						
<!-- Row: Graphic -->
	

		<div class="col-xs-12 col-sm-12 col-md-9">
			<!-- Header -->
					  <br>
				<a href="index.php" title="Vision Woodworks"><img src="images/layout/logo.jpg" alt="Vision Woodworks" class="img-responsive align-center" width="400px"></a>
				<br class="hidden-xs"><br class="hidden-sm hidden-md hidden-lg"><br>
				<h1 class="align-center">ABOUT VISION WOODWORKS</h1>
					<br>
			
	<!-- Gallery -->			
				<div class="row">
					<div class="col-xs-12 review-box">
					 <br><br>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<img src="images/layout/about.jpg" alt="Vision Woodworks" class="img-responsive align-center">
							</div>
							<div class="col-xs-12 col-sm-6 about-info">
								<p><strong>Welcome to Vision WoodWorks!</strong> We are a locally family-owned and operated business here in the Charlotte area. For nearly 15 years, Vision WoodWorks has been turning visions into a reality for thousands of homes, families and businesses across the area.</p>
								
								<p>Incorporated in 2002, we too started with a vision that became something we are incredibly proud of today, but not without a lot of hard work, many prayers, and steadfast determination. Along with our Heavenly Father, my wife a three beautiful children are my priority, with my passion for building, designing and architecture a close second. Starting from the ground-up, we never lost sight of our vision and as we continued to grow, we were blessed beyond measure with the support of family and friends, industry professionals, and customers like you along the way.</p> 
							</div>
						</div>
								<br>
						 <div class="about-info">
						<p>God has blessed me with a company where I can design and build with integrity and dedication, and create a finished product that leaves my clients far more than just satisfied. <strong>Vision WoodWorks</strong> is a full-service construction company focused on building quality and maintaining a high level of customer satisfaction. The success of Vision WoodWorks has been built with dedicated personnel, quality products and expert installations. We strive to be the best and most respected contractor you’ll ever work with by providing the highest quality engineering, designs and installations at competitive, cost-effective prices. 
				<p class="align-center">Our goal is to turn each customer's vision into reality.<br> Give us a call today for a free, no-obligation estimate. We guarantee you’ll be glad you did!</p>
						</div>
							<br>
					</div>
				</div>
			
			
					

<!-- Services -->

	<div class="row">
		<div class="col-xs-12">
		   <br><br><br><br>
			<h1 class="align-center">Contact Us:</h1>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<?php include('inc/form.php'); ?>
				</div>
				<div class="col-xs-12 col-sm-6">
						<br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
					<img src="images/layout/hireus.png" class="img-responsive align-center no-border">			
				</div>
				
			</div>
			
				
				
				

			
		</div>
	</div>
	


		


		
<!-- footer row -->
		<div class="row">
			<div class="col-xs-12 align-center">
				<h3>Vision Woodworks 2002-2015 | 704-779-0734</h3>
			</div>
		</div>
		
	
	
	
		</div></div>

</div><!-- END OF Container-Fluid -->
<!-- END OF Website content -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>


	<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="js/bootstrap-image-gallery.js"></script>   
    
    
</body>
</html>
