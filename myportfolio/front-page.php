<?php get_header(); ?>

<!-- ドロワーメニュー -->
<!-- sp-nav -->
<div id="DrawerMenu" class="p-sp-nav js-drawer-menu">
    <ul class="p-sp-nav__items">
        <li class="p-sp-nav__item"><a href="#news">お知らせ</a></li>
        <li class="p-sp-nav__item"><a href="#content">事業内容</a></li>
        <li class="p-sp-nav__item"><a href="#works">制作実績</a></li>
        <li class="p-sp-nav__item"><a href="#overview">企業概要</a></li>
        <li class="p-sp-nav__item"><a href="#blog">ブログ</a></li>
        <li class="p-sp-nav__item"><a href="#contact">お問い合わせ</a></li>
    </ul>
</div>

<!-- mv swiper -->
<div class="p-main-visual swiper js-mv-swiper js-mv">
    <div class="swiper-wrapper">
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv01.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv01-sp.jpg"
                        alt="メインビジュアル1"><!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv02.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv02-sp.jpg"
                        alt="メインビジュアル1"><!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv03.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv03-sp.jpg"
                        alt="メインビジュアル1"><!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
    </div>
    <div class="p-main-visual__text">
        <h2 class="p-main-visual__title">メインタイトルが入ります</h2>
        <p class="p-main-visual__subtitle">サブタイトルが入ります</p>
    </div>
</div>

<!-- news -->
<div class="l-top-news p-news" id="news">
    <div class="p-news__inner l-inner">
        <div class="p-news__contents">
            <div class="p-news__content">
                <div class="p-news__info">
                    <time class="p-news__date" datetime="2020-07-20">2020.07.20</time>
                    <span class="p-news__category">お知らせ</span>
                </div>
                <div class="p-news__body">
                    <a href="#" class="p-news__link">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
                </div>
            </div>
        </div>
        <div class="p-news__btn">
            <a href="<?php echo esc_url( home_url( '/news-list/' ) ); ?>" class="c-btn--news">すべて見る</a>
        </div>
    </div>
</div>

<!-- content -->
<section class="l-top-content p-content" id="content">
    <div class="p-content__header c-section-header">
        <h2 class="c-section-header__title">事業内容</h2>
        <span class="c-section-header__subtitle c-section-header__subtitle--left">content</span>
    </div>
    <div class="p-content__items">
        <a href="#" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content01.jpg" alt="経営理念ページへ">
                <p class="p-content__imgtitle">経営理念ページへ</p>
            </figure>
        </a>
        <a href="#" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content02.jpg" alt="理念1へ">
                <p class="p-content__imgtitle">理念1へ</p>
            </figure>
        </a>
        <a href="#" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content03.jpg" alt="理念2へ">
                <p class="p-content__imgtitle">理念2へ</p>
            </figure>
        </a>
        <a href="#" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content04.jpg" alt="理念3へ">
                <p class="p-content__imgtitle">理念3へ</p>
            </figure>
        </a>
    </div>
</section>

<!-- works -->
<section class="l-top-works p-works" id="works">
    <div class="p-works__inner">
        <div class="p-works__header c-section-header">
            <h2 class="c-section-header__title">制作実績</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--right">works</span>
        </div>
        <div class="p-works__item">
            <div class="p-works__block swiper-container">
                <div class="p-works__content swiper js-works-swiper">
                    <div class="p-works__imgs swiper-wrapper">
                        <div class="p-works__img swiper-slide js-works-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works01.jpg"
                                alt="企業実績1">
                        </div>
                        <div class="p-works__img swiper-slide js-works-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works02.jpg"
                                alt="企業実績2">
                        </div>
                        <div class="p-works__img swiper-slide js-works-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works03.jpg"
                                alt="企業実績3">
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination js-works-pagination"></div>
            </div>
            <div class="p-works__body">
                <h3 class="p-works__title">メインタイトルが入ります。</h3>
                <p class="p-works__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="p-works__btn">
                    <a href="#" class="c-btn">
                        <span>詳しく見る</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- overview -->
<section class="l-top-overview p-overview" id="overview">
    <div class="p-overview__inner">
        <div class="p-overview__header c-section-header">
            <h2 class="c-section-header__title">企業概要</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--left">overview</span>
        </div>
        <div class="p-overview__item">
            <div class="p-overview__content">
                <figure class="p-overview__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/overview.jpg" alt="企業概要">
                </figure>
                <div class="p-overview__body">
                    <h3 class="p-overview__title">メインタイトルが入ります。</h3>
                    <p class="p-overview__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <div class="p-overview__btn">
                        <a href="<?php echo esc_url( home_url( '/overview/' ) ); ?>" class="c-btn">詳しく見る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="l-top-blog p-blog" id="blog">
    <div class="p-blog__inner l-inner">
        <div class="p-blog__header c-section-header">
            <h2 class="c-section-header__title">ブログ</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--right">blog</span>
        </div>
        <div class="p-blog__items p-cards">
            <a href="#" class="p-cards__item p-card">
                <span class="p-card__new-icon">new</span>
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog01.jpg" alt="ブログ1">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog02.jpg" alt="ブログ2">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog03.jpg" alt="ブログ3">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-blog__btn">
            <a href="<?php echo esc_url( home_url( '/blog-list/' ) ); ?>" class="c-btn">詳しく見る</a>
        </div>
    </div>
</section>

<!-- contact -->
<section class="l-top-contact p-contact" id="contact">
    <div class="p-contact__inner l-inner">
        <div class="p-contact__header c-section-header">
            <h2 class="c-section-header__title">お問い合わせ</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--contact">contact</span>
        </div>
        <div class="p-contact__body">
            <div class="p-contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
        </div>
        <div class="p-contact__btn">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="c-btn">お問い合わせへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>