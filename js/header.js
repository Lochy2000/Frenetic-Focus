/**
 * FreneticFocus Header JavaScript
 * Controls the header's scroll behavior
 */

(function() {
    'use strict';
    
    // Function to update header styling on scroll
    function updateHeaderOnScroll() {
        const header = document.getElementById('header');
        
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            console.log('Added scrolled class');
        } else {
            header.classList.remove('scrolled');
            console.log('Removed scrolled class');
        }
    }
    
    // When the DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initial call
        updateHeaderOnScroll();
        
        // Add scroll event listener
        window.addEventListener('scroll', updateHeaderOnScroll);
    });
    
})();