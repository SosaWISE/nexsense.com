<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Mobile automation lets you tackle all you need to do in a day and still be in the know about what's happening at home. Get your free quote today." />
	<meta name="keywords" content="Nexsense, home security, alarm system, home automation, home management, home control, smart home" />
	<title>Home Control | Nexsense</title>

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>


		<div class="product-sub life-doesnt-stand-still">
			<div class="intro">
				<div class="container">
					<div class="row">
						<div class="intro-copy col-xs-12 col-md-6">
							<h2>Your life doesn’t stand still. So why should your home?</h2>
							<p>Control your home from anywhere with your Nexsense system. No programming, no hassle— just safety and simplicity right from your phone.</p>
						</div>
						<div class="intro-photo col-xs-12 col-md-6">
							<img class="photo" src="assets/images/woman-on-phone.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="home-shot"></div>
			<div class="product-shot">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img class="product-photo" src="assets/images/product-keypad.png" />
						</div>
						<div class="col-md-6">
							<blockquote>Safety in motion</blockquote>
							<p>Kids getting home from school? Forget to shut the garage door? Nexsense makes sure you’re home even when you can’t be. Turn your lights off and on, unlock your doors, and so much more with Nexsense home automation.</p>
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