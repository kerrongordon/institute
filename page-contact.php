<?php
/**
 *Template Name: contact page
 * @package tamcc
 */

get_header(); ?>
	</div><!-- #content -->
		<section class="main">
            <div class="container">
            	<div class="content-area">
                	<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
				</div>
				<div class="widget-area">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : ?><?php endif; ?> 
                </div>
                <div class="clearfix"></div>
            </div><!-- end of container -->	
	    </section>

		<section id="cd-google-map">
			<div id="google-container"></div>
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
			<address>Tanteen Tanteen Rd St Georges Grenada</address> 
		</section>


	    <section class="spacer">
            <div class="container">
                <h2 class="buy-title">We are ready for you ? Feel free to buy this theme now...</h2>	
                <a class="buy-link" rel="external" href="#"><i class="fa fa-shopping-cart"></i> BUY IT NOW</a>
                <div class="clearfix"></div>
            </div><!-- end of container -->	
	    </section>
	<div><!-- #content -->
<?php get_footer(); ?>