<?php include('header.php');?>
		<div class="hero-mini"></div>
		<div class="contact-section">
			<div class="container">
				<div class="row">
					<div class="contact-intro col-xs-12">
						<h1>contact us</h1>
						<p>Technology is only as good as the people behind it. And being there for your questions, concerns, and comments is a job we take a lot of pride in.</p>
					</div>
				</div>
				<div class="row">
					<div class="address-info col-xs-12 col-sm-6">
						<div>
							<h2>Address</h2>
							<h4>Nexsense | Head Office</h4>
							<p>722 East Technology Ave, Building E, ste. 1100<br>Orem, UT 84097</p>
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
					<div class="get-in-touch col-xs-12 col-sm-6">
						<h2>Get in touch</h2>
						<p>We'd love to hear from you. Fill out the form below, and we'll respond in 24 hours or less.</p>
						<form class="contact-form" role="form">
							<div class="form-group">
								<label class="hide" for="email">Your name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
							</div>
							<div class="form-group">
								<label class="hide" for="email">Your email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Your email">
							</div>
							<div class="form-group">
								<select class="form-control">
									<option>Select a department</option>
									<option>Billing</option>
									<option>Sales</option>
									<option>Customer Service &amp; Technical Support</option>
								</select>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<a class="btn btn-default">Submit <i></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<script>
		$(document).ready(function() {
			$('[rel="contact-us"]').addClass('current');
		});
	</script>
<?php include('footer.php');?>