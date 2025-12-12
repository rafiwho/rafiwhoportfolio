<section id="hero" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">
                <span class="hero-status"></span>
                <span>Available for opportunities</span>
            </div>

            <h1 class="hero-title">
                <span class="hero-greeting">Hey, I'm Rafi</span>
                <span class="hero-main">Backend Developer &<br>Competitive Programmer</span>
            </h1>

            <p class="hero-description">
                Building distributed systems and solving complex problems.
                Specialized in Go, PostgreSQL, and microservices architecture.
                3000+ problems solved across competitive programming platforms.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="hero-btn hero-btn-primary">View Work</a>
                <a href="#contact" class="hero-btn hero-btn-secondary">Get in Touch</a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-number">3000+</span>
                    <span class="hero-stat-label">Problems Solved</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-number">25+</span>
                    <span class="hero-stat-label">Projects</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-number">ICPC</span>
                    <span class="hero-stat-label">Regional Finalist</span>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-grid"></div>
        </div>
    </div>
</section>

<style>
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 120px 0 80px;
    position: relative;
}

.hero .container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.hero-label {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: var(--surface-elevated);
    border: 1px solid var(--border);
    border-radius: 6px;
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin-bottom: 2rem;
}

.hero-status {
    width: 8px;
    height: 8px;
    background: var(--success);
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.hero-title {
    margin-bottom: 1.5rem;
}

.hero-greeting {
    display: block;
    font-size: 1.25rem;
    font-weight: 500;
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
}

.hero-main {
    display: block;
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
}

.hero-description {
    font-size: 1.125rem;
    line-height: 1.6;
    color: var(--text-secondary);
    margin-bottom: 2.5rem;
    max-width: 540px;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    margin-bottom: 4rem;
}

.hero-btn {
    padding: 0.875rem 1.75rem;
    border-radius: 6px;
    font-weight: 600;
    font-size: 0.9375rem;
    transition: all var(--transition-base);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.hero-btn-primary {
    background: var(--accent);
    color: white;
}

.hero-btn-primary:hover {
    background: var(--accent-hover);
    transform: translateY(-2px);
}

.hero-btn-secondary {
    background: transparent;
    color: var(--text-primary);
    border: 1px solid var(--border);
}

.hero-btn-secondary:hover {
    border-color: var(--accent);
    color: var(--accent);
}

.hero-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    padding-top: 2rem;
    border-top: 1px solid var(--border);
}

.hero-stat {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.hero-stat-number {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--accent);
    font-family: var(--font-mono);
}

.hero-stat-label {
    font-size: 0.875rem;
    color: var(--text-muted);
}

.hero-visual {
    position: relative;
    height: 500px;
}

.hero-grid {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.3;
    mask-image: radial-gradient(ellipse at center, black 40%, transparent 70%);
}

@media (max-width: 1024px) {
    .hero .container {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .hero-visual {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 100px 0 60px;
    }

    .hero-stats {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .hero-actions {
        flex-direction: column;
    }

    .hero-btn {
        width: 100%;
        justify-content: center;
    }

    .hero-visual {
        display: none;
    }
}
</style>
