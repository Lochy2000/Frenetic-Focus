<?php
/**
 * The template for displaying the footer
 *
 * @package FreneticFocus
 */

?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <h3><?php bloginfo('name'); ?></h3>
                        <p>Comprehensive management services tailored to meet your unique business needs.</p>
                        <div class="social-links">
                            <?php if (get_theme_mod('linkedin_url')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" target="_blank">LinkedIn</a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('twitter_url')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank">Twitter</a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('facebook_url')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank">Facebook</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="footer-col">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <h3>Quick Links</h3>
                        <?php
                        if (has_nav_menu('footer')) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'menu_id'        => 'footer-menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'fallback_cb'    => false,
                            ));
                        } else {
                            // Fallback menu if no footer menu is assigned
                            echo '<ul id="footer-menu">';
                            echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                            
                            // Get about page URL dynamically
                            $about_page = get_page_by_path('about');
                            if ($about_page) {
                                echo '<li><a href="' . esc_url(get_permalink($about_page->ID)) . '">About</a></li>';
                            }
                            
                            // Get services page URL dynamically
                            $services_page = get_page_by_path('services');
                            if ($services_page) {
                                echo '<li><a href="' . esc_url(get_permalink($services_page->ID)) . '">Services</a></li>';
                            }
                            
                            // Get contact page URL dynamically
                            $contact_page = get_page_by_path('contact');
                            if ($contact_page) {
                                echo '<li><a href="' . esc_url(get_permalink($contact_page->ID)) . '">Contact</a></li>';
                            }
                            
                            echo '</ul>';
                        }
                        ?>
                    <?php endif; ?>
                </div>
                
                <div class="footer-col">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php else : ?>
                        <h3>Contact Us</h3>
                        <p><?php echo esc_html(get_theme_mod('footer_address', 'Stockholm and Nice')); ?></p>
                        <?php
// Don't display email, show LinkedIn icon instead
$linkedin_url = get_theme_mod('linkedin_url', 'https://linkedin.com/company/freneticfocus');
if (!empty($linkedin_url)) {
    echo '<div class="social-icons">';
    echo '<a href="' . esc_url($linkedin_url) . '" target="_blank" class="linkedin-icon" aria-label="LinkedIn">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>';
    echo '</a>';
    echo '</div>';
}
?>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Footer scripts moved to main.js and header.js -->

<?php wp_footer(); ?>

</body>
</html>