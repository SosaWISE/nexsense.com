<?php $title="choose your system | nexsense"; ?>
<?php include('header.php');?>
	<div class="choose-your-system">
		<div class="hero-mini extended">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="options-section">
			<div class="container">
				<div class="row">
					<div class="choose-your-system-intro text-center col-xs-12">
						<h1>Explore your options</h1>
						<p>There’s a right solution for every home.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="options-intro">
							<span class="system-icons total-control"></span>
							<h2><j class="caret-toggle"></j> Total Control</h2>
							<span class="price-block" data-toggle="modal" data-target="#get-quote">$49.99 a Month<br>$199 Activation</span>
							<p>Lights, cameras, heating, and more— control your entire home from anywhere with the touch of a button.</p>
						</div>
						<span class="what-you-get-toggle"></span>
						<div class="what-you-get slide" style="display: none;">
							<p>In addition to protecting your home with wireless security, Nexsense Total Control lets you build a complete home automation solution with all the bells and whistles you’ll ever need. Customize your home with HD cameras, remote door lock/unlock, lighting and temperature control, and so much more.</p>
							<ul>
								<li>2GIG Monitoring Panel</li>
								<li>3 – Door Sensors</li>
								<li>1 – Motion Detector</li>
								<li>1 – Smoke &amp; Heat Detector</li>
								<li>1 – Key Fob</li>
								<li>Lifetime Warranty</li>
								<li>24/7 Monitoring</li>
								<li>Cellular Technology</li>
								<li>MySense App *†</li>
								<li>Wireless HD Cameras *†</li>
								<li>NexSense Home Automation Control *†</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="options-intro">
							<span class="system-icons safe-home"></span>
							<h2><j class="caret-toggle"></j> Safe Home</h2>
							<span class="price-block" data-toggle="modal" data-target="#get-quote">$49.99 a Month<br>$69 Activation</span>
							<p>Everything you need to keep your home safe and sound and the ability to control it all from your phone.</p>
						</div>
						<span class="what-you-get-toggle"><j></j> what you get</span>
						<div class="what-you-get slide" style="display: none;">
							<p>Our basic package isn’t really that basic. It’s completely wireless, backed up by cellular technology, and it gives you instant, anywhere access to your system from your smart phone.</p>
							<ul>
								<li>2GIG Monitoring Panel</li>
								<li>3 – Door Sensors</li>
								<li>1 – Motion Detector</li>
								<li>1 – Smoke &amp; Heat Detector</li>
								<li>1 – Key Fob</li>
								<li>Lifetime Warranty</li>
								<li>24/7 Monitoring</li>
								<li>Cellular Technology</li>
								<li>MySense App *†</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="options-intro">
							<span class="system-icons hard-wired"></span>
							<h2><j class="caret-toggle"></j> Hard-Wired Plus</h2>
							<span class="price-block" data-toggle="modal" data-target="#get-quote">$39.99 a Month<br>$69 Activation</span>
							<p>We’ll update your existing hardwired system with a new panel and wireless components.</p>
						</div>
						<span class="what-you-get-toggle"></span>
						<div class="what-you-get slide" style="display: none;">
							<p>While cellular security definitely has its benefits, sometimes that hardwired system that came with your house will do the trick. We’ll upgrade it with a Nexsense panel, wireless components, and a brand new lifetime warranty.</p>
							<ul>
								<li>2GIG Monitoring Panel</li>
								<li>3 – Door Sensors</li>
								<li>1 – Motion Detector</li>
								<li>1 – Smoke &amp; Heat Detector</li>
								<li>1 – Key Fob</li>
								<li>Lifetime Warranty</li>
								<li>24/7 Monitoring</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid add-ons slide">
				<div class="row-fluid">
					<div class="col-xs-10 col-xs-offset-1">
						<h2>Endless possibilities</h2>
						<p>With Nexsense, you can add, swap, or mix-and-match the technology you need to build a home protection system that fits your home. You can enjoy all the bells and whistles you want, including cameras, lighting control, door locks, and more.</p>
					</div>
				</div>
			</div>
			<div class="container add-ons-info slide">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<ul>
							<li>MySense App *</li>
							<li>Video Camera *†</li>
							<li>Automated Door Locks *†</li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4">
						<ul>
							<li>Small Appliance &amp; Lighting Control *†</li>
							<li>Temperature Control *†</li>
							<li>Medical Pendant *†</li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4">
						<ul>
							<li style="border-bottom: none;">* Require Cellular Technology</li>
							<li style="border-bottom: none;">† Can be exchanged or added to your home protection system.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container add-ons-info slide">
				<div class="row">
					<div class="get-started col-xs-12">
						<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('[rel="choose-your-system"]').addClass('current');
			$('.what-you-get-toggle').on('click', function(e) {
				$('j').toggleClass('active');
				$('.slide').slideToggle();
			});
			$('.options-intro h2').on('click', function(e) {
				$(this).find('j').toggleClass('active');
				$(this).parent().siblings('.slide').slideToggle();
			});
		});
	</script>
<?php include('footer.php');?>