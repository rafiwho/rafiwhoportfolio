<nav class="nav">
    <div class="nav-container">
        <a href="#hero" class="nav-logo">
            <span class="nav-logo-text">rafi<span class="accent-dot">.</span></span>
        </a>

        <button class="nav-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-menu">
            <a href="#skills" class="nav-item">Skills</a>
            <a href="#projects" class="nav-item">Projects</a>
            <a href="#education" class="nav-item">Education</a>
            <a href="#contact" class="nav-item">Contact</a>
            <a href="/resume.pdf" target="_blank" class="nav-item nav-cta">Resume</a>
        </div>
    </div>
</nav>

<style>
.nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: var(--background);
    border-bottom: 1px solid var(--border);
}

.nav-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 1.25rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo {
    font-size: 1.5rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}

.nav-logo-text {
    font-family: var(--font-mono);
}

.accent-dot {
    color: var(--accent);
}

.nav-toggle {
    display: none;
    flex-direction: column;
    gap: 4px;
    background: none;
    padding: 0.5rem;
    cursor: pointer;
}

.nav-toggle span {
    display: block;
    width: 24px;
    height: 2px;
    background: var(--text-primary);
    transition: all var(--transition-base);
}

.nav-menu {
    display: flex;
    align-items: center;
    gap: 2.5rem;
}

.nav-item {
    font-size: 0.9375rem;
    font-weight: 500;
    color: var(--text-secondary);
    transition: color var(--transition-fast);
    position: relative;
}

.nav-item:hover {
    color: var(--text-primary);
}

.nav-item::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--accent);
    transition: width var(--transition-base);
}

.nav-item:hover::after {
    width: 100%;
}

.nav-cta {
    padding: 0.5rem 1.25rem;
    background: var(--surface-elevated);
    border: 1px solid var(--border);
    border-radius: 6px;
    color: var(--text-primary);
}

.nav-cta::after {
    display: none;
}

.nav-cta:hover {
    background: var(--accent);
    border-color: var(--accent);
}

@media (max-width: 768px) {
    .nav-container {
        padding: 1rem 1.5rem;
    }

    .nav-toggle {
        display: flex;
    }

    .nav-menu {
        position: fixed;
        top: 70px;
        right: -100%;
        width: 100%;
        max-width: 300px;
        height: calc(100vh - 70px);
        flex-direction: column;
        align-items: flex-start;
        gap: 0;
        padding: 2rem;
        background: var(--surface);
        border-left: 1px solid var(--border);
        transition: right var(--transition-base);
    }

    .nav-menu.active {
        right: 0;
    }

    .nav-item {
        width: 100%;
        padding: 1rem 0;
        border-bottom: 1px solid var(--border-subtle);
    }

    .nav-cta {
        margin-top: 1rem;
        text-align: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const menu = document.querySelector('.nav-menu');

    toggle?.addEventListener('click', () => {
        menu?.classList.toggle('active');
        toggle.classList.toggle('active');
    });

    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', () => {
            menu?.classList.remove('active');
            toggle?.classList.remove('active');
        });
    });
});
</script>
