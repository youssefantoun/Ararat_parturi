<?php
/*
    add My custums style
    wp_enqueue_style()
*/
function add_styles()
{
    wp_enqueue_style("normalize-css", get_template_directory_uri() . "/css/normalize.css");
    wp_enqueue_style("all-css", get_template_directory_uri() . "/css/all.min.css");
    wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css");
}

/*
    add My custums script
    wp_enqueue_script()
*/
function add_script()
{
    wp_deregister_script("jquery"); //remove register jquery
    // register new jquery in footer
    wp_register_script("jquery", includes_url("/js/jquery/jquery.js"), array(), false, true);
    // enqueue the new jquery
    wp_enqueue_script("jquery");
    wp_enqueue_style("all-js", get_template_directory_uri() . "/js/all.min.js", array("jquery"), false, true);
    wp_enqueue_script("main-js", get_template_directory_uri() . "/js/main.js", array(), false, true);
}

/*
    add action for styles and scripts
    add_action( tag, function_to_add, priority, accepted_args )
*/
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_script");

/*
    Add custom support
*/

function register_custom_menu()
{
    register_nav_menus(array(
        "menu" => "navigation bar"
    ));
}

add_action("init", "register_custom_menu");

function menu()
{
    wp_nav_menu(array(
        "theme_location" => "menu",
        "menu_id" => "nav_bar_list",
        "menu_class" => "list",
        "container" => false,
        "depth" => 2,
    ));
}

function remove_paragraph($content) {
    remove_filter('the_content','wpautop');
    return $content;
}

add_filter( 'the_content', 'remove_paragraph', 0 );

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://localhost/wordpress/wp-content/uploads/2024/10/289947707_1325979094478382_7815015605527300029_n.jpg';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}