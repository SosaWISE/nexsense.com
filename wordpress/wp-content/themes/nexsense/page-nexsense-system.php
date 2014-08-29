<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: Nexsense System
 */

get_header(); ?>
<?php if( get_field('hero_type') == 'none' ) : ?>
	<?php return; ?>
<?php elseif( get_field('hero_type') == 'image' ) : ?>
	<div>HERO IMAGE</div>
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
								<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
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

<div class="nexsense-system">

<?php if ( get_field('1_column_w_centered_text') ) : ?>
	<div class="more-than-an-alarm clearfix">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php while ( has_sub_field('2_column_w_background_image') ) : ?>
					<div class="inner col-xs-10 col-xs-offset-1 text-center">
						<h1><?php the_sub_field('headline'); ?></h1>
						<?php the_sub_field('content'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('2_column_w_alternating_image') ) : ?>
	<?php while ( has_sub_field('2_column_w_alternating_image') ) : ?>
		<div class="clearfix">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-6">
						image
					</div>
					<div class="product-sub-section col-md-6">
						<div class="row">
							<div class="inner col-sm-10 col-sm-offset-1">
								<h2><?php the_sub_field('headline'); ?></h2>
								<?php the_sub_field('subheadline'); ?>
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?> <i></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<?php
get_footer();
