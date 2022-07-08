<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- meta情報 -->
    <title>kyohey's portfolio</title>
    <!-- サイトの説明 -->
    <meta name="description" content="キョーヘイのポートフォリオサイトです" />
    <!-- サイトのキーワード -->
    <meta name="keywords" content="kyohey's" />
    <!-- 検索結果 未表示 -->
    <meta name="robots" content="noindex">

    <!-- ogp(SNS対策) -->
    <!-- ページタイトル -->
    <meta property="og:title" content="ポートフォリオサイト" />
    <!-- ページタイプ -->
    <!-- TOPページの場合は「website」,WEBサイト上の記事ページなど、TOPページ以外には「article」を指定します。-->
    <meta property="og:type" content="website" />
    <!-- ページURL(絶対パスで記述) -->
    <meta property="og:url" content="" />
    <!-- 画像のURL(表示させたいもの) -->
    <meta property="og:image" content="" />
    <!-- サイト名 -->
    <meta property="og:site_name" content="kyohey's portfolio" />
    <!-- ページの説明文 -->
    <meta property="og:description" content="極上の体験を" />

    <!-- ファビコン -->
    <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/img/favicon.png" /> -->


    <!-- swiper 読み込み順序考えcssファイル前に-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.3/swiper-bundle.min.css" /> -->
    <!-- css -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"> -->
    <!-- JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.3/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <!-- js -->
    <!-- <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script> -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- linkの変数 -->
    <?php
    $home = esc_url( home_url( '/' ) );
    $news = esc_url( home_url( '/news/' ) );
    $content = esc_url( home_url( '/content/' ) );
    $works = esc_url( home_url( '/works/' ) );
    $overview = esc_url( home_url( '/overview/' ) );
    $content = esc_url( home_url( '/content/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
    ?>

    <!-- header -->
    <header class=" p-header <?php if(is_front_page()) {
        echo 'js-top-header';
        } else {
            echo 'js-sub-header';
        } ?>">

        <div class="p-header__inner">
            <h1 class="p-header__logo">
                <a href="<?php echo esc_url( home_url('/')); ?>" class="p-header__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="新井商事ロゴ">
                </a>
            </h1>

            <!-- pc-nav -->
            <nav class="p-header__pc-nav p-pc-nav">

                <!-- カスタムメニュー -->
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

                <!-- 固定メニュー -->
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


    <!-- ドロワーメニュー -->
    <!-- sp-nav -->
    <nav id="DrawerMenu" class="p-sp-nav js-drawer-menu">

        <!-- カスタムメニュー -->
        <?php
            $defaults = array(
                'theme_location'  => 'footer', //functions.php「メニューの位置」の識別子
                'container'       => false,
                // 'container_class' => 'p-header__pc-nav p-pc-nav',
                'menu_class'      => 'p-sp-nav__items',
                'depth'           => 0,
                'add_li_class'    => 'p-sp-nav__item', // liタグへclass追加
                'add_a_class'     => '' // aタグへclass追加
            );
            wp_nav_menu( $defaults );
        ?>

        <!-- 固定メニュー -->
        <!-- <ul class="p-sp-nav__items">
            <li class="p-sp-nav__item"><a href="#news">お知らせ</a></li>
            <li class="p-sp-nav__item"><a href="#content">事業内容</a></li>
            <li class="p-sp-nav__item"><a href="#works">制作実績</a></li>
            <li class="p-sp-nav__item"><a href="#overview">企業概要</a></li>
            <li class="p-sp-nav__item"><a href="#blog">ブログ</a></li>
            <li class="p-sp-nav__item"><a href="#contact">お問い合わせ</a></li>
        </ul> -->

    </nav>