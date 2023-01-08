<?php
/**
 * Template name: Sign In Form Template
 */

get_header(); ?>


<section style="max-width: 443px;" class="form__section">
        <div class="signup__content">
            <div class="signup__text">
                Fill out your Medical Form
            </div>
            <?php echo do_shortcode('[wpforms id="52" title="false"]') ?>
        </div>
    </section>



<?php get_footer();