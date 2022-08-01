<?php get_header(); ?>
<!-- カテゴリ別ブログ一覧 -->

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
            <p class="p-sub-visual__title">ブログ</p>
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


<section class="l-sub-blog p-sub-blog">
    <div class="p-sub-blog__inner l-inner">
        <!-- カテゴリ一覧 -->
        <div class="p-sub-blog__category c-category">
            <ul class="c-category__list">
                <li class="c-category__item">
                    <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>"
                        class="c-category__item-link">ALL</a>
                </li>

                <!--  -->
                <?php
                $cat = get_queried_object();
                $cat_name = $cat->name;
                ?>

                <?php
                $blog_terms = get_terms('blog_category', array('hide_empty' => false));
                foreach ($blog_terms as $blog_term) :
                ?>
                <li class="c-category__item">
                    <a href="<?php echo esc_url(get_term_link($blog_term, 'blog_category')); ?>" class="<?php
                    if ($cat_name == esc_html($blog_term->name)) {
                        echo "c-category__item-link--active";
                    } ?>"><?php echo esc_html($blog_term->name); ?></a>
                </li>
                <?php endforeach; ?>





            </ul>
        </div>

        <!-- ブログ一覧 -->
        <div class="p-sub-blog__items p-cards">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink() ?>" class="p-cards__item p-card">
                <!-- <span class="p-card__new-icon">new</span> -->
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
                        <span
                            class="p-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?></span>
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