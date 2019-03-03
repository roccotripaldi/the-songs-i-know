<?php
/**
 * The template for displaying a request form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

get_header(); ?>
<?php get_template_part( 'back-button-bar' ); ?>
<div id="request">
	<?php while( have_posts() ): the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php
get_footer();
