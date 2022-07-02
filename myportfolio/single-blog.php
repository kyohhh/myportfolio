<?php get_header(); ?>
<!-- 制作実績詳細ページ -->

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


<!-- ブログ詳細 -->
<section class="l-detail p-detail">
    <div class="p-detail__inner l-inner--detail">
        <div class="p-detail__title"><?php the_title(); ?></div>

        <div class="p-detail__info">
            <time class="p-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d') ?></time>
            <span
                class=" p-detail__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?></span>
        </div>

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


<!-- 関連記事 -->
<section class="l-recommend-article p-recommend-article">
    <div class="p-recommend-article__inner l-inner">
        <div class="p-recommend-article__title">おすすめ記事</div>
        <div class="p-recommend-article__contents">

            <!-- おすすめ制作実績 -->
            <?php if (has_category()) {
                $post_cats = get_the_category();
                $cat_ids = array();
                //所属カテゴリーのIDリストを作っておく
                foreach ($post_cats as $cat) {
                    $cat_ids[] = $cat->term_id;
                }
            }

            $term_var = get_the_terms($post->ID, 'blog_category');
            $myposts = get_posts(
            array(
                'post_type' => 'blog', // 投稿タイプ
                'post__not_in' => array($post->ID), // 表示中の投稿を除外
                'posts_per_page' => '4', // 4件を取得
                'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'blog_category', // タームを取得タクソノミーを指定
                    'field' => 'slug', // スラッグに一致するタームを返す
                    'terms' => $term_var[0]->slug, // タームのスラッグを指定
                )
                )
            )
            );
            if ($myposts) : ?>

            <div class="p-recommend-article__content p-cards">

                <?php foreach ($myposts as $post) : setup_postdata($post); ?>
                <a class="p-cards__item p-card" href="<?php the_permalink(); ?>">

                    <figure class="p-card__img">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium'); //アイキャッチ画像が設定されてればミディアムサイズで表示 ?>
                        <?php else: ?>
                        <img
                            src="<?php echo get_template_directory_uri(); // なければnoimage画像をデフォルトで表示?>/assets/img/common/noimg.jpeg">
                        <?php endif; ?>
                    </figure>
                    <div class="p-card__content">
                        <div class="p-card__body">
                            <h3 class="p-card__title"><?php the_title(); ?></h3>
                            <p class="p-card__text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="p-card__info">
                            <span
                                class="p-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?></span>
                            <time class="p-card__date"
                                datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
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