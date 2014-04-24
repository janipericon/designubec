<?php
/*
Template Name: Home Page
*/
get_header(); ?>
	<div id="primary" class="content-area" style="font-family:'bm_germara12'; ">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="site-branding">
					<h1 class="site-title pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/designubec2014logo.png" class="img-responsive" style="width:300px" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>	" /></a></h1>
					<div class="pull-right" style=" text-align: right; padding-top:30px; color:#fff; font-size:16px;">
			       		<p><span style="font-size:24px;">May 24, 2014</span> <br /> Handuraw Pizza Cafe Lahug Gorordo Avenue, Cebu City</p>
					</div>
					<!-- <ul class="social-links pull-right">
			          <li><a href="https://www.facebook.com/designubec"><i class="fa fa-facebook fa-2x"></i></a></li>
			          <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
			        </ul> -->
				</header>
				<section class="jumbotron" style="padding-top:20px; position:relative;">
					
					<div style="position:absolute; left:0; text-align:left; top:90px;">
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
			        <div style="position:absolute; right:0; top:70px">
			        	<ul style="list-style-type:none; text-align:right; font-size:34px;">
			        		<li>marc abuan</li>
			        		<li>kat bacasmas</li>
			        		<li>edzel rubite</li>
			        		<li>alwin aves</li>
			        		<li>lou patrick mackay</li>
			        		<li>misterjude crisostomo</li>
			        		<li>michele liza kaiser-pelayre</li>
			        		<li>el chayox fernandez</li>
			        		<li>ed louie (davao)</li>
			        	</ul>
			    	</div>
			    </section>
				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
