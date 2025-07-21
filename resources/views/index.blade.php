@extends('layouts.app')
@section('title', 'Md. Uodoy Hossan Rafi - Aspiring Software Engineer & Full-Stack Developer | Professional Portfolio')
@section('content')
  <!-- Professional Loader -->
  <div id="global-loader" class="professional-loader">
    <div class="loader-content">
      <div class="professional-spinner"></div>
      <div class="loader-text">Loading Excellence...</div>
    </div>
  </div>

  <!-- Progressive Enhancement Notice -->
  <noscript>
    <div class="noscript-notice">
      <i class="fas fa-exclamation-triangle"></i>
      This professional portfolio requires JavaScript for optimal experience.
    </div>
  </noscript>



  <!-- Background Elements -->
  <div id="particles-js" class="particles-background"></div>
  <div class="scroll-progress-indicator"></div>
  
  <!-- Main Content Structure -->
  <div class="portfolio-wrapper">
    @include('navigation')
    
    <main id="main-content" role="main">
      @include('hero')
      @include('skills')
      @include('projects')
      @include('education')
      @include('achievements')
      @include('statistics')
      @include('contact')
    </main>
    
    @include('footer')
  </div>

  <!-- Enhanced Styles -->
  <style>
    /* Professional Loading Screen */
    .professional-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: 10000;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      opacity: 1;
      transition: opacity 0.5s ease-out;
    }

    .loader-content {
      text-align: center;
      color: white;
    }

    .professional-spinner {
      width: 60px;
      height: 60px;
      border: 3px solid rgba(255, 255, 255, 0.1);
      border-top: 3px solid #ffffff;
      border-radius: 50%;
      animation: sophisticatedSpin 1.2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
      margin: 0 auto 20px;
    }

    .loader-text {
      font-family: 'Inter', sans-serif;
      font-size: 1.1rem;
      font-weight: 500;
      letter-spacing: 0.5px;
      opacity: 0.9;
    }

    @keyframes sophisticatedSpin {
      0% { transform: rotate(0deg) scale(1); }
      50% { transform: rotate(180deg) scale(1.1); }
      100% { transform: rotate(360deg) scale(1); }
    }

    /* Progressive Enhancement Notice */
    .noscript-notice {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      text-align: center;
      padding: 1.5rem;
      font-family: 'Inter', sans-serif;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    /* Enhanced Focus States for Accessibility */
    a:focus, 
    button:focus, 
    .nav-link:focus {
      outline: 3px solid #667eea;
      outline-offset: 3px;
      border-radius: 4px;
    }

    /* Professional Portfolio Wrapper */
    .portfolio-wrapper {
      position: relative;
      overflow-x: hidden;
    }

    /* Particles Background Enhancement */
    .particles-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      opacity: 0.4;
    }

    /* Professional Scroll Indicator */
    .scroll-progress-indicator {
      position: fixed;
      top: 0;
      left: 0;
      width: 0%;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      z-index: 9999;
      transition: width 0.1s ease-out;
      box-shadow: 0 2px 4px rgba(102, 126, 234, 0.3);
    }



    /* Professional Section Transitions */
    .section {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .section.in-view {
      opacity: 1;
      transform: translateY(0);
    }

    /* Mobile Optimizations */
    @media (max-width: 768px) {
      .professional-spinner {
        width: 50px;
        height: 50px;
      }
      
      .loader-text {
        font-size: 1rem;
      }
    }

    /* Reduced Motion Support */
    @media (prefers-reduced-motion: reduce) {
      .professional-spinner,
      .section {
        animation: none;
        transition: none;
      }
    }
  </style>
@endsection

@push('scripts')
<script>
  // Professional Loading Experience
  document.addEventListener('DOMContentLoaded', () => {
    // Minimum loading time for professional feel
    const minLoadTime = 1500;
    const startTime = Date.now();
    
    const hideLoader = () => {
      const loader = document.getElementById('global-loader');
      if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => {
          loader.style.display = 'none';
          // Initialize animations after loading
          initializeAnimations();
        }, 500);
      }
    };

    // Ensure minimum loading time
    const elapsed = Date.now() - startTime;
    const remaining = Math.max(0, minLoadTime - elapsed);
    setTimeout(hideLoader, remaining);
  });

  // Professional Animation Initialization
  function initializeAnimations() {
    // Initialize AOS with professional settings
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out-cubic',
        once: true,
        offset: 100,
      });
    }


    
    // Scroll progress indicator
    initScrollProgress();
    
    // Section visibility tracking
    initSectionTracking();
  }



  // Professional Scroll Progress
  function initScrollProgress() {
    const progressBar = document.querySelector('.scroll-progress-indicator');
    if (!progressBar) return;

    window.addEventListener('scroll', () => {
      const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
      progressBar.style.width = `${Math.min(scrollPercent, 100)}%`;
    });
  }

  // Section Visibility Tracking
  function initSectionTracking() {
    const sections = document.querySelectorAll('.section');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
        }
      });
    }, { threshold: 0.1 });

    sections.forEach(section => observer.observe(section));
  }

  // Enhanced 3D Library Loading
  window.addEventListener('load', function() {
    // Load Three.js for advanced effects
    const threeScript = document.createElement('script');
    threeScript.src = "https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js";
    threeScript.onload = () => {
      // Initialize particles after Three.js loads
      if (typeof particlesJS !== 'undefined') {
        particlesJS.load('particles-js', '/js/particles-config.json');
      }
    };
    document.body.appendChild(threeScript);

    // Load Particles.js
    const particlesScript = document.createElement('script');
    particlesScript.src = "https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js";
    document.body.appendChild(particlesScript);
  });
</script>
@endpush