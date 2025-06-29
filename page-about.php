<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 * @package FreneticFocus
 */

get_header();
?>

<!-- About Hero Section -->
<?php
// Add the about hero background
$about_hero_bg = get_theme_mod('about_hero_background_image', get_template_directory_uri() . '/assets/images/hero-image.png');
echo '<style>.about-hero { background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' . esc_url($about_hero_bg) . '); }</style>';
?>
<section class="about-hero section">
    <div class="container">
        <div class="about-hero-content">
            <h1><?php echo esc_html(get_theme_mod('about_page_title', 'About Lara van Rooyen')); ?></h1>
            <p><?php echo esc_html(get_theme_mod('about_page_subtitle', 'Change Management & Program Management Expert')); ?></p>
        </div>
    </div>
    <a href="#about-content" class="scroll-down">
        <span>SCROLL DOWN</span>
        <div class="arrow"></div>
    </a>
</section>

<!-- About Content Section -->
<section id="about-content" class="about-content-section section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <?php
                // Get content from either the customizer setting or the WordPress editor
                $about_content = get_theme_mod('about_content');
                if (!empty($about_content)) {
                    echo wp_kses_post($about_content);
                } else {
                    // Fallback to the WordPress editor content if no customizer content
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                }
                ?>
            </div>
            <div class="about-image">
                <?php 
                // Get about image from customizer or use default
                $about_image = get_theme_mod('about_image');
                
                // If no image is set in customizer, use the default
                if (empty($about_image)) {
                    $about_image = get_template_directory_uri() . '/assets/images/about-image.png';
                }
                
                // Get image alt text
                $about_image_alt = get_theme_mod('about_image_alt', 'Lara van Rooyen');
                ?>
                <img src="<?php echo esc_url($about_image); ?>" alt="<?php echo esc_attr($about_image_alt); ?>" class="about-image-responsive">
            </div>
        </div>
    </div>
</section>

<!-- Experience & Background Section -->
<section class="experience-section section">
    <div class="container">
        <h2>Experience & Expertise</h2>
        
        <div class="experience-grid">
            <div class="experience-item">
                <div class="experience-icon">📊</div>
                <h3>Professional Journey</h3>
                <p>With two decades of experience in spearheading transformative change initiatives across Europe, Australia and South Africa, I've worked with leading organizations including Microsoft, Oracle, Ericsson, and Janssen.</p>
            </div>
            
            <div class="experience-item">
                <div class="experience-icon">🔍</div>
                <h3>Specialization</h3>
                <p>Prosci Change Management certified with experience across Health/Pharma, IT, and Telco sectors. I help organizations navigate complex transformations with strategic guidance and hands-on support.</p>
            </div>
            
            <div class="experience-item">
                <div class="experience-icon">💼</div>
                <h3>Sector Experience</h3>
                <p>I've successfully delivered projects in both public and private sectors, bringing a wealth of cross-industry knowledge to every engagement.</p>
            </div>
            
            <div class="experience-item">
                <div class="experience-icon">🌱</div>
                <h3>Approach</h3>
                <p>I'm passionate about empowering organizations to embrace change as a strategic advantage and thrive in today's dynamic business environment.</p>
            </div>
        </div>
        
        <div class="cta-box">
            <h3>Ready to transform your organization?</h3>
            <p>Let's discuss how I can support your next transformation program.</p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn">Get in Touch</a>
        </div>
    </div>
</section>

<?php
get_footer();
?>