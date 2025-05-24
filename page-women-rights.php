<?php
/* Template Name: Women's Rights Page */
get_header();
?>

<main class="women-rights-page">
  <div class="container">
    <!-- Hero Section -->
    <section class="page-hero">
      <div class="hero-content">
        <h1>Women's Rights & Stories</h1>
        <p>Millions of women suffer in silence — facing abuse, discrimination, and lack of opportunity. SafeNet exists to give them a voice and support network.</p>
      </div>
    </section>

    <!-- Challenges Section -->
    <section class="challenges-section">
      <h2>Challenges Women Face</h2>
      <div class="challenges-grid">
        <div class="challenge-card">
          <div class="challenge-icon">⚠️</div>
          <h3>Gender-based Violence</h3>
          <p>Physical, sexual, and emotional abuse affecting millions of women worldwide.</p>
        </div>
        <div class="challenge-card">
          <div class="challenge-icon">⚖️</div>
          <h3>Lack of Legal Protection</h3>
          <p>Insufficient laws and enforcement to protect women's rights and safety.</p>
        </div>
        <div class="challenge-card">
          <div class="challenge-icon">💼</div>
          <h3>Workplace Inequality</h3>
          <p>Pay gaps, discrimination, and limited opportunities for career advancement.</p>
        </div>
        <div class="challenge-card">
          <div class="challenge-icon">🔗</div>
          <h3>Forced Marriages & Trafficking</h3>
          <p>Exploitation and forced situations that violate basic human rights.</p>
        </div>
      </div>
    </section>

    <!-- Stories Section -->
    <section class="stories-section">
      <h2>Anonymous Stories</h2>
      <p class="stories-intro">These are real stories from women who have found strength and support through SafeNet. Names have been changed to protect privacy.</p>
      
      <div class="story-cards">
        <div class="story-card survivor">
          <div class="story-header">
            <div class="story-icon">💪</div>
            <h3>Story of Courage</h3>
          </div>
          <blockquote>
            "I was afraid to tell anyone. I thought no one would believe me. SafeNet helped me feel seen for the first time. The counselors listened without judgment and helped me create a safety plan. Today, I'm free and helping other women find their voice."
          </blockquote>
          <div class="story-impact">
            <span class="impact-tag">Now a peer counselor</span>
          </div>
        </div>
        
        <div class="story-card empowerment">
          <div class="story-header">
            <div class="story-icon">🌟</div>
            <h3>Breaking Free</h3>
          </div>
          <blockquote>
            "He controlled everything: my phone, my friends, my thoughts. I felt trapped and worthless. Through SafeNet's shelter program, I learned that I deserved better. Now, I work with women in shelters to help them reclaim their lives and see their own worth."
          </blockquote>
          <div class="story-impact">
            <span class="impact-tag">Shelter program coordinator</span>
          </div>
        </div>
        
        <div class="story-card education">
          <div class="story-header">
            <div class="story-icon">🎓</div>
            <h3>Education as Freedom</h3>
          </div>
          <blockquote>
            "I was told that education wasn't for girls like me. SafeNet's scholarship program changed everything. They believed in my potential when no one else did. I'm now studying law to help other women fight for their rights."
          </blockquote>
          <div class="story-impact">
            <span class="impact-tag">Law student & advocate</span>
          </div>
        </div>
      </div>
    </section>

    <!-- How We Help Section -->
    <section class="help-section">
      <h2>How We Help</h2>
      <div class="help-grid">
        <div class="help-card">
          <div class="help-icon">📞</div>
          <h3>24/7 Hotline</h3>
          <p>Emotional and legal help anytime you need it. Our trained counselors are always available.</p>
          <a href="tel:1-800-SAFENET" class="button button-primary">Call Now</a>
        </div>
        <div class="help-card">
          <div class="help-icon">🏡</div>
          <h3>Safe Shelters</h3>
          <p>Secure places for women and children escaping abuse, with comprehensive support services.</p>
          <a href="<?php echo site_url('/locations'); ?>" class="button button-secondary">Find Shelter</a>
        </div>
        <div class="help-card">
          <div class="help-icon">👩‍⚖️</div>
          <h3>Legal Support</h3>
          <p>We connect you with experienced human rights lawyers and legal advocates.</p>
          <a href="<?php echo site_url('/legal-help'); ?>" class="button button-secondary">Get Legal Help</a>
        </div>
        <div class="help-card">
          <div class="help-icon">💼</div>
          <h3>Economic Empowerment</h3>
          <p>Job training, financial literacy, and career support to build independence.</p>
          <a href="<?php echo site_url('/programs'); ?>" class="button button-secondary">Learn More</a>
        </div>
      </div>
    </section>

    <!-- Photo Wall Section -->
    <section class="photo-wall-section">
      <h2>Wall of Courage</h2>
      <p>Celebrating the strength and resilience of women everywhere.</p>
      <div class="photo-grid">
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?w=300&h=200&fit=crop" alt="Strong woman standing confidently">
          <div class="photo-overlay">
            <span>Strength</span>
          </div>
        </div>
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=200&fit=crop" alt="Women supporting each other">
          <div class="photo-overlay">
            <span>Unity</span>
          </div>
        </div>
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=300&h=200&fit=crop" alt="Safe and secure environment">
          <div class="photo-overlay">
            <span>Safety</span>
          </div>
        </div>
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop" alt="Education and empowerment">
          <div class="photo-overlay">
            <span>Hope</span>
          </div>
        </div>
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=300&h=200&fit=crop" alt="Professional woman">
          <div class="photo-overlay">
            <span>Success</span>
          </div>
        </div>
        <div class="photo-item">
          <img src="https://images.unsplash.com/photo-1551836022-deb4988cc6c0?w=300&h=200&fit=crop" alt="Community support">
          <div class="photo-overlay">
            <span>Community</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
      <div class="cta-content">
        <h2>Your Voice Matters</h2>
        <p>Whether you need help or want to help others, every story of courage inspires change in our community.</p>
        <div class="cta-buttons">
          <a href="<?php echo site_url('/report-help'); ?>" class="button button-primary button-large">Get Support</a>
          <a href="<?php echo site_url('/volunteer'); ?>" class="button button-secondary button-large">Volunteer</a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>