<section id="skills" class="skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Skills & Expertise</h2>
            <p class="section-subtitle">Technologies I work with</p>
        </div>

        <div class="skills-grid">
            <div class="skill-category">
                <h3 class="skill-category-title">Languages</h3>
                <div class="skill-list">
                    <div class="skill-item">
                        <span class="skill-name">C++</span>
                        <span class="skill-level">Expert</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Go</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Python</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">JavaScript</span>
                        <span class="skill-level">Intermediate</span>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h3 class="skill-category-title">Backend & Databases</h3>
                <div class="skill-list">
                    <div class="skill-item">
                        <span class="skill-name">PostgreSQL</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">RabbitMQ</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Node.js</span>
                        <span class="skill-level">Intermediate</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">MongoDB</span>
                        <span class="skill-level">Intermediate</span>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h3 class="skill-category-title">Tools & DevOps</h3>
                <div class="skill-list">
                    <div class="skill-item">
                        <span class="skill-name">Docker</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Git</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Linux</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Prometheus</span>
                        <span class="skill-level">Intermediate</span>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h3 class="skill-category-title">Specializations</h3>
                <div class="skill-list">
                    <div class="skill-item">
                        <span class="skill-name">Data Structures</span>
                        <span class="skill-level">Expert</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Algorithms</span>
                        <span class="skill-level">Expert</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Microservices</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">System Design</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.skills {
    padding: 120px 0;
    background: var(--surface);
}

.section-header {
    margin-bottom: 4rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.section-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 3rem;
}

.skill-category {
    padding: 2rem;
    background: var(--surface-elevated);
    border: 1px solid var(--border);
    border-radius: 8px;
    transition: border-color var(--transition-base);
}

.skill-category:hover {
    border-color: var(--accent);
}

.skill-category-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--accent);
}

.skill-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.skill-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-subtle);
}

.skill-item:last-child {
    border-bottom: none;
}

.skill-name {
    font-weight: 500;
    color: var(--text-primary);
}

.skill-level {
    font-size: 0.875rem;
    font-family: var(--font-mono);
    color: var(--text-muted);
}

@media (max-width: 1024px) {
    .skills-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .skills {
        padding: 80px 0;
    }

    .section-title {
        font-size: 2rem;
    }

    .skill-category {
        padding: 1.5rem;
    }
}
</style>
