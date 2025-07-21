<nav class="navbar professional-nav" role="navigation" aria-label="Main Navigation">
    <div class="nav-container">
        <!-- Professional Logo/Brand -->
        <a href="#hero" class="nav-logo" aria-label="Rafi Portfolio Home">
                          <div class="logo-container">
                  <span class="logo-text gradient-text">rafiwho</span>
              </div>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-btn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="main-menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- Professional Navigation Menu -->
        <div class="nav-links" id="main-menu" role="menubar">
            <a href="#hero" class="nav-link active" role="menuitem" data-section="hero">
                <i class="fas fa-home nav-icon"></i>
                <span>Home</span>
            </a>
            <a href="#skills" class="nav-link" role="menuitem" data-section="skills">
                <i class="fas fa-code nav-icon"></i>
                <span>Expertise</span>
            </a>
            <a href="#projects" class="nav-link" role="menuitem" data-section="projects">
                <i class="fas fa-laptop-code nav-icon"></i>
                <span>Projects</span>
            </a>
            <a href="#education" class="nav-link" role="menuitem" data-section="education">
                <i class="fas fa-graduation-cap nav-icon"></i>
                <span>Education</span>
            </a>
            <a href="#achievements" class="nav-link" role="menuitem" data-section="achievements">
                <i class="fas fa-trophy nav-icon"></i>
                <span>Achievements</span>
            </a>
            <a href="#contact" class="nav-link" role="menuitem" data-section="contact">
                <i class="fas fa-envelope nav-icon"></i>
                <span>Contact</span>
            </a>
        </div>

        <!-- Professional Action Button -->
        <div class="nav-actions">
            <a href="/resume.pdf" target="_blank" class="resume-btn" aria-label="Download Resume">
                <i class="fas fa-download"></i>
                <span>Resume</span>
            </a>
        </div>
    </div>

    <!-- Navigation Progress Indicator -->
    <div class="nav-progress" aria-hidden="true"></div>
</nav>

<style>
    .professional-nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(102, 126, 234, 0.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .professional-nav.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    /* Professional Logo */
    .nav-logo {
        text-decoration: none;
        z-index: 1001;
        transition: transform 0.3s ease;
    }

    .nav-logo:hover {
        transform: scale(1.05);
    }

    .logo-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .logo-text {
        font-size: 1.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: -0.02em;
    }

    .logo-subtitle {
        font-size: 0.75rem;
        color: #64748b;
        font-weight: 500;
        margin-top: -2px;
        letter-spacing: 0.5px;
    }

    /* Enhanced Navigation Links */
    .nav-links {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.9);
        padding: 0.5rem;
        border-radius: 50px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(102, 126, 234, 0.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 20px;
        text-decoration: none;
        color: #475569;
        font-weight: 500;
        font-size: 0.95rem;
        border-radius: 25px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #667eea, #764ba2);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .nav-link:hover,
    .nav-link.active {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .nav-link:hover::before,
    .nav-link.active::before {
        opacity: 1;
    }

    .nav-icon {
        font-size: 1rem;
        transition: transform 0.3s ease;
    }

    .nav-link:hover .nav-icon {
        transform: scale(1.1);
    }

    /* Professional Action Button */
    .nav-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .resume-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        letter-spacing: 0.5px;
    }

    .resume-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }

    /* Enhanced Mobile Menu Button */
    .mobile-menu-btn {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(102, 126, 234, 0.2);
        border-radius: 12px;
        cursor: pointer;
        padding: 0;
        z-index: 1001;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .mobile-menu-btn:hover {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-color: transparent;
    }

    .hamburger-line {
        width: 20px;
        height: 2px;
        background: #475569;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        margin: 2px 0;
    }

    .mobile-menu-btn:hover .hamburger-line {
        background: white;
    }

    .mobile-menu-btn[aria-expanded="true"] .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-btn[aria-expanded="true"] .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-btn[aria-expanded="true"] .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

    /* Navigation Progress Indicator */
    .nav-progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        transition: width 0.2s ease;
        box-shadow: 0 2px 4px rgba(102, 126, 234, 0.3);
    }

    /* Mobile Responsive Design */
    @media (max-width: 768px) {
        .nav-container {
            padding: 1rem 1.5rem;
        }

        .mobile-menu-btn {
            display: flex;
        }

        .nav-links {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            max-width: 400px;
            height: 100vh;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            padding: 2rem;
            border-radius: 0;
            border: none;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-links.active {
            right: 0;
        }

        .nav-link {
            width: 100%;
            max-width: 280px;
            justify-content: center;
            padding: 16px 24px;
            font-size: 1.1rem;
        }

        .nav-actions {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 999;
        }

        .resume-btn {
            padding: 14px 28px;
            font-size: 1rem;
        }

        .logo-subtitle {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .nav-container {
            padding: 1rem;
        }

        .logo-text {
            font-size: 1.5rem;
        }

        .nav-links {
            max-width: 100%;
        }
    }

    /* Accessibility Enhancements */
    @media (prefers-reduced-motion: reduce) {
        .nav-link,
        .resume-btn,
        .mobile-menu-btn,
        .hamburger-line {
            transition: none;
        }

        .nav-link:hover,
        .resume-btn:hover {
            transform: none;
        }
    }

    /* High Contrast Mode Support */
    @media (prefers-contrast: high) {
        .professional-nav {
            background: white;
            border-bottom: 2px solid black;
        }

        .nav-link {
            border: 1px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            border-color: black;
            background: black;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('.professional-nav');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const navLinksItems = document.querySelectorAll('.nav-link');
    const navProgress = document.querySelector('.nav-progress');

    // Professional scroll effects
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        // Add scrolled class for enhanced styling
        if (currentScrollY > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }

        // Update navigation progress
        const scrollPercent = (currentScrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
        navProgress.style.width = `${Math.min(scrollPercent, 100)}%`;

        lastScrollY = currentScrollY;
    });

    // Enhanced mobile menu functionality
    mobileMenuBtn.addEventListener('click', () => {
        const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
        mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
        navLinks.classList.toggle('active');
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = !isExpanded ? 'hidden' : '';
    });

    // Professional active section tracking
    const sections = document.querySelectorAll('.section[id]');
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '-80px 0px -80px 0px'
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.id;
                
                // Update active navigation link
                navLinksItems.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-section') === sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => sectionObserver.observe(section));

    // Enhanced smooth scrolling
    navLinksItems.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                // Close mobile menu if open
                navLinks.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
                
                // Smooth scroll with offset for fixed header
                const offsetTop = targetSection.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!nav.contains(e.target) && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });

    // Keyboard navigation support
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            mobileMenuBtn.focus();
        }
    });
});
</script>