		<div id="newsletter" class="purple relative" ng-controller="FooterController">
			<div class="flex-row">
				<div>
					<h4>Nexsense Newsletter</h4>
					Sign up to learn about new products and promotions.
				</div>
				<div>
					<input type="email" placeholder="your@email.com" ng-model="email" />
					<input id="newsletter-signup" type="button" class="secondary chevron" value="Sign up" ng-click="signUpForNewsletter()" />
				</div>
			</div>
			<div id="signup-thanks" ng-style="{'right':thanksbannerX + '%'}">Thanks for signing up</div>
		</div>

		<footer class="global-footer">

			<div class="container-fluid">
				<div class="row-fluid">
					<div class="copyright col-xs-12 col-lg-4">
						© 2014 Nexsense &nbsp;|&nbsp; Ready For Next
					</div>
					<div class="contact col-lg-8 hidden-xs hidden-sm hidden-md hidden-lg visible-xl visible-xxl">
						<ul>
							<li><a href="contact">Contact Us</a></li>
							<li><a href="contact">Billing</a></li>
							<li><a href="contact">Sales</a></li>
							<li><a href="contact">Customer Service &amp; Tech Support</a></li>
							<li><a href="careers">Careers</a></li>
							<li>
								<a href="http://www.facebook.com/nexsense"><span class="icomoon icomoon-facebook"></span></a>
								<a href="http://twitter.com/nexsense"><span class="icomoon icomoon-twitter"></span></a>
								<a href="http://www.linkedin.com/company/nexsense-llc"><span class="icomoon icomoon-linkedin"></span></a>
								<a href="http://blog.nexsense.com"><span class="icomoon icomoon-wordpress"></span></a>
								<!--<a href="https://www.youtube.com/nexsense"><span class="icomoon icomoon-youtube"></span></a>-->
							</li>
						</ul>
					</div>
					<div class="visible-xs visible-sm visible-md visible-lg hidden-xl hidden-xxl">
						<span class="btn btn-default icomoon icomoon-menu" data-toggle="modal" data-target="#mobile-navigation"></span>
					</div>
				</div>
			</div>
		</footer>


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

				$(this).addClass('active').siblings('.dot').removeClass('active');
				$('.slide-' + $(this).attr('rel') + '').css({'visibility': 'visible', 'opacity': '1'}).siblings('.slide').css({'visibility': 'hidden', 'opacity': '0'});
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#get-quote-form').validate({
				submitHandler: function(form) {
					$.ajax({
						type: 'post',
						url: 'model/contact-engine.php',
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
					<div class="form-group half">
						<label class="hide" for="email">First Name*</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name*" required>
					</div>
					<div class="form-group half">
						<label class="hide" for="email">Last Name*</label>
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name*" required>
					</div>
					<div class="form-group half">
						<label class="hide" for="phone">Phone*</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone*" required>
					</div>
					<div class="form-group half">
						<label class="hide" for="phone">Zip*</label>
						<input type="text" class="form-control" id="zip" name="zip" placeholder="Zip*" required>
					</div>
					<div class="form-group full">
						<label class="hide" for="email">Email*</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
					</div>
					<div class="form-group" style="display: none;">
						<label class="hide" for="age">Age (If you are human... do not fill out this field!)</label>
						<input type="text" class="form-control" id="age" name="age" placeholder="Age (If you are human... do not fill out this field!)">
					</div>
					<span class="modal-sub-title">or Contact Us at 385.375.8120</span>
					<span class="legal">By clicking this button, you consent for Nexsense to use automated technology including pre-recorded messages to contact you at the number provided.<br>This consent is not required to make a purchase from us.</span>
					<div class="form-group">
						<input type="hidden" name="department" value="sales@nexsense.com, dfreitas@nexsense.com, bcarter@nexsense.com">
						<button type="submit" id="submit" class="btn btn-secondary">Submit <i></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="mobile-navigation" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content mobile-navigation">
				<span style="position: absolute; color: white; cursor: pointer; top: 10px; right: 20px; font-size: 24px; margin-top: 0; margin-bottom: 0;" data-dismiss="modal">&times;</span>
				<ul>
					<?php include('templates/navigation.php');?>
					<li class="social-links">
						<a href="https://www.facebook.com/nexsense"><span class="icomoon icomoon-facebook"></span></a>
						<a href="https://twitter.com/nexsense"><span class="icomoon icomoon-twitter"></span></a>
						<a href="http://www.linkedin.com/company/nexsense-llc"><span class="icomoon icomoon-linkedin"></span></a>
						<a href="http://blog.nexsense.com"><span class="icomoon icomoon-wordpress"></span></a>
						<!--<a href="https://www.youtube.com/nexsense"><span class="icomoon icomoon-youtube"></span></a>-->
					</li>
				</ul>
			</div>
		</div>
	</div>
