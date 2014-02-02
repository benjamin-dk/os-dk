
<?php
	/*
*  Get selected image cropped to a specific size
*  Return value = ID ( allows us to get more data about the image )
*  This example uses the WP function: wp_get_attachment_image_src - http://codex.wordpress.org/Function_Reference/wp_get_attachment_image_src
*/
$attachment_id = get_field('case_logo');
$size = "sidebar-thumb"; // (thumbnail, medium, large, full or custom size)

$image = wp_get_attachment_image_src( $attachment_id, $size );

?>
<div id="sidebar-case" class="fluid-sidebar sidebar span4" role="complementary">
	<div class="well">
		<h3>Projekt facts</h3>
		<div class="case-logo"><img src="<?php echo $image[0]; ?>" /></div>

		<dl class="dl-horizontal">
			<dt>Version:</dt>
			<dd><?php the_field('version');  ?></dd>
			<dt>Udviklingsstatus:</dt>
			<dd><?php the_field('projekt_status');  ?></dd>
			<dt>Antal aktive udviklere:</dt>
			<dd><?php the_field('antal_aktive_udviklere');  ?></dd>
		</dl>
		<div class="case-url"><a class="case-url btn btn-success" 
			href="<?php the_field('website');  ?>" title="Project URL">Download</a>
		</div>

	</div>



</div>