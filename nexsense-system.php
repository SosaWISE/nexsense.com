<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('templates/head.php');?>

	<meta name="description" content="Nexsense offers safety solutions that match your home and your lifestyle." />
	<meta name="keywords" content="Nexsense, home security, alarm system, home automation, home management, home control" />
	<title>More than an alarm | Nexsense</title>

</head>
<body ng-app="Nexsense">
	<div class="main">
		<?php include('templates/header.php');?>


		<?php include('templates/hero-slider.php');?>
		<div class="nexsense-system">
			<div class="more-than-an-alarm clearfix">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="inner col-xs-10 col-xs-offset-1 text-center">
							<h1>More than an alarm.</h1>
							<p>Security, yes.</p>
							<p>But the Nexsense system is so much more. Control it from your phone. Monitor your house while you’re away. Arm it with the touch of a button from anywhere. We designed the Nexsense system to make things simple while keeping you safe. Here’s how.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="no-strings-attached clearfix">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="no-strings-attached-image col-md-6"></div>
						<div class="product-sub-section col-md-6">
							<div class="row">
								<div class="inner col-sm-10 col-sm-offset-1">
									<h2>Live with no strings attached.</h2>
									<p>You’re here. You’re there. You’re all over the place. With Nexsense, you get home security that fits the way you live—no matter where life takes you.</p>
									<a href="life-doesnt-stand-still" class="btn btn-default">Here's How <i></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="protects-your-family clearfix">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="protects-your-family-image col-md-6 col-md-push-6"></div>
						<div class="product-sub-section col-md-6 col-md-pull-6">
							<div class="row">
								<div class="inner col-sm-10 col-sm-offset-1">
									<h2>Protects your family the same way you would.</h2>
									<p>Home security should do more than just work. It should see what you can’t and hear what you don’t.</p>
									<a href="safety-doesnt-just-happen" class="btn btn-default">Learn More <i></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="now-youre-ready clearfix">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="now-youre-ready-image col-md-6"></div>
						<div class="product-sub-section col-md-6">
							<div class="row">
								<div class="inner col-sm-10 col-sm-offset-1">
									<h2>Now you’re ready for next.</h2>
									<p>Great technology is at its best when it gives you more control and peace of mind for whatever life throws your way.</p>
									<a href="cutting-edge" class="btn btn-default">Learn More <i></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('[rel="nexsense-system"]').addClass('current');
				$('html, body').animate({
					scrollTop: $('.more-than-an-alarm').offset().top
				}, 1000);
			});
		</script>
		<?php include('templates/footer.php');?>
	</div>
</body>
</html>