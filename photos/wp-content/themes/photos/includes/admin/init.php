<?php
    function photos_admin_init() {
        include('create-metaboxes.php');
        include('order-options.php');
        include('enqueue.php');

        add_action( 'add_meta_boxes_order', 'p_create_metaboxes' );
        add_action( 'admin_enqueue_scripts', 'p_admin_enqueue' );

        add_action('admin_post_p_save_options', 'p_save_options');

    }