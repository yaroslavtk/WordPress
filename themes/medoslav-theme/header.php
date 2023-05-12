<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>>">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="none">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/assets/img/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/assets/img/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/assets/img/favico/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favico/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favico/safari-pinned-tab.svg"
        color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>MEDOSLAV - Сімейна пасіка</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="top-navigation">

        <div class="top-navigation-wrapp">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container' => false,
                    'menu_class' => 'top-navigation-list'
                )
            ) ?>

            <form action="" class="search-form">
                <input type="text" name="search">
                <button class="search-form-btn">Пошук</button>
            </form>

            <div data-aos="flip-down" class="top-brand">
                <a href="<?php echo home_url('/') ?>"><img class="top-logo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/top_logo_no_slogan.png"
                        alt="Лого" height="50"></a>
            </div>

            <div class="user-enter"><button class="user-enter-btn">Вхід</button></div>

            <div class="top-btns">
                <div class="search-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/search.png" width="24"
                        height="24" alt="" class="search-ico">
                </div>

                <div class="wish-list-btn">
                    <img class="wish-list-ico"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png" width="26"
                        height="26" alt="">
                    <div class="wish-added"><span>0</span></div>
                </div>

                <div class="top-bin">
                <a href="<?php echo wc_get_cart_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png" width="26"
                        height="26" alt=""></a>
                    <div class="producs-added"><span>0</span>
                    </div>
                </div>
            </div>
        </div>

    </nav>

    <main>
        <div class="container">
            <nav class="navigation shadow-box">
                <div class="brand">
                    <a href="<?php echo home_url('/') ?>"><img class="logo"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/new_logo.png" alt="Лого"
                            width="380" height="140"></a>
                </div>

                <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-3',
                                'container_class' => 'navigation-contacts',
                                'menu_class' => 'navigation-contacts-list',
                            )
                        ) ?>

                    <!-- <ul class="navigation-contacts-list">
                        <li>+38(066)12-34-567</li>
                        <li>Пн-Пн 9:00-18:00</li>
                        
                        <li class="social-logo">
                            <a href="#"><img class="social-ico" alt="Instagram"  src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/instagram.png" width="30"
                                    height="30"></a>
                            <a href="#"><img class="social-ico" alt="Facebook"  src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/facebook.png" width="30"
                                    height="30"></a>
                            <a href="#"><img class="social-ico" alt="Telegram"  src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/telegram.png" width="30"
                                    height="30"></a>
                            <a href="#"><img class="social-ico" alt="Viber"  src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/viber.png" width="30"
                                    height="30"></a>
                            <a href="#"><img class="social-ico" alt="YouTube"  src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/youtube.png" width="30"
                                    height="30"></a>
                        </li>
                    </ul> -->

            </nav>
        </div>