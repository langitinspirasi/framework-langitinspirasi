<?php
	/**
     * @Author  : Langit Inspirasi <web@langitinspirasi.co.id>
     * @Date    : 26/05/17 - 3:06 AM
	 * @Phone   : 0856-2555-665
	 *
	 * @Warning : Please don't delete this notes !
    */
	
    $hal = (isset($_GET['hal']) && $_GET['hal']) ? $_GET['hal'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>.:: LANGIT INSPIRASI FRAMEWORK ::.</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Framework Langit Inspirasi Responsive Web, Bootstrap Web Langit Inspirasi Framework, Flat Web Langit Inspirasi Framework, 
Smartphone Framework Langit Inspirasi, Yosef Murya, YM Kusuma Ardhana, Yosef Murya Kusuma Ardhana" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!--navigation-->
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>					
					<a href="index.php"> <img style="padding-top:10px; padding-bottom:10px " src="resource/images/langitinspirasi.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav link-effect-7" id="link-effect-7">
							<li class="active"><a href="<?php echo SITE_URL; ?>" <?php if($hal=="" || $hal=="home") ?> data-hover="Home">Home</a></li>							
							<li><a href="<?php echo SITE_URL; ?>?hal=AboutUs" data-hover="About Us">About Us</a></li>							
							<li><a href="<?php echo SITE_URL; ?>?hal=Contact" data-hover="Contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>	
	</div>	
<!--navigation-->

<!-- steps -->
	<div class="steps">
		<div class="container">
			<h3 class="head">Langit Inspirasi Framework</h3>
			<p class="urna">[ code your life with your style ]</p>
			<div class="wthree_steps_grids">
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Mudah</h4>
					<p>Mudah digunakan untuk membuat website dengan teknik OOP.</p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1 wthree_steps_grid1_after">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
						</div>
					</div>
					<h4>MVC</h4>
					<p>Model-View-Controller menjadi dasar dari Framework Langit Inspirasi.</p>
				</div>
				<div class="col-md-4 wthree_steps_grid">
					<div class="wthree_steps_grid1">
						<div class="wthree_steps_grid1_sub">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
					</div>
					<h4>Gratis</h4>
					<p>Framework Langit Inspirasi disediakan untuk para developer dan programmer muda.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //steps -->
<!-- count-down -->
	<div class="count">
		<div class="container">
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">79</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Pengembang Kreatif</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">225</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Pengguna Aktif</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">200</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Penyuka Framework</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">80</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Hemat Pengeluaran</h3>
			</div>
			<div class="clearfix"> </div>
				<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<script src="assets/js/waypoints.min.js"></script> 
					<script src="assets/js/counterup.min.js"></script> 
					<script>
						jQuery(document).ready(function( $ ) {
							$('.counter').counterUp({
								delay: 20,
								time: 1000
							});
						});
					</script>
				<!-- //Starts-Number-Scroller-Animation-JavaScript -->
		</div>
	</div>
<!-- //count-down -->

<!-- for bootstrap working -->
	<script src="assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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
</body>
</html>