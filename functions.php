<?php
include_once('core/dk.php');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

if (!current_user_can('administrator')):
    show_admin_bar(false);
endif;
add_theme_support('post-thumbnails');

add_filter( 'show_admin_bar', '__return_false' );
add_filter('use_block_editor_for_post', '__return_false', 10);

function create_country() {
    register_taxonomy('country', 'post', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x( 'Страны и регионы', 'taxonomy general name' ),
            'singular_name' => _x( 'Страна', 'taxonomy singular name' ),
            'search_items' =>  __( 'Найти страны' ),
            'all_items' => __( 'Все страны' ),
            'parent_item' => __( 'Регион' ), // родительская таксономия
            'parent_item_colon' => __( 'Родительский регион:' ),
            'edit_item' => __( 'Редактировать страну' ),
            'update_item' => __( 'Обновить страну' ),
            'add_new_item' => __( 'Добавить новую страну' ),
            'new_item_name' => __( 'Название новой страны' ),
            'menu_name' => __( 'Страны и регионы' ),
        ),
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'country',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
}
add_action( 'init', 'create_country', 0 );

register_nav_menus(array(
    'main'    => 'Верхнее меню',
));

