<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * @package FreneticFocus
 */

get_header();
?>

<!-- Add a class to body for contact page styling -->
<script>document.body.classList.add('contact-page');</script>

<!-- Contact hero section removed as requested -->

<!-- Contact Form Section -->
<section id="contact-form" class="contact-form-section full-height">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2><?php echo esc_html(get_theme_mod('contact_info_title', 'Contact Information')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('contact_info_description', 'We\'d love to hear from you. Fill out the form or connect with us directly.')); ?></p>
                
                <div class="contact-details">
                    <div class="contact-detail">
                        <h3>Connect</h3>
                        <div class="linkedin-button">
                            <a href="<?php echo esc_url(get_theme_mod('linkedin_url', '#')); ?>" target="_blank" class="btn btn-linkedin">Connect on LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Send a Message</h2>
                <?php 
                // Check if Contact Form 7 is active
                if (shortcode_exists('contact-form-7')) {
                    $contact_form_id = get_theme_mod('contact_form_id');
                    if ($contact_form_id) {
                        // Using double quotes to properly display the Contact Form 7 shortcode
                        echo do_shortcode('[contact-form-7 id="' . esc_attr($contact_form_id) . '"]');
                    } else {
                        echo '<p>Please set a Contact Form 7 ID in the Customizer under the Contact Page settings.</p>';
                    }
                } else {
                    // Basic form fallback if Contact Form 7 is not installed
                    ?>
                    <form action="#" method="post" class="basic-contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>