<?php get_header(); ?>

<!-- 事業内容 -->
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

<!--  -->
<section class="l-sub-content p-sub-content" id="content">
    <div class="p-sub-content__inner">
        <div class="p-sub-content__header">
            <h2 class="p-sub-content__headertitle"><?php the_title(); ?></h2>
            <p class="p-sub-content__headertext">
                私たちは地域・社会の発展、環境の保全に貢献し、安全で快適なサービスを提供します。<br>
                また、お客さまの新たなる感動の創造に誇りと責任を持って挑戦します。
            </p>
        </div>
        <div class="p-sub-content__items">
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content02.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">誠実であること</h3>
                    <p class="p-sub-content__text">
                        常に、「安全」を基本にすべての事業・サービスを推進します。<br>
                        常に、オープンで、フェアな心を持って行動します。<br>
                        常に、お客さまの声、地域の声を大切にします。
                    </p>
                </div>
            </div>
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content03.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">共に歩むこと</h3>
                    <p class="p-sub-content__text">
                        常に、自然環境、地球環境への配慮を忘れません。<br>
                        常に、地域社会の一員として行動します。<br>
                        常に、グループ内外と積極的に連携を図ります。
                    </p>
                </div>
            </div>
            <div class="p-sub-content__item">
                <figure class="p-sub-content__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/content04.jpg" alt="企業理念1">
                </figure>
                <div class="p-sub-content__body">
                    <h3 class="p-sub-content__title">挑戦すること</h3>
                    <p class="p-sub-content__text">
                        常に、グローバルな視点を持って行動します。<br>
                        常に、時代を先取りする新しいサービスを提案します。<br>
                        常に、お客さまの生活に新しい感動を提供します。
                    </p>
                </div>
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
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class=" c-btn">お問い合わせへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>