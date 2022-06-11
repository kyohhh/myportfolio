<?php get_header(); ?>

<!-- 制作実績一覧 -->
<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/works/img-works.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/img-works-sp.jpg" alt="サブビジュアル">
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
<section class="l-sub-works p-sub-works">
    <div class="p-sub-works__inner l-inner">
        <!-- カテゴリ一覧 -->
        <div class="p-sub-works__category c-category">
            <ul class="c-category__list">
                <li class="c-category__item">
                    <a href="#" class="c-category__item-link--white">ALL</a>
                </li>
                <li class="c-category__item">
                    <a href="#" class="c-category__item-link">カテゴリ１</a>
                </li>
                <li class="c-category__item">
                    <a href="#" class="c-category__item-link">カテゴリカテゴリ</a>
                </li>
                <li class="c-category__item">
                    <a href="#" class="c-category__item-link">カテ</a>
                </li>
            </ul>
        </div>
        <!-- 制作実績一覧 -->
        <div class="p-sub-works__items p-results">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink() ?>" class="p-results__item p-result">
                <figure class="p-result__img">
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail( 'works' ); ?>
                    <?php } else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri( '/img/common/noimage.jpg')); ?>">
                    <?php } ?>
                </figure>
                <div class="p-result__content">
                    <h3 class="p-result__title"><?php the_title(); ?></h3>
                </div>
            </a>
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