<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 */
?>
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
							<li>
								<a href="https://www.facebook.com/nexsense"><span class="icomoon icomoon-facebook"></span></a>
								<a href="https://twitter.com/nexsense"><span class="icomoon icomoon-twitter"></span></a>
								<a href="https://www.youtube.com/nexsense"><span class="icomoon icomoon-youtube"></span></a>
								<a href="http://www.pinterest.com/nexsense"><span class="icomoon icomoon-pinterest"></span></a>
								<a href="https://plus.google.com/u/0/b/109627038700775048616/"><span class="icomoon icomoon-googleplus"></span></a>
								<a href="https://vimeo.com/nexsense"><span class="icomoon icomoon-vimeo"></span></a>
								<a href="http://us.reddit.com/user/Nexsense/"><span class="icomoon icomoon-reddit last"></span></a>
							</li>
						</ul>
					</div>
					<div class="visible-xs visible-sm visible-md visible-lg hidden-xl hidden-xxl">
						<span class="btn btn-default icomoon icomoon-menu" data-toggle="modal" data-target="#mobile-navigation"></span>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="get-quote" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<span style="position: absolute; color: white; cursor: pointer; top: 10px; right: 20px; font-size: 24px; margin-top: 0; margin-bottom: 0;" data-dismiss="modal">&times;</span>
				<?php get_sidebar('footer'); ?>
			</div>
		</div>
	</div>
	<div id="mobile-navigation" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content mobile-navigation">
				<span style="position: absolute; color: white; cursor: pointer; top: 10px; right: 20px; font-size: 24px; margin-top: 0; margin-bottom: 0;" data-dismiss="modal">&times;</span>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<li class="social-links">
					<a href="https://www.facebook.com/nexsense"><span class="icomoon icomoon-facebook"></span></a>
					<a href="https://twitter.com/nexsense"><span class="icomoon icomoon-twitter"></span></a>
					<a href="https://www.youtube.com/nexsense"><span class="icomoon icomoon-youtube"></span></a>
					<a href="http://www.pinterest.com/nexsense"><span class="icomoon icomoon-pinterest"></span></a>
					<a href="https://plus.google.com/u/0/b/109627038700775048616/"><span class="icomoon icomoon-googleplus"></span></a>
					<a href="https://vimeo.com/nexsense"><span class="icomoon icomoon-vimeo"></span></a>
					<a href="http://us.reddit.com/user/Nexsense/"><span class="icomoon icomoon-reddit"></span></a>
				</li>
			</div>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
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
		$(document).ready(function() {
			$('[rel="customer-service"]').addClass('current');
			$('h3, h4').on('click', function(e) {
				$(this).toggleClass('active').siblings('div').slideToggle();
				$(this).children('j').toggleClass('active');
			});
		});
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
	<?php wp_footer(); ?>
</body>
</html>