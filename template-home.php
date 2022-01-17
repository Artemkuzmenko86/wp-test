<?php
/**
 * Template name: Home page
 */

get_header();
?>

<section class="hero">
    <div class="container">
        <div class="row hero-row">
            <div class="column-left hero-column-left">
                <h1 class="hero-title font">
                    <?php echo get_the_title(); ?>
                </h1>
                <h2 class="hero-important font">
                    <?php echo esc_attr($wptest_options['wptest_hero_important']); ?>
                </h2>
                <p class="hero-info font">
                    <?php echo esc_attr($wptest_options['wptest_description']); ?>
                </p>
                <ul class="hero-list font">
                    <li>
                        <?php echo esc_attr($wptest_options['wptest_feature_1']); ?>
                    </li>
                    <li>
                        <?php echo esc_attr($wptest_options['wptest_feature_2']); ?>
                    </li>
                    <li>
                        <?php echo esc_attr($wptest_options['wptest_feature_3']); ?>
                    </li>
                </ul>
                <div class="hero-buttons-wrapper">
                    <a href="<?php echo esc_url($wptest_options['wptest_youtube_link']); ?>" class="outline-btn-blue"
                        target="_blank">
                        <i class="fab fa-youtube"></i> Take A Quick Tour
                    </a>
                    <a href="<?php echo esc_url($wptest_options['wptest_hero_btn_link']); ?>" class="green-btn">
                        Try It for Free!
                    </a>
                </div>
            </div>
            <div class="column-right hero-column-right">
                <img src="<?php echo esc_url( $wptest_options['wptest_hero_img']['url'])?>" alt="hero image"
                    class="hero-img">
            </div>
        </div>
    </div>
</section>

<section class="offer">
    <div class="container">
        <div class="row offer-row">
            <div class="column-left offer-column-left">
                <img src="<?php echo esc_url( $wptest_options['offer_img']['url'])?>" alt="offer image">
            </div>
            <div class="column-right offer-column-right">
                <h3 class="offer-title font">
                    <?php echo esc_attr($wptest_options['offer_main_title']); ?>
                </h3>
                <h3 class="offer-important font">
                    <?php echo esc_attr($wptest_options['offer_big_headline']); ?>
                </h3>
                <p class="offer-info font">
                    <?php echo esc_attr($wptest_options['offer_text']); ?>
                </p>
                <div class="offer-btn-wrapper">
                    <a href="<?php echo esc_url($wptest_options['offer_button']); ?>" class="green-btn">Start Today!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials">
    <div class="container">
    <div class="row">
    <div class="testimonials-title font">
    <?php echo esc_attr($wptest_options['testimonials_text']); ?>
            </div>
    </div>
        <div class="row testimonials-row">
            <div class="testimonials-slider">
            <?php echo do_shortcode($wptest_options['testimonials_shortcode']); ?>
            </div>
            <div class="testimonials-form">
            <button class="accordion testimonials-form-title">
            <?php echo esc_attr($wptest_options['testimonials_btn']); ?>
            </button>
            <div class="panel">
            <?php echo do_shortcode($wptest_options['testimonials_form']); ?>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="contacts-text-wrapper">
                <h3 class="contacts-title font">
                    <?php echo esc_attr($wptest_options['contacts_title']); ?>
                </h3>
                <p class="contacts-info font">
                    <?php echo esc_attr($wptest_options['contacts_text']); ?>
                </p>
            </div>
        </div>
        <div class="row contacts-row">
            <div class="column-left contacts-column-left">
                <div class="contacts-map-wrapper">
                <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A8cbdd8d10673615d3967e12398a5c13ea815438b15540e9228f3a8d50dc4c463&amp;source=constructor" width="810" height="550" frameborder="0"></iframe>          
                </div>
            </div>
            <div class="column-right contacts-column-right">
            <div class="contacts-form-wrapper">
                <div class="contacts-form-title font">
                <?php echo esc_attr($wptest_options['contacts_form_title']); ?>
                </div>
                <?php echo do_shortcode($wptest_options['contacts_form_shortcode']); ?>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>