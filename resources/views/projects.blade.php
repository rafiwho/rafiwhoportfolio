<section id="projects" class="projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Work</h2>
            <p class="section-subtitle">Projects I've built and contributed to</p>
        </div>

        <div class="projects-grid">
            <article class="project-card project-featured">
                <div class="project-header">
                    <span class="project-tag">Featured</span>
                    <h3 class="project-title">JudgeNot0</h3>
                </div>
                <p class="project-description">
                    A distributed online judge platform built with microservices architecture. 
                    Contributed to backend engine and server components using Go.
                    Handles multi-language code execution with RabbitMQ-based message queuing.
                </p>
                <div class="project-tech">
                    <span>Go</span>
                    <span>PostgreSQL</span>
                    <span>RabbitMQ</span>
                    <span>Docker</span>
                </div>
                <div class="project-links">
                    <a href="https://github.com/cy-r0x/judgenot0" target="_blank" class="project-link">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                        View Source
                    </a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Competitive Programming</h3>
                </div>
                <p class="project-description">
                    Collection of 3000+ algorithmic solutions from competitive programming platforms.
                    Demonstrates expertise in data structures and algorithms.
                </p>
                <div class="project-tech">
                    <span>C++</span>
                    <span>Python</span>
                    <span>Algorithms</span>
                </div>
                <div class="project-links">
                    <a href="https://github.com/rafiwho/Problem_solving_DART" target="_blank" class="project-link">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                        View Source
                    </a>
                </div>
            </article>

            <article class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Halaal Drinking Water</h3>
                </div>
                <p class="project-description">
                    Premium water delivery service website with modern UI/UX.
                    Features online ordering and tracking systems.
                </p>
                <div class="project-tech">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="project-links">
                    <a href="https://halaaldrinkingwater.vercel.app/" target="_blank" class="project-link">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.5 7.5a.5.5 0 0 1 0-1h5.793L8.146 4.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 7.5H4.5z"/>
                        </svg>
                        Live Demo
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<style>
.projects {
    padding: 120px 0;
    background: var(--background);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}

.project-card {
    padding: 2rem;
    background: var(--surface-elevated);
    border: 1px solid var(--border);
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    transition: all var(--transition-base);
}

.project-card:hover {
    border-color: var(--accent);
    transform: translateY(-4px);
}

.project-featured {
    grid-column: span 2;
}

.project-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.project-tag {
    padding: 0.25rem 0.75rem;
    background: var(--accent-muted);
    color: var(--accent);
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.project-title {
    font-size: 1.5rem;
    font-weight: 600;
}

.project-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 1.5rem;
    flex-grow: 1;
}

.project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.project-tech span {
    padding: 0.375rem 0.75rem;
    background: var(--surface);
    border: 1px solid var(--border-subtle);
    border-radius: 4px;
    font-size: 0.875rem;
    font-family: var(--font-mono);
    color: var(--text-muted);
}

.project-links {
    display: flex;
    gap: 1rem;
}

.project-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.625rem 1.25rem;
    background: transparent;
    border: 1px solid var(--border);
    border-radius: 6px;
    color: var(--text-primary);
    font-weight: 500;
    font-size: 0.875rem;
    transition: all var(--transition-fast);
}

.project-link:hover {
    background: var(--accent);
    border-color: var(--accent);
}

.project-link svg {
    flex-shrink: 0;
}

@media (max-width: 1024px) {
    .projects-grid {
        grid-template-columns: 1fr;
    }

    .project-featured {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .projects {
        padding: 80px 0;
    }

    .project-card {
        padding: 1.5rem;
    }
}
</style>
