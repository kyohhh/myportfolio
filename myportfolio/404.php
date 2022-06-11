<?php get_header(); ?>

<div class="l-404 p-404">
    <div class="l-inner p-404__inner">
        <div class="p-404__title">404 Not Found</div>
        <div class="p-404__text">お探しのページは見つかりませんでした。</div>
        <div class="p-404__btn">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn">トップへ</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>