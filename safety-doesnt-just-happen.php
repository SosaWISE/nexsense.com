<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="The Nexsense home automation app allows you to control what's happening in your home while you're away from home. Get your free quote today." />
	<meta name="keywords" content="Nexsense, home security, alarm system, home automation, home management, home control, smart home" />
	<title>Home and family safety | Nexsense</title>

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>


		<div class="product-sub safety-doesnt-just-happen">
			<div class="intro">
				<div class="container">
					<div class="row">
						<div class="intro-copy col-xs-12 col-md-6">
							<h2>A safer home is a smarter home.</h2>
							<p>Keeping your family safe takes technology that anticipates, adjusts, and automates in tune with your life. From simple door sensors to motion and smoke detectors, Nexsense security can keep your family and home safe without being annoying and without locking you down.</p>
						</div>
						<div class="intro-photo col-xs-12 col-md-6">
							<img class="photo" src="assets/images/woman-with-child.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="home-shot"></div>
			<div class="product-shot">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img class="product-photo" src="assets/images/product-panel.png" />
						</div>
						<div class="col-md-6">
							<blockquote>For a home as comfortable as it is simple.</blockquote>
							<p>Cooler in the daytime, warmer at night, or maybe vice versa. However you like your temperature, control it from your phone. And that’s just the beginning. With the Nexsense App, you can control virtually all the appliances in your home from anywhere—even from your bed.</p>
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