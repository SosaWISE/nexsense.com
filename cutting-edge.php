<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Wireless infrared camera technology lets you check on your home when you can't be there. Call for your free wireless infrared camera quote." />
	<meta name="keywords" content="Nexsense, home security, alarm system, home automation, home management, home control, smart home" />
	<title>Cutting Edge Security | Nexsense</title>

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>


		<div class="product-sub cutting-edge">
			<div class="intro">
				<div class="container">
					<div class="row">
						<div class="intro-copy col-xs-12 col-md-6">
							<h2>Cutting edge that actually gives you an edge.</h2>
							<p>We don’t develop great technology because we like gadgets. We do it because it should make your life simpler, keep you safer, and let you do more. From infrared, motion activated cameras to smoke detectors that dial up the fire department when you’re gone, we’re constantly looking for what’s next.</p>
						</div>
						<div class="intro-photo col-xs-12 col-md-6">
							<img class="photo" src="assets/images/woman-and-man.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="home-shot"></div>
			<div class="product-shot">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img class="product-photo" src="assets/images/product-camera.png" />
						</div>
						<div class="col-md-6">
							<blockquote>Like eyes in the back of your head</blockquote>
							<p>Our motion activated, infrared cameras give you everything you need to check in on your home from anywhere. Daylight, low light, they shoot in 720 HD, so you don’t have to worry about grainy images or mistaking your teenage son for the neighbor’s cat.</p>
							<div class="cta">
								<a href="choose-your-system" class="btn btn-default">Learn More <i></i></a>
								<a class="btn btn-secondary" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('[rel="nexsense-system"]').addClass('current');
			});
		</script>
		<?php include('templates/footer.php');?>
	</div>
</body>
</html>