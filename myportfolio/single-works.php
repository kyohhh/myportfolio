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

<!-- 制作実績詳細 -->
<section class="l-detail p-detail">
    <div class="p-detail__inner l-inner--detail">
        <div class="p-detail__title"><?php the_title(); ?></div>
        <div class="p-detail__info">
            <time class="p-detail__date" datetime="<?php the_time('c'); ?>"><?php echo get_the_time('Y/m/d') ?></time>
            <span
                class=" p-detail__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'works_category')[0]->name); ?></span>
        </div>

        <!-- swiper -->
        <!-- <div class="p-detail__swiper p-detail-swiper">
            <div class="p-detail-swiper__block swiper-container swiper-container--detail">
                <div class="p-detail-swiper__content swiper swiper--detail js-detail-swiper">
                    <div class="p-detail-swiper__imgs swiper-wrapper">
                        <div class="p-detail-swiper__img swiper-slide swiper-slide--detail js-detail-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works01.jpg"
                                alt="企業実績1">
                        </div>
                        <div class="p-detail-swiper__img swiper-slide swiper-slide--detail js-detail-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works02.jpg"
                                alt="企業実績2">
                        </div>
                        <div class="p-detail-swiper__img swiper-slide swiper-slide--detail js-detail-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/works03.jpg"
                                alt="企業実績3">
                        </div>
                    </div>
                </div> -->

        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination swiper-pagination--detail js-works-pagination"></div> -->


        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->


        <div class="p-detail__body p-detail-works">

            <!-- 繰り返しフィールド -->
            <?php
                $info = SCF::get('works-imgs');
                foreach ($info as $detail) {
                    $imgurl = wp_get_attachment_image_src($detail['works-img'] , 'full');
            ?>
            <!-- <div> -->
            <!-- 画像がない時はnoImg画像を表示 -->
            <?php if($detail['works-imgs'] === "" ) {?>
            <div class="p-detail-works__img">
                <img src="<?php echo get_template_directory_uri(); ?>assets/img/common/noimg.jpeg">
            </div>
            <!-- それ以外（画像がある時）画像を表示 -->
            <?php } else { ?>
            <div class="p-detail-works__img">
                <img src="<?php echo $imgurl[0]; ?>">
            </div>
            <?php } ?>
            <!-- </div> -->
            <?php } ?>
            <!-- /繰り返しフィールド -->


            <!-- 繰り返しフィールド -->
            <?php
            //引数定義          グループ名（配列になる）
            $info = SCF::get('works');
            //引数定義
            foreach ($info as $detail) { ?>

            <div class="p-detail-works__block">
                <h3 class="p-detail-works__title"><?php echo $detail['works-title']; // 名前を入力
                    ?></h3>
                <p class="p-detail-works__description"><?php echo $detail['works-text']; // 名前を入力
                ?></p>
            </div>
            <?php } ?>
            <!-- /繰り返しフィールド -->

        </div>
    </div>
    <!-- </div> -->
    <!-- </div>
    </div> -->
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

            $term_var = get_the_terms($post->ID, 'works_category');
            $myposts = get_posts(
            array(
                'post_type' => 'works', // 投稿タイプ
                'post__not_in' => array($post->ID), // 表示中の投稿を除外
                'posts_per_page' => '4', // 4件を取得
                'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'works_category', // タームを取得タクソノミーを指定
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
                                class="p-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'works_category')[0]->name); ?></span>
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
            <div class="p-contact__text">お気軽にお問合せください。次の100年を一緒に歩んでくださる皆さまをお待ちしております。</div>
        </div>
        <div class="p-contact__btn">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="c-btn">お問い合わせへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>