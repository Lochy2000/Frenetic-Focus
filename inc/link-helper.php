<?php
/**
 * Link Helper Functions for FreneticFocus Theme
 *
 * @package FreneticFocus
 */

/**
 * Get a properly formatted URL for buttons, with customizer support
 * 
 * @param string $customizer_key The customizer setting key
 * @param string $default_slug The default page slug to use if customizer value is empty
 * @return string The properly formatted URL
 */
function freneticfocus_get_button_url($customizer_key, $default_slug = 'contact') {
    $customizer_url = get_theme_mod($customizer_key, '');
    
    // If customizer URL is empty or starts with a slash, try to get the permalink
    if (empty($customizer_url) || $customizer_url[0] == '/') {
        $page = get_page_by_path($default_slug);
        if ($page) {
            return get_permalink($page->ID);
        } else {
            // Fallback to home URL + slug
            return esc_url(home_url('/' . trim($default_slug, '/') . '/'));
        }
    }
    
    return esc_url($customizer_url);
}
