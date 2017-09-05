<?php
/*
Template Name: Home
*/
get_header(); ?>
	<div class="home">
		<section>
			<div class="home__slider hide-for-small-only">
				<?php the_field("home-slider"); ?>
			</div>
            <div class="home__slider show-for-small-only">
                <img src="/wp-content/uploads/2017/08/dragonfly.jpg" />
                <h2 class="home-slider-heading-mobile">TRUSTED TREATMENT FOR TEEN MENTAL HEALTH, BEHAVIORAL, AND SUBSTANCE USE ISSUES.</h2>
                <p class="home__slider-description-mobile" style="text-align: left;">Muir Wood is a world renowned northern California treatment center for teens struggling with mental health, behavioral, and substance abuse issues. We offer residential inpatient treatment for teen boys 12&ndash;17 in Sonoma County, and outpatient treatment for boys and girls 12&ndash;19 in Marin County. <a href="/about-muir-wood/"><strong>Read more&raquo;</strong></a></p>
                <p class="align-center"><a class="button-white" href="/getting-started/"><strong>Getting Started</strong></a></p>
            </div>
		</section>

		<section class="home__split">
			<div class="row expanded large-collapsed">
				<a href="<?php the_field("home-split-left-link"); ?>" class="large-6 column home__split-column" style="background-image:url(<?php the_field("home-split-left-background-img");?>)">
					<div class="home__split-title">
						<?php the_field("home-split-left-title"); ?>
					</div>
					<div class="home__split-description">
						<?php the_field("home-split-left-description"); ?>
					</div>
				</a>
				<a href="<?php the_field("home-split-right-link"); ?>" class="large-6 column  home__split-column" style="background-image:url(<?php the_field("home-split-right-background-img");?>)">
					<div class="home__split-title">
						<?php the_field("home-split-right-title"); ?>
					</div>
					<div class="home__split-description">
						<?php the_field("home-split-right-description"); ?>
					</div>
				</a>
			</div>
		</section>

		<section class="home__videos" style="background-image:url('<?php the_field("home-videos-background-img"); ?> ');">
			<div class="main-wrap">
				<div class="row">
				<h2 class="home__videos-title column large-11"> <?php the_field("home-videos-title");  ?> </h2>
				<p class="home__videos-description column large-10">
					<?php the_field("home-videos-description"); ?> </p>
				</div>
					<div class="row">
				<div class="large-6 column">
					<?php the_field("home-videos-left-video"); ?>
					<div class="home__videos-split-description">
					<?php the_field("home-videos-left-description"); ?>
					</div>
				</div>
				<div class="large-6 column">
					<?php the_field("home-videos-right-video"); ?>
					<div class="home__videos-split-description">
					<?php the_field("home-videos-right-description"); ?>
				</div>
				</div>
			</div>
				<div class="row">
				<a class="button-green" href="<?php the_field("home-videos-button"); ?>">
					<?php the_field("home-videos-button-text"); ?>
				</a>
			</div>
			</div>
		</section>

		<section class="home__insurance" style="background-image:url('<?php the_field("home-insurance-background-img"); ?>');">
			<div class="column large-6 small-centered">
				<div class="row">
					<h3 class="home__insurance-title"> <?php the_field("home-insurance-title"); ?> </h3>
				</div>
				<div class="row">
					<p class="home__insurance-description">
						<?php the_field("home-insurance-description"); ?> </p>
				</div>
				<div class="home__insurance-button">
					<?php the_field("home-insurance-button"); ?>
				</div>
				<img src="<?php the_field('home-insurance-logo');?>" />
				<div class="home__insurance-logo-description column large-10 small-centered">
					<?php the_field('home-insurance-logo-description');?>
				</div>
			</div>
		</section>


		<section class="home__sponser hide-for-small-only">
			<div class="row expanded">
				<?php
					$images = get_field('home-sponser-gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="column small-3">
						<span class="helper"></span>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
			</div>
		</section>


		<section class="full-width home__testimonials">
			<h3><?php  the_field('home-testimonial-header'); ?></h3>
				<?php  the_field('home-testimonial-slider'); ?>


		</section>

		<section class="home__links">
			<div class="row expanded large-collapse small-uncollapse">
				<div class="large-4 column home__links-left">
					<a href="<?php the_field('home-links-left-link');?>">
					<div class="home__links-image" style="background-image:url('<?php  the_field("home-links-left-img");?>')">
						<img src="<?php the_field('home-links-left-icon');?>">
						<div class="home__links-title">
							<?php the_field("home-links-left-title"); ?>
						</div>
					</div>
					<div class="home__links-description">
						<?php the_field("home-links-left-description");  ?>
						<div class="home__links-more">Read More</div>
					</div>
					</a>
				</div>
				<div class="large-4 column home__links-center">
					<a href="<?php the_field('home-links-center-link');?>">
					<div class="home__links-image" style="background-image:url('<?php  the_field("home-links-center-img");?>')">
						<img src="<?php the_field('home-links-center-icon');?>">
						<div class="home__links-title">
							<?php the_field("home-links-center-title"); ?>
						</div>
					</div>
					<div class="home__links-description">
						<?php the_field("home-links-center-description"); ?>
							<div class="home__links-more">Read More</div>
						</div>
					</a>
				</div>
				<div class="large-4 column home__links-right">
					<a href="<?php the_field('home-links-right-link');?>">
					<div class="home__links-image" style="background-image:url('<?php  the_field("home-links-right-img");?>')">
						<img src="<?php the_field('home-links-right-icon');?>">
						<div class="home__links-title">
							<?php the_field("home-links-right-title"); ?>
						</div>
					</div>
					<div class="home__links-description">
						<?php the_field("home-links-right-description"); ?>
							<div class="home__links-more">Read More</div>
					</div>
				</a>
				</div>
			</div>
		</section>
	</div>
	<?php get_footer();
