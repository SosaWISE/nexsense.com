<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: Product Subpage
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



<div class="product-sub life-doesnt-stand-still">
	<?php if ( get_field('top_section') ) : ?>
		<?php while ( has_sub_field('top_section') ) : ?>
			<div class="intro">
				<div class="container">
					<div class="row">
						<div class="intro-copy col-xs-12 col-md-6">
							<h2><?php the_sub_field('headline'); ?></h2>
							<?php the_sub_field('content'); ?>
						</div>
						<div class="intro-photo col-xs-12 col-md-6">
							<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( get_field('divider') ) : ?>
		<div class="home-shot"></div>
	<?php endif; ?>

	<?php if ( get_field('bottom_section') ) : ?>
		<?php while ( has_sub_field('bottom_section') ) : ?>
			<div class="product-shot">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img class="product-photo" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
						</div>
						<div class="col-md-6">
							<blockquote><?php the_sub_field('quote'); ?></blockquote>
							<?php the_sub_field('content'); ?>
							<div class="cta">
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?> <i></i></a>
								<?php if ( get_sub_field('additional_button') ) : ?>
									<a class="btn btn-secondary" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>









<?php if ( get_field('2_column_w_background_image') ) : ?>
	<div class="primary-section clearfix">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php while ( has_sub_field('2_column_w_background_image') ) : ?>
					<div class="col-xs-12 col-md-6">
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
		<div class="parallax text-center clearfix">
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
				<?php while ( has_sub_field('3_column_w_stripe') ) : ?>
					<div class="<?php if ( get_sub_field('stripe') ) { echo 'corner-stripes-small'; } ?> inner col-xs-12 col-md-4">
						<h2><?php the_sub_field('headline'); ?></h2>
						<?php if ( get_sub_field('button_type') == 'default' ) : ?>
							<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?> <i></i></a>
						<?php elseif ( get_sub_field('button_type') == 'custom' ) : ?>
							<?php the_sub_field('button_custom'); ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('parallax_2') ) : ?>
	<?php while ( has_sub_field('parallax_2') ) : ?>
		<div class="parallax text-center clearfix">
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
