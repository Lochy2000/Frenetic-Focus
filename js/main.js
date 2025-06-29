/**
 * Fix the 100vh issue on mobile browsers
 */
function fixMobileViewportHeight() {
    // First we get the viewport height and multiply it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    
    // Update on resize and orientation change to ensure it works in all scenarios
    window.addEventListener('resize', () => {
        // Add a small delay to ensure the height is calculated after browser UI changes
        setTimeout(() => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }, 100);
    });
    
    window.addEventListener('orientationchange', () => {
        // Add a slightly longer delay for orientation changes
        setTimeout(() => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }, 200);
    });
}

/**
 * FreneticFocus Theme JavaScript
 *
 * @package FreneticFocus
 */

(function($) {
    'use strict';

    /**
     * Handle scrolled header with transparency effect
     * Note: This functionality is now primarily handled by header.js
     * This function is only kept for backward compatibility
     */
    function handleScrolledHeader() {
        // Functionality moved to header.js
        // No need to repeat it here to avoid potential conflicts
    }

    /**
     * Setup smooth scrolling for anchor links
     */
    function setupSmoothScroll() {
        $('a[href*="#"]:not([href="#"])').on('click', function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                    return false;
                }
            }
        });
    }

    /**
     * Handle active state for service navigation if on services page
     */
    function handleServiceNavHighlight() {
        if (!document.querySelector('.service-nav')) {
            return;  // Exit if not on services page
        }
        
        const sections = document.querySelectorAll('.service-section');
        const navItems = document.querySelectorAll('.service-nav ul li a');
        
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            
            if (window.pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href').substring(1) === current) {
                item.classList.add('active');
            }
        });
    }

    /**
* Handle mobile menu toggle with enhanced functionality
*/
function setupMobileMenu() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const menuLinks = document.querySelectorAll('.main-navigation a');
    
    if (mobileMenuToggle) {
    // Toggle mobile menu
    mobileMenuToggle.addEventListener('click', function() {
            document.body.classList.toggle('mobile-menu-open');
        });
        
        // Close menu when clicking on links
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                document.body.classList.remove('mobile-menu-open');
            });
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.body.classList.contains('mobile-menu-open')) {
                document.body.classList.remove('mobile-menu-open');
            }
        });
        
        // Handle swipe gestures to close menu
        let touchStartX = 0;
        let touchEndX = 0;
        
        document.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        document.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            if (document.body.classList.contains('mobile-menu-open')) {
                if (touchEndX + 100 < touchStartX) { // Swipe left
                    document.body.classList.remove('mobile-menu-open');
                }
            }
        }
    }
}

/**
 * Handle service navigation toggle on mobile - disabled as per requirement
 */
function setupServiceNavToggle() {
    // Functionality disabled as per requirement
}

/**
 * Initialize when document is ready
 */
$(document).ready(function() {
    setupSmoothScroll();
    setupMobileMenu();
    setupServiceNavToggle();
    fixMobileViewportHeight();

    // Run on initial load
    handleScrolledHeader();
    handleServiceNavHighlight();

    // Add scroll event listeners
    $(window).on('scroll', function() {
        handleScrolledHeader();
        handleServiceNavHighlight();
    });
});

})(jQuery);