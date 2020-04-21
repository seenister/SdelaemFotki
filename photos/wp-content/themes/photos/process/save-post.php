<?php
function p_save_post_admin( $post_id, $post, $update ) {
    if(!$update) {
        return;
    }
    
    $order_data = array();
    $order_data['code'] = sanitize_text_field($_POST['p_inputCode']);
    $order_data['status'] = sanitize_text_field($_POST['p_inputStatus']);
    $order_data['requisites'] = sanitize_text_field($_POST['p_inputRequisites']);
    $order_data['payment'] = sanitize_text_field( $_POST['p_inputPayment'] );
    $order_data['shipment'] = sanitize_text_field( $_POST['p_inputShipment'] );
    $order_data['retouch'] = sanitize_text_field( $_POST['p_inputRetouch'] );
    $order_data['img-1'] = esc_url_raw( $_POST['p_inputImg-1'] );
    $order_data['img-2'] = esc_url_raw( $_POST['p_inputImg-2'] );
    $order_data['img-3'] = esc_url_raw( $_POST['p_inputImg-3'] );
    $order_data['img-4'] = esc_url_raw( $_POST['p_inputImg-4'] );
    $order_data['img-5'] = esc_url_raw( $_POST['p_inputImg-5'] );
    $order_data['img-6'] = esc_url_raw( $_POST['p_inputImg-6'] );
    $order_data['img-7'] = esc_url_raw( $_POST['p_inputImg-7'] );
    $order_data['img-8'] = esc_url_raw( $_POST['p_inputImg-8'] );
    $order_data['img-9'] = esc_url_raw( $_POST['p_inputImg-9'] );
    $order_data['img-10'] = esc_url_raw( $_POST['p_inputImg-10'] );
    $order_data['comment'] = sanitize_text_field( $_POST['p_inputComment'] );


    update_post_meta( $post_id, 'order_data', $order_data );
}