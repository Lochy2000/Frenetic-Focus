<?php
/**
 * Kirki Configuration
 *
 * @package FreneticFocus
 */

if (!class_exists('Kirki')) {
    return;
}

// Configuration for Kirki
Kirki::add_config('freneticfocus_config', array(
    'capability'  => 'edit_theme_options',
    'option_type' => 'theme_mod',
));

/*****************************************
 * Hero Section
 *****************************************/
Kirki::add_section('freneticfocus_hero_section', array(
    'title'       => esc_html__('Hero Section', 'freneticfocus'),
    'description' => esc_html__('Customize the hero section of the homepage', 'freneticfocus'),
    'priority'    => 30,
));

// Hero Background Image
Kirki::add_field('freneticfocus_config', [
    'type'        => 'image',
    'settings'    => 'hero_background_image',
    'label'       => esc_html__('Hero Background Image', 'freneticfocus'),
    'section'     => 'freneticfocus_hero_section',
    'default'     => get_template_directory_uri() . '/assets/images/hero-bg.jpg',
    'priority'    => 10,
]);

// Hero Title
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'hero_title',
    'label'       => esc_html__('Hero Title', 'freneticfocus'),
    'section'     => 'freneticfocus_hero_section',
    'default'     => esc_html__('Comprehensive Management Services Tailored to Your Needs', 'freneticfocus'),
    'priority'    => 20,
]);

// Hero Subtitle
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'hero_subtitle',
    'label'       => esc_html__('Hero Subtitle', 'freneticfocus'),
    'section'     => 'freneticfocus_hero_section',
    'default'     => esc_html__('Empowering businesses and individuals to enhance digital literacy and operational efficiency', 'freneticfocus'),
    'priority'    => 30,
]);

// Hero Button Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'hero_button_text',
    'label'       => esc_html__('Button Text', 'freneticfocus'),
    'section'     => 'freneticfocus_hero_section',
    'default'     => esc_html__('Book a Consultation', 'freneticfocus'),
    'priority'    => 40,
]);

// Hero Button URL
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'hero_button_url',
    'label'       => esc_html__('Button URL', 'freneticfocus'),
    'section'     => 'freneticfocus_hero_section',
    'default'     => '/contact',
    'priority'    => 50,
]);

/*****************************************
 * About Section
 *****************************************/
Kirki::add_section('freneticfocus_about_section', array(
    'title'       => esc_html__('About Section', 'freneticfocus'),
    'description' => esc_html__('Customize the about section of the homepage', 'freneticfocus'),
    'priority'    => 40,
));

// About Title
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'about_title',
    'label'       => esc_html__('About Title', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => esc_html__('About Lara van Rooyen', 'freneticfocus'),
    'priority'    => 10,
]);

// About Content
Kirki::add_field('freneticfocus_config', [
    'type'        => 'editor',
    'settings'    => 'about_content',
    'label'       => esc_html__('About Content', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => '<p>Lara van Rooyen provides comprehensive and innovative workshops and focus to businesses and individuals seeking to enhance their digital literacy and operational efficiency. Based in Stockholm and Nice, she specializes in a variety of management services tailored to meet the diverse needs of clients.</p>
    <p>As a seasoned professional, Lara is committed to delivering excellence through a combination of expertise, experience, and cutting-edge strategies. She is proficient in both Swedish and English languages, allowing her to serve a diverse clientele.</p>
    <p>We founded Legora with the mission of changing how professionals work. Millions of professionals dedicate their lives to solving their clients\' and companies\' most pressing problems. It became our calling to help them achieve these missions faster, with even greater impact.</p>',
    'priority'    => 20,
]);

// About Image
Kirki::add_field('freneticfocus_config', [
    'type'        => 'image',
    'settings'    => 'about_image',
    'label'       => esc_html__('About Image', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => get_template_directory_uri() . '/assets/images/about-image.jpg',
    'priority'    => 30,
]);

// About Image Alt Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'about_image_alt',
    'label'       => esc_html__('About Image Alt Text', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => esc_html__('Lara van Rooyen', 'freneticfocus'),
    'priority'    => 40,
]);

// About Button Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'about_button_text',
    'label'       => esc_html__('Button Text', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => esc_html__('Get in Touch', 'freneticfocus'),
    'priority'    => 50,
]);

// About Button URL
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'about_button_url',
    'label'       => esc_html__('Button URL', 'freneticfocus'),
    'section'     => 'freneticfocus_about_section',
    'default'     => '/contact',
    'priority'    => 60,
]);

/*****************************************
 * Services Section
 *****************************************/
Kirki::add_section('freneticfocus_services_section', array(
    'title'       => esc_html__('Services Section', 'freneticfocus'),
    'description' => esc_html__('Customize the services section of the homepage', 'freneticfocus'),
    'priority'    => 50,
));

// Services Title
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'services_title',
    'label'       => esc_html__('Services Title', 'freneticfocus'),
    'section'     => 'freneticfocus_services_section',
    'default'     => esc_html__('Our Services', 'freneticfocus'),
    'priority'    => 10,
]);

// Services Subtitle
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'services_subtitle',
    'label'       => esc_html__('Services Subtitle', 'freneticfocus'),
    'section'     => 'freneticfocus_services_section',
    'default'     => esc_html__('Specialized solutions designed to meet your unique business needs.', 'freneticfocus'),
    'priority'    => 20,
]);

// Number of services to display
Kirki::add_field('freneticfocus_config', [
    'type'        => 'slider',
    'settings'    => 'services_count',
    'label'       => esc_html__('Number of Services to Display', 'freneticfocus'),
    'section'     => 'freneticfocus_services_section',
    'default'     => 3,
    'choices'     => [
        'min'     => 1,
        'max'     => 12,
        'step'    => 1,
    ],
    'priority'    => 30,
]);

// Services Button Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'services_button_text',
    'label'       => esc_html__('Button Text', 'freneticfocus'),
    'section'     => 'freneticfocus_services_section',
    'default'     => esc_html__('View All Services', 'freneticfocus'),
    'priority'    => 40,
]);

// Services Button URL
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'services_button_url',
    'label'       => esc_html__('Button URL', 'freneticfocus'),
    'section'     => 'freneticfocus_services_section',
    'default'     => '/services',
    'priority'    => 50,
]);

/*****************************************
 * Real Estate Section
 *****************************************/
Kirki::add_section('freneticfocus_real_estate_section', array(
    'title'       => esc_html__('Real Estate Section', 'freneticfocus'),
    'description' => esc_html__('Customize the real estate section of the homepage', 'freneticfocus'),
    'priority'    => 55,
));

// Real Estate Title
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'real_estate_title',
    'label'       => esc_html__('Real Estate Section Title', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => esc_html__('Real Estate Digital Literacy', 'freneticfocus'),
    'priority'    => 10,
]);

// Real Estate Content
Kirki::add_field('freneticfocus_config', [
    'type'        => 'editor',
    'settings'    => 'real_estate_content',
    'label'       => esc_html__('Real Estate Content', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => '<p>In today's competitive real estate market, digital literacy is more than a convenience—it's a necessity. We offer specialized training and resources designed for real estate professionals to enhance their digital presence and operational efficiency.</p>
    <p>From mastering digital marketing strategies to implementing cutting-edge property management systems, our comprehensive approach helps you stay ahead in an increasingly digital industry.</p>',
    'priority'    => 20,
]);

// Real Estate Image
Kirki::add_field('freneticfocus_config', [
    'type'        => 'image',
    'settings'    => 'real_estate_image',
    'label'       => esc_html__('Real Estate Image', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => get_template_directory_uri() . '/assets/images/real-estate-image.jpg',
    'priority'    => 30,
]);

// Real Estate Image Alt Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'real_estate_image_alt',
    'label'       => esc_html__('Real Estate Image Alt Text', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => esc_html__('Real Estate Digital Literacy', 'freneticfocus'),
    'priority'    => 40,
]);

// Real Estate Button Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'real_estate_button_text',
    'label'       => esc_html__('Button Text', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => esc_html__('Learn More', 'freneticfocus'),
    'priority'    => 50,
]);

// Real Estate Button URL
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'real_estate_button_url',
    'label'       => esc_html__('Button URL', 'freneticfocus'),
    'section'     => 'freneticfocus_real_estate_section',
    'default'     => '/services/#redili',
    'priority'    => 60,
]);

/*****************************************
 * CTA Section
 *****************************************/
Kirki::add_section('freneticfocus_cta_section', array(
    'title'       => esc_html__('Call to Action Section', 'freneticfocus'),
    'description' => esc_html__('Customize the call to action section of the homepage', 'freneticfocus'),
    'priority'    => 60,
));

// CTA Title
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'cta_title',
    'label'       => esc_html__('CTA Title', 'freneticfocus'),
    'section'     => 'freneticfocus_cta_section',
    'default'     => esc_html__('Ready to Transform Your Business?', 'freneticfocus'),
    'priority'    => 10,
]);

// CTA Subtitle
Kirki::add_field('freneticfocus_config', [
    'type'        => 'textarea',
    'settings'    => 'cta_subtitle',
    'label'       => esc_html__('CTA Subtitle', 'freneticfocus'),
    'section'     => 'freneticfocus_cta_section',
    'default'     => esc_html__('Schedule a consultation today and discover how our comprehensive management services can help you achieve your goals.', 'freneticfocus'),
    'priority'    => 20,
]);

// CTA Button Text
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'cta_button_text',
    'label'       => esc_html__('Button Text', 'freneticfocus'),
    'section'     => 'freneticfocus_cta_section',
    'default'     => esc_html__('Book a Consultation', 'freneticfocus'),
    'priority'    => 30,
]);

// CTA Button URL
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'cta_button_url',
    'label'       => esc_html__('Button URL', 'freneticfocus'),
    'section'     => 'freneticfocus_cta_section',
    'default'     => '/contact',
    'priority'    => 40,
]);

/*****************************************
 * Footer Section
 *****************************************/
Kirki::add_section('freneticfocus_footer_section', array(
    'title'       => esc_html__('Footer Settings', 'freneticfocus'),
    'description' => esc_html__('Customize the footer section', 'freneticfocus'),
    'priority'    => 100,
));

// Footer Address
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'footer_address',
    'label'       => esc_html__('Address', 'freneticfocus'),
    'section'     => 'freneticfocus_footer_section',
    'default'     => esc_html__('Stockholm and Nice', 'freneticfocus'),
    'priority'    => 10,
]);

// Contact Email
Kirki::add_field('freneticfocus_config', [
    'type'        => 'text',
    'settings'    => 'contact_email',
    'label'       => esc_html__('Contact Email', 'freneticfocus'),
    'section'     => 'freneticfocus_footer_section',
    'default'     => '',
    'priority'    => 20,
]);

// Social Media URLs
Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'linkedin_url',
    'label'       => esc_html__('LinkedIn URL', 'freneticfocus'),
    'section'     => 'freneticfocus_footer_section',
    'default'     => '',
    'priority'    => 30,
]);

Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'twitter_url',
    'label'       => esc_html__('Twitter URL', 'freneticfocus'),
    'section'     => 'freneticfocus_footer_section',
    'default'     => '',
    'priority'    => 40,
]);

Kirki::add_field('freneticfocus_config', [
    'type'        => 'link',
    'settings'    => 'facebook_url',
    'label'       => esc_html__('Facebook URL', 'freneticfocus'),
    'section'     => 'freneticfocus_footer_section',
    'default'     => '',
    'priority'    => 50,
]);
