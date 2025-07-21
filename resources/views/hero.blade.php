<header id="hero" class="section hero-section">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <div class="professional-badge" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <span>Aspiring Software Engineer</span>
            </div>
            <h1 class="hero-title">
                <span class="greeting">Hello, I'm</span>
                <span class="name gradient-text">Uodoy Hossan Rafi</span>
                <span class="title-highlight">Crafting Digital Excellence</span>
            </h1>
            <h2 class="hero-subtitle">
                Full-Stack Developer & Competitive Programming Expert
            </h2>
            <p class="hero-description">
                Passionate about building scalable web applications and solving complex algorithmic challenges. 
                Currently pursuing Computer Science at Daffodil International University while developing 
                enterprise-grade solutions that drive business growth and user engagement.
            </p>
            <div class="metrics-grid" role="list" aria-label="Professional achievements">
                <div class="metric-card" data-aos="zoom-in" data-aos-delay="100" role="listitem">
                    <div class="metric-icon" aria-hidden="true">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-number" data-count="3000">0</h3>
                        <p class="metric-label">Problems Solved</p>
                        <span class="metric-sublabel">Competitive Programming</span>
                    </div>
                </div>
                <div class="metric-card" data-aos="zoom-in" data-aos-delay="200" role="listitem">
                    <div class="metric-icon" aria-hidden="true">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-number" data-count="25">0</h3>
                        <p class="metric-label">Projects Delivered</p>
                        <span class="metric-sublabel">Full-Stack Solutions</span>
                    </div>
                </div>
                <div class="metric-card" data-aos="zoom-in" data-aos-delay="300" role="listitem">
                    <div class="metric-icon" aria-hidden="true">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-text">ICPC</h3>
                        <p class="metric-label">Regional Finalist</p>
                        <span class="metric-sublabel">International Recognition</span>
                    </div>
                </div>
            </div>
            <div class="cta-section">
                <div class="primary-actions">
                    <a href="#contact" class="cta-button primary" aria-describedby="contact-description">
                        <i class="fas fa-handshake"></i>
                        <span>Let's Collaborate</span>
                    </a>
                </div>
                <div class="secondary-actions">
                    <a href="/resume.pdf" class="download-btn" target="_blank" aria-label="Download Resume">
                        <i class="fas fa-download"></i>
                        <span>Resume</span>
                    </a>
                    <div class="social-preview">
                        <a href="https://github.com/rafiwho" target="_blank" class="social-link" aria-label="GitHub Profile">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://linkedin.com/in/rafiwho" target="_blank" class="social-link" aria-label="LinkedIn Profile">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:rafi15-5494@diu.edu.bd" class="social-link" aria-label="Email Contact">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-decoration" aria-hidden="true">
            <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
            <div class="floating-element element-3"></div>
        </div>
    </div>
</header>
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --neutral-gradient: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        --professional-shadow: 0 10px 40px rgba(102, 126, 234, 0.15);
        --hover-shadow: 0 20px 60px rgba(102, 126, 234, 0.25);
        --text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 120px 0 60px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 25%, #f1f5f9 75%, #ffffff 100%);
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(ellipse at center, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    .container {
        position: relative;
        z-index: 2;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    .hero-content {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        position: relative;
    }
    .professional-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: var(--primary-gradient);
        color: white;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 2rem;
        box-shadow: var(--professional-shadow);
        backdrop-filter: blur(10px);
        letter-spacing: 0.5px;
    }
    .professional-badge i {
        font-size: 1rem;
    }
    .hero-title {
        font-family: 'Inter', sans-serif;
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }
    .greeting {
        display: block;
        font-size: clamp(1.2rem, 3vw, 1.6rem);
        font-weight: 400;
        color: #64748b;
        margin-bottom: 0.5rem;
    }
    .name {
        display: block;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 0.5rem;
        text-shadow: var(--text-shadow);
    }
    .title-highlight {
        display: block;
        font-size: clamp(1rem, 2.5vw, 1.4rem);
        font-weight: 500;
        color: #475569;
        font-style: italic;
    }
    .hero-subtitle {
        font-size: clamp(1.2rem, 3vw, 1.8rem);
        font-weight: 600;
        color: #334155;
        margin-bottom: 2rem;
        line-height: 1.3;
        letter-spacing: -0.01em;
    }
    .hero-description {
        font-size: clamp(1rem, 2vw, 1.2rem);
        line-height: 1.7;
        color: #64748b;
        margin-bottom: 3rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        font-weight: 400;
    }
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin: 3rem 0;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    .metric-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 2rem 1.5rem;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--professional-shadow);
        position: relative;
        overflow: hidden;
    }
    .metric-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--primary-gradient);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    .metric-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: var(--hover-shadow);
    }
    .metric-card:hover::before {
        opacity: 0.05;
    }
    .metric-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .metric-content h3 {
        font-size: 2.5rem;
        font-weight: 800;
        margin: 0.5rem 0;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .metric-label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #334155;
        margin: 0;
    }
    .metric-sublabel {
        font-size: 0.9rem;
        color: #64748b;
        font-weight: 400;
        display: block;
        margin-top: 0.25rem;
    }
    .cta-section {
        margin-top: 3rem;
    }
    .primary-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }
    .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 32px;
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        border-radius: 50px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        letter-spacing: 0.5px;
        box-shadow: var(--professional-shadow);
    }
    .cta-button.primary {
        background: var(--primary-gradient);
        color: white;
    }
    .cta-button.primary:hover {
        transform: translateY(-3px);
        box-shadow: var(--hover-shadow);
    }
    .cta-button.secondary {
        background: white;
        color: #667eea;
        border: 2px solid #667eea;
    }
    .cta-button.secondary:hover {
        background: var(--primary-gradient);
        color: white;
        transform: translateY(-3px);
        box-shadow: var(--hover-shadow);
    }
    .secondary-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }
    .download-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: rgba(255, 255, 255, 0.9);
        color: #475569;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.2);
    }
    .download-btn:hover {
        background: var(--primary-gradient);
        color: white;
        transform: translateY(-2px);
    }
    .social-preview {
        display: flex;
        gap: 1rem;
    }
    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.9);
        color: #475569;
        text-decoration: none;
        border-radius: 50%;
        font-size: 1.2rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(102, 126, 234, 0.2);
    }
    .social-link:hover {
        background: var(--primary-gradient);
        color: white;
        transform: translateY(-3px) scale(1.1);
        box-shadow: var(--professional-shadow);
    }
    .hero-decoration {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        pointer-events: none;
    }
    .floating-element {
        position: absolute;
        background: var(--primary-gradient);
        border-radius: 50%;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }
    .element-1 {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }
    .element-2 {
        width: 60px;
        height: 60px;
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }
    .element-3 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        25% { transform: translateY(-20px) rotate(90deg); }
        50% { transform: translateY(-40px) rotate(180deg); }
        75% { transform: translateY(-20px) rotate(270deg); }
    }
    @media (max-width: 768px) {
        .hero-section {
            padding: 100px 0 40px;
        }
        .metrics-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        .primary-actions {
            flex-direction: column;
            align-items: center;
        }
        .cta-button {
            width: 100%;
            max-width: 280px;
            justify-content: center;
        }
        .floating-element {
            display: none;
        }
    }
    @media (max-width: 480px) {
        .metrics-grid {
            grid-template-columns: 1fr;
        }
        .secondary-actions {
            flex-direction: column;
            gap: 1rem;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .floating-element,
        .metric-card,
        .cta-button {
            animation: none;
            transition: none;
        }
    }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('[data-count]');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px'
    };
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-count'));
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    }, observerOptions);
    counters.forEach(counter => counterObserver.observe(counter));
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const duration = 2000;
        const stepTime = duration / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target.toLocaleString() + (target >= 1000 ? '+' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, stepTime);
    }
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>