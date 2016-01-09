<?php 
add_action('after_setup_theme', 'paranoid_setup');
function paranoid_setup(){
    // 主题添加翻译支持
    load_theme_textdomain('paranoid', get_template_directory().'/languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    // 导航栏
    add_action( 'init', 'register_paranoid_menus' );
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

// 压缩html (代码来自网络)
function wp_compress_html(){
    function wp_compress_html_main ($buffer){
        $initial=strlen($buffer);
        $buffer=explode("<!--wp-compress-html-->", $buffer);
        $count=count ($buffer);
        for ($i = 0; $i <= $count; $i++){
            if (stristr($buffer[$i], '<!--wp-compress-html no compression-->')) {
                $buffer[$i]=(str_replace("<!--wp-compress-html no compression-->", " ", $buffer[$i]));
            } else {
                $buffer[$i]=(str_replace("\t", " ", $buffer[$i]));
                $buffer[$i]=(str_replace("\n\n", "\n", $buffer[$i]));
                $buffer[$i]=(str_replace("\n", "", $buffer[$i]));
                $buffer[$i]=(str_replace("\r", "", $buffer[$i]));
                while (stristr($buffer[$i], '  ')) {
                    $buffer[$i]=(str_replace("  ", " ", $buffer[$i]));
                }
            }
            $buffer_out.=$buffer[$i];
        }
        $final=strlen($buffer_out);   
        $savings=($initial-$final)/$initial*100;   
        $savings=round($savings, 2);   
        $buffer_out.="\n<!--压缩前的大小: $initial bytes; 压缩后的大小: $final bytes; 节约：$savings% -->";   
    return $buffer_out;
}
ob_start("wp_compress_html_main");
}
add_action('get_header', 'wp_compress_html');