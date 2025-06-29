<?php
/**
 * The header for our theme
 *
 * @package FreneticFocus
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <?php
            // Always use the text-based logo instead of the WordPress custom logo
            ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-logo">
                    <span class="logo-top">Frenetic</span>
                    <span class="logo-bottom">Focus</span>
                </a>
            <nav class="main-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    // If a menu is assigned to the primary location, use it
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => '',
                        'fallback_cb'    => false,
                    ));
                } else {
                    // Fallback menu if no menu is assigned
                    echo '<ul id="primary-menu">';
                    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                    
                    // Get about page URL dynamically
                    $about_page = get_page_by_path('about');
                    if ($about_page) {
                        echo '<li><a href="' . esc_url(get_permalink($about_page->ID)) . '">About</a></li>';
                    } else {
                        echo '<li><a href="' . esc_url(home_url('/about/')) . '">About</a></li>';
                    }
                    
                    // Get services page URL dynamically - checks different slug possibilities
                    $services_page = get_page_by_path('services');
                    if (!$services_page) {
                        $services_page = get_page_by_path('our-services');
                    }
                    
                    // Check if the services page has a specific template
                    if ($services_page) {
                        echo '<li><a href="' . esc_url(get_permalink($services_page->ID)) . '">Services</a></li>';
                    } else {
                        echo '<li><a href="' . esc_url(home_url('/services/')) . '">Services</a></li>';
                    }
                    
                    // Get contact page URL dynamically
                    $contact_page = get_page_by_path('contact');
                    if ($contact_page) {
                        echo '<li><a href="' . esc_url(get_permalink($contact_page->ID)) . '">Contact</a></li>';
                    } else {
                        echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
                    }
                    
                    echo '</ul>';
                }
                ?>
            </nav>
            <button class="mobile-menu-toggle" aria-label="Toggle Navigation Menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </header>