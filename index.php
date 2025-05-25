<?php get_header(); ?>

<main>
  <!-- Enhanced Hero Section -->
  <section class="enhanced-hero">
    <div class="hero-content">
      <div class="hero-badge">
        <span>🛡️</span>
        <span>Protecting Rights Since 2020</span>
      </div>
      <h1>
        Empowering
        <span class="text-highlight">Women</span>
        <span>& Children</span>
      </h1>
      <p>SafeNet is your partner in creating a world of equality, safety, and opportunity. Together, we can break the cycle of abuse and build stronger communities.</p>
      
      <div class="hero-buttons">
        <a href="<?php echo site_url('/services'); ?>" class="button button-large button-emergency">
          Get Help Now
          <span class="arrow">→</span>
        </a>
        <a href="<?php echo site_url('/rights'); ?>" class="button button-large button-outline">
          Learn About Rights
        </a>
      </div>

      <!-- Quick Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number">10K+</div>
          <div class="stat-label">Women Helped</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">5K+</div>
          <div class="stat-label">Children Supported</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Support Available</div>
        </div>
      </div>
    </div>

    <!-- Hero Cards -->
    <div class="hero-cards">
      <div class="hero-card">
        <div class="card-icon" style="background: #ec4899;">
          ❤️
        </div>
        <div>
          <h3>Emergency Support</h3>
          <p>24/7 hotline and immediate shelter for women and children in crisis situations.</p>
        </div>
      </div>

      <div class="hero-card">
        <div class="card-icon" style="background: #6366f1;">
          👥
        </div>
        <div>
          <h3>Community Programs</h3>
          <p>Education, legal aid, and empowerment programs to build lasting change.</p>
        </div>
      </div>

      <div class="hero-card">
        <div class="card-icon" style="background: #ec4899;">
          🛡️
        </div>
        <div>
          <h3>Safe Spaces</h3>
          <p>Secure shelters and support networks for healing and rebuilding lives.</p>
        </div>
      </div>
    </div>
  </section>

  

 
  <!-- Impact Stories Section -->
  <section class="stories-section">
    <div class="container">
      <div class="section-header">
        <h2>Stories of Transformation</h2>
        <p>Every person we help has a unique story. These are just a few examples of the incredible strength and resilience of the women and children in our community.</p>
      </div>

      <div class="stories-grid">
        <div class="story-card">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=400&h=300&fit=crop" alt="Finding My Voice">
          <div class="story-content">
            <span class="story-category">Empowerment</span>
            <h3>Finding My Voice</h3>
            <p>After years of silence, SafeNet helped me speak up and reclaim my life. Now I help other women find their strength.</p>
            <div class="story-impact">
              <span>⭐ Now advocates for 50+ women monthly</span>
            </div>
          </div>
        </div>

        <div class="story-card">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop" alt="A New Beginning">
          <div class="story-content">
            <span class="story-category safety">Safety</span>
            <h3>A New Beginning</h3>
            <p>The shelter program gave me and my children a safe place to heal. Today, we're building our future with hope.</p>
            <div class="story-impact">
              <span>⭐ Completed education, now employed</span>
            </div>
          </div>
        </div>

        <div class="story-card">
          <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Education Changed Everything">
          <div class="story-content">
            <span class="story-category education">Education</span>
            <h3>Education Changed Everything</h3>
            <p>Through SafeNet's orphanage support, I learned that my dreams matter. Now I'm studying to become a teacher.</p>
            <div class="story-impact">
              <span>⭐ First in family to attend university</span>
            </div>
          </div>
        </div>
      </div>

      <div class="stories-cta">
        <div class="cta-card">
          <div class="cta-icon">❤️</div>
          <h3>Your Story Matters Too</h3>
          <p>Whether you need help or want to help others, every story of courage inspires change in our community.</p>
          <div class="cta-buttons">
            <a href="<?php echo site_url('/share-story'); ?>" class="button">Share Your Story</a>
            <a href="<?php echo site_url('/get-support'); ?>" class="button button-outline">Get Support</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Emergency Contact Section -->
  <section class="emergency-contact">
    <div class="container">
      <div class="emergency-header">
        <div class="emergency-badge">
          <span>🛡️</span>
          <span>Emergency Support Available</span>
        </div>
        <h2>Need Help Right Now?</h2>
        <p>If you or someone you know is in immediate danger, don't wait. Our trained counselors are available 24/7 to provide support and guidance.</p>
      </div>

      <div class="emergency-grid">
        <div class="emergency-card">
          <div class="emergency-icon">📞</div>
          <h3>24/7 Crisis Hotline</h3>
          <div class="emergency-number">1-800-SAFENET</div>
          <p>Immediate support for women and children in crisis situations</p>
          <a href="tel:1-800-SAFENET" class="button button-emergency">Call Now</a>
        </div>

        <div class="emergency-card">
          <div class="emergency-icon">💬</div>
          <h3>Text Support</h3>
          <div class="emergency-text">Text "HELP" to 741741</div>
          <p>Confidential text-based crisis counseling available anytime</p>
          <a href="sms:741741&body=HELP" class="button button-outline">Learn More</a>
        </div>

        <div class="emergency-card">
          <div class="emergency-icon">📍</div>
          <h3>Safe Locations</h3>
          <div class="emergency-text">Find Shelter Near You</div>
          <p>Secure, confidential locations with trained staff ready to help</p>
          <a href="<?php echo site_url('/locations'); ?>" class="button button-outline">Find Locations</a>
        </div>
      </div>



      <!-- Support Message -->
      <div class="support-message">
        <div class="support-content">
          <div class="support-text">
            <div class="support-title">
              <span class="heart-icon">❤️</span>
              <h3>You Are Not Alone</h3>
            </div>
            <p>Taking the first step to seek help takes incredible courage. Our team understands what you're going through, and we're here to support you every step of the way.</p>
            <div class="support-availability">
              <span>🕐</span>
              <span>Available 24 hours a day, 7 days a week</span>
            </div>
          </div>
          <div class="what-to-expect">
            <h4>What to Expect:</h4>
            <ul>
              <li>• Confidential and non-judgmental support</li>
              <li>• Safety planning and resources</li>
              <li>• Connection to local services</li>
              <li>• Follow-up care and ongoing support</li>
            </ul>
            <a href="<?php echo site_url('/get-help'); ?>" class="button button-white button-large">Get Help Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>