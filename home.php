<?php
/*
Template Name: Макет Главной
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="container">
            <div class="container-layout">
                <div class="screen">
                    <h1>Закажите расчет стоимости перевозки</h1>
                    <div class="screen-content">
<!--                        <form  id="contact" class="screen-form gl-form">-->
<!--                            <div class="screen-form_title">Заполните форму</div>-->
<!--                            <div class="gl-form-control ">-->
<!--                                <input type="text" name="from_region" value="" class="gl-input">-->
<!--                                <label>Откуда везем (регион/город отправки)</label>-->
<!--                            </div>-->
<!--                            <div class="gl-form-control">-->
<!--                                <input type="text" name="to_region" value="" class="gl-input">-->
<!--                                <label>Куда везем (регион/город назначения)</label>-->
<!--                            </div>-->
<!--                            <div class="gl-form-control">-->
<!--                                <input type="text" name="to_region" value="" class="gl-input">-->
<!--                                <label>Вес груза (в кг)</label>-->
<!--                            </div>-->
<!--                            <div class="gl-form-control">-->
<!--                                <input type="text" name="to_region" value="" class="gl-input">-->
<!--                                <label>Объем груза (в м3)</label>-->
<!--                            </div>-->
<!--                            <div class="gl-form-control">-->
<!--                                <input type="text" name="to_region" value="" class="gl-input">-->
<!--                                <label>Ваш номер телефона (обязательно)</label>-->
<!--                            </div>-->
<!--                            <div class="gl-form-control">-->
<!--                                <input type="text" name="to_region" value="" class="gl-input">-->
<!--                                <label>Комментарий</label>-->
<!--                            </div>-->
<!---->
<!--                            <div class="btn-anim"><span></span><span></span><span></span><span></span>Расчитать</div>-->
<!--                            <button type="submit" id="submit" class="go">Отправить сообщение</button>-->
<!---->
<!--                        </form>-->
                        <form id="contact" method="post">
                            <div class="u-controls">
                                <input class="u-input js-email" type="text" placeholder="Ваш E-mail" name="email">
                            </div>
                            <div class="u-controls">
                                <input class="u-input js-name" type="text" placeholder="Как вас зовут" name="name">
                            </div>
                            <div class="u-controls">
                                <input class="u-input js-msg" type="text" placeholder="Вопрос или комментарий" name="msg">
                            </div>
                            <div class="u-controls form-btn">
                                <button class="jk-btn js-submit jk-btn-neon call" type="submit" disabled>
                                    Отправить
                                </button>

                            </div>
                            <div class="msg-note msg-note-footer">Сообщение отправленно</div>

                        </form>

                        <div class="screen-cover"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="gl-info">
            <div class="container">
                <div class="container-layout">
                    <h2 class="page-title">
                        Будьте на связи
                    </h2>
                    <div class="gl-info-content">
                        <div class="gl-info-content_item">
                            <div class="gl-info-content_icon"><img src="<?php  echo get_template_directory_uri() ?>/images/icons/telephone.png"></div>
                            <div class="gl-info-content_desc">
                                <p>Есть вопрос? Позвоните нам сейчас</p>
                                <span>+7 (342) 2-158-158</span>
                            </div>
                        </div>
                        <div class="gl-info-content_item">
                            <div class="gl-info-content_icon"><img src="<?php  echo get_template_directory_uri() ?>/images/icons/clock.png"></div>
                            <div class="gl-info-content_desc">
                                <p>Мы работаем по будням</p>
                                <span>Пн - Пт : 08:00 - 18:00</span>
                            </div>
                        </div>
                        <div class="gl-info-content_item">
                            <div class="gl-info-content_icon"><img src="<?php  echo get_template_directory_uri() ?>/images/icons/pin.png"></div>
                            <div class="gl-info-content_desc">
                                <p>Нас можно найти по адресу</p>
                                <span>г. Пермь, ул. Дзержинского, 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="container-layout">
                <h1>Main</h1>
                <?php get_template_part( 'components/testComponent'); ?>
        <?php get_template_part( 'components/allCategory'); ?>
        <?php get_template_part( 'components/custom_tax_category'); ?>
            </div>
        </div>

        
        
      

    </main>
    <script>
        // var swiper = new Swiper('.swiper-container', {
        //     pagination: {
        //         el: '.swiper-pagination',
        //         type: 'fraction',
        //     },
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },
        // });
        jQuery(document).ready(function($) {
            const formSend = $("#contact");


            formSend.submit(function(e) {
                var str = $(this).serialize();
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "<?php echo get_template_directory_uri() ?>/mail/mail.php",
                    data: str,
                    success: function(msg) {
                        console.log(msg)

                    }
                });
                return false;
            });

        });
    </script>
<?php get_footer(); ?>