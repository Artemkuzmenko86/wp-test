<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptest
 */
global $wptest_options;

?>
<footer class="footer">
        <div class="container">
            <div class="row footer-row-top">
                <div class="column-left footer-column-left">
                <?php if($wptest_options['wptest_footer_logo']){ ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( $wptest_options['wptest_footer_logo']['url'])?>" alt="logo" class="footer-logo">
                    </a><?php } ?>
                    <div class="footer-text-widget">
                    <?php echo esc_attr($wptest_options['footer_text']); ?>
                    </div>
                </div>
                <div class="column-right footer-column-right">
                        
                </div>
            </div>
            <div class="row footer-row-bottom">
                <div class="footer-additional-info font">
                    <a href="<?php echo esc_url($wptest_options['terms_footer']); ?>" class="footer-link">Terms & Conditions</a>
                        <span class="footer-devider"></span> 
                        <a href="<?php echo esc_attr($wptest_options['policy_footer']); ?>" class="footer-link">Privacy Policy</a>
                </div>
                <div class="footer-copyright font">
                    Copyright ©
                    <script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                            </script>
                    All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
