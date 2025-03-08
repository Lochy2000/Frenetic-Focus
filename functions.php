<?php
/**
 * FreneticFocus Theme functions and definitions
 *
 * @package FreneticFocus
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define constants
define('FRENETICFOCUS_VERSION', '1.0.0');
define('FRENETICFOCUS_DIR', get_template_directory());
define('FRENETICFOCUS_URI', get_template_directory_uri());

/**
 * Theme setup
 */
function freneticfocus_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'freneticfocus'),
            'footer' => esc_html__('Footer Menu', 'freneticfocus'),
        )
    );

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('freneticfocus_custom_background_args', array(
        'default-color' => 'f8f8f5',
        'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'freneticfocus_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function freneticfocus_content_width() {
    $GLOBALS['content_width'] = apply_filters('freneticfocus_content_width', 1400);
}
add_action('after_setup_theme', 'freneticfocus_content_width', 0);

/**
 * Register widget area.
 */
function freneticfocus_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'freneticfocus'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'freneticfocus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'freneticfocus'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add footer widgets here.', 'freneticfocus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'freneticfocus'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add footer widgets here.', 'freneticfocus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'freneticfocus'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add footer widgets here.', 'freneticfocus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'freneticfocus_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function freneticfocus_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('freneticfocus-google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:wght@300;400;500;600&display=swap', array(), FRENETICFOCUS_VERSION);

    // Main stylesheet
    wp_enqueue_style('freneticfocus-style', get_stylesheet_uri(), array(), FRENETICFOCUS_VERSION);
    
    // Custom styles - all theme-specific styles moved here
    wp_enqueue_style('freneticfocus-custom', FRENETICFOCUS_URI . '/assets/css/custom.css', array(), FRENETICFOCUS_VERSION);

    // Theme main JS
    wp_enqueue_script('freneticfocus-main', FRENETICFOCUS_URI . '/js/main.js', array('jquery'), FRENETICFOCUS_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'freneticfocus_scripts');

/**
 * Implement the Custom Header feature.
 */
require FRENETICFOCUS_DIR . '/inc/customizer.php';

/**
 * Load Kirki for enhanced customizer options (if installed)
 */
function freneticfocus_load_kirki() {
    if (class_exists('Kirki')) {
        require_once FRENETICFOCUS_DIR . '/inc/kirki-config.php';
    }
}
add_action('after_setup_theme', 'freneticfocus_load_kirki');

/**
 * Custom template tags for this theme.
 */
require FRENETICFOCUS_DIR . '/inc/template-tags.php';

/**
 * Register Custom Post Types and Taxonomies
 */
function freneticfocus_register_post_types() {
    // Register Services Custom Post Type
    $labels = array(
        'name'                  => _x('Services', 'Post type general name', 'freneticfocus'),
        'singular_name'         => _x('Service', 'Post type singular name', 'freneticfocus'),
        'menu_name'             => _x('Services', 'Admin Menu text', 'freneticfocus'),
        'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'freneticfocus'),
        'add_new'               => __('Add New', 'freneticfocus'),
        'add_new_item'          => __('Add New Service', 'freneticfocus'),
        'new_item'              => __('New Service', 'freneticfocus'),
        'edit_item'             => __('Edit Service', 'freneticfocus'),
        'view_item'             => __('View Service', 'freneticfocus'),
        'all_items'             => __('All Services', 'freneticfocus'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'services'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-businessperson',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'          => true, // Enable Gutenberg editor
    );

    register_post_type('service', $args);
}
add_action('init', 'freneticfocus_register_post_types');

/**
 * Create Service Category taxonomy
 */
function freneticfocus_register_taxonomies() {
    $labels = array(
        'name'              => _x('Service Categories', 'taxonomy general name', 'freneticfocus'),
        'singular_name'     => _x('Service Category', 'taxonomy singular name', 'freneticfocus'),
        'search_items'      => __('Search Service Categories', 'freneticfocus'),
        'all_items'         => __('All Service Categories', 'freneticfocus'),
        'parent_item'       => __('Parent Service Category', 'freneticfocus'),
        'parent_item_colon' => __('Parent Service Category:', 'freneticfocus'),
        'edit_item'         => __('Edit Service Category', 'freneticfocus'),
        'update_item'       => __('Update Service Category', 'freneticfocus'),
        'add_new_item'      => __('Add New Service Category', 'freneticfocus'),
        'new_item_name'     => __('New Service Category Name', 'freneticfocus'),
        'menu_name'         => __('Service Categories', 'freneticfocus'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'service-category'),
        'show_in_rest'      => true, // Enable Gutenberg editor
    );

    register_taxonomy('service_category', array('service'), $args);
}
add_action('init', 'freneticfocus_register_taxonomies');

/**
 * Add fields for the services custom post type
 */
function freneticfocus_register_meta_boxes() {
    add_meta_box(
        'service_details',
        __('Service Details', 'freneticfocus'),
        'freneticfocus_service_details_callback',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'freneticfocus_register_meta_boxes');

function freneticfocus_service_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('freneticfocus_service_details', 'freneticfocus_service_details_nonce');

    // Retrieve current values
    $service_icon = get_post_meta($post->ID, '_service_icon', true);
    $service_link = get_post_meta($post->ID, '_service_link', true);

    // Display form fields
    ?>
    <p>
        <label for="service_icon"><?php _e('Service Icon (Unicode or Icon Class)', 'freneticfocus'); ?></label>
        <input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr($service_icon); ?>" class="widefat">
        <span class="description"><?php _e('Enter Unicode character (e.g., ⟳) or icon class.', 'freneticfocus'); ?></span>
    </p>
    <p>
        <label for="service_link"><?php _e('Service Link', 'freneticfocus'); ?></label>
        <input type="text" id="service_link" name="service_link" value="<?php echo esc_attr($service_link); ?>" class="widefat">
        <span class="description"><?php _e('Enter the URL for "Learn More" button.', 'freneticfocus'); ?></span>
    </p>
    <?php
}

function freneticfocus_save_meta_boxes($post_id) {
    // Check if nonce is set
    if (!isset($_POST['freneticfocus_service_details_nonce'])) {
        return;
    }

    // Verify nonce
    if (!wp_verify_nonce($_POST['freneticfocus_service_details_nonce'], 'freneticfocus_service_details')) {
        return;
    }

    // If this is autosave, don't do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if ('service' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save meta field values
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
    }

    if (isset($_POST['service_link'])) {
        update_post_meta($post_id, '_service_link', esc_url_raw($_POST['service_link']));
    }
}
add_action('save_post', 'freneticfocus_save_meta_boxes');

/**
 * Register Elementor Locations
 */
function freneticfocus_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'freneticfocus_register_elementor_locations');

/**
 * Add custom style to WordPress admin for the theme options
 */
function freneticfocus_admin_style() {
    wp_enqueue_style('freneticfocus-admin-style', FRENETICFOCUS_URI . '/assets/css/admin.css', array(), FRENETICFOCUS_VERSION);
}
add_action('admin_enqueue_scripts', 'freneticfocus_admin_style');

/**
 * Custom CSS file for the theme customizer
 */
function freneticfocus_customizer_css() {
    wp_enqueue_style('freneticfocus-customizer-css', FRENETICFOCUS_URI . '/assets/css/customizer.css', array(), FRENETICFOCUS_VERSION);
}
add_action('customize_controls_enqueue_scripts', 'freneticfocus_customizer_css');

/**
 * Recommend plugins (simplified version without TGM)
 */
function freneticfocus_admin_notice_recommended_plugins() {
    // Only show to admins
    if (!current_user_can('manage_options')) {
        return;
    }
    
    // Check if Elementor is active
    $elementor_active = is_plugin_active('elementor/elementor.php');
    
    // If Elementor is not active, show notice
    if (!$elementor_active) {
        ?>
        <div class="notice notice-info is-dismissible">
            <p><?php _e('The FreneticFocus theme recommends the following plugins: <strong>Elementor Page Builder</strong> (required for drag and drop functionality), <strong>Kirki Customizer Framework</strong> (for enhanced customizer options), and <strong>Advanced Custom Fields</strong>.', 'freneticfocus'); ?></p>
            <p><a href="<?php echo esc_url(admin_url('plugin-install.php?tab=search&s=elementor')); ?>" class="button button-primary"><?php _e('Install Plugins', 'freneticfocus'); ?></a></p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'freneticfocus_admin_notice_recommended_plugins');