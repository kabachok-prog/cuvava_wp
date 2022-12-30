<?php
/**
 * Template name: Doctor Template
 */

get_header(); ?>

<section style="max-width: 992px;">
        <div class="doctor__content" style="height: 337px;">
            <div class="doctor__text">
                <div class="doctor__text-title" style="font-size: 26px; margin-bottom: 20px;">
                    Get Your Medical Marijuana Card <br>
                    in Your State <br>
                    Online for <span style="color: #1C833E;">$149</span>
                </div>
                <select name="state" id="select-state" style="">
                    <option value="1" selected disabled>Select Your State</option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>
            <div class="doctor__photo">
                <img src="<?php bloginfo('template_url') ?>/assets/img/doctor.png" alt="">
            </div>
        </div>
    </section>
    <section style="max-width: 992px;">
        <div class="doctor__appoint">
            <img src="<?php bloginfo('template_url') ?>/assets/img/doctors.png" alt="">
            <div class="appoint__text">
                <div class="appoint_title">
                    Our appointments are a breeze.
                </div>
                <div class="appoint_subtitle">
                    Just provide a basic medical history, and we’ll set you up with a licensed marijuana doctor. You’ll have a brief talk in-person or over video, depending where you live. Tell them what’s wrong and ask questions about treatment, like: what to use; how to use it; where to get it.
                </div>
                <div class="appoint_title" style="margin-top: 30px;">
                    These doctors are the real deal.
                </div>
                <div class="appoint_subtitle">
                    Every doctor in our network is licensed in the state(s) they practice in so they can certify patients for medical marijuana cards legally. <br>
                    We make a cloud-computing based Electronic Medical Records or “EMR” solution available to the doctors in our network to ensure your interactions with them are HIPAA compliant. When it comes to retrieving and storing your patient data, our doctors do so in the safest and securest way possible.
                </div>
            </div>
        </div>
    </section>
    <section style="max-width: 906px;">
        <div class="qualify__content">
            <div class="qualify-title">
                What are the qualifying conditions?
            </div>
            <div class="qualify-subtitle">
                More than a dozen qualifying conditions make Georgia residents eligible to receive a THC-oil registry card. The state certifies <br>
                patients who have:
            </div>
            <ul>
                <li>AIDS/HIV</li>
                <li>Amyotrophic Lateral Sclerosis (ALS)/Lou Gehrig’s Disease</li>
                <li>Alzheimer’s Disease</li>
                <li>Autism Spectrum Disorder</li>
                <li>Cancer</li>
                <li>Crohn’s Disease</li>
                <li>Epidermolysis Bullosa</li>
                <li>Intractable Pain</li>
                <li>Mitochondrial Disease</li>
                <li>Multiple Sclerosis</li>
                <li>Parkinson’s Disease</li>
                <li>Peripheral Neuropathy</li>
                <li>PTSD</li>
                <li>Seizures Characteristic of Epilepsy</li>
                <li>Sickle Cell Disease</li>
                <li>Terminal Illness</li>
                <li>Tourette’s Syndrome</li>
            </ul>
        </div>
    </section>

<?php get_footer();