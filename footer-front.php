<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package designubec
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="container site-footer footer-front sponsorship" role="contentinfo">
		<div class="row">
			<ul class="col-md-12">
				<li><h5>co-presented by:</h5>
					<a href="http://www.wacom.com/en/ap/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/wacom.png" alt="Wacom" title="Wacom" /></a>
				</li>
				<li><h5>sponsored by:</h5>
					<a href="http://handurawpizza.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/handuraw.png" alt="Handuraw" title="Handuraw" /></a>
				</li>
				<li><h5>special thanks:</h5>
					<a href="http://www.ubeccreative.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/ubeccreative.png" alt="Ubeccreative" title="Ubeccreative" /></a>
					<a href="http://www.cebucomicon.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/cebucomicon.png" alt="Cebu Comicon" title="Cebu Comicon" /></a>
				</li>
			</ul>
		</div>
		<div class="row facebook-like">
			<div class="col-md-4 col-md-offset-4">
				<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fdesignubec&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px; width:100%; color:#ffffff;" allowTransparency="true"></iframe>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
