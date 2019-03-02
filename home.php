<?php
/**
 * The template for displaying the list of songs on the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

wp_head(); ?>

<table id="song-list">
    <thead>
    <tr>
        <td>Title</td>
        <td>Artist</td>
        <td>Tags</td>
    </tr>
    </thead>
    <tbody>
    <?php while( have_posts() ): the_post() ?>
	    <?php $song = parse_blocks( get_the_content() )[0]['attrs']; ?>
	    <?php $posttags = get_the_tags(); ?>
        <tr>
            <td><?php echo $song['title'] ?></td>
            <td><?php echo $song['artist']; ?></td>
            <td>
			    <?php if ( is_array( $posttags ) ) : ?>
                    <?php $tags = implode(', ', wp_list_pluck( $posttags,'name') ); ?>
                    <span><?php echo $tags; ?></span>
			    <?php endif; ?>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
<script>
    jQuery(document).ready(function() {
        jQuery('#song-list').DataTable( { paging: false } );
    } );
</script>
<?php
wp_footer();
