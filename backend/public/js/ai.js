// AI Section JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AI section interactions
    
    // Smooth scroll for CTA button
    const ctaButton = document.querySelector('.ai-cta-button');
    
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Add your navigation logic here
            // For example: window.location.href = '/hisokai';
            console.log('Navigate to Hisokai page');
        });
    }
    
    // Card hover effects enhancement
    const serviceCards = document.querySelectorAll('.ai-service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
        });
    });
    
    // Lazy loading for images (optional enhancement)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    observer.unobserve(img);
                }
            });
        });
        
        const images = document.querySelectorAll('.card-image[data-src]');
        images.forEach(img => imageObserver.observe(img));
    }
});

