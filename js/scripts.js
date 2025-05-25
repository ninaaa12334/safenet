document.addEventListener('DOMContentLoaded', function() {
  console.log('SafeNet: Enhanced scripts.js loaded');

  // Header scroll effect
  try {
    const header = document.querySelector('header');
    if (header) {
      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });
    }
  } catch (error) {
    console.error('SafeNet: Header scroll effect error:', error);
  }

  // Smooth scroll for anchor links
  try {
    const anchors = document.querySelectorAll('a[href^="#"]');
    anchors.forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const target = document.querySelector(targetId);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  } catch (error) {
    console.error('SafeNet: Smooth scroll error:', error);
  }

  

     
      
  // Animate on scroll for homepage
  try {
    const animatedElements = document.querySelectorAll('.animate-slide-in, .animate-fade-in');
    if (animatedElements.length > 0) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
            entry.target.classList.add('animated');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });

      animatedElements.forEach(element => observer.observe(element));
    }
  } catch (error) {
    console.error('SafeNet: Animation error:', error);
  }

  // Emergency contact interactions
  try {
    const emergencyCards = document.querySelectorAll('.emergency-card');
    emergencyCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(-5px) scale(1)';
      });
    });
  } catch (error) {
    console.error('SafeNet: Emergency card interactions error:', error);
  }


  console.log('SafeNet: All enhanced scripts initialized successfully');
});

