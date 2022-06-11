<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- noindex -->
    <meta name="robots" content="noindex">
    <!-- swiper 読み込み順序考えcssファイル前に-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.3/swiper-bundle.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.3/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- swiper -->
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js">
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- header -->
    <header class=" p-header <?php if(is_front_page()) {
        echo 'js-top-header';
        } else {
            echo 'js-sub-header';
        } ?>">
        <div class="p-header__inner">
            <h1 class="p-header__logo">
                <a href="<?php echo esc_url( home_url('/')); ?>" class="p-header__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="会社名">
                </a>
            </h1>
            <!-- pc-nav -->
            <nav class="p-header__pc-nav p-pc-nav">
                <?php
                        $defaults = array(
                            'theme_location'  => 'main', //functions.php「メニューの位置」の識別子
                            'container'       => false,
                            // 'container_class' => 'p-header__pc-nav p-pc-nav',
                            'menu_class'      => 'p-pc-nav__items',
                            'depth'           => 0,
                            'add_li_class'    => 'p-pc-nav__item', // liタグへclass追加
                            'add_a_class'     => '' // aタグへclass追加
                        );
                        wp_nav_menu( $defaults );
                    ?>
                <!-- <ul class="p-pc-nav__items">
                    <li class="p-pc-nav__item"><a href="#news">お知らせ</a></li>
                    <li class="p-pc-nav__item"><a href="#content">事業内容</a></li>
                    <li class="p-pc-nav__item"><a href="#works">制作実績</a></li>
                    <li class="p-pc-nav__item"><a href="#overview">企業概要</a></li>
                    <li class="p-pc-nav__item"><a href="#blog">ブログ</a></li>
                    <li class="p-pc-nav__item p-pc-nav__item--white"><a href="#contact">お問い合わせ</a></li>
                </ul> -->
            </nav>

            <!-- ハンバーガー -->
            <div id="MenuButton" class="p-header__menu c-hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <?php  ?>