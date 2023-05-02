<?php

wp_enqueue_style('style', get_stylesheet_uri(), []);

function astra_child_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(), []);
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child-style',
    //     get_stylesheet_directory_uri() . '/style.css',
    //     array('parent-style')
    // );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );


add_filter( 'wp_nav_menu_objects', 'remove_menu_item', 10, 2 );

function remove_menu_item( $items, $args ) {
    $user = wp_get_current_user();
    if( ! ($user && isset($user->user_login)) ) {  //user qui n'a pas de login on recree les items sans Admin
        $new_items = array();
        foreach ( $items as $item ) {
            if ( $item->title != 'Admin' ) { // On enlève l'Item de l'admin.
               
                array_push( $new_items, $item );
            }
        }
        return $new_items;
    }
    return $items;
}

function my_custom_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'my_custom_menu' );


add_filter( 'wp_nav_menu_items', 'remove_menu_item2', 10, 2 );
function remove_menu_item2( $items, $args ) {
    if ( ! is_user_logged_in() && $args->theme_location == 'primary' ) {
        // Remplacez "slug-de-la-page-a-retirer" par le slug de la page que vous souhaitez retirer du menu
        $items = str_replace( '<li id="page-item-20" class="menu-item menu-item-type-post_type menu-item-object-page page-item-20"><a href="localhost/planty/admin">Admin</a></li>', '', $items );
    }
    return $items;
}




//  function remove_admin_link($navbar)
// {
//      if (true){
//          $navbar -> remove_node('menu-item-22');
//      }
//  }
// add_action('wp_before_admin_bar_render','remove_admin_link',800);

?>