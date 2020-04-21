<?php

function p_theme_opts_page() {
    $theme_opts      =  get_option('p_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Опции Темы'; ?>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                if(isset($_GET['status']) && $_GET['status'] == 1) {
                    ?>
                    <div class="alert alert-success">Успех!</div>
                    <?php
                }
                ?>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="p_save_options">
                    <?php wp_nonce_field('p_options_verify'); ?>

                    <h5>Опции контактных форм (укажите шорткоды, генерируемые плагином контактных форм)</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы заказа фотографий</label><br>
                            <input type="text" name="p_input_order_form_shortcode"
                                   value="<?php
                                   $order_form_shortcode = html_entity_decode(htmlentities($theme_opts['order_form_shortcode']));
                                   echo $order_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>

                    </div>


                    <br><br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo 'Сохранить'; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}