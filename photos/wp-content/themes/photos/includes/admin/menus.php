<?php

function p_admin_menus() {
    add_menu_page(
        'Страница Опций Темы',
        'Опции Темы',
        'edit_theme_options',
        'p_theme_opts',
        'p_theme_opts_page'
    );
}