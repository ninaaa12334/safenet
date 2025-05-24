<?php
/* Template Name: education */
get_header();
?>

<main class="container">
  <!-- Hero Section -->
  <section class="hero education-hero">
    <div class="hero-content">
      <h1>Learn About Human & Women's Rights</h1>
      <p>Explore facts, stories, and test your knowledge with our interactive quiz to understand the importance of human dignity and justice.</p>
      <a href="#quiz" class="button button-primary">Take the Quiz</a>
    </div>
  </section>

  <!-- Why Rights Matter -->
  <section class="container rights-matter">
    <h2>Why Rights Matter</h2>
    <p>Human rights ensure fair treatment for all, regardless of gender, age, or background. Women and children are especially vulnerable and deserve protection and opportunity.</p>
    <div class="facts-grid">
      <div class="fact-card">
        <div class="fact-icon">🌍</div>
        <h3>Global Impact</h3>
        <p>1 in 3 women worldwide face physical or sexual violence, highlighting the need for advocacy.</p>
      </div>
      <div class="fact-card">
        <div class="fact-icon">📜</div>
        <h3>Historical Milestone</h3>
        <p>The UN outlined human rights in the Universal Declaration of 1948.</p>
      </div>
      <div class="fact-card">
        <div class="fact-icon">🎓</div>
        <h3>Education's Power</h3>
        <p>Education reduces abuse risk and boosts economic freedom for women and children.</p>
      </div>
    </div>
  </section>

  <!-- Enhanced Quiz Section -->
  <section class="container quiz-container" id="quiz">
    <div class="quiz-header">
      <h2>🧠 Rights Awareness Quiz</h2>
      <p>Test your knowledge and learn about human rights through our interactive quiz.</p>
    </div>
    
    <div class="quiz-wrapper">
      <div class="quiz-progress">
        <div class="progress-bar">
          <div class="progress-fill" id="progress-fill"></div>
        </div>
        <span class="progress-text" id="progress-text">Question 1 of 3</span>
      </div>
      
      <form id="rights-quiz" class="quiz-form enhanced-quiz">
        <div class="quiz-question active" data-question="1">
          <h3>What is the Universal Declaration of Human Rights?</h3>
          <div class="quiz-options">
            <label class="quiz-option">
              <input type="radio" name="q1" value="a" />
              <span class="option-text">A religious text</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q1" value="b" />
              <span class="option-text">A United Nations document that defines human rights</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q1" value="c" />
              <span class="option-text">A novel</span>
            </label>
          </div>
          <div class="quiz-feedback" id="q1-feedback"></div>
        </div>
        
        <div class="quiz-question" data-question="2">
          <h3>Which of these is a basic human right?</h3>
          <div class="quiz-options">
            <label class="quiz-option">
              <input type="radio" name="q2" value="a" />
              <span class="option-text">Access to luxury items</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q2" value="b" />
              <span class="option-text">The right to be treated equally</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q2" value="c" />
              <span class="option-text">Voting once a year only</span>
            </label>
          </div>
          <div class="quiz-feedback" id="q2-feedback"></div>
        </div>
        
        <div class="quiz-question" data-question="3">
          <h3>What percentage of women worldwide experience violence?</h3>
          <div class="quiz-options">
            <label class="quiz-option">
              <input type="radio" name="q3" value="a" />
              <span class="option-text">1 in 10 women</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q3" value="b" />
              <span class="option-text">1 in 5 women</span>
            </label>
            <label class="quiz-option">
              <input type="radio" name="q3" value="c" />
              <span class="option-text">1 in 3 women</span>
            </label>
          </div>
          <div class="quiz-feedback" id="q3-feedback"></div>
        </div>
        
        <div class="quiz-navigation">
          <button type="button" id="prev-question" class="button button-secondary" style="display: none;">Previous</button>
          <button type="button" id="next-question" class="button button-primary">Next</button>
          <button type="submit" id="submit-quiz" class="button button-primary" style="display: none;">Submit Quiz</button>
        </div>
      </form>
      
      <div id="quiz-results" class="quiz-results" style="display: none;">
        <!-- Results will be populated by JavaScript -->
      </div>
    </div>
  </section>

  <!-- Resources Section -->
  <section class="container resources-section">
    <h2>Learn More</h2>
    <div class="resources-grid">
      <div class="resource-card">
        <div class="resource-icon">🇺🇳</div>
        <h3>UN Declaration</h3>
        <p>Read the full Universal Declaration of Human Rights.</p>
        <a href="https://www.un.org/en/about-us/universal-declaration-of-human-rights" target="_blank" class="button button-secondary">Visit</a>
      </div>
      <div class="resource-card">
        <div class="resource-icon">👩</div>
        <h3>UN Women</h3>
        <p>Explore resources from UN Women on gender equality.</p>
        <a href="https://www.unwomen.org/en" target="_blank" class="button button-secondary">Visit</a>
      </div>
      <div class="resource-card">
        <div class="resource-icon">⚖️</div>
        <h3>Amnesty International</h3>
        <p>Learn about women's rights advocacy from Amnesty.</p>
        <a href="https://www.amnesty.org/en/what-we-do/womens-rights/" target="_blank" class="button button-secondary">Visit</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>