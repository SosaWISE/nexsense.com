<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: Blog Feed
 */
get_header(); ?>

<?php if( get_field('hero_type') == 'none' ) : ?>
<?php elseif( get_field('hero_type') == 'image' ) : ?>
	<div class="hero-mini"></div>
<?php elseif( get_field('hero_type') == 'slider' ) : ?>
	<?php if( get_field('slider') ): ?>
		<div class="hero-slider">
			<?php $slideCounter = 0; ?>
			<?php while( has_sub_field('slider') ) : ?>
				<div class="slide slide-<?php echo $slideCounter; ?>">
					<div class="copy col-xs-12 col-sm-6">
						<div class="row">
							<div class="copy-inner col-xs-12 col-sm-11 col-sm-offset-1 col-lg-10 col-lg-offset-2">
								<h2><?php the_sub_field('headline'); ?></h2>
								<?php the_sub_field('subheadline'); ?>
							</div>
						</div>
					</div>
					<div class="product-inner col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-0 col-md-11 col-xxl-10">
								<a href="<?php the_sub_field('learn_more_link'); ?>"><img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" /></a>
							</div>
						</div>
					</div>
				</div>
				<?php $slideCounter++ ?>
			<?php endwhile; ?>
			<div class="hero-controls">
				<div class="dots">
					<div class="dot active" rel="0"></div>
					<div class="dot" rel="1"></div>
					<div class="dot" rel="2"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>

<div class="blog blog-feed">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-9">
<?php 
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query('showposts=10'.'&paged='.$paged); 

				while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>
					<div class="post">
						<div class="row">
							<div class="col-xs-12 col-lg-11">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-lg-11">
								<a href="<?php the_permalink() ?>">
									<?php if( has_post_thumbnail( $post_id ) ) : ?>
									    <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="featured-image">
									<?php endif; ?>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-lg-11">
								<h6>Posted on <?php the_time('m.d.y') ?> by ______</h6>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink() ?>" class="btn btn-default">Read more <i></i></a>
							</div>
						</div>
					</div>
<?php
				endwhile;
?>
					<div class="row">
						<div class="col-xs-12">
							<span><?php previous_posts_link('&laquo; Newer Articles') ?></span>
						</div>
						<div class="col-xs-12">
							<span><?php next_posts_link('Older Articles &raquo;') ?></span>
						</div>
					</div>
<?php 
				$wp_query = null; 
				$wp_query = $temp;  // Reset
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
