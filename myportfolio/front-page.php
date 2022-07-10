<?php get_header(); ?>

<!-- linkの変数 -->
<?php
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$content = esc_url( home_url( '/content/' ) );
$works = esc_url( home_url( '/works/' ) );
$overview = esc_url( home_url( '/overview/' ) );
$content = esc_url( home_url( '/content/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

<!-- メインビュー -->
<!-- mv swiper -->
<div class="p-main-visual swiper js-mv-swiper js-mv">
    <div class="swiper-wrapper">
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv01.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv01-sp.jpg" alt="メイン画像1">
                    <!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv02.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv02-sp.jpg" alt="メイン画像2">
                    <!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
        <div class="p-main-visual__content swiper-slide">
            <div class="p-main-visual__item slide-img">
                <picture class="p-main-visual__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv03.jpg"
                        media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv03-sp.jpg" alt="メイン画像3">
                    <!-- それ以外の場合に表示する画像 -->
                </picture>
            </div>
        </div>
    </div>
    <div class="p-main-visual__text">
        <h2 class="p-main-visual__title">次の100年へ</h2>
        <p class="p-main-visual__subtitle">私たちは共に歩み続けます</p>
    </div>
</div>

<!-- news -->
<!-- お知らせ -->
<section class="l-top-news p-news" id="news">
    <div class="p-news__inner l-inner">
        <div class="p-news__contents">
            <?php
                $news_query = new WP_Query(
                    array(
                        'post_type'      => 'post',
                        // 'category_name' => 'news',
                        'posts_per_page' => 1,
                    )
                );
            ?>
            <?php if ( $news_query->have_posts() ) : ?>
            <?php while ( $news_query->have_posts() ) : ?>
            <?php $news_query->the_post(); ?>


            <div class="p-news__content">
                <?php
                // カテゴリー１つ目の名前を表示
                $category = get_the_category();
                if ($category[0]) : ?>
                <div class="p-news__info">
                    <time class="p-news__date" datetime="<?php the_time(' c '); ?>"><?php the_time('Y.m.d'); ?></time>
                    <span class="p-news__category"><?php echo $category[0]->cat_name; ?></span>
                </div>
                <?php endif; ?>
                <div class="p-news__body">
                    <a href="<?php the_permalink();?>" class="p-news__link"><?php the_title(); ?></a>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>



        </div>
        <div class="p-news__btn">
            <a href="<?php echo $news ?>" class="c-btn--news">すべて見る</a>
        </div>
    </div>
</section>
<!-- /news -->
<!-- /お知らせ -->


<!-- /content -->
<!-- /経営理念 -->
<section class="l-top-content p-content" id="content">
    <div class="p-content__header c-section-header">
        <h2 class="c-section-header__title">経営理念</h2>
        <span class="c-section-header__subtitle c-section-header__subtitle--left">content</span>
    </div>
    <div class="p-content__items">
        <a href="<?php echo $content ?>" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content01.jpg" alt="経営理念ページへ">
                <p class="p-content__imgtitle">経営理念</p>
            </figure>
        </a>
        <a href="<?php echo $content ?>" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content02.jpg" alt="理念1へ">
                <p class="p-content__imgtitle">誠実であること</p>
            </figure>
        </a>
        <a href="<?php echo $content ?>" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content03.jpg" alt="理念2へ">
                <p class="p-content__imgtitle">共に歩むこと</p>
            </figure>
        </a>
        <a href="<?php echo $content ?>" class="p-content__item">
            <figure class="p-content__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content04.jpg" alt="理念3へ">
                <p class="p-content__imgtitle">挑戦すること</p>
            </figure>
        </a>
    </div>
</section>
<!-- /content -->
<!-- /経営理念 -->


<!-- works -->
<!-- 事業実績 -->
<section class="l-top-works p-works" id="works">
    <div class="p-works__inner">
        <div class="p-works__header c-section-header">
            <h2 class="c-section-header__title">事業実績</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--right">works</span>
        </div>
        <div class="p-works__item">

            <!-- カスタム投稿タイプの記事の新着一覧を表示 -->
            <?php $posts = get_posts('post_type=works&posts_per_page=1'); ?>
            <?php if (!empty($posts)): ?>

            <!-- swiper -->
            <div class="p-works__block swiper-container swiper-container--works">
                <div class="p-works__content swiper swiper--works js-works-swiper">
                    <div class="p-works__imgs swiper-wrapper">


                        <?php foreach ($posts as $post):setup_postdata($post); ?>
                        <div class="p-works__img swiper-slide swiper-slide--works js-works-slide">
                            <img src="<?php echo get_the_post_thumbnail(); ?>" alt="事業実績画像">
                        </div>


                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination--works js-works-pagination"></div>
            </div>
            <!-- /swiper -->
            <div class="p-works__body">
                <h3 class="p-works__title"><?php the_title(); ?></h3>
                <p class="p-works__text">
                    <?php the_excerpt(); ?>
                </p>
                <div class="p-works__btn">
                    <a href="<?php echo $works ?>" class="c-btn">詳しく見る</a>
                </div>
            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- /カスタム投稿タイプの記事の新着一覧を表示 -->

        </div>
    </div>
</section>
<!-- /works -->
<!-- /事業実績 -->


<!-- overview -->
<!-- 会社概要 -->
<section class="l-top-overview p-overview" id="overview">
    <div class="p-overview__inner">
        <div class="p-overview__header c-section-header">
            <h2 class="c-section-header__title">会社概要</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--left">overview</span>
        </div>
        <div class="p-overview__items">
            <div class="p-overview__item">
                <figure class="p-overview__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/overview.jpg" alt="企業概要">
                </figure>
                <div class="p-overview__body">
                    <h3 class="p-overview__title">新井商事</h3>
                    <p class="p-overview__text">
                        弊社のの会社概要です。弊社の創業は、1993年とまだ創業して約30年と歴史が浅い会社ですが、地域・社会の発展に寄与するためにこの先も歩み続けていきます。
                    </p>
                    <div class="p-overview__btn">
                        <a href="<?php echo $overview ?>" class="c-btn">詳しく見る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /overview -->
<!-- /会社概要 -->


<!-- blog -->
<section class="l-top-blog p-blog" id="blog">
    <div class="p-blog__inner l-inner">
        <div class="p-blog__header c-section-header">
            <h2 class="c-section-header__title">ブログ</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--right">blog</span>
        </div>
        <div class="p-blog__items p-cards">

            <!--  -->
            <?php
        $blog_query = new WP_Query(
          array(
            'post_type'      => 'blog',
            'posts_per_page' => 3, //表示したい件数
          )
        );
        ?>
            <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : ?>
            <?php $blog_query->the_post(); ?>



            <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class=" p-cards__item p-card">
                <!-- <span class="p-card__new-icon">new</span> -->
                <figure class="p-card__img">
                    <img src="<?php echo get_the_post_thumbnail(); ?>" alt="ブログ画像">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title"><?php the_title(); ?></h3>
                        <p class="p-card__text"><?php the_excerpt(); //抜粋を表示 ?></p>
                    </div>
                    <div class="p-card__info">
                        <span
                            class="p-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?></span>
                        <time class="p-card__date"
                            datetime="<?php the_time('c');?>"><?php echo get_the_date('Y.m.d') ?></time>
                    </div>
                </div>
            </a>


            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="p-blog__btn">
            <a href="<?php echo $blog ?>" class="c-btn">詳しく見る</a>
        </div>
    </div>
</section>
<!-- /blog -->

<!-- contact -->
<section class="l-top-contact p-contact" id="contact">
    <div class="p-contact__inner l-inner">
        <div class="p-contact__header c-section-header">
            <h2 class="c-section-header__title">お問い合わせ</h2>
            <span class="c-section-header__subtitle c-section-header__subtitle--contact">contact</span>
        </div>
        <div class="p-contact__body">
            <div class="p-contact__text">お気軽にお問合せください。次の100年を一緒に歩んでくださる皆さまをお待ちしております。
            </div>
            <div class="p-contact__btn">
                <a href="<?php echo $contact ?>" class="c-btn">お問い合わせへ</a>
            </div>
        </div>
</section>
<!-- /contact -->


<?php get_footer(); ?>