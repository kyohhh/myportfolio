<?php get_header(); ?>

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

<!--  -->
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

<section class="l-sub-contact p-sub-contact">
    <div class="p-sub-contact__inner l-inner">
        <!-- コンタクトフォーム -->
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>