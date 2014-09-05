<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<div class="post">
	<div class="row">
		<div class="col-xs-12 col-lg-11">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<?php if( has_post_thumbnail( $post_id ) ) : ?>
		<div class="row">
			<div class="col-xs-12 col-lg-11">
				<a href="<?php the_permalink() ?>">
					<img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="featured-image">
				</a>
			</div>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-xs-12 col-lg-11">
			<h6>Posted on <?php the_time('m.d.y') ?> by <?php the_author(); ?></h6>
			<?php the_content(); ?>
		</div>
	</div>
</div>