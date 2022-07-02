<?php get_header(); ?>
<!-- お知らせ一覧 -->

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
            <p class="p-sub-visual__title">お知らせ</p>
        </div>
    </div>
</div>

<!-- パンくずリスト -->
<div class="l-breadcrumbs p-breadcrumbs">
    <div class="l-inner">
        <ul class="p-breadcrumbs__list">
            <?php if(function_exists('bcn_display')) {
                bcn_display();
            }?>


            <!-- <li class="p-breadcrumbs__item">
                <a href="<?php echo esc_url( home_url('/')); ?>" class="p-breadcrumbs__link">トップ</a>
            </li>
            <li class="p-breadcrumbs__item">
                <span>></span>
            </li>
            <li class="p-breadcrumbs__item">
                <a href="" class="p-breadcrumbs__link"><?php the_title(); ?></a>
            </li> -->
        </ul>
    </div>
</div>

<!-- news -->
<section class="l-sub-news p-news" id="news">
    <div class="p-news__inner l-inner">
        <div class="p-news__contents">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="p-news__content">
                <div class="p-news__info">
                    <time class="p-news__date" datetime="<?php the_time(' c '); ?>"><?php the_time('Y.m.d'); ?></time>
                    <span class="p-news__category"><?php echo get_the_category()[0]->cat_name; ?></span>
                </div>
                <div class="p-news__body">
                    <a href="<?php the_permalink();?>" class="p-news__link"><?php the_title(); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ページネーション -->
<div class="l-pagenavi c-pagenavi">
    <?php wp_pagenavi(); ?>
</div>


<!-- contact -->
<section class="l-top-contact p-contact" id="contact">
    <div class="l-inner">
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