<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 */

get_header(); ?>

<div class="blog blog-post">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-9 post">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

						// Previous/next post navigation.
						twentyfourteen_post_nav();
					endwhile;
				?>
			</div>
			<div class="col-xs-12 col-lg-3 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
