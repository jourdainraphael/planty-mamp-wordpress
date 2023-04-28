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

 




//  function remove_admin_link($navbar)
// {
//      if (true){
//          $navbar -> remove_node('menu-item-22');
//      }
//  }
// add_action('wp_before_admin_bar_render','remove_admin_link',800);

?>