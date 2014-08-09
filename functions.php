<?php


function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,600');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hover_js', get_template_directory_uri() . '/js/hover.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_filter( 'show_admin_bar', '__return_false' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Register Nav Menus
 register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bdc' ),
	 'secondary_menu' => __( 'Secondary Menu', 'bdc' ),
) );

// create the homepage widget areas
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

}

create_widget( 'Front Page Column 1', 'front-column1', 'Displays in column 1 of the homepage' );
create_widget( 'Front Page Column 2', 'front-column2', 'Displays in column 2 of the homepage' );
create_widget( 'Front Page Column 3', 'front-column3', 'Displays in column 3 of the homepage' );
create_widget( 'Front Page Column 4', 'front-column4', 'Displays in column 4 of the homepage' );




// create the sidebar widget areas
function create_widget2( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}



create_widget2( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget2( 'Blog Sidebar', 'blog', 'Displays on the side of blog pages with a sidebar' );



// add theme support post formats
add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );






?>