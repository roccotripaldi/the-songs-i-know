<?php
/**
 * The template for displaying the list of songs on the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

wp_head(); ?>

<table>
	<?php while( have_posts() ): the_post() ?>
		<?php $song = parse_blocks( get_the_content() )[0]['attrs']; ?>
        <?php $posttags = get_the_tags(); ?>
		<tr>
			<td><?php echo $song['title'] ?></td>
			<td><?php echo $song['artist']; ?></td>
            <td>
                <?php if ( is_array( $posttags ) ) : ?>

                    <?php foreach( $posttags as $tag ) : ?>
                    <span><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>

                 <?php endif; ?>
            </td>
		</tr>
	<?php endwhile; ?>
</table>

<?php
wp_footer();
