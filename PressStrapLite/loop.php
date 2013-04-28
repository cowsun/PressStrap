
<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();
				
	the_content();
	
	endwhile;
	//post navigation 
	else: 
	//no posts found
	endif;
	//stuff doesn't work without this
	wp_reset_query();
?>

