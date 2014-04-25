
<?php
	/*
*  Get selected image cropped to a specific size
*  Return value = ID ( allows us to get more data about the image )
*  This example uses the WP function: wp_get_attachment_image_src - http://codex.wordpress.org/Function_Reference/wp_get_attachment_image_src
*/
$attachment_id = get_field('case_logo');
$size = "sidebar-thumb"; // (thumbnail, medium, large, full or custom size)

$image = wp_get_attachment_image_src( $attachment_id, $size );

/** Get the license(s) on the case **/
$post_id = get_the_ID();
$terms = get_the_terms($post_id, 'license');
$i = 0;
$term_name = "";
$term_output = "";
$slug_start = "/licenser/";
if ($terms != null) {
	foreach($terms as $t) {
		if ($i > 0) {
			echo ", ";
		}
		$term_name = $t->name;
		$term_slug = $t->slug;
		$term_output .= "<a href='$slug_start$term_slug' >$term_name</a>";
		$i++;
	};
} 


/** Get the labels **/
$field_projekt_status = get_field_object('projekt_status');
$title_projekt_status = $field_projekt_status['label'];
$value_projekt_status = get_field('projekt_status');
$label_projekt_status = $field_projekt_status['choices'][ $value_projekt_status ];

?>
<div id="sidebar-case" class="fluid-sidebar sidebar span4" role="complementary">
	<div class="well">
		<h3>Projekt facts</h3>
		<div class="case-logo"><img src="<?php echo $image[0]; ?>" /></div>


		<dl class="dl-horizontal">
			<dt>Version:</dt>
			<dd><?php the_field('version');  ?>&nbsp;</dd>
			<dt><?php echo $title_projekt_status; ?></dt>
			<dd><?php echo $label_projekt_status;  ?>&nbsp;</dd>
			<dt>Antal aktive udviklere:</dt>
			<dd><?php the_field('antal_aktive_udviklere');  ?>&nbsp;</dd>
			<dt>Licens:</dt>
			<dd><?php echo $term_output; ?>
		</dd>
		</dl>
		<div class="case-url"><a class="case-url btn btn-success" 
			href="<?php the_field('website');  ?>" title="Project URL"><?php _e("Projektets hjemmeside", "bonestheme"); ?></a>
		</div>

	</div>



</div>