		<footer class="global-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						Copyright 2014 &nbsp;|&nbsp; All Rights Reserved
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(document).ready(function() {
				$('.dot').on('click', function(e) {
					e.preventDefault();
					$(this).addClass('active').siblings().removeClass('active');
					$('.' + $(this).attr('rel') + '').show().siblings().hide();
				});
			});
		</script>
	</div>
</body>
</html>