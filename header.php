<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Nothing+You+Could+Do&family=Open+Sans:wght@400;500&family=Pacifico&family=Permanent+Marker&family=Righteous&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

	<!-- ******************* The Navbar Area *******************-->
	<div id="wrapper-navbar">
		<div class= "top-header-holder">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<a href='/PanicSpot'class = "logo-holder" data-aos="zoom-in" data-aos-duration="1000">
							<img src="<?php echo get_template_directory_uri();?>/img/panicLog21.png" alt="the Panic Spot Logo">
						</a>
					</div>

					<div class="col-md-6">
						<div class="reservation-holder" data-aos="fade-down" data-aos-duration="800">
							<div class="contact-holder" style="text-align:center;">
								<a href='#' class="phone">
									<i class="fa fa-phone"></i>
									02 9791 6776
								</a>

								<a href='#' class="address">
								<i class="fa fa-map"></i>
								Lot 042, Str."Lower Uphill", Sofia
								</a>

							<div class="social-media-holder-tablet">
								<a href='#'><i class="fa fa-facebook"></i>
								</a>
								<a href='#'><i class="fa fa-instagram"></i>
								</a>
								<!--<a href='#'><i class="fa fa-twitter"></i></a>-->
							</div>
								<button class="navbar-toggler md-view"
									type="button" data-toggle="collapse"
									data-target="#navbarNavDropdown" 
									aria-controls="navbarNavDropdown"
									aria-expanded="false" aria-label="
									<?php esc_attr_e( 'Toggle navigation',
									'understrap' ); ?>">

									<div class="menu-title">										
										Menu
									</div>

									<div>
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>			

								</button>
					    	</div>
								<a href='#' class="reservation-btn style="text-align:center;">Make a Reservation </a>
						</div>
					</div>

				<div class="col-">
					<button class="navbar-toggler"
						type="button" data-toggle="collapse"
						data-target="#navbarNavDropdown" 
						aria-controls="navbarNavDropdown"
						aria-expanded="false" aria-label="
						<?php esc_attr_e( 'Toggle navigation',
						'understrap' ); ?>">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="menu-title">
							Menu
						</div>
					</button>

					<div class="social-media-holder" data-aos="fade-left" data-aos-duration="1200">
						<a href='#'><i class="fa fa-facebook"></i></a>
						<a href='#'><i class="fa fa-instagram"></i></a>
						<!--<a href='#'><i class="fa fa-twitter"></i></a>-->
					</div>

				</div>	
			</div>
		</div>
	</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label"> <!--style="background-color:red;"-->

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

	
			<div class="container">
		

					<!-- Your site title as branding in the menu -->
					
					<!-- end custom logo -->

				

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			
			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->
		
		<!-- #wrapper-navbar end -->

	<div class="container" style="background: linear-gradient(-35deg, #fca57a, #fe9b36,#ffc801,#ffcb1e,#ffcb1e );  max-width:1250px;" >
		<div class="mobile-logo-holder" style="margin-right:1em;">
			<div>
				<a href='/PanicSpot'>
					<img src="<?php echo get_template_directory_uri();?>/img/panicLog21.png" alt="the Panic Spot Logo">
				</a>
			</div>

			<div>
				<a href='#' class="reservation-btn mobile" >Make a Reservation </a>
			</div>
		</div>
	</div>
