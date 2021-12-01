<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="contact-header">
    <div class="bg-image"></div>
    <div class="title-holder">
        <h2>
            <span data-aos="fade-right" data-aos-duration="700">Contact Us</span>
            <h2 data-aos="fade-up" data-aos-duration="700">Because Your Opinion is Important</h2>
        </h2>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1">
            </div>

            <div class="col-lg-8">
            </div>

            <div class="col-lg-3">
            </div>

        </div>
    </div>
</div>
<!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<!--<div class="row">

			<div class="col-md-12 content-area" id="primary">-->

				<main class="site-main" id="main" role="main">
              
				    <div class="row">
					    <div class="col-lg-1"></div>
						<div class="col-lg-10">
                            <?php
					            while ( have_posts() ) {
						        the_post();
						        get_template_part( 'loop-templates/content', 'page' );

						        // If comments are open or we have at least one comment, load up the comment template.
						        if ( comments_open() || get_comments_number() ) {
							        comments_template();
						            }
					            }
					        ?>
						</div>
				    </div>

				</main><!-- #main -->

			<!--</div><!-- #primary -->

		<!--</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<div class="contact-us-holder">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="700">
            <?php echo do_shortcode('[contact-form-7 id="111" title="Contact Us Page Form"]');?>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-hours" data-aos="fade-up" data-aos-duration="700">
                    <div class="content line-bottom">
                        <h3 data-aos="fade-right" data-aos-duration="1000">Opening hours</h3>
                    </div>
                   <div class="content">
                        <div class="hours"  data-aos="fade-up" data-aos-duration="1000">
                            <div class="hour">
                                <span>Mon - Tues</span>
                                <span>7am - 4pm</span>
                                <strong>(Last Orders 3am)</strong>
                            </div>
                            <div class="hour">
                                <span>Wed - Sat</span>
                                <span>7am - 9pm</span>
                                <strong>(Last Orders 8pm)</strong>
                            </div>
                            <div class="hour">
                                <span>Sun</span>
                                <span>7am - 8pm</span>
                                <strong>(Last Orders 7pm)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="contact-us-image">
    <div class="img-widescreen">
        <img src="<?php //echo get_template_directory_uri();?>/img/multi-cultiCrop.jpg" alt="Multi Culti">
    </div>
</div>-->
                            

<div class="contact-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <h2>
            <span data-aos="fade-down" data-aos-duration="700">Don't Panic</span>
            <h2 data-aos="fade-right" data-aos-duration="700" style="padding-left: 7.3em;">Just Give Us A Call</h2>
        </h2>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1">
            </div>

            <div class="col-lg-8">
            </div>

            <div class="col-lg-3">
            </div>

        </div>
    </div>
</div>

<?php
get_footer();
