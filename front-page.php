<?php
/**
 * The template for displaying the front page
 *
 * @package FreneticFocus
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero section">
    <div class="container" style="display: flex; justify-content: center;">
        <div class="hero-content text-center">
            <h1 style="font-size: 42px; line-height: 1.3;"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Empowering businesses and individuals to enhance digital literacy and operational efficiency')); ?></h1>
            <div style="text-align: center;"><a href="<?php echo freneticfocus_get_button_url('hero_button_url', 'contact'); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('hero_button_text', 'Book a Consultation')); ?></a></div>
        </div>
    </div>
    <a href="#intro" class="scroll-down">
        <span>SCROLL DOWN</span>
        <div class="arrow"></div>
    </a>
</section>

<!-- Introduction Section -->
<section id="intro" class="intro section">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2><?php echo esc_html(get_theme_mod('intro_title', 'Welcome to FreneticFocus')); ?></h2>
                <div class="intro-description">
                    <?php echo wp_kses_post(get_theme_mod('intro_content', '<p>At FreneticFocus, we specialize in delivering strategic management solutions that help organizations navigate change and achieve operational excellence. Based in Nice, France, we bring global expertise with experience across Sweden and Australia.</p>')); ?>
                </div>
                
                <div class="location-info">
                    <div class="location">
                        <div class="location-icon">🇫🇷</div>
                        <p>FR</p>
                    </div>
                    <div class="location">
                        <div class="location-icon">🇸🇪</div>
                        <p>SE</p>
                    </div>
                    <div class="location">
                        <div class="location-icon">🇦🇺</div>
                        <p>AU</p>
                    </div>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="btn"><?php echo esc_html(get_theme_mod('intro_button_text', 'Learn More About Me')); ?></a>
            </div>
            <div class="intro-image">
                <?php if (get_theme_mod('intro_image')) : ?>
                <img src="<?php echo esc_url(get_theme_mod('intro_image', get_template_directory_uri() . '/assets/images/about-image.png')); ?>" alt="<?php echo esc_attr(get_theme_mod('intro_image_alt', 'FreneticFocus Expertise')); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-preview section">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('services_title', 'Our Services')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('services_subtitle', 'Specialized solutions designed to meet your unique business needs.')); ?></p>
        
        <div class="services-grid">
            <?php
            // Get services to display from customizer setting or default to 3
            $services_count = get_theme_mod('services_count', 3);
            
            // Query services
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => $services_count,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            
            $services_query = new WP_Query($args);
            
            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    // Get service meta
                    $service_icon = get_post_meta(get_the_ID(), '_service_icon', true);
                    $service_link = get_post_meta(get_the_ID(), '_service_link', true);
                    
                    if (empty($service_link)) {
                        $service_link = get_permalink();
                    }
            ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo esc_html($service_icon); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php echo esc_url($service_link); ?>">Learn More →</a>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback if no services are created yet
            ?>
                <div class="service-card">
                    <div class="service-icon">🏠</div>
                    <h3>Real Estate Digital Literacy</h3>
                    <p>Empowering real estate professionals with digital skills</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>#redili">Learn More →</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Program Management</h3>
                    <p>Coordinated project execution</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>#program-management">Learn More →</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3>M365 Adoption</h3>
                    <p>Maximize your Microsoft 365 investment</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>#m365-adoption">Learn More →</a>
                </div>
            <?php endif; ?>
        </div>
        
        <div style="text-align: center; margin-top: 60px;">
            <a href="<?php echo freneticfocus_get_button_url('services_button_url', 'services'); ?>" class="btn"><?php echo esc_html(get_theme_mod('services_button_text', 'View All Services')); ?></a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta section animated-bg">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Transform Your Business?')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('cta_subtitle', 'Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.')); ?></p>
        <a href="<?php echo freneticfocus_get_button_url('cta_button_url', 'contact'); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('cta_button_text', 'Book a Consultation')); ?></a>
    </div>
</section>

<?php get_footer(); ?>