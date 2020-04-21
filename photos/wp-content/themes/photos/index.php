
<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SdelaemFotki - Сервис заказа фотографий</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/main.css">

    <?php wp_head(); ?>
</head>



<body style="position: relative;">

<?php $theme_opts     =  get_option('p_opts'); ?>

<header class="make-darker">

    <div id="logo" onclick="slowScroll('#top')">
        <span>SdelaemFotki</span>
    </div>

    <div id="about">
        <a href="#" title="Почему мы?" onclick="slowScroll('#main')">Почему мы?</a>
        <a href="#" onclick="slowScroll('#makeanorder')" title="Сделать заказ">Сделать заказ</a>
        <a href="#" onclick="slowScroll('#followtheorder')" title="Отследить заказ">Отследить заказ</a>
        <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
    </div>
</header>

<div id="top" class="make-darker">
    <h2>Отправьте нам фотографии прямо сейчас</h2>
    <h3>и курьер доставит их Вам в печатном виде уже сегодня!</h3>
</div>



<div id="main" class="make-darker">
    <div class="intro">
        <h2>Мы - лучшие в своем деле!</h2>
    </div>
    <div class="text">
	 <span><center>Самая быстрая доставка фотографий в Москве: </br>
             </br> с отправки заказа в течение 90 минут курьер приедет к Вашей двери </br>
             <br>Работаем только на высокачественном оборудовании</br>
             <br>Низкие цены на производимые услуги<br></center></span>
    </div>
</div>



<div id="makeanorder" class="make-darker">										<!-- Блок Сделать заказ заказ -->
    <center><h5>Заполните форму и отправьте фотографии нам на печать уже сейчас!</h5></center>
    <form id="form_input">
        <a href="javascript:PopUpShow()">
            <div id="mess_send" class="btn order-button">Отправить</div>
        </a>
    </form>
</div>




<section class="order hidden" style="position: relative">
    <div class="container" style="width: 85%; margin-left: auto; margin-right: auto; background-color: #eee; padding-top: 2vw; padding-bottom: 2vw; position: absolute;">
        <div class="close" style="width: 40px; height: 40px; position: absolute; top: 0.5vw; right: 0.5vw; cursor: pointer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/close-icon.png" alt="" style="width: 100%;"></div>
        <h2>Отправьте нам фотографии прямо сейчас <span>и курьер доставит их Вам в печатном виде уже сегодня!</span></h2>

        <?php $order_form_shortcode = str_replace("&quot;", "'", $theme_opts['order_form_shortcode']);
        echo do_shortcode($order_form_shortcode); ?>
    </div>
</section>


<!--<section class="check hidden">-->
<!--    <div class="container" style="background-color: #eee; padding-top: 2vw; padding-bottom: 2vw; position: relative;">-->
<!--        <h4>Укажите код заказа</h4>-->
<!--        <div class="close" style="width: 40px; height: 40px; position: absolute; top: 0.5vw; right: 0.5vw; cursor: pointer;"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/close-icon.png" alt="" style="width: 100%;"></div>-->
<!--        <form action="/" class="check-form">-->
<!--            <input type="text" id="order-number" name="order-number" class="form-control" style="margin-bottom: 2vw;">-->
<!--            <input type="submit" class="form-control">-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->











<!---->
<!--<div class="b-popup" id="popup1">-->
<!--    <div class="b-popup-content">-->
<!--        <form id="form_input">-->
<!--            <center><label for="name">Введите ФИО <span>*</span></label><br></center>-->
<!--            <center><input type="text" placeholder="Введите ФИО"  id="sendfio"><br></center>-->
<!--            <center><label for="name">Выберите доставку <span>*</span></label><br></center>-->
<!--            <center><input type="text" placeholder="Курьер/Самовывоз"  id="senddelivery"><br></center>-->
<!--            <center><label for="name">Выберите способ оплаты <span>*</span></label><br></center>-->
<!--            <center><input type="text" placeholder="Наличными/картой"  id="sendpay"><br></center>-->
<!--            <center><label for="name">Напишите комментарий </label><br></center>-->
<!--            <center><input type="text" placeholder="..."  id="sendcommend"><br></center>-->
<!--            <center><div id="sendtosdelatzakaz" class="btn">Отправить</div></center>-->
<!--        </form>-->
<!--        <a href="javascript:PopUpHide()">Hide popup</a>-->
<!--    </div>-->
<!--</div>-->






<div id="followtheorder" class="make-darker">								<!-- Блок отследить отследить заказ -->
    <center><h5>Проверить состояние Вашего заказа </h5></center>
    <form id="form_input" action="/" class="check-form">
        <center><label for="name">Введите номер заказа <span>*</span></label><br></center>
        <center><input type="text" placeholder="Введите номер заказа" name="id" id="idorder" class="order-number"><br></center>
<!---->
<!--        <a href="javascript:PopUpShow2()">-->
<!--            <center><div id="mess_send2" class="btn">Отправить</div></center>-->
<!--        </a>-->

        <input type="submit" class="btn">

    </form>
</div>



<section class="result hidden" style="position: fixed; top: 5vw;">
    <div class="container" style="background-color: #eee; padding-top: 2vw; padding-bottom: 2vw; position: absolute;">
        <h4>Статус вашего заказа:</h4>
        <div class="close" style="width: 40px; height: 40px; position: absolute; top: 0.5vw; right: 0.5vw; cursor: pointer;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/close-icon.png" alt="" style="width: 100%;"></div>
        <p class="currentStatus"></p>
    </div>
</section>

<div id="contacts" class="make-darker">
    <div>
      <span class="heading">Контакты: г. Москва, ул. Селижорова, дом 34</br>
          тел: 84999999999</span>
    </div>




    <section class="hidden orders">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'order'
        ));
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();

                global $post;
                $metaboxes_data = get_post_meta($post->ID, 'order_data', true)
                ?>
                <div class="order">
                    <p class="code"><?php if (isset($metaboxes_data['code']) && ($metaboxes_data['code'] != '')) echo $metaboxes_data['code']; ?></p>
                    <p class="status"><?php if (isset($metaboxes_data['status']) && ($metaboxes_data['status'] != '')) echo $metaboxes_data['status']; ?></p>
                </div>

            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </section>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

    <script>															<!-- скрипт для скролла -->
        function slowScroll(id){
            $('html,body').animate({
                scrollTop: $(id).offset().top
            }, 500);
        }
        $(document).on("scroll", function() {
            if($(window).scrollTop() === 0)
                $("header").removeClass("fixed");
            else
                $("header").attr("class", "fixed");
        });
    </script>

    <?php wp_footer(); ?>
</body>



</body>
</html>
