<?php
function p_order_options_mb() {
    global $post;
    $order_data = get_post_meta( $post->ID, 'order_data', true );
    
    ?>
    <div class="form-group">
        <label>Код заказа</label>
        <input type="text" class="form-control" name="p_inputCode" value="<?php if (isset($order_data['code'])) echo $order_data['code']; ?>">
    </div>
    <div class="form-group">
        <label>Статус заказа</label>
        <input type="text" class="form-control" name="p_inputStatus" value="<?php if (isset($order_data['status'])) echo $order_data['status']; ?>">
    </div>

    <div class="form-group">
        <label>Ф.И.О.</label>
        <input type="text" class="form-control" name="p_inputRequisites" value="<?php if (isset($order_data['requisites'])) echo $order_data['requisites']; ?>">
    </div>
    <div class="form-group">
        <h4>Способ оплаты</h4>
        <label>Безналичный расчет</label>
        <input type="radio" class="form-control" name="p_inputPayment" value="cashless" <?php if (isset($order_data['payment']) && ($order_data['payment'] == 'cashless')) echo 'checked'; ?>>
        <label>Наличный расчет</label>
        <input type="radio" class="form-control" name="p_inputPayment" value="cash" <?php if (isset($order_data['payment']) && ($order_data['payment'] == 'cash')) echo 'checked'; ?>>
    </div>
    <div class="form-group">
        <h4>Способ доставки</h4>
        <label>Доставка</label>
        <input type="radio" class="form-control" name="p_inputShipment" value="delivery" <?php if (isset($order_data['shipment']) && ($order_data['shipment'] == 'delivery')) echo 'checked'; ?>>
        <label>Самовывоз</label>
        <input type="radio" class="form-control" name="p_inputShipment" value="pickup" <?php if (isset($order_data['shipment']) && ($order_data['shipment'] == 'pickup')) echo 'checked'; ?>>
    </div>
    <div class="form-group">
        <label>Необходимость ретуширования</label>
        <input type="checkbox" class="form-control" name="p_inputRetouch" value="1" <?php if (isset($order_data['retouch']) && ($order_data['retouch'] == '1')) echo 'checked'; ?>>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h6>Изображения</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Первое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-1'])) echo $order_data['img-1']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-1" value="<?php if (isset($order_data['img-1'])) echo $order_data['img-1']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Второе</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-2'])) echo $order_data['img-2']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-2" value="<?php if (isset($order_data['img-2'])) echo $order_data['img-2']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Третье</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-3'])) echo $order_data['img-3']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-3" value="<?php if (isset($order_data['img-3'])) echo $order_data['img-3']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Четвертое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-4'])) echo $order_data['img-4']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-4" value="<?php if (isset($order_data['img-4'])) echo $order_data['img-4']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Пятое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-5'])) echo $order_data['img-5']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-5" value="<?php if (isset($order_data['img-5'])) echo $order_data['img-5']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Шестое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-6'])) echo $order_data['img-6']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-6" value="<?php if (isset($order_data['img-6'])) echo $order_data['img-6']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Седьмое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-7'])) echo $order_data['img-7']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-7" value="<?php if (isset($order_data['img-7'])) echo $order_data['img-7']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Восьмое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-8'])) echo $order_data['img-8']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-8" value="<?php if (isset($order_data['img-8'])) echo $order_data['img-8']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Девятое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-9'])) echo $order_data['img-9']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-9" value="<?php if (isset($order_data['img-9'])) echo $order_data['img-9']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Десятое</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($order_data['img-10'])) echo $order_data['img-10']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="" name="p_inputImg-10" value="<?php if (isset($order_data['img-10'])) echo $order_data['img-10']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label>Комментарий к заказу</label><br>
        <textarea name="p_inputComment" id="" cols="30" rows="10"><?php if (isset($order_data['comment'])) echo $order_data['comment']; ?></textarea>
    </div>
    <?php
}