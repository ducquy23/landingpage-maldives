// Navigation scroll effect and scroll to top button
window.addEventListener('scroll', function () {
    const nav = document.querySelector('nav');
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    // Update navigation background
    if (window.scrollY > 50) {
        nav.classList.add('bg-white/90', 'dark:bg-background-dark/90', 'shadow-md');
        nav.classList.remove('glass-effect');
    } else {
        nav.classList.remove('bg-white/90', 'dark:bg-background-dark/90', 'shadow-md');
        nav.classList.add('glass-effect');
    }

    // Show/hide scroll to top button
    if (scrollToTopBtn) {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    }
});

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (mobileMenuButton && mobileMenu && menuIcon) {
        mobileMenuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('show');
                menuIcon.textContent = 'close';
            } else {
                mobileMenu.classList.remove('show');
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = 'menu';
            }
        });

        // Close mobile menu when clicking on a link
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('show');
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = 'menu';
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = event.target.closest('nav');
            if (!isClickInsideNav && mobileMenu.classList.contains('show')) {
                mobileMenu.classList.remove('show');
                mobileMenu.classList.add('hidden');
                menuIcon.textContent = 'menu';
            }
        });
    }
});

// Smooth scroll and active menu highlighting
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    const headerHeight = 80;

    // Handle smooth scroll on menu click
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                let targetPosition;

                if (targetId === '#home') {
                    targetPosition = 0;
                } else if (targetId === '#pricing') {
                    const sectionTop = targetSection.offsetTop;
                    const sectionHeight = targetSection.offsetHeight;
                    const viewportHeight = window.innerHeight;
                    targetPosition = sectionTop - (viewportHeight / 2) + (sectionHeight / 2);
                } else {
                    targetPosition = targetSection.offsetTop - headerHeight;
                }

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Update active menu item based on scroll position
    function updateActiveMenu() {
        let current = '';
        const scrollPosition = window.pageYOffset;
        const offset = headerHeight + 150; // Offset for better detection

        // Check if at top of page (home section)
        if (scrollPosition < 200) {
            current = 'home';
        } else {
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPosition + offset >= sectionTop &&
                    scrollPosition + offset < sectionTop + sectionHeight) {
                    current = sectionId;
                }
            });
        }

        navLinks.forEach(link => {
            link.classList.remove('active');
            const linkSection = link.getAttribute('data-section');
            if (linkSection === current) {
                link.classList.add('active');
            }
        });
    }

    // Throttle scroll event for better performance
    let ticking = false;
    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateActiveMenu();
                ticking = false;
            });
            ticking = true;
        }
    }

    // Update on scroll
    window.addEventListener('scroll', onScroll);

    // Update on page load
    updateActiveMenu();
});

// Scroll to top functionality
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

