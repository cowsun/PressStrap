<?php
/*
This is the 'default' wordpress template
*/
 ?>

<?php get_header(); ?>

	<div class="row">
		<div class="span12">
			<?php get_template_part( 'loop' ); ?>
		</div>
	</div>


<?php get_footer(); ?>
