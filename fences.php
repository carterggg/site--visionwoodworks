<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','carterthedesigner@gmail.com');
	define('MESSAGE_SUBJECT','Graphic and Web Design');
	define('REPLY_TO', 'carterthedesigner@gmail.com');
	define('FROM_ADDRESS', 'carterthedesigner@gmail.com');
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

<title>Vision Woodworks | Fences</title>
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
	


	<div class="row">
	
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
					<li class="main-nav-style"><a href="about.html" title="carterguthrie.com home">ABOUT</a></li>
					<br>
					<li class="main-nav-style"><a href="decks.html" title="carterguthrie.com graphic design">DECKS</a></li> 				<br>
					<li class="main-nav-style"><a href="fences.html" title="carterguthrie.com web design">FENCES</a></li>
					<br>
					<li class="main-nav-style"><a href="arbors.html" title="carterguthrie.com photo and video">ARBORS</a></li>
					<br>
					<li class="main-nav-style"><a href="hardscape.html" title="carterguthrie.com boltz on board">HARDSCAPE</a></li>
					<br>
					<li class="main-nav-style"><a href="interiorremodel.html" title="carterguthrie.com imminent radio">INTERIOR<br>&nbsp;&nbsp;REMODEL</a></li>
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
				<a href="index.html" title="Vision Woodworks"><img src="images/layout/logo.jpg" alt="Vision Woodworks" class="img-responsive align-center" width="400px"></a>
				<br class="hidden-xs"><br class="hidden-sm hidden-md hidden-lg"><br>
				<h1 class="align-center">FENCE WORK</h1>
			
	<!-- Gallery -->			
				<div class="row">
					<div class="col-xs-12">
						<div id="links-designs">
						
							<a href="images/fences/fence1.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence1.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence2.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence2.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence3.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence3.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence4.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence4.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence5.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence5.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence6.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence6.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence7.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence7.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence8.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence8.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
							<a href="images/fences/fence9.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence9.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence10.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence10.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence11.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence11.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence12.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence12.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence13.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence13.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence14.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence14.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence15.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence15.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence16.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence16.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						<a href="images/fences/fence17.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence17.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence18.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence18.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence19.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence19.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence20.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence20.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence21.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence21.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence22.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence22.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence23.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence23.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence24.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence24.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence25.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence25.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence26.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence26.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence27.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence27.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence28.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence28.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence29.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence29.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence30.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence30.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence31.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence31.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence32.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence32.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence33.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence33.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence34.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence34.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence35.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence35.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence36.png" title="Vision Woodworks" data-gallery><img src="images/fences/fence36.png" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence37.png" title="Vision Woodworks" data-gallery><img src="images/fences/fence37.png" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence38.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence38.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence39.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence39.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence40.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence40.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence41.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence41.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence42.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence42.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence43.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence43.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence44.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence44.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence45.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence45.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence46.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence46.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence47.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence47.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence48.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence48.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence49.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence49.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>
    						
    						<a href="images/fences/fence50.jpg" title="Vision Woodworks" data-gallery><img src="images/fences/fence50.jpg" width="325" alt="Vision Woodworks" class="no-border">
    						</a>

    							
	
    							

   								

    
						</div><!--END OF Links -->
					</div>
				</div>
			
			
	<!-- Reviews -->
		<div class="row">
		  <div class="col-xs-1 hidden-sm hidden-md hidden-lg"></div>
			<div class="col-xs-12">
				<br><br>
				<h1 class="align-center">REVIEWS:</h1>
				  <br>
			</div>
				  	
				<div class="col-xs-10 col-sm-6">	
					<div class="review-box">
						<h3 class="black-text">"We are extremely satisfied with Mike's work on a fence for our yard, and we are planning to work with him on more projects for our home. Very professional, highly recommend him."
							<br> - Bill B.
						</h3>
					</div>
							
					<br>
											
					<div class="review-box">
						<h3 class="black-text">"We hired Mike to put up a 6ft wood privacy fence around our yard (130 linear feet). Mike did a great job (and quickly) for a very reasonable price. I would certainly not hesitate to recommend Mike, and will consider him for future jobs."
							<br> - Brandon J.
						</h3>
					</div>
							
					<br>
											
					<div class="review-box">
						<h3 class="black-text">"Fenced in our backyard. Very quick, responsive, efficient, professional and reasonable. Would definitely use again."
							<br> - Hayley B.
						</h3>
					</div>	
					
					<br>
											
					<div class="review-box">
						<h3 class="black-text">"Mike came out to my house after normal business hours which was great. He spent time listening to my ideas and had a few himself that he shared which we did add to the project. His knowledge and craftsmanship speaks volumes. My wife and I could not be happier with the work he did. We had an extension of our patio installed that required some tough work. We are looking forward to many nights enjoying the new addition to our back yard! Highly recommend Vision Wood Works!"
							<br> - Greg H.
						</h3>
					</div>	
			</div>
			
	<!-- -->		
			<div class="col-xs-10 col-sm-6">											
					<div class="review-box">
						<h3 class="black-text">"Excellent work! Timely and precise. Built us a great looking wooden privacy fence around our backyard. I would definitely recommend Vision Wood Works."
							<br> - Chad W.
						</h3>
					</div>
							
					<br>
											
					<div class="review-box">
						<h3 class="black-text">"Mike did a excellent job on our fence and had a fair price. We will be hiring him again to do our deck."
							<br> - April N.
						</h3>
					</div>	
					
					<br>
					
					<div class="review-box">
						<h3 class="black-text">"Mike, went above and beyond my expectations. He did not just built a beautiful fence and deck for me but also saved me money. He was the middle man by communicating with my straight lace conservative neighbors. The neighbors and I even agreed on a style of fence we both liked and split the cost of the fence that separates our yard. I have more projects for Mike in the future and I have referred Mike to several friends and family members. Great and Honest Guy! Thanks Again Mike Struble.
							<br> - Lala
						</h3>
					</div>															
									
			</div>
					
			
			</div>
		</div>		
			
					

<!-- Services -->

	<div class="row">
		<div class="col-xs-12">
		   <br><br><br><br>
			<h1 class="align-center">CONTACT US:</h1>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<?php include('inc/form.php'); ?>
				</div>
				<div class="col-xs-12 col-sm-6">
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
