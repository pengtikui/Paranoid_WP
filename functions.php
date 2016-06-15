<?php 
add_action('after_setup_theme', 'paranoid_setup');
function paranoid_setup(){
    // 主题添加翻译支持
    load_theme_textdomain('paranoid', get_template_directory().'/languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
}

// 侧边栏
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'			=> __('侧边栏', 'paranoid'),
		'id' 			=> 'sidebar',
		'description' 	=> '',
		'class' 		=> '',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
}

// 导航栏
function register_paranoid_menus(){
    register_nav_menus(
        array('header_menu' => __('顶部导航栏', 'paranoid'))
    );
}
add_action( 'init', 'register_paranoid_menus' );

// 主题选项
include_once('inc/options.php');