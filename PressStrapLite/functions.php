<?php 
// load css and javascript
	function cowsun_load_styles_and_scripts(){
		// load styles and scripts with wordpress functions
		// wordpress function returns our themes root directory depending on where wordpress is installed concatinated with which bootstrap css file we want to include (change to non min for custom bootstrap setup)

		wp_enqueue_style(
			'bootstrap-style-sheet',
			$src = get_template_directory_uri().'/css/bootstrap.min.css'
		);

		wp_enqueue_style(
			'custom-style-sheet',
			$src = get_template_directory_uri().'/css/custom.css'
		);
		
		wp_enqueue_style(
			'main-style-sheet',
			$src = get_template_directory_uri().'/style.css'
		);

		wp_enqueue_script(
			'bootstrap-js', 
			$src = get_template_directory_uri().'/js/bootstrap.min.js',
			array( 'jquery' )
		);
	}

// wordpress function to add our function into the list of scripts to be run.
add_action('wp_enqueue_scripts','cowsun_load_styles_and_scripts');

// Register main nav
register_nav_menus( $locations=array(
									'main-nav' => 'Main Navigation'
								)

);


// Register side bars

register_sidebar( array( 
						'name'			=> 'left',
						'description'	=> 'This is the left-sidebar',

						'before_title'	=> '<h4>',
						'after_title'	=> "</h4>"
						)	
);


// Register Footer Widgets/Areas

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description'   => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}





