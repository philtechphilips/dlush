import './bootstrap';

// Carousel functionality
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.perspective-carousel');
    const carouselTrack = document.querySelector('.carousel-track');
    
    if (carousel && carouselTrack) {
        // Add loaded class for smooth transition
        carousel.classList.add('loaded');
        
        // Remove CSS animation
        carouselTrack.style.animation = 'none';
        
        // JavaScript-based infinite scroll
        let isPaused = false;
        let animationId;
        let currentPosition = 0;
        const speed = 4; // pixels per frame
        const trackWidth = carouselTrack.scrollWidth / 2; // Half width since we have duplicated content
        
        function animate() {
            if (!isPaused) {
                currentPosition -= speed;
                
                // Reset position when we've scrolled exactly half the track width
                if (Math.abs(currentPosition) >= trackWidth) {
                    currentPosition = 0;
                }
                
                carouselTrack.style.transform = `translateX(${currentPosition}px)`;
            }
            animationId = requestAnimationFrame(animate);
        }
        
        // Start the animation
        animate();
        
        // Pause animation on hover
        carousel.addEventListener('mouseenter', function() {
            isPaused = true;
        });
        
        carousel.addEventListener('mouseleave', function() {
            isPaused = false;
        });
        
        // Add click to pause/resume functionality
        carousel.addEventListener('click', function() {
            isPaused = !isPaused;
        });
        
        // Add touch support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        carousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        carousel.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - pause animation
                    isPaused = true;
                } else {
                    // Swipe right - resume animation
                    isPaused = false;
                }
            }
        }
        
        // Clean up animation on page unload
        window.addEventListener('beforeunload', function() {
            if (animationId) {
                cancelAnimationFrame(animationId);
            }
        });
    }

    // Text animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all animated text elements
    const animatedElements = document.querySelectorAll('.text-fade-in, .text-slide-up, .text-scale-in');
    animatedElements.forEach(el => {
        observer.observe(el);
    });
});

