<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
		<div class="col-lg-4">
			<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
		</div>
		<div class="col-8">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php understrap_posted_on(); ?>
		<?php the_excerpt(); ?>
		<?php //understrap_entry_footer(); ?>
		</div>
	</div>

</article><!-- #post-## -->

<hr />