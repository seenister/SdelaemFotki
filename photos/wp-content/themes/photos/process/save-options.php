<?php

function p_save_options() {
    if(!current_user_can('edit_theme_options')) {
        wp_die('Вам нельзя находиться на этой странице');
    }

    check_admin_referer('p_options_verify');

    $opts                      =  get_option('p_opts');

    $opts['order_form_shortcode']    =  htmlentities(stripslashes($_POST['p_input_order_form_shortcode']));


    update_option('p_opts', $opts);

    wp_redirect(admin_url('admin.php?page=p_theme_opts&status=1'));
}