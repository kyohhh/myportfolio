<?php get_header(); ?>

<!-- パンくずリスト -->
<div class="l-sub-breadcrumbs p-breadcrumbs">
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

<!-- ブログお知らせ詳細 -->
<!-- detail -->
<section class="l-detail p-detail">
    <div class="p-detail__inner l-inner">
        <div class="p-detail__title"><?php the_title(); ?></div>
        <div class="p-detail__info">
            <time class="p-detail__date"><?php echo get_the_date('Y/m/d') ?></time>
            <span class="p-detail__category">カテゴリ</span>
        </div>
        <div class="p-detail__body">
            <div class="p-detail__text"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<!-- ページネーション -->
<div class="l-pagenavi c-pagenavi">
    <?php wp_pagenavi(); ?>
</div>

<!-- recommend-article -->
<section class="l-recommend-article p-recommend-article">
    <div class="p-recommend-article__inner l-inner">
        <div class="p-recommend-article__title p-recommend-article__title--sp">おすすめ記事</div>
        <div class="p-recommend-article__title p-recommend-article__title--pc">関連記事</div>
        <div class="p-recommend-article__contents">
            <!-- ブログオススメ記事 -->
            <div class="p-recommend-article__content p-cards">
                <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink() ?>" class="p-cards__item p-card">
                    <span class="p-card__new-icon">new</span>
                    <figure class="p-card__img">
                        <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail( 'blog' ); ?>
                        <?php } else { ?>
                        <img src="<?php echo esc_url(get_theme_file_uri( '/img/common/noimage.jpg')); ?>">
                        <?php } ?>
                    </figure>
                    <div class="p-card__content">
                        <div class="p-card__body">
                            <h3 class="p-card__title"><?php the_title(); ?></h3>
                            <p class="p-card__text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="p-card__info">
                            <span class="p-card__category">カテゴリ</span>
                            <time class="p-card__date"><?php echo get_the_date('Y.m.d') ?></time>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>
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