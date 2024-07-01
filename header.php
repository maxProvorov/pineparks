<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__wrapper wrapper">
            <div class="header__left">
                <div class="header__logo logo">
                    <?php if (is_front_page()) { ?>
                        <span class="logo__image"></span>
                        <span class="logo__text">SAFARI</span>
                    <?php } else { ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
                            <span class="logo__image"></span>
                            <span class="logo__text">SAFARI</span>
                        </a>
                    <?php } ?>
                </div>
                <nav class="header__navigation navigation">
                    <div class="navigation__burger">
                        <button class="burger-menu">
                            <span class="burger-menu__line"></span>
                            <span class="burger-menu__line"></span>
                            <span class="burger-menu__line"></span>
                        </button>
                    </div>
                    <div class="navigation__menu menu">
                        <button class="close-menu">X</button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu_id' => 'header-menu',
                                'menu_class' => 'menu__list',
                            )
                        );
                        ?>
                    </div>
                </nav>
            </div>
            <div class="header__right">
                <button class="header__btn btn btn-black">Book a tour</button>
            </div>
        </div>
    </header>