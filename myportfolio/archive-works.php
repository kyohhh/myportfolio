<?php get_header(); ?>
<!-- 制作実績一覧 -->

<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <div class="p-sub-visual__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sv.jpg" alt="サブビジュアル">
            </div>
            <!-- safari / firefoxで表示されない pictureタグと疑似要素？？ -->
            <!-- <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sv.jpg"
                    media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sv-sp.jpg" alt="サブビジュアル">
            </picture> -->
        </div>
        <div class="p-sub-visual__text">
            <p class="p-sub-visual__title"><?php post_type_archive_title(); ?></p>
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
                    <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>"
                        class=" c-category__item-link c-category__item-link--active">all</a>
                </li>
                <?php
                    $works_terms = get_terms('works_category', array('hide_empty' => false));
                    foreach ($works_terms as $works_term) :
                ?>
                <li class="c-category__item">
                    <a href="<?php echo esc_url(get_term_link($works_term, 'works_category')); ?>"
                        class="c-category__item-link"><?php echo esc_html($works_term->name); ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- /カテゴリ一覧 -->

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
                <span
                    class="p-result__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'works_category')[0]->name); ?></span>
                <div class="p-result__content">
                    <h3 class="p-result__title"><?php the_title(); ?></h3>
                </div>
            </a>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            投稿がありません
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
            <div class="p-contact__text">お気軽にお問合せください。次の100年を一緒に歩んでくださる皆さまをお待ちしております。</div>
        </div>
        <div class="p-contact__btn">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="c-btn">お問い合わせへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>