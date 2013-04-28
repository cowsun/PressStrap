<?php 
/*
Template Name: Sidebar Left Template
*/
?>

<?php get_header(); ?>

<div class="row">
	
	<div class="span3">
		<?php get_sidebar( 'left' ); ?>
	</div>
	<div class="span6">
		<?php get_template_part( 'loop' ); ?>
	</div>
	<div class="span3">
	</div>

</div>


<?php get_footer(); ?>

