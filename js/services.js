/**
 * FreneticFocus Services Page JavaScript
 */

(function($) {
    'use strict';

    /**
     * Add active class to corresponding nav items
     */
    function initNavActiveState() {
        // Get hash from URL (if any)
        const hash = window.location.hash;
        if (hash) {
            // Remove # symbol
            const targetId = hash.substring(1);
            
            // Add active class to corresponding nav items
            document.querySelectorAll('#service-nav ul li a').forEach(item => {
                if (item.getAttribute('href').substring(1) === targetId) {
                    item.classList.add('active');
                }
            });
        } else {
            // If no hash, activate first item
            const firstNavItem = document.querySelector('#service-nav ul li a');
            if (firstNavItem) firstNavItem.classList.add('active');
        }
    }

    /**
     * Handle scrolled header with transparent to white transition
     */
    function handleServiceHeaderScroll() {
        const header = document.getElementById('header');
        
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    /**
    * Handle service navigation sticky behavior
    */
function handleServiceNavSticky() {
    // Only apply sticky nav on desktop screens
    if (window.innerWidth <= 768) return;
    
    const serviceNav = document.getElementById('service-nav');
    const navSection = document.querySelector('.service-nav-section');
    
    if (!serviceNav || !navSection) return;
    
    const navSectionBottom = navSection.offsetTop + navSection.offsetHeight;
    
    // Make it sticky after scrolling past the nav section
    if (window.pageYOffset > navSectionBottom) {
    serviceNav.classList.add('sticky');
    } else {
        serviceNav.classList.remove('sticky');
    }
}

    /**
     * Handle active state for service navigation
     */
    function handleServiceNavHighlight() {
        const sections = document.querySelectorAll('.service-section');
        const navItems = document.querySelectorAll('#service-nav ul li a');
        
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            
            if (window.pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        // Update nav items
        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href').substring(1) === current) {
                item.classList.add('active');
            }
        });
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
     * Initialize when document is ready
     */
    $(document).ready(function() {
        setupSmoothScroll();
        initNavActiveState(); // Initialize active nav items

        // Run on initial load
        handleServiceHeaderScroll();
        handleServiceNavHighlight();
        handleServiceNavSticky();

        // Add scroll event listeners
        $(window).on('scroll', function() {
            handleServiceHeaderScroll();
            handleServiceNavHighlight();
            handleServiceNavSticky();
        });
    });

})(jQuery);