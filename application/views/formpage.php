<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teknologi Informasi ITS Surabaya</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js">
		 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //Meta-Tags -->
		<!-- Custom-Stylesheet-Links -->
		<!-- Bootstrap-CSS --> <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- Font-awesome-CSS --> <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
		<!-- Index-Page-CSS --><link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- //Custom-Stylesheet-Links -->
		<!--web-fonts-->
		<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
		<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<!--//web-fonts-->
		<!--//fonts-->
		<!-- js -->
    </head>
    <body >
	<!-- banner -->
<div class="banner inner-banner-w3-agileits" id="home">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="index.html">ITS<span>Teknologi Informasi</span></a></h1>

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
				<?php include 'navbar.php'; ?>
			</nav>
				<h2 class="inner-tittle-w3layouts">Contact</h2>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts">Get in touch</h3>
			<div class="agile_banner_bottom_grids">
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right agilew3_contact">
						<h4>Alamat</h4>
						<p>Gedung Teknologi Informasi, ITS-Surabaya</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left agileits_w3layouts_left">
						<i class="fa fa-mobile" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right agileits_w3layouts_right">
						<h4>Telepon</h4>
						<p>+00 097 338 004<span>+00 505 222 606</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left ">
						 <i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right ">
						<h4>Email</h4>
						<p><a href="mailto:teknologi.informasi@its.ac.id">teknologi.informasi@its.ac.id</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>

<!-- //contact -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Contact Us</h2> Got a question ? Feedback? Awesome!
                    <p> Send your message in the form below and we will get back to you as early as possible. </p>
                    <form role="form" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name"> Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="name"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>
                        <div class="row" style="margin-bottom:30px;">
                            <div class="col-sm-5">
                                <img src="captcha.php" id="captcha_image"/>
                                <br/>
                                <a id="captcha_reload" href="#">reload</a>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Enter the code from the image here:</label>
                                <input type="text" class="form-control" required id="captcha" name="captcha" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Post It! &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
		<div class="map-agileits">

		<iframe src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=-7.278563, 112.790518&q=Institut%20Teknologi%20Sepuluh%20Nopember+(Teknologi%20Infomasi)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
		</div>

	<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h6><a href="index.html">Scholar Vision</a></h6>
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
						<li><a href="blog.html">Blog</a></li>
						<li><a href="formpage.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Contact Info</h3>
					<p>Virginia, USA</p>
					<p>+0 097 338 004</p>
					<p>El Montee RV, Sterling USA</p>
					<p><a href="mailto:info@example.com">mail@example.com</a></p>
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


<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<!--search-bar-->
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!--//search-bar-->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
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
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->

    </body>
</html>
