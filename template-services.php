<?php
/**
 * Template Name: Services Page (Alt)
 * Template Post Type: page
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
            <a href="#service-nav" class="btn btn-light"><?php echo esc_html(get_theme_mod('services_page_button_text', 'Explore Our Services')); ?></a>
        </div>
    </div>
    <a href="#service-nav" class="scroll-down">
        <span>SCROLL DOWN</span>
        <div class="arrow"></div>
    </a>
</section>

<!-- Service Navigation -->
<div id="service-nav" class="service-nav">
    <div class="container">
        <div class="service-nav-toggle">Explore Our Services</div>
        <ul>
            <li><a href="#change-management">Change Management</a></li>
            <li><a href="#program-management">Program Management</a></li>
            <li><a href="#redili">Real Estate Digital Literacy</a></li>
            <li><a href="#cx-mapping">Customer Journey Mapping</a></li>
            <li><a href="#m365-adoption">M365 Adoption</a></li>
        </ul>
    </div>
</div>

<!-- Change Management -->
<section id="change-management" class="service-section">
    <div class="container">
        <h2>Change Management</h2>
        <div class="service-content">
            <div class="service-text">
                <p>Our change management services are designed to help organizations navigate the complexities of transformation and innovation. We provide strategic guidance and hands-on support to ensure smooth transitions and sustainable growth.</p>
                
                <p>By identifying potential challenges and developing proactive solutions, we help businesses adapt to change while maintaining stability and productivity.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>Organizational change readiness assessments</li>
                        <li>Change impact analysis and risk mitigation</li>
                        <li>Stakeholder engagement and communication planning</li>
                        <li>Resistance management strategies</li>
                        <li>Training and support for change implementation</li>
                        <li>Post-change evaluation and sustainability planning</li>
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
                <p>We offer comprehensive program management services to oversee and coordinate multiple related projects. Our approach ensures that all initiatives align with the overarching goals of the organization, delivering value and achieving desired outcomes.</p>
                
                <p>From planning and execution to monitoring and evaluation, we provide end-to-end support to drive successful program implementation.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>Program governance and structure development</li>
                        <li>Strategic planning and roadmap creation</li>
                        <li>Resource allocation and optimization</li>
                        <li>Cross-project dependency management</li>
                        <li>Risk and issue management</li>
                        <li>Program performance tracking and reporting</li>
                        <li>Benefits realization management</li>
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
                <p>In today's digital age, understanding and leveraging technology is crucial for success in the real estate industry. Our REDILI program is designed to enhance digital literacy among real estate professionals.</p>
                
                <p>We offer training and resources that cover a wide range of topics, including digital marketing, data analysis, and the use of technology in property management. Our goal is to empower real estate practitioners with the skills and knowledge needed to thrive in a digital-first market.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>Digital marketing strategies for real estate</li>
                        <li>Social media management and content creation</li>
                        <li>Virtual tour and property showcase technologies</li>
                        <li>CRM and lead management systems</li>
                        <li>Data analytics for market analysis</li>
                        <li>Digital document management and e-signatures</li>
                        <li>Smart home and property technology integration</li>
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
                <p>Understanding the customer journey is essential for creating meaningful and impactful experiences. Our customer journey mapping workshops are designed to help businesses gain insights into their customers' interactions and touchpoints.</p>
                
                <p>By visualizing the customer journey, we identify opportunities for improvement and develop strategies to enhance customer satisfaction and loyalty. Our workshops are interactive, collaborative, and tailored to the specific needs of each organization.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>Customer persona development</li>
                        <li>Touchpoint identification and analysis</li>
                        <li>Emotion mapping across customer interactions</li>
                        <li>Pain point identification and resolution strategies</li>
                        <li>Opportunity discovery for enhancing customer experience</li>
                        <li>Action planning for customer experience improvement</li>
                        <li>Metrics and measurement framework development</li>
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
                <p>Our M365 adoption services are designed to help organizations seamlessly integrate Microsoft 365 into their daily operations. We provide comprehensive training and support to ensure that your team can fully leverage the capabilities of Microsoft 365.</p>
                
                <p>Our goal is to enhance productivity, collaboration, and efficiency through effective use of M365 tools and features.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>M365 implementation planning and strategy</li>
                        <li>User adoption and change management</li>
                        <li>Customized training programs for different user levels</li>
                        <li>Workflow optimization using M365 tools</li>
                        <li>Security and compliance configuration</li>
                        <li>Integration with existing systems and processes</li>
                        <li>Ongoing support and continuous improvement</li>
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

<!-- Call to Action Section -->
<section class="cta section animated-bg">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('cta_title', 'Ready to Transform Your Business?')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('cta_subtitle', 'Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.')); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-light"><?php echo esc_html(get_theme_mod('cta_button_text', 'Book a Consultation')); ?></a>
    </div>
</section>

<?php get_footer(); ?>