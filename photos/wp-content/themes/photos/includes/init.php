<?php
function photos_init() {
    $labels = array(
        'name' => 'Заказы',
        'singular_name' => 'Заказ',
        'menu_name' => 'Заказы',
        'name_admin_bar' => 'Заказы',
        'add_new' => 'Добавить новый заказ',
        'add_new_item' => 'Добавить новый заказ',
        'new_item' => 'Новый заказ',
        'edit_item' => 'Редактировать заказ',
        'view_item' => 'Просмотреть заказ',
        'all_items' => 'Все заказы',
        'search_items' => 'Поиск заказов',
        'not_found' => 'Заказы не найдены',
        'not_found_in_trash' => 'Заказы не найдены в корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Пользовательский тип записи для оформеленного заказа на печать фотографий',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'order' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title' )
    );
    register_post_type( 'order', $args );
}