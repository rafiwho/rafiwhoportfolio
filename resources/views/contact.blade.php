<!-- Contact Section -->
<section id="contact" class="section contact-section" aria-labelledby="contact-title">
    <div class="container">
        <h2 class="section-title" id="contact-title" data-aos="fade-up">Get in Touch</h2>
        <div class="contact-content">
            <div class="contact-grid">
                <div class="contact-form" data-aos="fade-right">
                    <h3>Send me a message</h3>
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required aria-describedby="name-error">
                            <span class="error-message" id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required aria-describedby="email-error">
                            <span class="error-message" id="email-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required aria-describedby="subject-error">
                            <span class="error-message" id="subject-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required aria-describedby="message-error"></textarea>
                            <span class="error-message" id="message-error"></span>
                        </div>
                        <button type="submit" class="submit-btn" id="submitBtn">
                            <span class="btn-text">Send Message</span>
                            <i class="fas fa-paper-plane btn-icon"></i>
                            <div class="spinner" style="display: none;">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                        </button>
                    </form>
                    <div class="form-message" id="formMessage" style="display: none;"></div>
                </div>
                <div class="contact-info" data-aos="fade-left">
                    <div class="contact-item" data-aos="zoom-in" data-aos-delay="100">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>rafi15-5494@diu.edu.bd</p>
                        </div>
                    </div>
                    <div class="contact-item" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>+880 1307-014504</p>
                        </div>
                    </div>
                    <div class="contact-item" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://github.com/rafiwho" target="_blank" rel="noopener" class="social-link" data-aos="zoom-in" data-aos-delay="400" aria-label="GitHub Profile">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://linkedin.com/in/rafiwho" target="_blank" rel="noopener" class="social-link" data-aos="zoom-in" data-aos-delay="500" aria-label="LinkedIn Profile">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://twitter.com/rafiwho" target="_blank" rel="noopener" class="social-link" data-aos="zoom-in" data-aos-delay="600" aria-label="Twitter Profile">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .contact-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        position: relative;
        overflow: hidden;
    }
    .contact-section::before {
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
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.2); opacity: 0.8; }
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }
    .section-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 3rem;
        background: linear-gradient(45deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .contact-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        border: 1px solid rgba(102, 126, 234, 0.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        backdrop-filter: blur(10px);
    }
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
    }
    .contact-form {
        padding: 2rem;
        background: white;
        border-radius: 12px;
        border: 1px solid rgba(102, 126, 234, 0.1);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }
    .contact-form h3 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        color: #334155;
        font-weight: 600;
    }
    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #334155;
        font-weight: 500;
        font-size: 0.95rem;
    }
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.875rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        background: white;
        color: #334155;
        transition: all 0.3s ease;
        font-size: 1rem;
    }
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    .error-message {
        display: block;
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        min-height: 1.25rem;
    }
    .submit-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .submit-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    .submit-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    .btn-icon {
        transition: transform 0.3s ease;
    }
    .submit-btn:hover:not(:disabled) .btn-icon {
        transform: translateX(5px);
    }
    .form-message {
        margin-top: 1rem;
        padding: 1rem;
        border-radius: 8px;
        font-weight: 500;
    }
    .form-message.success {
        background: #dcfce7;
        color: #166534;
        border: 1px solid #bbf7d0;
    }
    .form-message.error {
        background: #fef2f2;
        color: #dc2626;
        border: 1px solid #fecaca;
    }
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .contact-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem;
        background: white;
        border-radius: 12px;
        border: 1px solid rgba(102, 126, 234, 0.1);
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .contact-item:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.15);
    }
    .contact-item i {
        font-size: 1.5rem;
        color: #667eea;
        transition: transform 0.3s ease;
    }
    .contact-item:hover i {
        transform: scale(1.2) rotate(5deg);
    }
    .contact-details h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #334155;
        font-weight: 600;
    }
    .contact-details p {
        color: #64748b;
        margin: 0;
    }
    .social-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 1rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(102, 126, 234, 0.1);
    }
    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 50%;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
    .social-link:hover {
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        .contact-content {
            padding: 1.5rem;
        }
        .contact-form {
            padding: 1.5rem;
        }
    }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnIcon = submitBtn.querySelector('.btn-icon');
    const spinner = submitBtn.querySelector('.spinner');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        clearErrors();
        setLoading(true);
        
        const formData = new FormData(form);
        
        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            });
            
            const data = await response.json();
            
            if (data.status === 'success') {
                showMessage(data.message, 'success');
                form.reset();
            } else if (data.status === 'error') {
                if (data.errors) {
                    displayErrors(data.errors);
                } else {
                    showMessage(data.message, 'error');
                }
            }
        } catch (error) {
            showMessage('Something went wrong. Please try again later.', 'error');
        } finally {
            setLoading(false);
        }
    });

    function setLoading(loading) {
        submitBtn.disabled = loading;
        if (loading) {
            btnText.textContent = 'Sending...';
            btnIcon.style.display = 'none';
            spinner.style.display = 'block';
        } else {
            btnText.textContent = 'Send Message';
            btnIcon.style.display = 'block';
            spinner.style.display = 'none';
        }
    }

    function showMessage(message, type) {
        formMessage.textContent = message;
        formMessage.className = `form-message ${type}`;
        formMessage.style.display = 'block';
        
        setTimeout(() => {
            formMessage.style.display = 'none';
        }, 5000);
    }

    function displayErrors(errors) {
        for (const [field, messages] of Object.entries(errors)) {
            const errorElement = document.getElementById(`${field}-error`);
            if (errorElement) {
                errorElement.textContent = messages[0];
            }
        }
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(element => {
            element.textContent = '';
        });
        formMessage.style.display = 'none';
    }

    document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
        });
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
        });
    });
});
</script>