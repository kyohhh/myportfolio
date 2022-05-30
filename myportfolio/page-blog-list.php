<?php get_header(); ?>

<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/blog-list/img-blog-list.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-list/img-blog-list-sp.jpg"
                    alt="サブビジュアル">
                <!-- それ以外の場合に表示する画像 -->
            </picture>
        </div>
        <div class="p-sub-visual__text">
            <p class="p-sub-visual__title"><?php the_title(); ?></p>
        </div>
    </div>
</div>

<!--  -->
<section class="l-blog-list p-blog-list">
    <div class="l-inner p-blog-list__inner">
        <!-- パンくずリスト -->
        <div class="p-blog-list__breadcrumbs c-breadcrumbs">
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
        <!-- カテゴリ一覧 -->
        <div class="p-blog-list__category c-category">
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
        <!-- ブログ一覧 -->
        <div class="p-blog-list__items p-cards">
            <a href="#" class="p-cards__item p-card">
                <span class="p-card__new-icon">new</span>
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog01.jpg" alt="ブログ1">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog02.jpg" alt="ブログ2">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog03.jpg" alt="ブログ3">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog04.jpg" alt="ブログ4">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog05.jpg" alt="ブログ5">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog06.jpg" alt="ブログ6">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog07.jpg" alt="ブログ7">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog08.jpg" alt="ブログ8">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
            <a href="#" class="p-cards__item p-card">
                <figure class="p-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/blog09.jpg" alt="ブログ9">
                </figure>
                <div class="p-card__content">
                    <div class="p-card__body">
                        <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                        <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    <div class="p-card__info">
                        <span class="p-card__category">カテゴリ</span>
                        <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ページネーション -->

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