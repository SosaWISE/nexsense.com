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
								<li>722 East Technology Ave, Building E, ste. 1100<br>Orem, UT 84097</li>
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
						<div class="sub-section">
							<span class="heading">Find Us On</span>
							<ul>
								<li>FB</li>
								<li>TW</li>
								<li>IG</li>
								<li>G+</li>
							</ul>
						</div>
					</div>
					<div class="copyright col-xs-12">
						© 2014 Nexsense &nbsp;|&nbsp; Ready For Next
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

					$(this).addClass('active').siblings().removeClass('active');
					$('.slide-' + $(this).attr('rel') + '').show().siblings().hide();
				});
			});
		</script>
	</div>
</body>
</html>