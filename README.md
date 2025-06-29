# FreneticFocus WordPress Theme

A custom WordPress theme designed for FreneticFocus, featuring comprehensive management services with a focus on digital literacy and operational efficiency.

## Overview

FreneticFocus is a modern, responsive WordPress theme built for consulting and management services. The theme features a clean, professional design with customizable sections for showcasing services, company information, and contact details.

## Key Features

### 1. Responsive Design

- Mobile-first approach with breakpoints for various device sizes
- Optimized layout for desktops, tablets, and mobile devices
- Fixed mobile viewport height issue with custom CSS variable solution
- Navigation adapts to screen size with mobile menu toggle

### 2. Custom Services Page

- Dedicated services page with attractive layout for showcasing service offerings
- Interactive navigation system for each service section
- Fully editable content via WordPress Customizer
- Feature list support with bullet points
- Custom image display for each service with proper scaling

### 3. Customizable Sections

- Hero section with customizable background, title, and call-to-action
- Services section with customizable content and features
- About section with editable content and image
- Contact page with customizable content and form integration
- Call-to-action (CTA) sections throughout the site

### 4. WordPress Integration

- Custom post type for Services with custom fields
- Customizer integration for easy content editing
- Widget areas for sidebar and footer
- Navigation menu support for header and footer
- Featured image support
- Contact Form 7 integration

### 5. Visual Elements

- Animated gradient backgrounds
- Smooth scrolling functionality
- Animated buttons and hover effects
- Sticky header with scroll effect
- Scroll-based navigation highlighting

### 6. Performance Optimizations

- Modular CSS architecture with separate files for better organization
- Conditional loading of scripts and styles based on page template
- Minified and optimized assets
- Proper enqueuing of scripts and styles

## Theme Structure

### Core Files

- `style.css` - Theme metadata and WordPress styling
- `functions.php` - Core functionality and feature registration
- `header.php` - Site header template
- `footer.php` - Site footer template
- `front-page.php` - Homepage template
- `page-services.php` - Services page template
- `page-about.php` - About page template
- `page-contact.php` - Contact page template
- `single-service.php` - Individual service page template
- `archive-service.php` - Services archive template

### Assets

- `/assets/css/` - CSS files organized by component
  - `base.css` - Core styling and layout
  - `front-page.css` - Homepage styling
  - `services.css` - Services page styling
  - `about.css` - About page styling
  - `contact.css` - Contact page styling
  - `footer.css` - Footer styling
  - `navigation.css` - Navigation styling
  - `animated-buttons.css` - Button animations
  - `animated-gradient.css` - Gradient animations
  - `single-service.css` - Individual service page styling
- `/assets/images/` - Theme images and icons
- `/js/` - JavaScript files
  - `main.js` - Core functionality
  - `header.js` - Header scroll behavior
  - `services.js` - Services page functionality

### Include Files

- `/inc/customizer.php` - WordPress Customizer settings
- `/inc/template-tags.php` - Custom template functions
- `/inc/link-helper.php` - URL helper functions
- `/inc/kirki-config.php` - Integration with Kirki Customizer Framework

## Customization Options

### WordPress Customizer

The theme includes extensive customizer options organized into the following sections:

1. **Hero Section**
   - Background image
   - Title and subtitle text
   - Button text and URL

2. **About Section**
   - About page hero background
   - About content and image
   - Button text and URL

3. **Introduction Section**
   - Intro title and content
   - Intro image and alt text
   - Button text

4. **Services Section**
   - Services title and subtitle
   - Number of services to display
   - Button text and URL

5. **Service Descriptions**
   - Content and features for each service:
     - Change Management
     - Program Management
     - REDILI (Real Estate Digital Literacy)
     - CX Mapping
     - M365 Adoption

6. **Contact Page**
   - Contact hero background
   - Page title and subtitle
   - Contact form ID
   - Contact information

7. **CTA Section**
   - CTA title and subtitle
   - Button text and URL

8. **Footer Settings**
   - Address
   - Contact email
   - Social media URLs

### Custom Post Types

#### Services

- Title and content
- Featured image
- Custom fields:
  - Service icon
  - Service link
  - Service features (list)
- Service categories taxonomy

## Usage and Editing

### Editing Service Content

The service content on the Services page can be edited directly through the WordPress Customizer:

1. Go to WordPress Admin → Appearance → Customize
2. Select "Service Descriptions" from the menu
3. Edit the content and features for each service
4. Click "Publish" to save changes

The content fields support HTML formatting, and the features field accepts one feature per line, which will be automatically formatted as bullet points.

### Editing Page Content

Other pages can be edited through the standard WordPress page editor:

1. Go to WordPress Admin → Pages
2. Select the page you want to edit
3. Use the WordPress editor to make changes
4. Click "Update" to save

### Customizing Images

Images can be changed through the WordPress Customizer:

1. Go to WordPress Admin → Appearance → Customize
2. Select the relevant section (e.g., "Hero Section", "About Section")
3. Click the "Select Image" button to upload or choose a new image
4. Click "Publish" to save changes

## Browser Support

The theme is designed to work on modern browsers including:

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome for Android)

## Recommended Plugins

The theme works best with the following plugins:

- **Contact Form 7** - For handling contact forms
- **Kirki Customizer Framework** - For enhanced customizer options
- **Elementor Page Builder** - For drag-and-drop page building (optional)
- **Advanced Custom Fields** - For additional custom fields (optional)

## Technical Requirements

- WordPress 5.9+
- PHP 7.4+
- MySQL 5.6+ or MariaDB 10.0+

## Credits

- Fonts: Lora (serif) and Poppins (sans-serif) via Google Fonts
- Icons: Unicode characters for service icons

## Support

For support or questions, please contact the theme developer through the provided contact form.

---

This README was last updated: April 2025
