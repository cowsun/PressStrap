
			<div class="container">
				<div class="row">

			        <div class="span3">
			            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
			        </div>

			        <div class="span6">
			            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
			        </div>

			        <div class="span3">
			            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
			        </div>
				</div>
			</div>

			<?php wp_footer();?>
		<!-- close wrapper extending from header -->
		</div> 
	</body>
</html>