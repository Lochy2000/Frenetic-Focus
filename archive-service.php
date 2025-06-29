<?php
/**
 * The template for displaying service archive
 *
 * @package FreneticFocus
 */

get_header();
?>

<!-- Services Hero Section -->
<?php
// Add the services hero background
$services_hero_bg = get_theme_mod('services_hero_background_image', get_template_directory_uri() . '/assets/images/hero-image.png');
echo '<style>.services-hero { --services-hero-bg: url(' . esc_url($services_hero_bg) . '); }</style>';
?>
<section class="services-hero section">
    <div class="container">
        <div class="services-hero-content">
            <h1><?php echo esc_html(get_theme_mod('services_page_title', 'Our Services')); ?></h1>
            <p><?php echo esc_html(get_theme_mod('services_page_subtitle', 'Specialized solutions designed to meet your unique business needs')); ?></p>
            <a href="#service-listing" class="btn btn-light"><?php echo esc_html(get_theme_mod('services_page_button_text', 'Explore Our Services')); ?></a>
        </div>
    </div>
    <a href="#service-listing" class="scroll-down">
        <span>SCROLL DOWN</span>
        <div class="arrow"></div>
    </a>
</section>

<!-- Service Listing -->
<section id="service-listing" class="service-listing-section">
    <div class="container">
        <h2>Our Service Offerings</h2>
        
        <div class="services-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="service-card">
                        <div class="service-icon">
                            <?php 
                            $service_icon = get_post_meta(get_the_ID(), '_service_icon', true);
                            echo !empty($service_icon) ? esc_html($service_icon) : '⚙️';
                            ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Learn More →</a>
                    </div>
                <?php endwhile; ?>
                
                <?php the_posts_pagination(); ?>
                
            <?php else : ?>
                <p>No services found. Please check back later.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta section animated-bg">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Transform Your Business?')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('cta_subtitle', 'Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.')); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('cta_button_text', 'Book a Consultation')); ?></a>
    </div>
</section>

<?php get_footer(); ?>