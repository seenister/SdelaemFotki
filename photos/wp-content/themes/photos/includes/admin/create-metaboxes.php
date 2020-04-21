<?php
function p_create_metaboxes() {
    add_meta_box(
        'p_order_options_mb',
        'Метабоксы заказа',
        'p_order_options_mb',
        'order',
        'normal',
        'high'
    );
}