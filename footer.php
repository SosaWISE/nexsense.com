		<footer class="global-footer">
			<div class="container">
				<div class="row">
					<div class="top-line col-xs-12"></div>
					<div class="pages col-sm-4">
						<div class="sub-section">
							<span class="heading">Nexsense System</span>
							<ul>
								<li><a href="nexsense-system.php">Overview</a></li>
							</ul>
						</div>
						<div class="sub-section">
							<span class="heading">Choose Your System</span>
							<ul>
								<li><a href="choose-your-system.php">Total Control</a></li>
								<li><a href="choose-your-system.php">Safe Home</a></li>
								<li><a href="choose-your-system.php">Hard-Wired+</a></li>
							</ul>
						</div>
						<div class="sub-section">
							<span class="heading">Customer Service</span>
							<ul>
								<li><a href="customer-service.php">Frequently Asked Questions</a></li>
								<li><a href="customer-service.php">Warranty</a></li>
							</ul>
						</div>
					</div>
					<div class="contact col-sm-4">
						<div class="sub-section">
							<span class="heading">Contact Us</span>
							<ul>
								<li>722 East Technology Ave, Building E, ste. 1100</li>
								<li>Orem, UT 84097</li>
								<li>1.800.466.6397</li>
							</ul>
							<div>
								<span class="sub-heading">Billing</span>
								<ul>
									<li>billing@nexsense.com</li>
									<li>385.375.8150</li>
								</ul>
							</div>
							<div>
								<span class="sub-heading">Sales</span>
								<ul>
									<li>sales@nexsense.com</li>
									<li>385.375.8120</li>
								</ul>
							</div>
							<div>
								<span class="sub-heading">Customer Service &amp; Tech Support</span>
								<ul>
									<li>support@nexsense.com</li>
									<li>385.375.8150</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="about col-sm-4">
						<div class="sub-section">
							<span class="heading">Who We Are</span>
							<p>We’re a home protection and home automation provider who believes that a smarter, safer home should be simple to use and provide our customers with freedom as well as peace of mind. Driven by powerful technology and superior customer service, our goal is to create safer homes and families with affordable solutions and a proactive approach to security.</p>
						</div>
					</div>
					<div class="copyright col-xs-12">
						© 2014 Nexsense &nbsp;|&nbsp; Ready For Next
					</div>
			</div>
		</footer>
	</div>
	<script>
		$(document).ready(function() {
			var slidePosition,
				moveSlide,
				heroInterval,
				slideTimer = 5000,
				currentPosition = 0,
				numberOfSlides = $('.slide').length;

			slidePosition = function() {
				if (currentPosition == numberOfSlides - 1) {
					currentPosition = 0;
				} else {
					currentPosition++;
				}
				moveSlide();
			}
			moveSlide = function() {
				$('[rel="' + currentPosition + '"]').trigger('click');
			}
			
			heroInterval = setInterval(slidePosition, slideTimer)

			$('.dot').on('click', function(e) {
				e.preventDefault();

				clearInterval(heroInterval);
				heroInterval = setInterval(slidePosition, 5000);
				currentPosition = $(this).attr('rel');

				$(this).addClass('active').siblings().removeClass('active');
				$('.slide-' + $(this).attr('rel') + '').css('opacity', 1).siblings().css('opacity', 0);
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#get-quote-form').validate({
				submitHandler: function(form) {
					$.ajax({
						type: 'post',
						url: 'contact-engine.php',
						data: $('#get-quote-form').serialize(),
						success: function() {
							$('#get-quote-form').html("<span>Your email has been successfully sent.</span>")
						},
						error: function() {
							$('#get-quote-form').html("<span>There was an error sending this form. Please refresh the page and try again, or send an email directly to support@nexsense.com.</span>")
						}
					});
				}
			});
		});
	</script>
	<div id="get-quote" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<span style="position: absolute; color: white; cursor: pointer; top: 10px; right: 20px; font-size: 24px; margin-top: 0; margin-bottom: 0;" data-dismiss="modal">&times;</span>
				<form id="get-quote-form" class="contact-form" role="form">
					<h4 class="modal-title">Get A Free Quote</h4>
					<div class="form-group">
						<label class="hide" for="email">First Name*</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name*" required>
					</div>
					<div class="form-group">
						<label class="hide" for="email">Last Name*</label>
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name*" required>
					</div>
					<div class="form-group">
						<label class="hide" for="phone">Phone</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
					</div>
					<div class="form-group">
						<label class="hide" for="phone">Zip</label>
						<input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
					</div>
					<div class="form-group">
						<label class="hide" for="email">Email*</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
					</div>
					<div class="form-group" style="display: none;">
						<label class="hide" for="age">Age (If you are human... do not fill out this field!)</label>
						<input type="text" class="form-control" id="age" name="age" placeholder="Age (If you are human... do not fill out this field!)">
					</div>
					<span class="modal-sub-title">or Contact Us at 1.800.466.3973</span>
					<div class="form-group">
						<input type="hidden" name="department" value="sales@nexsense.com">
						<button type="submit" id="submit" class="btn btn-secondary">Submit <i></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>