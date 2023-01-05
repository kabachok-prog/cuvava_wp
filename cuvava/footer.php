<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cuvava
 */

?>

<footer style="width: 100%;">
    <div class="footer__first">
        <img src="<?php bloginfo('template_url') ?>/assets/img/logo-footer.png" alt="">
    </div>
    <div class="footer__second">
        <div class="social">
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/img/facebook.png" alt="">
            </a>
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/img/instagram.png" alt="">
            </a>
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/img/youtube.png" alt="">
            </a>
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/img/twitter.png" alt="">
            </a>
        </div>
    </div>
    <div class="footer__third">
        <div class="header-list" style="margin: auto; margin-top: 20px;">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-2',
                    'menu_id' => 'footer-menu',
                    'menu_class' => 'cf',
                )
            );
            ?>
        </div>
        <div class="atten__block">
            *Statements made on this website have not been evaluated by the US. Food and Drug Administration. These
            products are not intended to diagnose treat, cure or prevent any disease. Information provided by this
            website or this company is not a substitute for individual medical advice.
        </div>
        <div class="copyright">
            <div class="address">
                2361 CONEY ISLAND AVENUE, BROOKLYN, NEW YORK 11223, UNITED STATES
            </div>
            <a href="tel:+18336374675">833-637-4675</a>
            <div class="copy">
                COPYRIGHT © 2022 MDSIMPLE - ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>