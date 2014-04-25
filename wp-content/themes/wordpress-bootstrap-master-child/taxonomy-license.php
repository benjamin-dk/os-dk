<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">
				
					<div class="page-header">
						<h1 class="archive_title h2">
							<span><?php _e("Licens:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
						</h1>
					</div>
					<?php $term_description = term_description( '', get_query_var( 'taxonomy' ) );
					if($term_description != '') : ?>
						<div class="tag-desc"><?php echo $term_description; ?></div>
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>