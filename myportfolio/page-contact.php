<?php get_header(); ?>

<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/img-contact.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/img-contact-sp.jpg"
                    alt=" サブビジュアル">
                <!-- それ以外の場合に表示する画像 -->
            </picture>
        </div>
        <div class="p-sub-visual__text">
            <p class="p-sub-visual__title"><?php the_title(); ?></p>
        </div>
    </div>
</div>

<!--  -->
<section class="l-sub-contact p-sub-contact">
    <div class="l-inner p-sub-contact__inner">
        <!-- パンくずリスト -->
        <div class="p-sub-contact__breadcrumbs c-breadcrumbs">
            <ul class="c-breadcrumbs__list">
                <li class="c-breadcrumbs__item">
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="c-breadcrumbs__link">トップ</a>
                </li>
                <li class="c-breadcrumbs__item">
                    <span>></span>
                </li>
                <li class="c-breadcrumbs__item">
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="c-breadcrumbs__link">ブログ記事一覧</a>
                </li>
            </ul>
        </div>
        <!-- コンタクトフォーム -->
        <div class="p-sub-contact__contents">
            <div class="p-sub-contact__content">
                <div class="p-sub-contact__header">
                    <p class="p-sub-contact__title">会社名・団体名</p>
                    <span class="p-sub-contact__required">必須</span>
                </div>
                <div class="p-sub-contact__item p-contact-text">
                    <input class="p-contact-text__text" type="text">
                </div>
            </div>
            <div class="p-sub-contact__content">
                <div class="p-sub-contact__header">
                    <p class="p-sub-contact__title">部署名</p>
                    <span class="p-sub-contact__required">必須</span>
                </div>
                <div class="p-sub-contact__item p-contact-text">
                    <input class="p-contact-text__text" type="text">
                </div>
            </div>
            <div class="p-sub-contact__content">
                <div class="p-sub-contact__header">
                    <p class="p-sub-contact__title">お名前</p>
                    <span class="p-sub-contact__required">必須</span>
                </div>
                <div class="p-sub-contact__item p-contact-text">
                    <input class="p-contact-text__text" type="text">
                </div>
            </div>
            <div class="p-sub-contact__content">
                <div class="p-sub-contact__header">
                    <p class="p-sub-contact__title">ふりがな</p>
                    <span class="p-sub-contact__required">必須</span>
                </div>
                <div class="p-sub-contact__item p-contact-text">
                    <input class="p-contact-text__text" type="text">
                </div>
            </div>
            <div class="p-sub-contact__content">
                <div class="p-sub-contact__header">
                    <p class="p-sub-contact__title">お問い合わせ内容</p>
                    <span class="p-sub-contact__required">必須</span>
                </div>
                <div class="p-sub-contact__item p-contact-textarea">
                    <textarea class="p-contact-textarea__text"></textarea>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>