<?php get_header(); ?>

<!-- 事業内容 -->
<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/content/img-content.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/img-content-sp.jpg"
                    alt="サブビジュアル">
                <!-- それ以外の場合に表示する画像 -->
            </picture>
        </div>
        <div class="p-sub-visual__text">
            <p class="p-sub-visual__title"><?php the_title(); ?></p>
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

<!--  -->

<!--  -->
<section class="l-sub-content p-sub-content" id="content">
    <div class="p-sub-content__inner">
        <div class="p-sub-content__header">
            <h2 class="p-sub-content__headertitle">企業理念</h2>
            <p class="p-sub-content__headertext">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </div>
        <div class="p-sub-content__items">
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content02.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">企業理念１</h3>
                    <p class="p-sub-content__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </div>
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content03.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">企業理念１</h3>
                    <p class="p-sub-content__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </div>
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content04.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">企業理念１</h3>
                    <p class="p-sub-content__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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