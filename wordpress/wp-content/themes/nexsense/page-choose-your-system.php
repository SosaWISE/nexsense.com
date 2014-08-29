<?php
/**
 * @package Nexsense
 * @subpackage Nexsense Custom Theme
 * @since Nexsense 1.0
 * Template Name: Choose Your System
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

<div class="choose-your-system">
	<div class="options-section">
		<div class="container">
			<div class="row">
				<div class="choose-your-system-intro text-center col-xs-12">
					<h1><?php the_field('headline'); ?></h1>
					<?php the_field('subheadline'); ?>
				</div>
			</div>
			<?php if ( get_field('3_column_w_images_and_hidden_content') ) : ?>
				<div class="row">
					<?php $columnCounter = 1; ?>
					<?php while ( has_sub_field('3_column_w_images_and_hidden_content') ) : ?>
						<div class="col-xs-12 col-md-4">
							<div class="options-intro">
								<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
								<h2><j class="caret-toggle"></j> <?php the_sub_field('headline'); ?></h2>
								<span class="price-block" data-toggle="modal" data-target="#get-quote"><?php the_sub_field('price_block'); ?></span>
								<?php the_sub_field('additional_detail'); ?>
							</div>
							<span class="what-you-get-toggle">
								<?php if ( $columnCounter == 2 ) { echo '<j></j> what you get'; } ?>
							</span>
							<div class="what-you-get slide" style="display: none;">
								<?php the_sub_field('hidden_details'); ?>
							</div>
						</div>
						<?php $columnCounter++; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( get_field('1_column_w_centered_text') ) : ?>
			<div class="container-fluid add-ons slide">
				<div class="row-fluid">
					<?php while ( has_sub_field('1_column_w_centered_text') ) : ?>
						<div class="col-xs-10 col-xs-offset-1">
							<h2><?php the_sub_field('headline'); ?></h2>
							<?php the_sub_field('content'); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( get_field('3_column') ) : ?>
			<div class="container add-ons-info slide">
				<div class="row">
					<?php while ( has_sub_field('3_column') ) : ?>
						<div class="col-xs-12 col-md-4">
							<?php the_sub_field('content'); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( get_field('additional_button') ) : ?>
			<div class="container add-ons-info slide">
				<div class="row">
					<div class="get-started col-xs-12">
						<a class="btn btn-default" data-toggle="modal" data-target="#get-quote">Get A Free Quote <i></i></a>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
