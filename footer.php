<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>
<?php do_action( 'shop_isle_before_footer' ); ?>

	<?php do_action('shop_isle_footer'); ?>
	
	</div>
	<!-- Wrapper end -->
	
	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="glyphicon glyphicon-chevron-up"></i></a>
	</div>

	<?php do_action( 'shop_isle_after_footer' ); ?>

<?php wp_footer(); ?>

	<script>
						(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
								(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
							m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

						ga('create', 'UA-53791779-2', 'auto');
						ga('send', 'pageview');

					</script>

</body>
</html>
