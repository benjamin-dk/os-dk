<?php
/**
 * Loop display content when viewing a date archive
 * @package Girder child theme for Wonderflux framework
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-title">

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Read %s', 'open-source-dk' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>

	</div>


	<div class="entry-content">

		<p><?php wfx_excerpt('limit=20'); ?></p>

		<p><a class="focus-button" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'View %s', 'open-source-dk' ), the_title_attribute( 'echo=0' ) ); ?>"><?php esc_html_e( 'View', 'open-source-dk' ) ?></a></p>

	</div>

</div>