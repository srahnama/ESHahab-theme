<?php
/**
 * Template functions used for the site footer.
 *
 */

if ( ! function_exists( 'shop_isle_footer_widgets' ) ) {
	/**
	 * Display the footer widgets
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_widgets() {
		?>
		<!-- Widgets start -->

	<?php if ( is_active_sidebar( 'sidebar-footer-area-1' ) || is_active_sidebar( 'sidebar-footer-area-2' ) || is_active_sidebar( 'sidebar-footer-area-3' ) || is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>

		<div class="container-fluid" style="background:white;">
			<div class="container">
				<div class="row">

					
					


					<?php if ( is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>
						<div class="">
							<?php dynamic_sidebar('sidebar-footer-area-4'); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

				</div><!-- .row -->
			</div>
		</div>

	<?php endif; ?>

		<?php
	}
}

if ( ! function_exists( 'shop_isle_footer_copyright_and_socials' ) ) {
	/**
	 * Display the theme copyright and socials
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_copyright_and_socials() {

		?>
		<!-- Footer start -->
		<nav class="navbar navbar-custom navbar-transparent " role="navigation"  style="background:white;">
		<nav style="min-height:auto;background:gray; " class="  navbar navbar-takel">
				<div class="container">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>
					<div id="navbar2" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
						<?php 
						wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right' ) );
						
						if ( !is_user_logged_in() ) {
							echo '<a class="btn btn-primary" href="' .get_permalink(wc_get_page_id('myaccount')). '"> عضویت </a>';
							echo '<a class="btn btn-success" href="' .get_permalink(wc_get_page_id('myaccount')). '"> ورود</a>';
						 }
						
						
						 	?>

						

					</div><!--/.nav-collapse -->
				
					
						
					
				</div><!--/.container-fluid -->
			</nav>
			
			<div class="container" style="background:white;color:#4d4d4d;">

				<div class="row">

					<?php
					/* Copyright */
					$shop_isle_copyright = get_theme_mod('shop_isle_copyright');
					$shop_isle_site_info_hide = get_theme_mod('shop_isle_site_info_hide');

					if( !empty($shop_isle_copyright) || ( isset($shop_isle_site_info_hide) && $shop_isle_site_info_hide != 1 ) ) {
						echo '<div class="col-sm-6">';
						if ( ! empty( $shop_isle_copyright ) ) {
							echo '<p class="copyright font-alt">' . esc_html( $shop_isle_copyright ) . '</p>';
						} elseif( is_customize_preview() ){
							echo '<p class="copyright font-alt shop_isle_hidden_if_not_customizer"></p>';
						}
						if ( isset( $shop_isle_site_info_hide ) && $shop_isle_site_info_hide != 1 ) {
?>
							
							<span id="right">
استفاده از مطالب فروشگاه اینترنتی تکل فقط برای مقاصد غیر تجاری و با ذکر منبع بلامانع است. کليه حقوق اين سايت متعلق به  (فروشگاه آنلاین تکل) می‌باشد.</span>
<br/>


							<span>Copyright © 2016  takel.ir</span>
							<hr class="divider-d">
							
							<div class="col-sm-10 col-md-4 footer-sidebar-wrap">
							<aside id="text-3" class="widget_text">			
							<div class="textwidget">

<img id="hwlahwladrftnbpebrgw" style="cursor:pointer" onclick="window.open(&quot;https://trustseal.enamad.ir/Verify.aspx?id=44126&amp;p=odshodshnbpdwkynhwmb&quot;, &quot;Popup&quot;,&quot;toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30&quot;)" alt="" src="https://trustseal.enamad.ir/logo.aspx?id=44126&amp;p=aodsaodslznbqesgkzoe">

</div>
</aside>						
</div>
<div class="col-sm-10 col-md-4 footer-sidebar-wrap">
	<aside id="text-3" class="widget_text">			
	<div class="textwidget">
	<img id='apfunbqeoeukapfuoeuk' style='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=52858&p=dshwuiwkmcsidshwmcsi", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt='logo-samandehi' src='https://logo.samandehi.ir/logo.aspx?id=52858&p=ujynodrfaqgwujynaqgw'/>
</div>
		</aside>						
		</div>
		

					<?php	}
						echo '</div>';
					}

					/* Socials icons */

					?>
					
				<div class="container">
				<a class="" href="https://telegram.me/takelshop">
				  <i class="fa fa-telegram fa-3x"></i>
				</a>
				<a class="" href="https://www.instagram.com/Takel.ir/">
				  <i class="fa fa-instagram fa-3x"></i>
				</a>				
				<a class="" href="#">
				  <i class="fa fa-twitter fa-3x"></i>
				</a>
				<a class="" href="#">
				  <i class="fa fa-facebook fa-3x"></i>
				</a>
				<a class="" href="https://plus.google.com/u/0/104960205309773986835">
				  <i class="fa fa-google-plus fa-3x"></i>
				</a>
									
					
						

					
						
					
				</div><!--/.container-fluid -->
			
					
					
				</div><!-- .row -->

			</div>
		</nav>
		<!-- Footer end -->
		<?php
	}
}


if ( ! function_exists( 'shop_isle_footer_wrap_open' ) ) {
	/**
	 * Display the theme copyright and socials
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_open() {
		echo '</div><div class="bottom-page-wrap">';
	}

}


if ( ! function_exists( 'shop_isle_footer_wrap_close' ) ) {
	/**
	 * Display the theme copyright and socials
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_close() {
		echo '</div><!-- .bottom-page-wrap -->';
	}

}