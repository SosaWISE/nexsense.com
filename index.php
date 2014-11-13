<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Nexsense home automation and security products give you the peace of mind you deserve.  Get a free home automation and security quote." />
	<meta name="keywords" content="Nexsense, home security, alarm system, home automation, home management, home control, smart home" />
	<title>Nexsense | Ready for Next</title>

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>


		<?php include('templates/hero-slider.php');?>
		<div class="primary-section clearfix">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="built-to-fit col-xs-12 col-md-6">
						<div class="row">
							<div class="inner col-xs-10 col-xs-offset-1">
								<h2>Safety that fits like a glove</h2>
								<p>Safety solutions that match your home and your lifestyle.</p>
								<a href="choose-your-system" class="btn btn-default">Get started <i></i></a>
							</div>
						</div>
					</div>
					<div class="need-help col-xs-12 col-md-6">
						<div class="row">
							<div class="inner col-xs-10 col-xs-offset-1">
								<h2>Need help?</h2>
								<p>Questions? We’ve got answers.</p>
								<a href="customer-service" class="btn btn-default">Learn More <i></i></a>
							</div>
						</div>
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax parallax-swing text-center clearfix">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="inner col-xs-12">
						<h4>Peace of mind. When and where it matters most.</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="secondary-section text-center clearfix">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="how-we-compare corner-stripes-small inner col-xs-12 col-md-4">
						<h2>See how we stack up</h2>
						<a href="choose-your-system" class="btn btn-default">Get the details <i></i></a>
					</div>
					<div class="need-the-app inner col-xs-12 col-md-4">
						<h2>Need the app?</h2>
						<p><a href="https://play.google.com/store/apps/details?id=com.icontrol.telguard&hl=en"><img src="assets/images/app-store-google.png" /></a> <a href="https://itunes.apple.com/us/app/telguard-homecontrol/id720366311?mt=8"><img src="assets/images/app-store-apple.png" /></a></p>
					</div>
					<div class="explore-our-system corner-stripes-small inner col-xs-12 col-md-4">
						<h2>Explore our system</h2>
						<a href="nexsense-system" class="btn btn-default">Explore now <i></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax parallax-house text-center clearfix">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="inner col-xs-12">
						<h4>Don’t let distance come between you and your home.</h4>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('[rel="home"]').addClass('current');
			});
		</script>
		<?php include('templates/footer.php');?>
	</div>
</body>
</html>