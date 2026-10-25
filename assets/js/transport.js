// ========================================
// TRANSPORT PAGE SCRIPT
// File: assets/js/transport.js
// ========================================

document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Set dynamic year in the footer
    var yearEl = document.getElementById('currentYear');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    // 2. Mobile Menu Toggle
    var menuToggle = document.getElementById('menuToggle');
    var navLinks = document.getElementById('navLinks');
    
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('open');
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
        });
    }

    // 3. Smooth Scrolling for Table of Contents
    // The default CSS `scroll-behavior: smooth` usually handles this, 
    // but this JS ensures the sticky header doesn't cover the section titles.
    var tocLinks = document.querySelectorAll('.toc-card a');
    
    tocLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var targetId = this.getAttribute('href');
            var targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Calculate offset for the sticky header
                var headerHeight = document.querySelector('.site-header').offsetHeight;
                var elementPosition = targetElement.getBoundingClientRect().top;
                var offsetPosition = elementPosition + window.pageYOffset - headerHeight - 20;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });
});