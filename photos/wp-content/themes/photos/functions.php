<?php

//Setup

//Includes
include('includes/init.php');
include('includes/admin/init.php');
include('process/save-post.php');
include('includes/admin/menus.php');
include('includes/admin/options-page.php');
include('process/save-options.php');

//Action and Filter Hooks
add_action('init', 'photos_init');
add_action('admin_init', 'photos_admin_init');
add_action('save_post_order', 'p_save_post_admin', 10, 3 );
add_action('admin_menu', 'p_admin_menus');




//Shortcodes