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
 					?>
					<h1 class="site-title pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php if (!empty($logo_image)) : ?>
							<img src="<?php echo $logo_image['url']; ?>" class="img-responsive event_logo" alt="<?php echo $logo_image['alt']; ?>" title="<?php echo $logo_image['alt']; ?>" />
						<?php endif; ?>
					</a></h1>
					<div class="event-info pull-right">
			       		<p><span>8PM May 24, 2014</span> Handuraw Pizza Cafe Lahug Gorordo Avenue, Cebu City</p>
					</div>
					<!-- <ul class="social-links pull-right">
			          <li><a href="https://www.facebook.com/designubec"><i class="fa fa-facebook fa-2x"></i></a></li>
			          <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
			        </ul> -->
				</header>
				<section class="jumbotron">
					<div class="group-list group-left">
						<ul style="list-style-type:none; text-align:left; font-size:34px; margin:0; padding:0;">
			        		<li>karl</li>
			        		<li>ton inton</li>
			        		<li>nicolo nimor</li>
			        		<li>geraldine sy</li>
			        		<li>anthony aves</li>
			        		<li>chadmanzo</li>
			        		<li>francis bitamor</li>
			        		<li>aya jugalbot</li>
			        	</ul>
			    	</div>
			        <img src="<?php bloginfo('template_url'); ?>/img/designubec2014map.png" style="height:600px;" alt="Designubec" title="Desginubec" />
			        <div class="group-list group-right">
			        	<ul style="list-style-type:none; text-align:right; font-size:34px;">
			        		<li>marc abuan</li>
			        		<li>kat bacasmas</li>
			        		<li>edzel rubite</li>
			        		<li>alwin aves</li>
			        		<li>lou patrick mackay</li>
			        		<li>misterjude crisostomo</li>
			        		<li>michele liza kaiser-pelayre</li>
			        		<li>ed louie</li>
			        	</ul>
			    	</div>
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
			    </section>
				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
