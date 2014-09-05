<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: About Us
 */

get_header(); ?>

<?php if( get_field('hero_type') == 'none' ) : ?>
<?php elseif( get_field('hero_type') == 'image' ) : ?>
	<?php $image = get_field('image'); ?><div class="hero-mini" style="background-image: url('<?php echo $image['url']; ?>');"></div>
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
								<a href="<?php the_sub_field('learn_more_link'); ?>"><?php $image = get_sub_field('image'); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
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

<div class="about-us">
	<div class="container">
		<div class="row intro">
			<div class="col-xs-12">
				<h1><?php the_field('headline'); ?></h1>
				<?php the_field('subheadline'); ?>
			</div>
		</div>
		<?php if ( get_field('3_column_w_image') ) : ?>
			<div class="row">
				<?php while ( has_sub_field('3_column_w_image') ) : ?>
					<div class="col-xs-12 col-md-4 text-center">
						<?php $image = get_sub_field('image'); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<h3><?php the_sub_field('headline'); ?></h3>
						<?php the_sub_field('subheadline'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
