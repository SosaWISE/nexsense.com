<?php $title="contact us | nexsense"; ?>
<?php include('header.php');?>
	<div class="hero-mini"></div>
	<div class="contact-us">
		<div class="container">
			<div class="row">
				<div class="contact-intro col-xs-12">
					<h1>Contact Us</h1>
					<p>Technology is only as good as the people behind it. And being there for your questions, concerns, and comments is a job we take a lot of pride in.</p>
				</div>
			</div>
			<div class="row">
				<div class="address-info col-xs-12 col-md-6">
					<div>
						<h2>Address</h2>
						<h4>Nexsense</h4>
						<p>722 East Technology Ave<br>Building E, ste. 1100<br>Orem, UT 84097</p>
						<p>1.800.466.6397</p>
					</div>
					<div>
						<h2>Billing</h2>
						<p><a href="mailto:billing@nexsense.com">billing@nexsense.com</a><br>385.375.8150</p>
					</div>
					<div>
						<h2>Sales</h2>
						<p><a href="mailto:sales@nexsense.com">sales@nexsense.com</a><br>385.375.8120</p>
					</div>
					<div>
						<h2>Customer Service<br>&amp; Technical Support</h2>
						<p><a href="mailto:support@nexsense.com">support@nexsense.com</a><br>385.375.8150</p>
					</div>
				</div>
				<div class="get-in-touch col-xs-12 col-md-6">
					<h2>Get in touch</h2>
					<p>We'd love to hear from you. Fill out the form below, and we'll respond in 24 hours or less.</p>
					<form id="contact-form" class="contact-form" role="form">
						<div class="form-group">
							<label class="hide" for="name">Name*</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
						</div>
						<div class="form-group">
							<label class="hide" for="email">Email*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
						</div>
						<div class="form-group">
							<select class="form-control" name="department" required>
								<option value="">Select a department*</option>
								<option value="billing@nexsense.com">Billing</option>
								<option value="sales@nexsense.com">Sales</option>
								<option value="support@nexsense.com">Customer Service &amp; Technical Support</option>
							</select>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group" style="display: none;">
							<label class="hide" for="age">Age (If you are human... do not fill out this field!)</label>
							<input type="text" class="form-control" id="age" name="age" placeholder="Age (If you are human... do not fill out this field!)">
						</div>
						<div class="form-group">
							<button type="submit" id="submit" class="btn btn-secondary">Submit <i></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('[rel="contact-us"]').addClass('current');

			$('#contact-form').validate({
				submitHandler: function(form) {
					$.ajax({
						type: 'post',
						url: 'contact-engine.php',
						data: $('#contact-form').serialize(),
						success: function() {
							$('#contact-form').html("<p>Your email has been successfully sent.</p>")
						},
						error: function() {
							$('#contact-form').html("<p>There was an error sending this form. Please refresh the page and try again, or send an email directly to support@nexsense.com.</p>")
						}
					});
				}
			});
		});
	</script>
<?php include('footer.php');?>