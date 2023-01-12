<?php
/**
 * Template name: Form Template
 */

get_header(); ?>


<section style="max-width: 443px;" class="form__section">
        <div class="signup__content">
            <div class="signup__text">
                Fill out your Medical Form
            </div>
            <?php echo do_shortcode('[wpforms id="52" title="false"]') ?>
            <!-- <form class="signup__form" action="post">
                <label for="firstname" class="label-signup">Name <span>*</span></label> <br>
                <div class="signup__name">
                    <input style="width: 211px;" class="signup__input" type="text" id="firstname" placeholder="First Name">
                    <input style="width: 211px;" class="signup__input" type="text" id="lastname" placeholder="Last Name">
                </div>
                
                <label for="date" class="label-signup">Date of Birth <span>*</span></label> <br>
                <input style="width: 211px; margin-bottom: 25px;" class="signup__input" type="date" id="date" placeholder="MM-DD-YYYY"> <br>

                <label for="gender" class="label-signup">Gender <span>*</span></label> <br>
                <select style="width: 211px; margin-bottom: 25px;" class="signup__input" name="gender" id="gender">
                    <option value="Please Select" selected disabled>Please Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select> <br>

                <label for="address" class="label-signup">Address <span>*</span></label> <br>

                <input style="width: 443px;" class="signup__input" type="text" name="address" id="street" placeholder="Street Address"> <br>

                <input style="width: 443px;" class="signup__input" type="text" name="address2" id="street2" placeholder="Street Address Line 2"> <br>

                <div class="city-state" style="display: flex;">

                    <input style="width: 211px;" class="signup__input" type="text" name="city" id="city" placeholder="City">

                    <input style="width: 211px;" class="signup__input" type="text" name="state" id="state" placeholder="State / Province">
                </div>

                <input style="width: 443px; margin-bottom: 25px;" class="signup__input" type="text" name="zip" id="zip" placeholder="Postal / Zip Code">

                <div class="phone-email" style="display: flex; margin-bottom: 25px;">

                    <div class="phone">
                        <label for="phone" class="label-signup">Phone <span>*</span></label> <br>
                        <input style="width: 211px;" class="signup__input" type="text" name="phone" id="phone" placeholder="(000) 000-0000">
                    </div>

                    <div class="email">
                        <label for="email" class="label-signup">Email <span>*</span></label> <br>
                        <input style="width: 211px;" class="signup__input" type="text" name="email" id="email" placeholder="example@example.com">
                    </div>

                </div>

                <label for="taking" class="label-signup">Are you taking any medications? <span>*</span></label> <br>
                <select style="width: 266px; margin-bottom: 25px;" class="signup__input" name="taking" id="taking">
                    <option value="Please Select" selected disabled>Please Select</option>
                    <option value="1">1</option>
                </select> <br>

                <label style="width: 328px; margin-bottom: 25px;" for="whattaking" class="label-signup">What medication are you currently taking?</label> <br>
                <input class="signup__input" type="text" name="whattaking" id="whattaking"> <br>

                <label for="halluc" class="label-signup">Have you ever experienced hallucinations before? <span>*</span></label> <br>
                <select style="width: 399px; margin-bottom: 25px;" class="signup__input" name="halluc" id="halluc">
                    <option value="Please Select" selected disabled>Please Select</option>
                    <option value="1">1</option>
                </select> <br>

                <label for="schizo" class="label-signup">Have you ever been diagnosed with schizophrenia? <span>*</span></label> <br>
                <select style="width: 411px; margin-bottom: 25px;" class="signup__input" name="schizo" id="schizo">
                    <option value="Please Select" selected disabled>Please Select</option>
                    <option value="1">1</option>
                </select> <br>

                <label for="bipolar" class="label-signup">Do you have any history of bipolar disorder? <span>*</span></label> <br>
                <select style="width: 354px;" class="signup__input" name="bipolar" id="bipolar">
                    <option value="Please Select" selected disabled>Please Select</option>
                    <option value="1">1</option>
                </select> <br>

                <input type="submit" name="submit-signup" class="submit__signup" value="Sign Up">
            </form> -->
        </div>
    </section>



<?php get_footer();