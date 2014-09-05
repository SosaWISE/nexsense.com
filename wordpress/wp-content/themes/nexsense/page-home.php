<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: Homepage
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

<?php if ( get_field('2_column_w_background_image') ) : ?>
	<div class="primary-section clearfix">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php while ( has_sub_field('2_column_w_background_image') ) : ?>
					<?php $image = get_sub_field('image'); ?><div class="col-xs-12 col-md-6" style="background: url(<?php echo $image['url']; ?>) no-repeat bottom left;">
						<div class="row">
							<div class="inner col-xs-10 col-xs-offset-1">
								<h2><?php the_sub_field('headline'); ?></h2>
								<?php the_sub_field('subheadline'); ?>
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?> <i></i></a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('parallax') ) : ?>
	<?php while ( has_sub_field('parallax') ) : ?>
		<?php $image = get_sub_field('image'); ?><div class="parallax text-center clearfix" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="inner col-xs-12">
						<h4><?php the_sub_field('headline'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( get_field('3_column_w_stripe') ) : ?>
	<div class="secondary-section text-center clearfix">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php $columnCounter = 1; ?>
				<?php while ( has_sub_field('3_column_w_stripe') ) : ?>
					<div class="<?php if ( get_sub_field('stripe') ) { echo 'corner-stripes-small'; } ?><?php if ( $columnCounter == 2 ) { echo 'middle'; } ?> inner col-xs-12 col-md-4">
						<h2><?php the_sub_field('headline'); ?></h2>
						<?php if ( get_sub_field('button_type') == 'default' ) : ?>
							<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?> <i></i></a>
						<?php elseif ( get_sub_field('button_type') == 'custom' ) : ?>
							<div class="custom-button"><?php the_sub_field('button_custom'); ?></div>
						<?php endif; ?>
					</div>
					<?php $columnCounter++; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('parallax_2') ) : ?>
	<?php while ( has_sub_field('parallax_2') ) : ?>
		<?php $image = get_sub_field('image'); ?><div class="parallax text-center clearfix" style="background: url(<?php echo $image['url']; ?>) no-repeat center center;">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="inner col-xs-12">
						<h4><?php the_sub_field('headline'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
