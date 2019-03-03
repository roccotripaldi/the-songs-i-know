<?php
/**
 * The template for displaying a single song's lyrics.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

get_header(); ?>
<?php get_template_part( 'back-button-bar' ); ?>
<div id="single-song">
	<?php while( have_posts() ): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php
get_footer();
