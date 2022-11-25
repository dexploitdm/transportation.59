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
                        <form  id="contact" method="post" class="screen-form gl-form">
                            <div class="screen-form_title">Заполните форму</div>
                            <div class="gl-form-control ">
                                <input type="text" name="from_region" value="" class="gl-input">
                                <label>Откуда везем (регион/город отправки)</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="to_region" value="" class="gl-input">
                                <label>Куда везем (регион/город назначения)</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="cargo_weight" value="" class="gl-input">
                                <label>Вес груза (в кг)</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="cargo_volume" value="" class="gl-input">
                                <label>Объем груза (в м3)</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="name" value="" class="gl-input">
                                <label>Ваше имя</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="phone" value="" class="gl-input mask-phone">
                                <label>Ваш номер телефона (обязательно)</label>
                            </div>
                            <div class="gl-form-control">
                                <input type="text" name="comment" value="" class="gl-input">
                                <label>Комментарий</label>
                            </div>
                            <div class="msg">Заявка отправлена. С Вами свяжется наш сотрудник</div>
                            <button class="btn-anim"><span></span><span></span><span></span><span></span>Расчитать</button>
                        </form>


                        <div class="screen-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/images/screen-cover.png">
                        </div>

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

        <?php get_template_part( 'components/reviews'); ?>

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
                        formSend.addClass('send')
                    }
                });
                return false;
            });

        });
    </script>
<?php get_footer(); ?>