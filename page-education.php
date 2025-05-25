<?php
/* Template Name: Education Page */
get_header();
?>

<div class="education-page-wrapper">
  <style>
    /* Education Page Specific Styles */
    .education-page-wrapper {
      margin: 0;
      padding: 0;
    }

    .education-hero {
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
      position: relative;
      overflow: hidden;
      min-height: 100vh;
      display: flex;
      align-items: center;
      color: white;
    }

    .education-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fillOpacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/svg%3E");
      animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    .floating-element {
      position: absolute;
      border-radius: 50%;
      backdrop-filter: blur(10px);
      animation: float 6s ease-in-out infinite;
    }

    .floating-1 {
      top: 10%;
      left: 10%;
      width: 5rem;
      height: 5rem;
      background: rgba(255, 255, 255, 0.1);
      animation-delay: 0s;
    }

    .floating-2 {
      bottom: 20%;
      right: 10%;
      width: 8rem;
      height: 8rem;
      background: rgba(236, 72, 153, 0.2);
      animation-delay: 2s;
    }

    .floating-3 {
      top: 50%;
      left: 25%;
      width: 4rem;
      height: 4rem;
      background: rgba(139, 92, 246, 0.2);
      animation-delay: 4s;
    }

    .hero-content {
      position: relative;
      z-index: 10;
      text-align: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem 1.5rem;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 9999px;
      padding: 0.75rem 1.5rem;
      font-size: 0.875rem;
      font-weight: 600;
      margin-bottom: 2rem;
    }

    .hero-title {
      font-size: clamp(3rem, 8vw, 6rem);
      font-weight: 900;
      margin-bottom: 1.5rem;
      line-height: 1.1;
    }

    .hero-title .title-line {
      display: block;
    }

    .title-main {
      background: linear-gradient(to right, #ffffff, #fef3c7, #e9d5ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .title-accent {
      background: linear-gradient(to right, #fcd34d, #f59e0b, #eab308);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .title-subtitle {
      font-size: clamp(1.5rem, 4vw, 2.5rem);
      font-weight: 600;
      color: #e2e8f0;
      margin-top: 1rem;
    }

    .hero-subtitle {
      font-size: clamp(1.125rem, 2vw, 1.5rem);
      opacity: 0.9;
      max-width: 64rem;
      margin: 0 auto 2.5rem;
      line-height: 1.6;
      font-weight: 300;
    }

    .hero-buttons {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      justify-content: center;
      margin-bottom: 4rem;
    }

    @media (min-width: 640px) {
      .hero-buttons {
        flex-direction: row;
      }
    }

    .cta-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 1.25rem 2.5rem;
      font-size: 1.125rem;
      font-weight: 700;
      border-radius: 1rem;
      text-decoration: none;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      border: none;
      cursor: pointer;
    }

    .cta-button:hover {
      transform: scale(1.05);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .cta-primary {
      background: linear-gradient(to right, #eab308, #d97706);
      color: white;
    }

    .cta-primary:hover {
      background: linear-gradient(to right, #d97706, #b45309);
      color: white;
    }

    .cta-secondary {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.5);
      color: white;
    }

    .cta-secondary:hover {
      background: white;
      color: #7c3aed;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      max-width: 32rem;
      margin: 0 auto;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 900;
      color: #fcd34d;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.875rem;
      color: #e2e8f0;
      font-weight: 500;
    }

    .scroll-indicator {
      position: absolute;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateX(-50%) translateY(0);
      }
      40% {
        transform: translateX(-50%) translateY(-10px);
      }
      60% {
        transform: translateX(-50%) translateY(-5px);
      }
    }

    .scroll-mouse {
      width: 1.5rem;
      height: 2.5rem;
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 1rem;
      display: flex;
      justify-content: center;
      padding-top: 0.5rem;
    }

    .scroll-wheel {
      width: 0.25rem;
      height: 0.75rem;
      background: rgba(255, 255, 255, 0.7);
      border-radius: 0.125rem;
      animation: pulse 2s infinite;
    }

    /* Main Content Styles */
    .main-content {
      background: linear-gradient(to bottom, #f9fafb, white);
    }

    .section {
      padding: 5rem 1.5rem;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
    }

    .section-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .section-title {
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 900;
      margin-bottom: 1.5rem;
    }

    .gradient-text {
      background: linear-gradient(135deg, #6366f1, #ec4899);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .section-subtitle {
      font-size: 1.25rem;
      color: #6b7280;
      max-width: 48rem;
      margin: 0 auto;
      line-height: 1.6;
    }

    .module-grid {
      display: grid;
      gap: 2rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
      .module-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .module-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .module-card {
      border: 2px solid;
      border-radius: 1.5rem;
      padding: 2rem;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .module-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .module-icon {
      width: 4rem;
      height: 4rem;
      border-radius: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-bottom: 1.5rem;
      font-size: 2rem;
    }

    .module-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #1f2937;
      margin-bottom: 1rem;
    }

    .module-description {
      color: #6b7280;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }

    .module-topics {
      margin-bottom: 1.5rem;
    }

    .topic-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .topic-icon {
      width: 1rem;
      height: 1rem;
      color: #10b981;
    }

    .topic-text {
      font-size: 0.875rem;
      color: #6b7280;
    }

    .module-button {
      width: 100%;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 0.75rem;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .module-button:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Quiz Styles */
    .quiz-section {
      background: linear-gradient(to right, #faf5ff, #fdf2f8);
    }

    .quiz-container {
      background: white;
      border-radius: 1.5rem;
      padding: 2rem;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
      border: 1px solid #e9d5ff;
      max-width: 64rem;
      margin: 0 auto;
    }

    .quiz-progress-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .progress-bar-container {
      flex: 1;
      background: #e5e7eb;
      border-radius: 9999px;
      height: 0.75rem;
      margin-right: 1rem;
    }

    .progress-bar {
      background: linear-gradient(to right, #6366f1, #ec4899);
      height: 0.75rem;
      border-radius: 9999px;
      transition: width 0.3s ease;
    }

    .progress-text {
      font-size: 0.875rem;
      color: #6b7280;
      font-weight: 500;
      white-space: nowrap;
    }

    .quiz-question {
      margin-bottom: 2rem;
      display: none;
    }

    .quiz-question.active {
      display: block;
    }

    .question-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #1f2937;
      margin-bottom: 1.5rem;
    }

    .quiz-options {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .quiz-option {
      display: flex;
      align-items: center;
      padding: 1rem;
      border: 2px solid #e5e7eb;
      border-radius: 0.75rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .quiz-option:hover {
      border-color: #8b5cf6;
      background-color: #f3f4f6;
    }

    .quiz-option.selected {
      border-color: #6366f1;
      background-color: #eff6ff;
    }

    .quiz-option input {
      margin-right: 1rem;
      width: 1rem;
      height: 1rem;
      accent-color: #6366f1;
    }

    .option-text {
      font-size: 1.125rem;
    }

    .quiz-feedback {
      margin-top: 1.5rem;
      padding: 1rem;
      border-radius: 0.75rem;
      animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .feedback-correct {
      background: #dcfce7;
      border: 1px solid #bbf7d0;
      color: #166534;
    }

    .feedback-incorrect {
      background: #fef2f2;
      border: 1px solid #fecaca;
      color: #991b1b;
    }

    .quiz-navigation {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-button {
      padding: 0.75rem 1.5rem;
      border-radius: 0.75rem;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
    }

    .nav-button:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .nav-button-secondary {
      border: 1px solid #d1d5db;
      color: #374151;
      background: white;
    }

    .nav-button-secondary:hover:not(:disabled) {
      background: #f9fafb;
    }

    .nav-button-primary {
      background: linear-gradient(to right, #6366f1, #ec4899);
      color: white;
    }

    .nav-button-primary:hover:not(:disabled) {
      box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
    }

    .nav-button-success {
      background: linear-gradient(to right, #059669, #10b981);
      color: white;
    }

    .nav-button-success:hover:not(:disabled) {
      box-shadow: 0 10px 25px rgba(5, 150, 105, 0.3);
    }

    .quiz-results {
      text-align: center;
    }

    .quiz-results-content {
      text-align: center;
    }

    .quiz-results-content .score {
      font-size: 3rem;
      font-weight: 900;
      color: #6366f1;
      margin: 1rem 0;
    }

    .quiz-results-content .percentage {
      font-size: 1.5rem;
      color: #6b7280;
      margin-bottom: 1rem;
    }

    .detailed-results {
      text-align: left;
      margin: 2rem 0;
    }

    .result-item {
      margin: 1rem 0;
      padding: 1rem;
      border-radius: 0.5rem;
      border: 1px solid #e5e7eb;
    }

    .result-item.correct {
      background-color: #dcfce7;
      border-color: #bbf7d0;
    }

    .result-item.incorrect {
      background-color: #fef2f2;
      border-color: #fecaca;
    }

    .quiz-actions {
      display: flex;
      gap: 1rem;
      justify-content: center;
      margin-top: 2rem;
    }

    .button {
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      text-decoration: none;
      font-weight: 600;
      border: none;
      cursor: pointer;
    }

    .button-primary {
      background: linear-gradient(to right, #6366f1, #ec4899);
      color: white;
    }

    .button-secondary {
      border: 1px solid #6366f1;
      color: #6366f1;
      background: white;
    }

    /* Facts Section */
    .facts-grid {
      display: grid;
      gap: 2rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
      .facts-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .facts-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .fact-card {
      background: white;
      border-radius: 1rem;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      border: 1px solid #f3f4f6;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fact-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }

    .fact-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .fact-stat {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .fact-description {
      color: #6b7280;
      line-height: 1.6;
    }

    /* Resources Section */
    .resources-section {
      background: linear-gradient(to right, #f9fafb, #faf5ff);
    }

    .resources-grid {
      display: grid;
      gap: 2rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
      .resources-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .resources-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .resource-card {
      background: white;
      border-radius: 1rem;
      padding: 1.5rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      border: 1px solid #f3f4f6;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .resource-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }

    .resource-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .resource-title {
      font-size: 1.25rem;
      font-weight: 700;
      color: #1f2937;
      margin-bottom: 0.75rem;
    }

    .resource-description {
      color: #6b7280;
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .resource-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: #6366f1;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .resource-link:hover {
      color: #4f46e5;
    }

    /* CTA Section */
    .cta-section {
      text-align: center;
      max-width: 64rem;
      margin: 0 auto;
    }

    .cta-title {
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 900;
      margin-bottom: 1.5rem;
    }

    .cta-description {
      font-size: 1.25rem;
      color: #6b7280;
      margin-bottom: 2.5rem;
      line-height: 1.6;
    }

    .cta-buttons {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      justify-content: center;
    }

    @media (min-width: 640px) {
      .cta-buttons {
        flex-direction: row;
      }
    }

    .cta-button-large {
      padding: 1.25rem 2.5rem;
      font-size: 1.125rem;
      font-weight: 700;
      border-radius: 1rem;
      text-decoration: none;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .cta-button-large:hover {
      transform: scale(1.05);
    }

    .cta-button-primary-large {
      background: linear-gradient(to right, #6366f1, #ec4899);
      color: white;
    }

    .cta-button-primary-large:hover {
      background: linear-gradient(to right, #4f46e5, #db2777);
      color: white;
    }

    .cta-button-secondary-large {
      border: 2px solid #6366f1;
      color: #6366f1;
      background: white;
    }

    .cta-button-secondary-large:hover {
      background: #6366f1;
      color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .floating-element {
        display: none;
      }
      
      .hero-stats {
        grid-template-columns: 1fr;
        gap: 1rem;
      }
      
      .quiz-container {
        padding: 1rem;
      }
      
      .quiz-navigation {
        flex-direction: column;
        gap: 1rem;
      }
    }

    @media (max-width: 480px) {
      .section {
        padding: 3rem 1rem;
      }
      
      .hero-content {
        padding: 0 1rem;
      }
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {
      .floating-element,
      .education-hero::before {
        animation: none;
      }
    }

    button:focus-visible,
    a:focus-visible,
    input:focus-visible {
      outline: 2px solid #6366f1;
      outline-offset: 2px;
    }
  </style>

  <!-- Hero Section -->
  <section class="education-hero">
    <!-- Floating elements -->
    <div class="floating-element floating-1"></div>
    <div class="floating-element floating-2"></div>
    <div class="floating-element floating-3"></div>

    <div class="hero-content">
      <!-- Hero Badge -->
      <div class="hero-badge">
        <span>📚</span>
        <span>Education • Empowerment • Equality</span>
      </div>

      <!-- Main Title -->
      <h1 class="hero-title">
        <span class="title-line title-main">Human Rights</span>
        <span class="title-line title-accent">Education</span>
        <span class="title-line title-subtitle">Knowledge is Power</span>
      </h1>

      <!-- Subtitle -->
      <p class="hero-subtitle">
        Understanding your rights is the first step toward equality and justice. Learn about human rights, women's
        rights, and test your knowledge with our interactive quiz.
      </p>

      <!-- CTA Buttons -->
      <div class="hero-buttons">
        <a href="#quiz" class="cta-button cta-primary">
          <span>🏆</span>
          Take the Quiz
          <span>→</span>
        </a>
        <a href="#learn" class="cta-button cta-secondary">
          <span>📚</span>
          Start Learning
        </a>
      </div>

      <!-- Quick Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number">30+</div>
          <div class="stat-label">Articles</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">15+</div>
          <div class="stat-label">Quiz Topics</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">100%</div>
          <div class="stat-label">Free Access</div>
        </div>
      </div>
    </div>

    <!-- Scroll indicator -->
    <div class="scroll-indicator">
      <div class="scroll-mouse">
        <div class="scroll-wheel"></div>
      </div>
    </div>
  </section>

  <!-- Main Content Area -->
  <div class="main-content">
    <!-- Learning Modules Section -->
    <section id="learn" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Essential Learning Modules</span>
          </h2>
          <p class="section-subtitle">
            Comprehensive education on human rights, women's rights, and social justice to empower you with knowledge.
          </p>
        </div>

        <div class="module-grid">
          <!-- Module 1: Universal Human Rights -->
          <div class="module-card" style="background-color: #eff6ff; border-color: #bfdbfe;">
            <div class="module-icon" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
              🌍
            </div>
            <h3 class="module-title">Universal Human Rights</h3>
            <p class="module-description">
              Learn about the fundamental rights that belong to every person, regardless of nationality, gender, or background.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Universal Declaration</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Civil Rights</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Political Rights</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Economic Rights</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
              Start Learning
            </button>
          </div>

          <!-- Module 2: Women's Rights & Equality -->
          <div class="module-card" style="background-color: #fdf2f8; border-color: #fbcfe8;">
            <div class="module-icon" style="background: linear-gradient(135deg, #ec4899, #db2777);">
              👥
            </div>
            <h3 class="module-title">Women's Rights & Equality</h3>
            <p class="module-description">
              Understand the specific rights of women and the ongoing fight for gender equality worldwide.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Gender Equality</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Reproductive Rights</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Workplace Rights</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Violence Prevention</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #ec4899, #db2777);">
              Start Learning
            </button>
          </div>

          <!-- Module 3: Legal Protection -->
          <div class="module-card" style="background-color: #faf5ff; border-color: #e9d5ff;">
            <div class="module-icon" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
              ⚖️
            </div>
            <h3 class="module-title">Legal Protection</h3>
            <p class="module-description">
              Discover how laws protect your rights and what to do when those rights are violated.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Legal Framework</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Court Systems</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Legal Aid</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Reporting Violations</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
              Start Learning
            </button>
          </div>

          <!-- Module 4: Safety & Protection -->
          <div class="module-card" style="background-color: #fef2f2; border-color: #fecaca;">
            <div class="module-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
              🛡️
            </div>
            <h3 class="module-title">Safety & Protection</h3>
            <p class="module-description">
              Learn about personal safety, domestic violence prevention, and protection resources.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Personal Safety</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Domestic Violence</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Emergency Resources</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Support Systems</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
              Start Learning
            </button>
          </div>

          <!-- Module 5: Mental Health Rights -->
          <div class="module-card" style="background-color: #f0fdf4; border-color: #bbf7d0;">
            <div class="module-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
              ❤️
            </div>
            <h3 class="module-title">Mental Health Rights</h3>
            <p class="module-description">
              Understand your rights to mental health care and support services.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Mental Health Care</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Therapy Access</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Workplace Support</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Crisis Resources</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #10b981, #059669);">
              Start Learning
            </button>
          </div>

          <!-- Module 6: Advocacy & Action -->
          <div class="module-card" style="background-color: #fffbeb; border-color: #fde68a;">
            <div class="module-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
              💡
            </div>
            <h3 class="module-title">Advocacy & Action</h3>
            <p class="module-description">
              Learn how to advocate for yourself and others, and create positive change in your community.
            </p>
            <div class="module-topics">
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Community Organizing</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Peaceful Protest</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Policy Change</span>
              </div>
              <div class="topic-item">
                <span class="topic-icon">✓</span>
                <span class="topic-text">Grassroots Movements</span>
              </div>
            </div>
            <button class="module-button" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
              Start Learning
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Quiz Section -->
    <section id="quiz" class="section quiz-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">🧠 Test Your Knowledge</span>
          </h2>
          <p class="section-subtitle">
            Challenge yourself with our comprehensive quiz covering human rights, women's rights, and social justice topics.
          </p>
        </div>

        <div class="quiz-container">
          <!-- Quiz Progress -->
          <div class="quiz-progress-container">
            <div class="progress-bar-container">
              <div class="progress-bar" id="quiz-progress" style="width: 33%;"></div>
            </div>
            <span class="progress-text" id="progress-text">Question 1 of 3</span>
          </div>

          <!-- Quiz Form -->
          <form id="rights-quiz">
            <!-- Question 1 -->
            <div class="quiz-question active" data-question="1">
              <h3 class="question-title">What is the Universal Declaration of Human Rights?</h3>
              <div class="quiz-options">
                <label class="quiz-option">
                  <input type="radio" name="q1" value="a">
                  <span class="option-text">A law that only applies to certain countries</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q1" value="b">
                  <span class="option-text">A UN document that defines fundamental human rights for all people</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q1" value="c">
                  <span class="option-text">A treaty between European nations</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q1" value="d">
                  <span class="option-text">A religious document</span>
                </label>
              </div>
              <div id="q1-feedback" class="quiz-feedback" style="display: none;"></div>
            </div>

            <!-- Question 2 -->
            <div class="quiz-question" data-question="2">
              <h3 class="question-title">Which of the following is considered a fundamental human right?</h3>
              <div class="quiz-options">
                <label class="quiz-option">
                  <input type="radio" name="q2" value="a">
                  <span class="option-text">The right to own luxury items</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q2" value="b">
                  <span class="option-text">The right to be treated equally regardless of gender, race, or religion</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q2" value="c">
                  <span class="option-text">The right to unlimited wealth</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q2" value="d">
                  <span class="option-text">The right to control others</span>
                </label>
              </div>
              <div id="q2-feedback" class="quiz-feedback" style="display: none;"></div>
            </div>

            <!-- Question 3 -->
            <div class="quiz-question" data-question="3">
              <h3 class="question-title">According to UN statistics, approximately how many women worldwide have experienced physical or sexual violence?</h3>
              <div class="quiz-options">
                <label class="quiz-option">
                  <input type="radio" name="q3" value="a">
                  <span class="option-text">1 in 10 women</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q3" value="b">
                  <span class="option-text">1 in 5 women</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q3" value="c">
                  <span class="option-text">1 in 3 women</span>
                </label>
                <label class="quiz-option">
                  <input type="radio" name="q3" value="d">
                  <span class="option-text">1 in 2 women</span>
                </label>
              </div>
              <div id="q3-feedback" class="quiz-feedback" style="display: none;"></div>
            </div>

            <!-- Quiz Navigation -->
            <div class="quiz-navigation">
              <button type="button" id="prev-question" class="nav-button nav-button-secondary" style="display: none;">
                Previous
              </button>
              <button type="button" id="next-question" class="nav-button nav-button-primary">
                Next
              </button>
              <button type="submit" id="submit-quiz" class="nav-button nav-button-success" style="display: none;">
                Submit Quiz
              </button>
            </div>
          </form>

          <!-- Quiz Results -->
          <div id="quiz-results" class="quiz-results" style="display: none;">
            <!-- Results will be populated by JavaScript -->
          </div>
        </div>
      </div>
    </section>

    <!-- Key Facts Section -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Essential Facts to Know</span>
          </h2>
          <p class="section-subtitle">
            Important statistics and facts about human rights and women's rights that everyone should know.
          </p>
        </div>

        <div class="facts-grid">
          <div class="fact-card">
            <div class="fact-icon">🌍</div>
            <h3 class="fact-stat" style="background: linear-gradient(135deg, #3b82f6, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              30 Articles
            </h3>
            <p class="fact-description">
              The Universal Declaration of Human Rights contains 30 fundamental articles
            </p>
          </div>

          <div class="fact-card">
            <div class="fact-icon">⚖️</div>
            <h3 class="fact-stat" style="background: linear-gradient(135deg, #ef4444, #dc2626); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              1 in 3
            </h3>
            <p class="fact-description">
              Women worldwide experience physical or sexual violence in their lifetime
            </p>
          </div>

          <div class="fact-card">
            <div class="fact-icon">📚</div>
            <h3 class="fact-stat" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              130M
            </h3>
            <p class="fact-description">
              Girls are out of school worldwide, denied their right to education
            </p>
          </div>

          <div class="fact-card">
            <div class="fact-icon">💼</div>
            <h3 class="fact-stat" style="background: linear-gradient(135deg, #ec4899, #db2777); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              23%
            </h3>
            <p class="fact-description">
              Gender pay gap exists globally, with women earning less than men
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Resources Section -->
    <section class="section resources-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Additional Resources</span>
          </h2>
          <p class="section-subtitle">
            Explore more resources to deepen your understanding of human rights.
          </p>
        </div>

        <div class="resources-grid">
          <div class="resource-card">
            <div class="resource-icon">🌐</div>
            <h3 class="resource-title">UN Human Rights</h3>
            <p class="resource-description">
              Official United Nations human rights documentation and resources
            </p>
            <a href="https://www.un.org/en/global-issues/human-rights" class="resource-link" target="_blank">
              Learn More →
            </a>
          </div>

          <div class="resource-card">
            <div class="resource-icon">👩‍⚖️</div>
            <h3 class="resource-title">Women's Rights Organizations</h3>
            <p class="resource-description">
              Connect with organizations fighting for women's rights worldwide
            </p>
            <a href="<?php echo home_url('/women-rights'); ?>" class="resource-link">
              Learn More →
            </a>
          </div>

          <div class="resource-card">
            <div class="resource-icon">⚖️</div>
            <h3 class="resource-title">Legal Aid Resources</h3>
            <p class="resource-description">
              Find legal help and support for human rights violations
            </p>
            <a href="<?php echo home_url('/legal-help'); ?>" class="resource-link">
              Learn More →
            </a>
          </div>

          <div class="resource-card">
            <div class="resource-icon">📖</div>
            <h3 class="resource-title">Educational Materials</h3>
            <p class="resource-description">
              Download guides, infographics, and educational content
            </p>
            <a href="<?php echo home_url('/resources'); ?>" class="resource-link">
              Learn More →
            </a>
          </div>

          <div class="resource-card">
            <div class="resource-icon">🤝</div>
            <h3 class="resource-title">Support Groups</h3>
            <p class="resource-description">
              Join communities of people learning about and advocating for rights
            </p>
            <a href="<?php echo home_url('/community'); ?>" class="resource-link">
              Learn More →
            </a>
          </div>

          <div class="resource-card">
            <div class="resource-icon">🚨</div>
            <h3 class="resource-title">Emergency Contacts</h3>
            <p class="resource-description">
              Important phone numbers and resources for immediate help
            </p>
            <a href="<?php echo home_url('/emergency'); ?>" class="resource-link">
              Learn More →
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="section">
      <div class="container">
        <div class="cta-section">
          <h2 class="cta-title">
            <span class="gradient-text">Ready to Make a Difference?</span>
          </h2>
          <p class="cta-description">
            Knowledge is the first step toward creating change. Use what you've learned to advocate for yourself and others.
          </p>
          <div class="cta-buttons">
            <a href="<?php echo home_url('/volunteer'); ?>" class="cta-button-large cta-button-primary-large">
              Get Involved
            </a>
            <a href="<?php echo home_url('/women-rights'); ?>" class="cta-button-large cta-button-secondary-large">
              Learn More About Women's Rights
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  console.log('SafeNet: Education page loaded');

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

  // Quiz functionality
  try {
    const quizForm = document.getElementById('rights-quiz');
    if (quizForm) {
      console.log('SafeNet: Quiz form found');
      
      const questions = [
        {
          name: 'q1',
          answer: 'b',
          correctText: 'Correct! The Universal Declaration of Human Rights is a UN document that defines fundamental human rights for all people.',
          incorrectText: 'Incorrect. The Universal Declaration of Human Rights is a United Nations document that outlines fundamental human rights.',
          explanation: 'Adopted by the UN General Assembly in 1948, this document serves as a foundation for international human rights law.'
        },
        {
          name: 'q2',
          answer: 'b',
          correctText: 'Correct! The right to be treated equally is indeed a fundamental human right.',
          incorrectText: 'Incorrect. The right to be treated equally is a basic human right guaranteed to all people.',
          explanation: 'Equality and non-discrimination are core principles of human rights, ensuring all people are treated with dignity regardless of their background.'
        },
        {
          name: 'q3',
          answer: 'c',
          correctText: 'Correct! According to UN statistics, approximately 1 in 3 women worldwide have experienced physical or sexual violence.',
          incorrectText: 'Incorrect. UN data shows that about 1 in 3 women globally have experienced physical or sexual violence.',
          explanation: 'This statistic highlights the urgent need for continued advocacy and support systems for women\'s safety and rights.'
        }
      ];

      let currentQuestion = 0;
      const totalQuestions = questions.length;

      // Initialize quiz
      function initializeQuiz() {
        showQuestion(0);
        updateProgress();
        updateNavigation();
      }

      // Show specific question
      function showQuestion(index) {
        const allQuestions = quizForm.querySelectorAll('.quiz-question');
        allQuestions.forEach((q, i) => {
          q.classList.toggle('active', i === index);
        });
        currentQuestion = index;
        updateProgress();
        updateNavigation();
      }

      // Update progress bar
      function updateProgress() {
        const progressBar = document.getElementById('quiz-progress');
        const progressText = document.getElementById('progress-text');
        
        if (progressBar && progressText) {
          const percentage = ((currentQuestion + 1) / totalQuestions) * 100;
          progressBar.style.width = percentage + '%';
          progressText.textContent = `Question ${currentQuestion + 1} of ${totalQuestions}`;
        }
      }

      // Update navigation buttons
      function updateNavigation() {
        const prevBtn = document.getElementById('prev-question');
        const nextBtn = document.getElementById('next-question');
        const submitBtn = document.getElementById('submit-quiz');

        if (prevBtn) {
          prevBtn.style.display = currentQuestion === 0 ? 'none' : 'inline-block';
        }

        if (nextBtn && submitBtn) {
          if (currentQuestion === totalQuestions - 1) {
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'inline-block';
          } else {
            nextBtn.style.display = 'inline-block';
            submitBtn.style.display = 'none';
          }
        }
      }

      // Real-time feedback on radio button selection
      questions.forEach(question => {
        const inputs = quizForm.querySelectorAll(`input[name="${question.name}"]`);
        inputs.forEach(input => {
          input.addEventListener('change', function() {
            const feedback = document.getElementById(`${question.name}-feedback`);
            if (feedback) {
              feedback.style.display = 'block';
              const isCorrect = this.value === question.answer;
              feedback.textContent = isCorrect ? question.correctText : question.incorrectText;
              feedback.className = `quiz-feedback ${isCorrect ? 'feedback-correct' : 'feedback-incorrect'}`;
            }
          });
        });
      });

      // Navigation event listeners
      const prevBtn = document.getElementById('prev-question');
      const nextBtn = document.getElementById('next-question');
      const submitBtn = document.getElementById('submit-quiz');

      if (prevBtn) {
        prevBtn.addEventListener('click', function() {
          if (currentQuestion > 0) {
            showQuestion(currentQuestion - 1);
          }
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', function() {
          const currentQuestionElement = quizForm.querySelector('.quiz-question.active');
          const selectedInput = currentQuestionElement.querySelector('input[type="radio"]:checked');
          
          if (!selectedInput) {
            alert('Please select an answer before continuing.');
            return;
          }
          
          if (currentQuestion < totalQuestions - 1) {
            showQuestion(currentQuestion + 1);
          }
        });
      }

      // Quiz submission
      if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
          e.preventDefault();
          submitQuiz();
        });
      }

      quizForm.addEventListener('submit', function(e) {
        e.preventDefault();
        submitQuiz();
      });

      function submitQuiz() {
        console.log('SafeNet: Quiz submitted');
        let score = 0;
        let allAnswered = true;
        const results = [];

        questions.forEach(question => {
          const selected = quizForm.querySelector(`input[name="${question.name}"]:checked`);
          if (selected) {
            const isCorrect = selected.value === question.answer;
            if (isCorrect) score++;
            results.push({
              question: question.name.toUpperCase(),
              isCorrect,
              userAnswer: selected.value,
              correctAnswer: question.answer,
              explanation: question.explanation
            });
          } else {
            allAnswered = false;
          }
        });

        if (!allAnswered) {
          alert('Please answer all questions before submitting.');
          return;
        }

        showResults(score, results);
      }

      function showResults(score, results) {
        const percentage = Math.round((score / totalQuestions) * 100);
        const resultsContainer = document.getElementById('quiz-results');
        
        let resultMessage = '';
        if (percentage >= 80) {
          resultMessage = 'Excellent! You have a strong understanding of human rights.';
        } else if (percentage >= 60) {
          resultMessage = 'Good job! Consider learning more about human rights to deepen your knowledge.';
        } else {
          resultMessage = 'Keep learning! Human rights education is important for everyone.';
        }

        const resultsHTML = `
          <div class="quiz-results-content">
            <h3>🎉 Quiz Complete!</h3>
            <div class="score">${score}/${totalQuestions}</div>
            <div class="percentage">${percentage}%</div>
            <p class="result-message">${resultMessage}</p>
            
            <div class="detailed-results">
              <h4>Detailed Results:</h4>
              ${results.map((result, index) => `
                <div class="result-item ${result.isCorrect ? 'correct' : 'incorrect'}">
                  <h5>Question ${index + 1}: ${result.isCorrect ? '✓ Correct' : '✗ Incorrect'}</h5>
                  ${!result.isCorrect ? `<p><strong>Your answer:</strong> ${result.userAnswer.toUpperCase()}</p>
                  <p><strong>Correct answer:</strong> ${result.correctAnswer.toUpperCase()}</p>` : ''}
                  <p class="explanation">${result.explanation}</p>
                </div>
              `).join('')}
            </div>
            
            <div class="quiz-actions">
              <button type="button" id="retake-quiz" class="button button-primary">Take Quiz Again</button>
              <a href="#resources" class="button button-secondary">Learn More</a>
            </div>
          </div>
        `;

        resultsContainer.innerHTML = resultsHTML;
        resultsContainer.style.display = 'block';
        quizForm.style.display = 'none';

        // Retake quiz functionality
        const retakeBtn = document.getElementById('retake-quiz');
        if (retakeBtn) {
          retakeBtn.addEventListener('click', function() {
            resetQuiz();
          });
        }

        // Scroll to results
        resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }

      function resetQuiz() {
        quizForm.reset();
        currentQuestion = 0;
        
        // Hide all feedback
        questions.forEach(question => {
          const feedback = document.getElementById(`${question.name}-feedback`);
          if (feedback) {
            feedback.style.display = 'none';
            feedback.classList.remove('feedback-correct', 'feedback-incorrect');
          }
        });

        // Show quiz form, hide results
        quizForm.style.display = 'block';
        document.getElementById('quiz-results').style.display = 'none';

        // Reset to first question
        initializeQuiz();
        
        // Scroll to quiz
        quizForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }

      // Initialize the quiz
      initializeQuiz();
    }
  } catch (error) {
    console.error('SafeNet: Quiz functionality error:', error);
  }

  // Accessibility improvements
  try {
    const quizForm = document.getElementById('rights-quiz');
    if (quizForm) {
      quizForm.setAttribute('role', 'form');
      quizForm.setAttribute('aria-label', 'Human Rights Quiz');
      
      document.querySelectorAll('.quiz-question').forEach((q, index) => {
        q.setAttribute('role', 'region');
        q.setAttribute('aria-label', `Question ${index + 1}`);
      });
    }
  } catch (error) {
    console.error('SafeNet: Accessibility improvements error:', error);
  }

  console.log('SafeNet: All scripts initialized successfully');
});
</script>

<?php get_footer(); ?>