<?php

$link = mysqli_connect("localhost", "root", "", "db_carousel");
if(!$link){
	die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

$query = "SELECT * FROM gallery";
$result = mysqli_query($link,$query);
if(!$result){
	die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Teknologi Informasi ITS Surabaya</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- gallery-css --><link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
<div class="banner inner-banner-w3-agileits" id="home">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="index.html">ITS<span>Teknologi Informasi</span></span></a></h1>
		
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
							<li><a href="index.html" data-hover="Home">Home</a></li>
							<li><a href="about.html" data-hover="About Us">About Us</a></li>
							<li class="active"><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
							<li><a href="blog.php" data-hover="Blog">Blog</a></li>
							<li><a href="formpage.html" data-hover="Mail Us">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
				<h2 class="inner-tittle-w3layouts">Gallery</h2>
		</div>
	</div>
</div>

	<div class="welcome">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts">Our <span class="green-w3">Gallery</span></h3>
			<?php while($row=mysqli_fetch_assoc($result)) { ?>
			<div class="w3layouts_gallery_grids">	
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="img/<?php echo $row['gambar']?>" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="img/<?php echo $row['gambar'] ?>" alt="image" class="img-responsive">
							<!-- <img src="<?php //echo $path . $img ?>" alt="" / class="img-responsive"> -->
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Our Gallery</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //gallery -->
<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h6><a href="index.html">Teknologi Informasi</a></h6>
					<p class="footer-one-w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. </p>
					<div class="top-header-agile-right">
						<ul>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-2 footer-grids w3l-agileits">
					<h3>Footer Menu</h3>					
					<ul class="b-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html" >About us</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="formpage.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Contact Info</h3>
					<p>Surabaya, Indonesia</p>
					<p>+0 097 338 004</p>
					<p>Gedung Teknologi Informasi, ITS-Surabaya</p>
					<p><a href="mailto:teknologi.informasi@its.ac.id">teknologi.informasi@its.ac.id</a></p>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">	
					<h3>Newsletter</h3>
					<p>It was popularised in the 1960s with the release Ipsum. <p>
					 <form action="#" method="post">		 
							<input type="email" class="text" required="" />
							<input type="submit" value="Go" />					 
				     </form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//footer-->	
<!-- copy-right -->
			<div class="copyright-wthree">
				<p>&copy; 2017 All Rights Reserved</p>
				<p style="color:black;"> Design by <a style="color:black;" href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //copy-right -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>


 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>