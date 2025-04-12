<!-- Statistics Section -->
<section id="statistics" class="section statistics-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number" data-target="3000">0</h3>
                    <p>Problems Solved</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number" data-target="500">0</h3>
                    <p>Contests Participated</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number" data-target="20">0</h3>
                    <p>Projects Completed</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number" data-target="1000">0</h3>
                    <p>GitHub Contributions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .statistics-section {
        padding: 60px 0;
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        text-align: center;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 15px;
        transition: transform 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .stat-card:hover {
        transform: translateY(-5px);
    }

    .stat-icon {
        font-size: 2.5rem;
        color: #3B82F6;
        margin-bottom: 20px;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #fff;
        margin-bottom: 10px;
    }

    .stat-content p {
        color: #ccc;
        font-size: 1.1rem;
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stats = document.querySelectorAll('.stat-number');

        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-target'));
                    animateValue(entry.target, 0, target, 2000);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        stats.forEach(stat => observer.observe(stat));
    });
</script>