<?php

add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init

function true_register_post_type_init() {
    $labels = array(
        'name' => 'Отзывы - список отзывов',
        'singular_name' => 'отзывы', // админ панель Добавить->Функцию
        'add_new' => 'Добавить отзыв',
        'add_new_item' => 'Добавить новый отзыв', // заголовок тега <title>
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'all_items' => 'Все отзывы',
        'view_item' => 'Просмотр отзыва на сайте',
        'search_items' => 'Искать отзыв',
        'not_found' =>  'элементов не найдено.',
        'not_found_in_trash' => 'В корзине нет элементов.',
        'menu_name' => 'Отзывы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/core/img/category.png', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'thumbnail', 'editor')
    );
    register_post_type('banhome', $args);
}
