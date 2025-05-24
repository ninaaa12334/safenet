<?php
/* Template Name: Orphanage Page */
get_header();
?>

<main class="orphanage-page">
  <div class="container">
    <!-- Hero Section -->
    <section class="page-hero">
      <div class="hero-content">
        <h1>Orphanage Support</h1>
        <p>Children in orphanages need care, education, and a safe environment to grow. At SafeNet, we work with local shelters to provide these essentials — but we need your help.</p>
      </div>
    </section>

    <!-- Living Conditions Section -->
    <section class="conditions-section">
      <h2>Understanding Their World</h2>
      <div class="conditions-content">
        <div class="conditions-text">
          <p>Many orphans face poor living conditions, lack of proper education, and limited access to emotional support. We aim to change that through direct intervention and community aid.</p>
          <div class="stats-inline">
            <div class="stat-item">
              <span class="stat-number">153M</span>
              <span class="stat-label">Orphaned children worldwide</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">5,000+</span>
              <span class="stat-label">Children we support annually</span>
            </div>
          </div>
        </div>
        <div class="conditions-image">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=500&h=400&fit=crop" alt="Children in educational setting">
        </div>
      </div>
    </section>

    <!-- Ways to Help Section -->
    <section class="help-ways-section">
      <h2>Ways You Can Make a Difference</h2>
      <div class="help-ways-grid">
        <div class="help-way-card volunteer">
          <div class="help-icon">🙋</div>
          <h3>Volunteer Your Time</h3>
          <p>Spend time with children, teach them skills, play games, or help with daily activities. Your presence makes a real difference.</p>
          <ul class="help-details">
            <li>Reading and tutoring sessions</li>
            <li>Arts and crafts activities</li>
            <li>Sports and outdoor games</li>
            <li>Life skills workshops</li>
          </ul>
          <a href="<?php echo site_url('/volunteer'); ?>" class="button button-primary">Start Volunteering</a>
        </div>

        <div class="help-way-card adopt">
          <div class="help-icon">🫶</div>
          <h3>Adoption Services</h3>
          <p>Learn about legal adoption processes and meet children who are ready for loving families.</p>
          <ul class="help-details">
            <li>Adoption counseling and guidance</li>
            <li>Legal process support</li>
            <li>Family matching services</li>
            <li>Post-adoption support</li>
          </ul>
          <a href="<?php echo site_url('/adoption'); ?>" class="button button-secondary">Learn About Adoption</a>
        </div>

        <div class="help-way-card donate-food">
          <div class="help-icon">🍲</div>
          <h3>Food Donations</h3>
          <p>Join our food basket donation drives and help ensure children have nutritious meals every day.</p>
          <ul class="help-details">
            <li>Weekly food basket drives</li>
            <li>Special occasion meals</li>
            <li>Nutrition education programs</li>
            <li>Community garden projects</li>
          </ul>
          <a href="<?php echo site_url('/donate-food'); ?>" class="button button-secondary">Donate Food</a>
        </div>

        <div class="help-way-card financial">
          <div class="help-icon">💸</div>
          <h3>Financial Support</h3>
          <p>Fund education, healthcare, and daily needs for orphaned children to give them a brighter future.</p>
          <ul class="help-details">
            <li>Education scholarships</li>
            <li>Healthcare and medical needs</li>
            <li>Clothing and supplies</li>
            <li>Recreational activities</li>
          </ul>
          <a href="<?php echo site_url('/donate'); ?>" class="button button-primary">Donate Now</a>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section">
      <h2>Our Programs</h2>
      <div class="programs-grid">
        <div class="program-card">
          <div class="program-icon">📚</div>
          <h3>Education First</h3>
          <p>Comprehensive educational support from basic literacy to university scholarships.</p>
        </div>
        <div class="program-card">
          <div class="program-icon">🏥</div>
          <h3>Healthcare Access</h3>
          <p>Regular medical checkups, mental health support, and emergency medical care.</p>
        </div>
        <div class="program-card">
          <div class="program-icon">🎨</div>
          <h3>Creative Development</h3>
          <p>Art, music, and creative programs to help children express themselves and build confidence.</p>
        </div>
        <div class="program-card">
          <div class="program-icon">💼</div>
          <h3>Life Skills Training</h3>
          <p>Practical skills preparation for independent living and future career success.</p>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
      <h2>Moments of Joy</h2>
      <p>See the impact of your support through these precious moments.</p>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=300&h=200&fit=crop" alt="Children learning in classroom">
          <div class="gallery-overlay">
            <span>Learning Together</span>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=300&h=200&fit=crop" alt="Children playing outdoors">
          <div class="gallery-overlay">
            <span>Playtime Fun</span>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=300&h=200&fit=crop" alt="Children with volunteers">
          <div class="gallery-overlay">
            <span>Community Support</span>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=300&h=200&fit=crop" alt="Children studying">
          <div class="gallery-overlay">
            <span>Focused Learning</span>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=300&h=200&fit=crop" alt="Safe shelter environment">
          <div class="gallery-overlay">
            <span>Safe Haven</span>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop" alt="Child with bright future">
          <div class="gallery-overlay">
            <span>Bright Futures</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories">
      <h2>Success Stories</h2>
      <div class="success-grid">
        <div class="success-card">
          <div class="success-image">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" alt="Success story graduate">
          </div>
          <div class="success-content">
            <h3>Ahmed's Journey</h3>
            <p>"SafeNet gave me hope when I had none. Through their education program, I'm now studying engineering and want to build better homes for children like me."</p>
            <span class="success-tag">University Student</span>
          </div>
        </div>
        <div class="success-card">
          <div class="success-image">
            <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=150&h=150&fit=crop&crop=face" alt="Success story teacher">
          </div>
          <div class="success-content">
            <h3>Maria's Dream</h3>
            <p>"I always wanted to be a teacher. SafeNet's scholarship program made it possible. Now I teach other children and show them that dreams do come true."</p>
            <span class="success-tag">Elementary Teacher</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
      <div class="cta-content">
        <h2>Every Child Deserves a Chance</h2>
        <p>Your support can transform a child's life. Whether through time, resources, or love, you can make a lasting difference.</p>
        <div class="cta-buttons">
          <a href="<?php echo site_url('/volunteer'); ?>" class="button button-primary button-large">Get Involved Today</a>
          <a href="<?php echo site_url('/donate'); ?>" class="button button-secondary button-large">Make a Donation</a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
