<?php
function p_admin_enqueue() {
    global $typenow;
    if( $typenow !== 'order' ) {
        return;
    }

    wp_register_style( 'p_bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap.min.css');
    wp_enqueue_style( 'p_bootstrap' );

    wp_register_script('p_options', get_template_directory_uri() . '/assets/admin/options.js', array(), false, true);
    wp_enqueue_media();
    wp_enqueue_script('p_options');

}
