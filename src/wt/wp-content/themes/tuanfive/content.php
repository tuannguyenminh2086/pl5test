<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>



<div class="slide" id="slide<?php the_ID(); ?>" data-slide="<?php the_ID(); ?>" data-stellar-background-ratio="0.5">
	<?php the_content(); ?>
	<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
</div>

