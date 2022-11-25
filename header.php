<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title><?php the_title() ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Dexploitdm">
    <meta name="theme-color" content="#2D3C3E">
    <link href="<?php  echo get_template_directory_uri() ?>/dist/style.css" rel="stylesheet">
    <?php  wp_head(); ?>
    <script
            src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="container-layout">
            <div class="header-box">
                <div class="header-box-top">
                    <div class="header-logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php  echo get_template_directory_uri() ?>/images/logo.png">
                        </a>
                    </div>
                    <div class="header-info">
                        <div class="header-info_block">
                            <div class="header-menu">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'=>'main',
                                ) );
                                ?>
                            </div>
                            <div class="header-contact"><a href="tel:83422158158">+7 (342) 2-158-158</a></div>
                        </div>
                    </div>
                    <div class="header-open-menu"></div>
                </div>
                <div class="header-box-bottom">
                    <div class="header-social">
                        <a href="#" target="_blank">
                            <img src="<?php  echo get_template_directory_uri() ?>/images/vk.png">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php  echo get_template_directory_uri() ?>/images/instagram.png">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php  echo get_template_directory_uri() ?>/images/telegram.png">
                        </a>
                    </div>
                    <div class="header-price">
                        <a href="#">
                            <div class="btn-bit line">Для юридических лиц</div>
                        </a>
                        <a href="#">
                            <div class="btn-bit line">Для физических лиц</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="drawer">
        <div class="drawer-layout">
            <div class="drawer-top">
                <div class="drawer-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php  echo get_template_directory_uri() ?>/images/logo.png">
                    </a>
                </div>
                <div class="drawer-top-close"></div>
            </div>
            <div class="drawer-menu">
                <?php load_template( get_template_directory() . '/menu.php', true ); ?>
            </div>
            <div class="drawer-content">
                <div class="header-price">
                    <a href="#">
                        <div class="btn-bit line">Для юридических лиц</div>
                    </a>
                    <a href="#">
                        <div class="btn-bit line">Для физических лиц</div>
                    </a>
                </div>
                <div class="header-contact"><a href="tel:83422158158">+7 (342) 2-158-158</a></div>
                <div class="header-social">
                    <a href="#" target="_blank">
                        <img src="<?php  echo get_template_directory_uri() ?>/images/vk.png">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?php  echo get_template_directory_uri() ?>/images/instagram.png">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?php  echo get_template_directory_uri() ?>/images/telegram.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
