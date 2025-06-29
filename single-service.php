<?php
/**
 * Template for displaying single service
 *
 * @package FreneticFocus
 */

get_header();
?>

<div class="service-single-page">
    <?php while (have_posts()) : the_post(); ?>
        <!-- Service Hero Section -->
        <section class="single-service-hero">
            <div class="container">
                <div class="service-hero-content">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>

        <!-- Service Content -->
        <section class="single-service-content">
            <div class="container">
                <div class="service-content-layout">
                    <div class="service-main-content">
                        <?php 
                        // Display featured image if available
                        if (has_post_thumbnail()) : 
                        ?>
                            <div class="service-featured-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="service-description">
                            <?php the_content(); ?>
                        </div>

                        <?php 
                        // Get Features from post meta
                        $features = get_post_meta(get_the_ID(), '_service_features', true);
                        
                        if (!empty($features)) :
                        ?>
                        <div class="service-features">
                            <h3>Key Features</h3>
                            <ul class="feature-list">
                                <?php 
                                // If features are stored as array
                                if (is_array($features)) :
                                    foreach ($features as $feature) :
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php 
                                    endforeach;
                                else :
                                    // If features are stored as string with line breaks
                                    $features_array = explode("\n", $features);
                                    foreach ($features_array as $feature) :
                                        if (trim($feature)) :
                                ?>
                                    <li><?php echo esc_html(trim($feature)); ?></li>
                                <?php 
                                        endif;
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="service-sidebar">
                        <div class="service-contact-box">
                            <h3>Interested in this service?</h3>
                            <p>Contact us today for a consultation about how we can help transform your business.</p>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">Request a Consultation</a>
                        </div>
                        
                        <div class="other-services">
                            <h3>Other Services</h3>
                            <ul>
                            <?php
                            // Get other services
                            $other_services = new WP_Query(array(
                                'post_type' => 'service',
                                'posts_per_page' => 5,
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            
                            if ($other_services->have_posts()) :
                                while ($other_services->have_posts()) : $other_services->the_post();
                            ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<li>No other services found</li>';
                            endif;
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    
    <!-- Call to Action Section -->
    <section class="cta section animated-bg">
        <div class="container">
            <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Transform Your Business?')); ?></h2>
            <p><?php echo esc_html(get_theme_mod('cta_subtitle', 'Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.')); ?></p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('cta_button_text', 'Book a Consultation')); ?></a>
        </div>
    </section>
</div>

<?php get_footer(); ?>