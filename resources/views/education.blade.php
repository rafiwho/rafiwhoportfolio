<!-- Education Section -->
<section id="education" class="section education-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Education</h2>
        <div class="education-grid">
            <div class="education-card" data-aos="fade-up" data-aos-delay="100">
                <div class="education-image">
                    <img src="assets/images/DIU.jpg" alt="Daffodil International University">
                    <div class="education-overlay">
                        <span class="education-year">2020 - Present</span>
                    </div>
                </div>
                <div class="education-content">
                    <div class="education-header">
                        <h3>Daffodil International University</h3>
                        <span class="education-type">University</span>
                    </div>
                    <p class="degree">Bachelor of Science in Computer Science and Engineering</p>
                    <p class="description">Currently pursuing my degree with a focus on software development and
                        competitive programming.</p>
                    <div class="education-footer">
                        <div class="education-stats">
                            <div class="stat">
                                <i class="fas fa-graduation-cap"></i>
                                <span>3.85 CGPA</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-code"></i>
                                <span>200+ Problems</span>
                            </div>
                        </div>
                        <a href="https://daffodilvarsity.edu.bd/" target="_blank" class="education-link">
                            Visit Website <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="education-card" data-aos="fade-up" data-aos-delay="200">
                <div class="education-image">
                    <img src="assets/images/dpsc.jpg" alt="Daud Public School & College">
                    <div class="education-overlay">
                        <span class="education-year">2017 - 2019</span>
                    </div>
                </div>
                <div class="education-content">
                    <div class="education-header">
                        <h3>Daud Public School & College</h3>
                        <span class="education-type">College</span>
                    </div>
                    <p class="degree">Higher Secondary Certificate</p>
                    <p class="description">A renowned institution located in Jessore Cantonment, providing quality
                        education with a strong emphasis on academic excellence and character development.</p>
                    <div class="education-footer">
                        <div class="education-stats">
                            <div class="stat">
                                <i class="fas fa-star"></i>
                                <span>GPA 5.00</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-trophy"></i>
                                <span>Top 10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="education-card" data-aos="fade-up" data-aos-delay="300">
                <div class="education-image">
                    <img src="assets/images/GLSC.jpg" alt="Genius Laboratory School and College">
                    <div class="education-overlay">
                        <span class="education-year">2015 - 2017</span>
                    </div>
                </div>
                <div class="education-content">
                    <div class="education-header">
                        <h3>Genius Laboratory School and College</h3>
                        <span class="education-type">School</span>
                    </div>
                    <p class="degree">Secondary School Certificate</p>
                    <p class="description">A prestigious institution known for its strong foundation in science and
                        technology education.</p>
                    <div class="education-footer">
                        <div class="education-stats">
                            <div class="stat">
                                <i class="fas fa-star"></i>
                                <span>GPA 5.00</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-medal"></i>
                                <span>Merit Position</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .education-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--color-background) 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    .education-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 50% 50%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.5;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.8;
        }
    }

    .education-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .education-card {
        background: var(--color-card);
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid var(--color-border);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .education-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .education-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .education-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .education-card:hover .education-image img {
        transform: scale(1.1);
    }

    .education-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));
        display: flex;
        align-items: flex-end;
        padding: 20px;
    }

    .education-year {
        color: white;
        font-size: 0.9rem;
        font-weight: 500;
        background: rgba(37, 99, 235, 0.8);
        padding: 5px 15px;
        border-radius: 20px;
    }

    .education-content {
        padding: 25px;
    }

    .education-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .education-header h3 {
        color: var(--color-text);
        font-size: 1.4rem;
        margin-bottom: 5px;
    }

    .education-type {
        background: var(--color-primary);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .education-content .degree {
        color: var(--color-primary);
        font-size: 1.1rem;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .education-content .description {
        color: var(--color-text-light);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .education-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid var(--color-border);
    }

    .education-stats {
        display: flex;
        gap: 15px;
    }

    .stat {
        display: flex;
        align-items: center;
        gap: 5px;
        color: var(--color-text-light);
        font-size: 0.9rem;
    }

    .stat i {
        color: var(--color-primary);
    }

    .education-link {
        color: var(--color-primary);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
    }

    .education-link:hover {
        color: var(--color-secondary);
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .education-grid {
            grid-template-columns: 1fr;
        }

        .education-card {
            max-width: 100%;
        }

        .education-header {
            flex-direction: column;
            gap: 10px;
        }

        .education-footer {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }
    }
</style>