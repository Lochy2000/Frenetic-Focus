<?php
/**
 * Template Name: Services Page
 * Template Post Type: page
 *
 * @package FreneticFocus
 */

get_header();
?>
<style>
    /* Remove any potential borders or margins that might cause a line */
    .service-nav-section {
        margin: 0;
        padding: 0;
        border: none;
    }
    #service-nav, #service-nav ul {
        border: none !important;
        margin-bottom: 0 !important;
    }
    .services-hero + .service-nav-section {
        margin-top: -1px !important; /* Fix any potential gap */
    }
</style>

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
        </div>
    </div>
    <a href="#change-management" class="scroll-down">
        <span>SCROLL DOWN</span>
        <div class="arrow"></div>
    </a>
</section>

<!-- Service Navigation - now a separate section after the hero -->
<section class="service-nav-section">
    <div class="container">
        <div id="service-nav" class="service-nav">
            <div class="service-nav-inner">
                <ul>
                <?php
                // Check if we have custom services
                if ($has_service_posts) {
                    // Loop through custom services for navigation
                    $services_query->rewind_posts();
                    while ($services_query->have_posts()) : $services_query->the_post();
                        $service_id = sanitize_title(get_the_title());
                        echo '<li><a href="#' . esc_attr($service_id) . '">' . get_the_title() . '</a></li>';
                    endwhile;
                    wp_reset_postdata();
                } else {
                    // Use default navigation items if no custom services
                    echo '<li><a href="#change-management">Change Management</a></li>';
                    echo '<li><a href="#program-management">Program Management</a></li>';
                    echo '<li><a href="#redili">REDILI</a></li>';
                    echo '<li><a href="#cx-mapping">CX Mapping</a></li>';
                    echo '<li><a href="#m365-adoption">M365 Adoption</a></li>';
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php
// Get all service posts ordered by menu_order
$services_args = array(
    'post_type' => 'service',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$services_query = new WP_Query($services_args);

// Check if we have any service posts
$has_service_posts = $services_query->have_posts();

// If we don't have any service posts yet, show the default hardcoded services
if (!$has_service_posts) {
    // HARDCODED SERVICES START - These will show until you create services in WordPress admin
    ?>
    <!-- Change Management -->
<section id="change-management" class="service-section">
    <div class="container">
    <h2>Change Management</h2>
    <div class="service-content">
    <div class="service-text">
    <?php echo wp_kses_post(get_theme_mod('change_management_content', '<p>Our change management services are designed to help organizations navigate the complexities of transformation and innovation. We provide strategic guidance and hands-on support to ensure smooth transitions and sustainable growth.</p>
<p>By identifying potential challenges and developing proactive solutions, we help businesses adapt to change while maintaining stability and productivity.</p>')); ?>
    
    <div class="service-features">
        <h3>Key Features</h3>
    <ul class="feature-list">
        <?php 
    $features = get_theme_mod('change_management_features', "Organizational change readiness assessments\nChange impact analysis and risk mitigation\nStakeholder engagement and communication planning\nResistance management strategies\nTraining and support for change implementation\nPost-change evaluation and sustainability planning");
    $features_array = explode("\n", $features);
    foreach ($features_array as $feature) :
        if (trim($feature)) :
    ?>
        <li><?php echo esc_html(trim($feature)); ?></li>
        <?php 
                endif;
            endforeach;
            ?>
            </ul>
        </div>
        
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
    </div>
    
    <div class="service-image">
        <?php 
            $change_management_image = get_theme_mod('change_management_image', get_template_directory_uri() . '/assets/images/changemanagement.png');
                ?>
                <img src="<?php echo esc_url($change_management_image); ?>" alt="Change Management Services">
            </div>
        </div>
    </div>
</section>

    <!-- Program Management -->
    <section id="program-management" class="service-section">
        <div class="container">
            <h2>Program Management</h2>
            <div class="service-content">
                <div class="service-text">
                    <?php echo wp_kses_post(get_theme_mod('program_management_content', '<p>We offer comprehensive program management services to oversee and coordinate multiple related projects. Our approach ensures that all initiatives align with the overarching goals of the organization, delivering value and achieving desired outcomes.</p>
<p>From planning and execution to monitoring and evaluation, we provide end-to-end support to drive successful program implementation.</p>')); ?>
                    
                    <div class="service-features">
                        <h3>Key Features</h3>
                        <ul class="feature-list">
                            <?php 
                            $features = get_theme_mod('program_management_features', "Program governance and structure development\nStrategic planning and roadmap creation\nResource allocation and optimization\nCross-project dependency management\nRisk and issue management\nProgram performance tracking and reporting\nBenefits realization management");
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) :
                                if (trim($feature)) :
                            ?>
                                <li><?php echo esc_html(trim($feature)); ?></li>
                            <?php 
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
                </div>
                
                <div class="service-image">
                    <?php 
                    $program_management_image = get_theme_mod('program_management_image', get_template_directory_uri() . '/assets/images/programManagement.png');
                    ?>
                    <img src="<?php echo esc_url($program_management_image); ?>" alt="Program Management Services">
                </div>
            </div>
        </div>
    </section>

    <!-- Real Estate Digital Literacy -->
    <section id="redili" class="service-section">
        <div class="container">
            <h2>Real Estate Digital Literacy (REDILI)</h2>
            <div class="service-content">
                <div class="service-text">
                    <?php echo wp_kses_post(get_theme_mod('redili_content', '<p>In today\'s digital age, understanding and leveraging technology is crucial for success in the real estate industry. Our REDILI program is designed to enhance digital literacy among real estate professionals.</p>
<p>We offer training and resources that cover a wide range of topics, including digital marketing, data analysis, and the use of technology in property management. Our goal is to empower real estate practitioners with the skills and knowledge needed to thrive in a digital-first market.</p>')); ?>
                    
                    <div class="service-features">
                        <h3>Key Features</h3>
                        <ul class="feature-list">
                            <?php 
                            $features = get_theme_mod('redili_features', "Digital marketing strategies for real estate\nSocial media management and content creation\nVirtual tour and property showcase technologies\nCRM and lead management systems\nData analytics for market analysis\nDigital document management and e-signatures\nSmart home and property technology integration");
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) :
                                if (trim($feature)) :
                            ?>
                                <li><?php echo esc_html(trim($feature)); ?></li>
                            <?php 
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
                </div>
                
                <div class="service-image">
                    <?php 
                    $redili_image = get_theme_mod('redili_image', get_template_directory_uri() . '/assets/images/REDILI.png');
                    ?>
                    <img src="<?php echo esc_url($redili_image); ?>" alt="Real Estate Digital Literacy">
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Journey Mapping Workshops -->
    <section id="cx-mapping" class="service-section">
        <div class="container">
            <h2>CX - Customer Journey Mapping Workshops</h2>
            <div class="service-content">
                <div class="service-text">
                    <?php echo wp_kses_post(get_theme_mod('cx_mapping_content', '<p>Understanding the customer journey is essential for creating meaningful and impactful experiences. Our customer journey mapping workshops are designed to help businesses gain insights into their customers\'s interactions and touchpoints.</p>
<p>By visualizing the customer journey, we identify opportunities for improvement and develop strategies to enhance customer satisfaction and loyalty. Our workshops are interactive, collaborative, and tailored to the specific needs of each organization.</p>')); ?>
                    
                    <div class="service-features">
                        <h3>Key Features</h3>
                        <ul class="feature-list">
                            <?php 
                            $features = get_theme_mod('cx_mapping_features', "Customer persona development\nTouchpoint identification and analysis\nEmotion mapping across customer interactions\nPain point identification and resolution strategies\nOpportunity discovery for enhancing customer experience\nAction planning for customer experience improvement\nMetrics and measurement framework development");
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) :
                                if (trim($feature)) :
                            ?>
                                <li><?php echo esc_html(trim($feature)); ?></li>
                            <?php 
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
                </div>
                
                <div class="service-image">
                    <?php 
                    $cx_mapping_image = get_theme_mod('cx_mapping_image', get_template_directory_uri() . '/assets/images/CX.png');
                    ?>
                    <img src="<?php echo esc_url($cx_mapping_image); ?>" alt="Customer Journey Mapping Workshops">
                </div>
            </div>
        </div>
    </section>

    <!-- M365 Adoption -->
    <section id="m365-adoption" class="service-section">
        <div class="container">
            <h2>M365 Adoption</h2>
            <div class="service-content">
                <div class="service-text">
                    <?php echo wp_kses_post(get_theme_mod('m365_adoption_content', '<p>Our M365 adoption services are designed to help organizations seamlessly integrate Microsoft 365 into their daily operations. We provide comprehensive training and support to ensure that your team can fully leverage the capabilities of Microsoft 365.</p>
<p>Our goal is to enhance productivity, collaboration, and efficiency through effective use of M365 tools and features.</p>')); ?>
                    
                    <div class="service-features">
                        <h3>Key Features</h3>
                        <ul class="feature-list">
                            <?php 
                            $features = get_theme_mod('m365_adoption_features', "M365 implementation planning and strategy\nUser adoption and change management\nCustomized training programs for different user levels\nWorkflow optimization using M365 tools\nSecurity and compliance configuration\nIntegration with existing systems and processes\nOngoing support and continuous improvement");
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) :
                                if (trim($feature)) :
                            ?>
                                <li><?php echo esc_html(trim($feature)); ?></li>
                            <?php 
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
                </div>
                
                <div class="service-image">
                    <?php 
                    $m365_adoption_image = get_theme_mod('m365_adoption_image', get_template_directory_uri() . '/assets/images/M365.png');
                    ?>
                    <img src="<?php echo esc_url($m365_adoption_image); ?>" alt="M365 Adoption Services">
                </div>
            </div>
        </div>
    </section>
    <?php
    // HARDCODED SERVICES END
} else {
    // DYNAMIC SERVICES - Show services from WordPress admin
    while ($services_query->have_posts()) : $services_query->the_post();
        // Get the service ID for the section ID
        $service_id = sanitize_title(get_the_title());
        
        // Get service image if set, otherwise use placeholder
        $service_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/images/default-service.png';
        
        // Get the custom fields for additional service information
        $service_icon = get_post_meta(get_the_ID(), '_service_icon', true);
        $service_link = get_post_meta(get_the_ID(), '_service_link', true) ?: home_url('/contact/');
    ?>
    <!-- <?php the_title(); ?> Service Section -->
    <section id="<?php echo esc_attr($service_id); ?>" class="service-section">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <div class="service-content">
                <div class="service-text">
                    <?php the_content(); ?>
                    
                    <?php 
                    // Get Features from post meta or ACF if available
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
                                $features_array = explode('\n', $features);
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
                    
                    <a href="<?php echo esc_url($service_link); ?>" class="btn" style="margin-top: 40px;">Request a Consultation</a>
                </div>
                
                <div class="service-image">
                    <img src="<?php echo esc_url($service_image); ?>" alt="<?php the_title_attribute(); ?>">
                </div>
            </div>
        </div>
    </section>
    <?php 
    endwhile;
    wp_reset_postdata();
}
?>

<!-- Call to Action Section -->
<section class="cta section animated-bg">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Transform Your Business?')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('cta_subtitle', 'Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.')); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('cta_button_text', 'Book a Consultation')); ?></a>
    </div>
</section>

<?php get_footer(); ?>