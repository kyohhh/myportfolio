    <!-- footer -->
    <footer class="p-footer">
        <div class="p-footer__pagetop js-pagetop">
            <a href="#" class="p-footer__pagetop-link"></a>
        </div>
        <div class="p-footer__inner">
            <div class="p-footer__content">
                <h1 class="p-footer__logo">
                    <a href="<?php echo esc_url( home_url('/')); ?>" class="p-footer__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/logo1.png" alt="新井商事ロゴ">
                    </a>
                </h1>
                <nav class="p-footer__nav p-footer-nav">
                    <?php
                        $defaults = array(
                            'theme_location'  => 'footer', //functions.php「メニューの位置」の識別子
                            'container'       => false,
                            'container_class' => '',
                            'menu_class'      => 'p-footer-nav__items',
                            'depth'           => 0,
                            'add_li_class'    => 'p-footer-nav__item', // liタグへclass追加
                            'add_a_class'     => '' // aタグへclass追加
                        );
                        wp_nav_menu( $defaults );
                    ?>


                    <!-- <ul class="p-footer-nav__items">
                        <li class="p-footer-nav__item"><a href="#news">お知らせ</a></li>
                        <li class="p-footer-nav__item"><a href="#content">事業内容</a></li>
                        <li class="p-footer-nav__item"><a href="#works">制作実績</a></li>
                        <li class="p-footer-nav__item"><a href="#overview">企業概要</a></li>
                        <li class="p-footer-nav__item"><a href="#blog">ブログ</a></li>
                        <li class="p-footer-nav__item"><a href="#contact">お問い合わせ</a></li>
                    </ul> -->
                </nav>
            </div>
            <p class="p-footer__copy">&copy; 2022 新井商事 Inc.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>