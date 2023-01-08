<?php
/**
 * Template name: login Template
 */

get_header(); ?>
<section style="max-width: 1136px;"></section>
    <div class="login__content">
        <div class="login__text">
            <div class="login__text-title">
                Apply for a Medical Marijuana Card
            </div>
            <div class="login__text-subtitle">
                Talk to a licensed California medical marijuana doctor and get approved or your money back!
                <br><br>
                Getting started only takes a few minutes. Simply sign up, answer a few questions, and schedule your
                appointment. Everything should be this easy.
            </div>
        </div>
        <div class="login__form">
            <div class="login__form-title">
                Get Approved Today
            </div>
            <div class="login__form-subtitle">
                Start for as low as $24.75
            </div>
            <?php echo do_shortcode('[wpforms id="95" title="false"]') ?>
            <!-- <form action="post">
                <input class="login__input" type="email" placeholder="Email">
                <input class="login__input" type="password" placeholder="Password"> <br>
                <div class="login__label-check">
                    <input type="checkbox" id="check"> <label class="login__label" for="check">*I accept the Terms
                        *Indicates Required Field</label>
                </div>
                <input class="login__button" type="submit" value="Log In">
            </form> -->
            <!-- <div class="register">
                <a href="../pages/signup.html">
                    Sign Up
                </a>
            </div> -->
        </div>
    </div>
</section>

<?php get_footer();