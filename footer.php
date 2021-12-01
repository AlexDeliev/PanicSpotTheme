<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <h2 style="padding-left:3em;">
            <span data-aos="fade-left" data-aos-duration="700">Contact Us</span>
            <h2 data-aos="fade-right" data-aos-duration="700">Because Your Opinion is Important</h2>
        </h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11"data-aos="slide-up" data-aos-duration="700">
                <?php echo do_shortcode('[contact-form-7 id="23" title="Footer Form"]' );?>
            </div>
        </div>
    </div>



</div><!-- wrapper end -->

<div class= "footer-holder">
			<div class="container">
				<div class="row align-items-center">
				    <div class="col-md-6">
					    <div class="description-holder">
                            <div class="description" data-aos="slide-right" data-aos-duration="700">
                                <span>WARNING!</span>

                                <h3>
                                     No One Can Save You From What You Want 
                                </h3>

                                <p >Copyright 2021©
                                    The Assets Were Stolen
                                    Example site powered by Me ™
                                </p>
                            </div>        
                        </div>
				    </div>
                
                    <div class="col-md-4">
					    <a href='/PanicSpot' class= "logo-holder" data-aos="fade-down" data-aos-duration="700">
						    <img src="<?php echo get_template_directory_uri();?>/img/ResLogo2.png" alt="the Panic Spot Logo">
					    </a>

					<div class="social-media-holder">
						<a href='#'><i class="fa fa-facebook"></i></a>
						<a href='#'><i class="fa fa-instagram"></i></a>
						<a href='#'><i class="fa fa-twitter"></i></a>
					</div>
				</div>              
				</div>	
			</div>          
		</div>
	</div>
</div>

<!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

