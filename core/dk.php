<?php
define( 'ACF_LITE', false );
//Убираем теги <p> у изображений
include_once('components/non_tag_p-image.php');
//Перевод ссылок
include_once('components/rus-to-lat.php');
//Оключаем Emoji
include_once('components/unlock_emoji.php');
//Редиректы
include_once('components/wp-simple-301-redirects.php');
//Классы меню
//include_once('components/menu.php');

//Настройки
include_once('components/settings.php');

//Баннер отзывов
include_once('components/banners/banReviews.php');