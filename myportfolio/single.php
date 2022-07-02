<?php get_header(); ?>
<!-- お知らせ詳細ページ -->

<!-- パンくずリスト -->
<?php if(function_exists('bcn_display')): ?>
<div class="l-sub-breadcrumbs p-breadcrumbs">
    <div class="l-inner">
        <ul class="p-breadcrumbs__list">
            <?php bcn_display(); ?>

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
<?php endif; ?>

<!-- お知らせ詳細 -->
<section class="l-detail p-detail">
    <div class="p-detail__inner l-inner--detail">
        <div class="p-detail__title"><?php the_title(); ?></div>
        <?php
            // カテゴリー１つ目の名前を表示
            $category = get_the_category();
            if ($category[0]) : ?>
        <div class="p-detail__info">
            <time class="p-detail__date" datetime="<?php the_time('c'); ?>"><?php echo get_the_time('Y/m/d') ?></time>
            <span class=" p-detail__category"><?php echo $category[0]->cat_name; ?></span>
        </div>
        <?php endif; ?>

        <div class="p-detail__body">
            <div class="p-detail__text"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<!-- ページネーション 前後送り -->
<div class="l-detail-pagenavi c-detail-pagenavi">
    <div class="c-detail-pagenavi__inner l-inner">
        <p class="<?php if (get_previous_post()) : ?>c-detail-pagenavi__link<?php endif; ?>">
            <?php previous_post_link('%link', 'PREV'); ?></p>
        <p class="c-detail-pagenavi__link"><a href="<?php echo get_post_type_archive_link(get_post_type()); ?>">一覧</a>
        </p>
        <p class="<?php if (get_next_post()) : ?>c-detail-pagenavi__link<?php endif; ?>">
            <?php next_post_link('%link', 'NEXT'); ?></p>
    </div>
</div>

<!-- おすすめお知らせ -->
<section class="l-recommend-article p-recommend-article">
    <div class="p-recommend-article__inner l-inner">
        <div class="p-recommend-article__title">おすすめ記事</div>
        <div class=" p-recommend-article__contents p-news">

            <div class="p-news__contents">
                <!-- 同カテゴリから4件表示 -->
                <?php
                        $categories = get_the_category($post->ID);
                        $category_ID = array();

                        foreach($categories as $category):
                            array_push( $category_ID, $category -> cat_ID);
                        endforeach ;

                        $args = array(
                            'post__not_in' => array($post -> ID), // 表示中の投稿を除外
                            'posts_per_page'=> 4, // 4件を取得
                            'category__in' => $category_ID,
                            'orderby' => 'rand', // ランダムに記事を選ぶ
                        );
                        $query = new WP_Query($args);
                        if( $query -> have_posts() ):
                            while ($query -> have_posts()) :
                            $query -> the_post();
                        ?>

                <div class="p-news__content">
                    <?php
                            // カテゴリー１つ目の名前を表示
                            $category = get_the_category();
                            if ($category[0]) : ?>
                    <div class="p-news__info">
                        <time class="p-news__date"
                            datetime="<?php the_time(' c '); ?>"><?php the_time('Y.m.d'); ?></time>
                        <span class="p-news__category"><?php echo $category[0]->cat_name; ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="p-news__body">
                        <a href="<?php the_permalink();?>" class="p-news__link"><?php the_title(); ?></a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
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