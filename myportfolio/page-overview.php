<?php get_header(); ?>

<!-- sv -->
<div class="p-sub-visual js-sub-mv">
    <div class="p-sub-visual__inner">
        <div class="p-sub-visual__content">
            <picture class="p-sub-visual__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/overview/img-overview.jpg"
                    media="(min-width: 768px)"><!-- ○○px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/overview/img-overview-sp.jpg"
                    alt=" サブビジュアル">
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
            <li class="p-breadcrumbs__item">
                <a href="<?php echo esc_url( home_url('/')); ?>" class="p-breadcrumbs__link">トップ</a>
            </li>
            <li class="p-breadcrumbs__item">
                <span>></span>
            </li>
            <li class="p-breadcrumbs__item">
                <a href="" class="p-breadcrumbs__link"><?php the_title(); ?></a>
            </li>
        </ul>
    </div>
</div>

<!-- 企業概要 -->
<section class="l-sub-overview p-sub-overview">
    <div class="l-inner">
        <!-- 企業概要 -->
        <dl class="p-sub-overview__info p-explain">

            <!-- 繰り返しフィールド -->
            <?php $overviews = SCF::get('overview');
            foreach ($overviews as $overview ) { ?>

            <div class="p-explain__block">
                <dt class="p-explain__header"><?php echo $overview['overview_title']; ?></dt>
                <dd class="p-explain__description"><?php echo $overview['overview_text']; ?></dd>
            </div>

            <?php } ?>
            <!-- 繰り返しフィールド -->

        </dl>
        <!-- google map -->
        <div class="l-map p-map">
            <div class="p-map__iframe">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7479754723136!2d139.74323885081193!3d35.65858048010242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1653876795903!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


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