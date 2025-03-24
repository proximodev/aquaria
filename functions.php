<?php


function my_theme_enqueue_styles() {
	wp_enqueue_style( 'my-theme-style', get_stylesheet_uri(), array(), );
	$lastmodtime= filemtime(get_template_directory_uri(). '/css/format.css');
	wp_enqueue_style( 'format', get_template_directory_uri(). '/css/format.css',array(),$lastmodtime);
	wp_enqueue_style( 'typestyles', get_template_directory_uri(). '/css/type-styles.css' );
	wp_enqueue_style( 'grid_boxes', get_template_directory_uri(). '/css/grid_boxes.css' );
	wp_enqueue_style( 'video-modal', get_template_directory_uri(). '/css/video-modal.css' );
	wp_enqueue_style( 'video-bgs', get_template_directory_uri(). '/css/bg_videos.css' );
	wp_enqueue_script('fontawesome-js', '//kit.fontawesome.com/9f6f90d785.js', array( 'jquery' ), '1.0', true ); 
	wp_enqueue_style( 'gravity-forms', get_template_directory_uri(). '/css/gravity-forms.css' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
	wp_enqueue_script('lottie', '//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js', array(), null, true);
	wp_enqueue_script('lottie-player', '//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);
	wp_enqueue_script('lottie-interactivity', '//unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js', array('lottie'), null, true);
	wp_enqueue_script('lottie-script', get_template_directory_uri() . '/js/lottie-script.js', array('lottie'), null, true);
	wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '3.11.5', true );
	wp_enqueue_script( 'ScrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array('gsap'), '3.11.5', true );
	wp_enqueue_script( 'gsap-settings', get_stylesheet_directory_uri() . '/js/gsap-options.js', array('gsap', 'ScrollTrigger'), '1.0', true );
	wp_enqueue_script('carousel-script',get_template_directory_uri() . '/js/crausel.js',array('jquery'),null,true);
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



function enqueue_banner_script() {
	wp_enqueue_script('banner-js', get_template_directory_uri() . '/js/banner.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_banner_script');



// Salesforce JS
function enqueue_salesloft_integration_script() {
	wp_register_script('salesloft-integration', get_template_directory_uri() . '/js/salesloft-integration.js', array(), true
);

	wp_enqueue_script('salesloft-integration');
}

add_action('wp_enqueue_scripts', 'enqueue_salesloft_integration_script');





// modal-video.js - jQuery Modal Video Plugin
// https://appleple.github.io/modal-video/
function enqueue_modal_video_scripts() {
	wp_enqueue_script('gmlaunch-model-video', get_template_directory_uri() . '/js/videos-model.js', array(), '20151215', true );
	wp_enqueue_script('gmlaunch-model-video-int', get_template_directory_uri() . '/js/videos-model-int.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_modal_video_scripts' );


// Used for header menu
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', 'jquery', '3.1.1', true); 
	wp_enqueue_script('jquery');
}




// Custom Pop-up
// https://www.creativeapproach.com.au/creating-pop-modal-advanced-custom-fields-revisited/
// https://github.com/kylefox/jquery-modal#installation
// jquerymodal.com

function load_javascript_file() {
	wp_enqueue_script('modal', '//cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', array( 'jquery' ), '1.0', true ); 
	wp_enqueue_script('modal-js', get_template_directory_uri() . '/js/modal.js', array('jquery'), '', false);
	wp_enqueue_script('modal');
}




add_action('wp_enqueue_scripts', 'load_javascript_file' );


// Pre-get Post Blog
function custom_blog_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( $query->is_home() || $query->is_archive() && ! is_post_type_archive( 'resources' ) ) {
		$query->set( 'posts_per_page', 12 );
	}
}
add_action( 'pre_get_posts', 'custom_blog_posts_per_page', 5 ); // Set a lower priority value

// Pre-get Post Resources
function custom_resources_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_post_type_archive( 'resources' ) ) {
		$query->set( 'posts_per_page', 10 );
		$query->set( 'orderby', 'menu_order' );
		$query->set( 'order', 'ASC' );
	}
}
add_action( 'pre_get_posts', 'custom_resources_per_page', 10 ); // Set a higher priority value

// Pre-get Post FAQs
function custom_faqs_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_post_type_archive( 'faqs' ) ) {
		$query->set( 'posts_per_page', 10 );
		$query->set( 'orderby', 'menu_order' );
		$query->set( 'order', 'ASC' );
	}
}
add_action( 'pre_get_posts', 'custom_faqs_per_page', 10 ); // Set a higher priority value





function acf_global_variables () {

	if  ( is_home() || is_archive() || is_single() ) {
		global $variable;
		$variable = 'header_white_bg';

	} else {
		global $variable;
		$variable = 'none';
	}
}

add_action( 'template_redirect', 'acf_global_variables' );





// Limit post revisions
function limit_post_revisions( $num, $post ) {
    $limit = 3; // Set the desired number of revisions

    if ( $post->post_type == 'post' ) {
    	return $limit;
    }

    return $num;
}
add_filter( 'wp_revisions_to_keep', 'limit_post_revisions', 10, 2 );





function aquaria_setup() {


	add_theme_support( 'automatic-feed-links' );
	add_theme_support('title-tag');  // Commented out
	add_theme_support( 'post-thumbnails' );



	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'aquaria' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'aquaria_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'aquaria_setup' );







function lc_shortcode($atts, $content = null) {
	return '<div class="leadership_credits">' . do_shortcode($content) . '</div>';
}
add_shortcode('lc', 'lc_shortcode');



function lcp_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'name' => '',
		'position' => ''
	), $atts));

	return '<div class="leadership_credits_person">
	<h4 class="nomargin">' . $name . '</h4>
	<p>' . $position . '</p>
	</div>';
}
add_shortcode('lcp', 'lcp_shortcode');




function anchor_bottom_shortcode($atts, $content = null) {
	return '<div class="anchor_bottom"><p class="nomargin s">' . $content . '</p></div>';
}
add_shortcode('anchor_bottom', 'anchor_bottom_shortcode');



// Allow JSON Upload
function allow_json_mime($mimes) {
	$mimes['json'] = 'application/json';
	return $mimes;
}
add_filter('upload_mimes', 'allow_json_mime');


function custom_search_query($query) {
    if (!is_admin() && $query->is_main_query() && isset($_GET['search'])) {
        // Use 's' parameter with the value from 'search' for compatibility
        $query->set('s', sanitize_text_field($_GET['search']));
    }
}
add_action('pre_get_posts', 'custom_search_query');
