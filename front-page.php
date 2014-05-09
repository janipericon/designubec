<?php
/*
Template Name: Home Page
*/
get_header(); ?>
	<div id="primary" class="content-area content-area-home">
		<main id="main" class="site-main" role="main">
			<?php 
				$args = array(
					'post_type' => 'designubec_events',
					'posts_per_page' => 1
				);

				$query = new WP_Query($args);

			?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<header class="site-branding">
					<?php
						$logo_image = get_field('event_logo');
						$map_image = get_field('cebu_image');
 					?>
					<h1 class="site-title pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php if (!empty($logo_image)) : ?>
							<img src="<?php echo $logo_image['url']; ?>" class="img-responsive event_logo" alt="<?php echo $logo_image['alt']; ?>" title="<?php echo $logo_image['alt']; ?>" />
						<?php endif; ?>
					</a></h1>
					<div class="event-info pull-right">
						<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>
			       		<p><span><?php echo get_field('event_time'); ?> <?php echo $date->format('d M Y'); ?></span> <?php echo get_field('event_place'); ?></p>
					</div>
					<!-- <ul class="social-links pull-right">
			          <li><a href="https://www.facebook.com/designubec"><i class="fa fa-facebook fa-2x"></i></a></li>
			          <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
			        </ul> -->
				</header>
				<section class="jumbotron">
					<?php 
						$countlist = 0; 
						$artist_group_one = "";
						$artist_group_two = "";

						if(have_rows('artists_designer')) {
							while(have_rows('artists_designer')) : the_row();
								if($countlist <= 10) {
									$artist_group_one .= "<li><a href='". get_sub_field('artist_url') . "' target='_blank' >". get_sub_field('artist_name') ."</a></li>";
								} else {
									$artist_group_two .= "<li><a href='". get_sub_field('artist_url') . "' target='_blank'>". get_sub_field('artist_name') ."</a></li>";
								}
								$countlist++;
							endwhile;
						}

					?>
					<div class="group-list group-left">
						<ul style="list-style-type:none; text-align:left; font-size:34px; margin:0; padding:0;">
			        		<?php echo $artist_group_one; ?>
			        	</ul>
			    	</div>
			        <div class="group-list group-right">
			        	<ul style="list-style-type:none; text-align:right; font-size:34px;">
			        		<?php echo $artist_group_two; ?>
			        	</ul>
			    	</div>
			    	<img src="<?php echo $map_image['url']; ?>" style="height:600px;" alt="<?php echo $map_image['alt']; ?>" title="<?php $map_image['title']; ?>" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud1.png" class="cloud cloud1" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud2.png" class="cloud cloud2" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud3.png" class="cloud cloud3" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud1.png" class="cloud cloud4" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud2.png" class="cloud cloud5" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/cloud3.png" class="cloud cloud6" />
					<img src="<?php bloginfo('template_url'); ?>/img/butanding.png" class="whale" />
			    	<img src="<?php bloginfo('template_url'); ?>/img/waterone.png" class="seawater water1" />
					<img src="<?php bloginfo('template_url'); ?>/img/watertwo.png" class="seawater water2" />
					<img src="<?php bloginfo('template_url'); ?>/img/waterthree.png" class="seawater water3" />
			    	<?php the_content(); ?>
			    </section>
				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer('front'); ?>
