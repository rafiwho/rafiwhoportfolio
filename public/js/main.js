// Professional Portfolio JavaScript Framework
// Author: Md. Uodoy Hossan Rafi
// Version: 2.0.0

(function () {
    'use strict';

    // Professional Configuration
    const CONFIG = {
        animations: {
            duration: 1000,
            easing: 'ease-in-out-cubic',
            offset: 100,
            once: true
        },
        typing: {
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000,
            loop: true
        },
        particles: {
            enable: true,
            count: 50,
            color: '#667eea',
            opacity: 0.1
        },
        performance: {
            throttleDelay: 16,
            debounceDelay: 250
        }
    };

    // Utility Functions
    const utils = {
        // Throttle function for performance
        throttle: function (func, delay) {
            let timeoutId;
            let lastExecTime = 0;
            return function () {
                const currentTime = Date.now();
                if (currentTime - lastExecTime > delay) {
                    func.apply(this, arguments);
                    lastExecTime = currentTime;
                } else {
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(() => {
                        func.apply(this, arguments);
                        lastExecTime = Date.now();
                    }, delay - (currentTime - lastExecTime));
                }
            };
        },

        // Debounce function for performance
        debounce: function (func, delay) {
            let timeoutId;
            return function () {
                clearTimeout(timeoutId);
                timeoutId = setTimeout(() => func.apply(this, arguments), delay);
            };
        },

        // Check if element is in viewport
        isInViewport: function (element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        },

        // Smooth scroll to element
        smoothScrollTo: function (target, offset = 80) {
            const element = typeof target === 'string' ? document.querySelector(target) : target;
            if (!element) return;

            const targetPosition = element.offsetTop - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        },

        // Get random number between min and max
        random: function (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    };

    // Professional Animation Manager
    const AnimationManager = {
        init: function () {
            this.initAOS();
            this.initCounters();
            this.initTypingEffect();
            this.initParallax();
            this.initRevealAnimations();
        },

        initAOS: function () {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: CONFIG.animations.duration,
                    easing: CONFIG.animations.easing,
                    offset: CONFIG.animations.offset,
                    once: CONFIG.animations.once,
                    mirror: false,
                    anchorPlacement: 'top-bottom'
                });
            }
        },

        initCounters: function () {
            const counters = document.querySelectorAll('[data-count]');
            if (!counters.length) return;

            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => counterObserver.observe(counter));
        },

        animateCounter: function (element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const steps = 60;
            const increment = target / steps;
            const stepTime = duration / steps;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target.toLocaleString() + (target >= 1000 ? '+' : '');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, stepTime);
        },

        initTypingEffect: function () {
            const typingElements = document.querySelectorAll('.typing-effect');
            typingElements.forEach(element => {
                this.createTypingAnimation(element);
            });
        },

        createTypingAnimation: function (element) {
            const text = element.textContent;
            element.textContent = '';
            let i = 0;

            const typeWriter = () => {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, CONFIG.typing.typeSpeed);
                }
            };

            typeWriter();
        },

        initParallax: function () {
            const parallaxElements = document.querySelectorAll('.parallax');
            if (!parallaxElements.length) return;

            const handleParallax = utils.throttle(() => {
                const scrollTop = window.pageYOffset;

                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrollTop * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }, CONFIG.performance.throttleDelay);

            window.addEventListener('scroll', handleParallax);
        },

        initRevealAnimations: function () {
            const revealElements = document.querySelectorAll('.reveal');
            if (!revealElements.length) return;

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            revealElements.forEach(element => revealObserver.observe(element));
        }
    };

    // Professional Navigation Manager
    const NavigationManager = {
        init: function () {
            this.initScrollSpy();
            this.initSmoothScrolling();
            this.initMobileMenu();
            this.initScrollProgress();
        },

        initScrollSpy: function () {
            const sections = document.querySelectorAll('.section[id]');
            const navLinks = document.querySelectorAll('.nav-link[data-section]');

            if (!sections.length || !navLinks.length) return;

            const observerOptions = {
                threshold: 0.3,
                rootMargin: '-80px 0px -80px 0px'
            };

            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;
                        this.updateActiveNavLink(sectionId);
                    }
                });
            }, observerOptions);

            sections.forEach(section => sectionObserver.observe(section));
        },

        updateActiveNavLink: function (sectionId) {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-section') === sectionId) {
                    link.classList.add('active');
                }
            });
        },

        initSmoothScrolling: function () {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        utils.smoothScrollTo(targetElement);
                        this.closeMobileMenu();
                    }
                });
            });
        },

        initMobileMenu: function () {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');

            if (!mobileMenuBtn || !navLinks) return;

            mobileMenuBtn.addEventListener('click', () => {
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
                navLinks.classList.toggle('active');
                document.body.style.overflow = !isExpanded ? 'hidden' : '';
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenuBtn.contains(e.target) && !navLinks.contains(e.target)) {
                    this.closeMobileMenu();
                }
            });

            // Close menu on escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    this.closeMobileMenu();
                }
            });
        },

        closeMobileMenu: function () {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');

            if (mobileMenuBtn && navLinks) {
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            }
        },

        initScrollProgress: function () {
            const progressBar = document.querySelector('.scroll-progress-indicator');
            if (!progressBar) return;

            const updateProgress = utils.throttle(() => {
                const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
                progressBar.style.width = `${Math.min(scrollPercent, 100)}%`;
            }, CONFIG.performance.throttleDelay);

            window.addEventListener('scroll', updateProgress);
        }
    };



    // Professional Performance Manager
    const PerformanceManager = {
        init: function () {
            this.optimizeImages();
            this.initLazyLoading();
            this.preloadCriticalResources();
        },

        optimizeImages: function () {
            const images = document.querySelectorAll('img[data-src]');
            images.forEach(img => {
                img.addEventListener('load', () => {
                    img.classList.add('loaded');
                });
            });
        },

        initLazyLoading: function () {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        },

        preloadCriticalResources: function () {
            // Preload critical fonts
            const fontPreloads = [
                'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap'
            ];

            fontPreloads.forEach(font => {
                const link = document.createElement('link');
                link.rel = 'preload';
                link.as = 'style';
                link.href = font;
                document.head.appendChild(link);
            });
        }
    };

    // Professional Particles Manager
    const ParticlesManager = {
        init: function () {
            if (!CONFIG.particles.enable) return;

            const particlesContainer = document.getElementById('particles-js');
            if (!particlesContainer || typeof particlesJS === 'undefined') return;

            particlesJS.load('particles-js', '/js/particles-config.json', () => {
                console.log('Professional particles loaded successfully');
            });
        }
    };

    // Professional Form Manager
    const FormManager = {
        init: function () {
            this.initContactForm();
            this.initFormValidation();
        },

        initContactForm: function () {
            const contactForm = document.querySelector('#contact-form');
            if (!contactForm) return;

            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleFormSubmission(contactForm);
            });
        },

        initFormValidation: function () {
            const inputs = document.querySelectorAll('input[required], textarea[required]');
            inputs.forEach(input => {
                input.addEventListener('blur', () => this.validateField(input));
                input.addEventListener('input', () => this.clearFieldError(input));
            });
        },

        validateField: function (field) {
            const value = field.value.trim();
            const isValid = value !== '' && field.checkValidity();

            field.classList.toggle('error', !isValid);
            return isValid;
        },

        clearFieldError: function (field) {
            field.classList.remove('error');
        },

        handleFormSubmission: function (form) {
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');

            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            // Simulate form submission (replace with actual endpoint)
            setTimeout(() => {
                this.showSuccessMessage();
                form.reset();
                submitBtn.textContent = 'Send Message';
                submitBtn.disabled = false;
            }, 2000);
        },

        showSuccessMessage: function () {
            // Create and show success notification
            const notification = document.createElement('div');
            notification.className = 'notification success';
            notification.textContent = 'Message sent successfully!';
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.remove();
            }, 3000);
        }
    };

    // Main Initialization
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize all managers
        AnimationManager.init();
        NavigationManager.init();

        PerformanceManager.init();
        FormManager.init();

        // Initialize particles after other scripts load
        window.addEventListener('load', () => {
            ParticlesManager.init();
        });

        // Add professional loading completion
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');

            // Trigger custom event for loaded state
            const loadedEvent = new CustomEvent('portfolioLoaded', {
                detail: { timestamp: Date.now() }
            });
            document.dispatchEvent(loadedEvent);
        });
    });

    // Professional Error Handling
    window.addEventListener('error', (e) => {
        console.warn('Portfolio Error:', e.error);
        // Implement error tracking here if needed
    });

    // Professional Resize Handling
    window.addEventListener('resize', utils.debounce(() => {
        // Reinitialize components that depend on viewport size
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    }, CONFIG.performance.debounceDelay));

    // Export for external access if needed
    window.PortfolioFramework = {
        utils,
        AnimationManager,
        NavigationManager,

        PerformanceManager,
        ParticlesManager,
        FormManager,
        CONFIG
    };

})();
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// Initialize Particles.js
particlesJS('particles-js', {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 1000
            }
        },
        color: {
            value: ['#3B82F6', '#10B981', '#6366F1']
        },
        shape: {
            type: ['circle', 'triangle'],
            stroke: {
                width: 0,
                color: '#000000'
            },
        },
        opacity: {
            value: 0.6,
            random: true,
            anim: {
                enable: true,
                speed: 1,
                opacity_min: 0.1,
                sync: false
            }
        },
        size: {
            value: 3,
            random: true,
            anim: {
                enable: true,
                speed: 2,
                size_min: 0.1,
                sync: false
            }
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: '#3B82F6',
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 1,
            direction: 'none',
            random: true,
            straight: false,
            out_mode: 'out',
            bounce: false,
            attract: {
                enable: true,
                rotateX: 600,
                rotateY: 1200
            }
        }
    },
    interactivity: {
        detect_on: 'canvas',
        events: {
            onhover: {
                enable: true,
                mode: 'grab'
            },
            onclick: {
                enable: true,
                mode: 'push'
            },
            resize: true
        },
        modes: {
            grab: {
                distance: 140,
                line_linked: {
                    opacity: 1
                }
            },
            push: {
                particles_nb: 4
            }
        }
    },
    retina_detect: true
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Navbar scroll effect
window.addEventListener('scroll', function () {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('shadow-lg');
    } else {
        nav.classList.remove('shadow-lg');
    }
});

// 3D tilt effect for cards
document.querySelectorAll('.tilt-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
    });
});



// Add scroll progress indicator
window.addEventListener('scroll', () => {
    const scrollProgress = document.querySelector('.scroll-progress');
    const scrollPx = document.documentElement.scrollTop;
    const winHeightPx = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = `${(scrollPx / winHeightPx) * 100}%`;
    scrollProgress.style.transform = `scaleX(${scrolled})`;
});

// Add reveal animation on scroll
const revealElements = document.querySelectorAll('.skill-card, .project-card, .glass-effect');

function reveal() {
    revealElements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('active');
        }
    });
}

window.addEventListener('scroll', reveal);
reveal(); // Initial check

// Enhanced project card tilt effect
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
    });
}); 