    <!-- footer -->
    <footer class="p-footer">
        <div class="p-footer__pagetop js-pagetop">
            <a href="#" class="p-footer__pagetop-link"></a>
        </div>
        <div class="p-footer__inner">
            <div class="p-footer__content">
                <h1 class="p-footer__logo">
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="p-footer__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="会社名">
                    </a>
                </h1>
                <nav class="p-footer__nav p-footer-nav">
                    <ul class="p-footer-nav__items">
                        <li class="p-footer-nav__item"><a href="#news">お知らせ</a></li>
                        <li class="p-footer-nav__item"><a href="#content">事業内容</a></li>
                        <li class="p-footer-nav__item"><a href="#works">制作実績</a></li>
                        <li class="p-footer-nav__item"><a href="#overview">企業概要</a></li>
                        <li class="p-footer-nav__item"><a href="#blog">ブログ</a></li>
                        <li class="p-footer-nav__item"><a href="#contact">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <p class="p-footer__copy">&copy; 2021 Code Ups Inc.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>