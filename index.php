<?php
/**
 * The template for displaying a single song's lyrics.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

wp_head(); ?>
	<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
<?php
wp_footer();
