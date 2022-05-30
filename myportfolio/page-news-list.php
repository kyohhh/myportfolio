<?php get_header(); ?>

<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/news-list/img-news-list.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-list/img-news-list-sp.jpg"
                    alt="サブビジュアル">
                <!-- それ以外の場合に表示する画像 -->
            </picture>
        </div>
        <div class="p-sub-visual__text">
            <p class="p-sub-visual__title"><?php the_title(); ?></p>
        </div>
    </div>
</div>

<!--  -->
<section class="l-news-list p-news-list">
    <div class="l-inner p-news-list__inner">
        <!-- パンくずリスト -->
        <div class="p-news-list__breadcrumbs c-breadcrumbs">
            <ul class="c-breadcrumbs__list">
                <li class="c-breadcrumbs__item">
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="c-breadcrumbs__link">トップ</a>
                </li>
                <li class="c-breadcrumbs__item">
                    <span>></span>
                </li>
                <li class="c-breadcrumbs__item">
                    <a href="" class="c-breadcrumbs__link"><?php the_title(); ?></a>
                </li>
            </ul>
        </div>
        <!-- ニュース一覧 -->
        <div class="l-news p-news" id="news">
            <div class="p-news__inner">
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
                    <div class="p-news__content">
                        <div class="p-news__info">
                            <time class="p-news__date" datetime="2020-07-20">2020.07.20</time>
                            <span class="p-news__category">お知らせ</span>
                        </div>
                        <div class="p-news__body">
                            <a href="#"
                                class="p-news__link">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
                        </div>
                    </div>
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
            </div>
        </div>
    </div>
</section>

<!-- ページネーション -->

<!-- contact -->
<section class="l-top-contact p-contact" id="contact">
    <div class="l-inner p-contact__inner">
        <div class="p-contact__header c-section-header">
            <h2 class="c-section-header__title">お問い合わせ</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--contact">contact</span>
        </div>
        <div class="p-contact__body">
            <div class="p-contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
        </div>
        <div class="p-contact__btn">
            <a href="#" class="c-btn">お問い合わせへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>