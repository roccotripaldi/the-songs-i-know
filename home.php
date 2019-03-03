<?php
/**
 * The template for displaying the list of songs on the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package songs
 */

get_header(); ?>
<div id="home">
<table id="song-list">
    <thead>
    <tr>
        <td class="song-title">Title</td>
        <td class="song-artist">Artist</td>
        <td class="song-tags">Tags</td>
    </tr>
    </thead>
    <tbody>
	<?php while( have_posts() ): the_post() ?>
		<?php $song = parse_blocks( get_the_content() )[0]['attrs']; ?>
		<?php $posttags = get_the_tags(); ?>
        <tr>
            <td class="song-title"><?php echo $song['title'] ?></td>
            <td class="song-artist"><?php echo $song['artist']; ?></td>
            <td class="song-tags">
				<?php if ( is_array( $posttags ) ) : ?>
					<?php $tags = implode(', ', wp_list_pluck( $posttags,'name') ); ?>
                    <span><?php echo $tags; ?></span>
				<?php endif; ?>
            </td>
        </tr>
	<?php endwhile; ?>
    </tbody>
</table>
<div id="song-request">
    <a role="button" href="/learn">What Song Should I Learn?</a>
</div>
<script>
    jQuery(document).ready(function() {
        jQuery('#song-list').DataTable( { paging: false } );
    } );
</script>
</div>
<?php
get_footer();
