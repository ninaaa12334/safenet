<?php get_header(); ?>

<main class="container">
  <!-- Enhanced Hero Section -->
  <section class="hero home-hero enhanced-hero">
    <div class="hero-background-pattern"></div>
    <div class="hero-content animate-slide-in">
      <div class="hero-badge">
        <span class="shield-icon">🛡️</span>
        <span>Protecting Rights Since 2020</span>
      </div>
      <h1>Empowering <span class="text-highlight">Women</span> <span class="block">& Children</span></h1>
      <p>SafeNet is your partner in creating a world of equality, safety, and opportunity. Together, we can break the cycle of abuse and build stronger communities.</p>
      <div class="hero-buttons">
        <a href="<?php echo site_url('/report-help'); ?>" class="button button-primary button-large">
          Get Help Now <span class="arrow">→</span>
        </a>
        <a href="<?php echo site_url('/education'); ?>" class="button button-secondary button-large">Learn About Rights</a>
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
        <div class="card-icon emergency">❤️</div>
        <h3>Emergency Support</h3>
        <p>24/7 hotline and immediate shelter for women and children in crisis situations.</p>
      </div>
      <div class="hero-card">
        <div class="card-icon community">👥</div>
        <h3>Community Programs</h3>
        <p>Education, legal aid, and empowerment programs to build lasting change.</p>
      </div>
      <div class="hero-card">
        <div class="card-icon safety">🛡️</div>
        <h3>Safe Spaces</h3>
        <p>Secure shelters and support networks for healing and rebuilding lives.</p>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="mission container animate-fade-in">
    <h2>Our Mission</h2>
    <p>We are dedicated to protecting and empowering women and children through advocacy, education, and support services.</p>
    <div class="mission-grid">
      <div class="mission-card">
        <div class="mission-icon">💪</div>
        <h3>Women's Empowerment</h3>
        <p>Offering shelters, legal aid, and a 24/7 hotline for women in need.</p>
      </div>
      <div class="mission-card">
        <div class="mission-icon">🏠</div>
        <h3>Orphan Support</h3>
        <p>Providing education, care, and opportunities for orphaned children.</p>
      </div>
      <div class="mission-card">
        <div class="mission-icon">🤝</div>
        <h3>Community Impact</h3>
        <p>Building a network of volunteers and advocates for change.</p>
      </div>
    </div>
  </section>

  <!-- Impact Section -->
  <section class="impact container animate-fade-in">
    <h2>Our Impact</h2>
    <div class="impact-stats">
      <div class="stat-card">
        <div class="stat-icon">📈</div>
        <h3>10,000+</h3>
        <p>Women supported through our programs</p>
      </div>
      <div class="stat-card">
        <div class="stat-icon">👶</div>
        <h3>5,000+</h3>
        <p>Children cared for in orphanages</p>
      </div>
      <div class="stat-card">
        <div class="stat-icon">🙋</div>
        <h3>1,000+</h3>
        <p>Volunteers engaged annually</p>
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
        <div class="emergency-card crisis-hotline">
          <div class="emergency-icon">📞</div>
          <h3>24/7 Crisis Hotline</h3>
          <div class="emergency-number">1-800-SAFENET</div>
          <p>Immediate support for women and children in crisis situations</p>
          <a href="tel:1-800-SAFENET" class="button button-emergency">Call Now</a>
        </div>
        
        <div class="emergency-card text-support">
          <div class="emergency-icon">💬</div>
          <h3>Text Support</h3>
          <div class="emergency-number">Text "HELP" to 741741</div>
          <p>Confidential text-based crisis counseling available anytime</p>
          <a href="sms:741741&body=HELP" class="button button-outline">Text Now</a>
        </div>
        
        <div class="emergency-card safe-locations">
          <div class="emergency-icon">📍</div>
          <h3>Safe Locations</h3>
          <div class="emergency-text">Find Shelter Near You</div>
          <p>Secure, confidential locations with trained staff ready to help</p>
          <a href="<?php echo site_url('/locations'); ?>" class="button button-outline">Find Locations</a>
        </div>
      </div>

      <!-- You Are Not Alone Section -->
      <div class="support-message">
        <div class="support-content">
          <div class="support-text">
            <div class="support-title">
              <span class="heart-icon">❤️</span>
              <h3>You Are Not Alone</h3>
            </div>
            <p>Taking the first step to seek help takes incredible courage. Our team understands what you're going through, and we're here to support you every step of the way.</p>
            <div class="support-availability">
              <span class="clock-icon">🕐</span>
              <span>Available 24 hours a day, 7 days a week</span>
            </div>
          </div>
          <div class="support-info">
            <div class="what-to-expect">
              <h4>What to Expect:</h4>
              <ul>
                <li>• Confidential and non-judgmental support</li>
                <li>• Safety planning and resources</li>
                <li>• Connection to local services</li>
                <li>• Follow-up care and ongoing support</li>
              </ul>
            </div>
            <a href="<?php echo site_url('/get-help'); ?>" class="button button-large button-white">Get Help Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stories Section -->
  <section class="stories container animate-fade-in">
    <h2>Stories of Change</h2>
    <div class="stories-grid">
      <div class="story-card">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop" alt="Empowered woman">
        <div class="story-content">
          <span class="story-category">Empowerment</span>
          <h3>A New Beginning</h3>
          <p>Maria found safety and strength through SafeNet's shelter program.</p>
          <div class="story-impact">⭐ Now advocates for 50+ women monthly</div>
        </div>
      </div>
      <div class="story-card">
        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Child learning">
        <div class="story-content">
          <span class="story-category">Education</span>
          <h3>Hope for Tomorrow</h3>
          <p>Ahmed's education was transformed by our orphanage support.</p>
          <div class="story-impact">⭐ First in family to attend university</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta container animate-slide-in">
    <h2>Join the Movement</h2>
    <p>Volunteer, donate, or advocate to make a difference for women and children today.</p>
    <div class="cta-buttons">
      <a href="<?php echo site_url('/volunteer'); ?>" class="button button-primary button-large">Volunteer Now</a>
      <a href="<?php echo site_url('/donate'); ?>" class="button button-secondary button-large">Donate Today</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>