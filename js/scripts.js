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

  // Enhanced Quiz functionality
  try {
    const quizForm = document.getElementById('rights-quiz');
    if (quizForm) {
      console.log('SafeNet: Enhanced quiz form found');
      
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
        const progressFill = document.getElementById('progress-fill');
        const progressText = document.getElementById('progress-text');
        
        if (progressFill && progressText) {
          const percentage = ((currentQuestion + 1) / totalQuestions) * 100;
          progressFill.style.width = percentage + '%';
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
              feedback.className = `quiz-feedback ${isCorrect ? 'correct' : 'incorrect'}`;
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
            <h3>Quiz Complete!</h3>
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
            feedback.classList.remove('correct', 'incorrect');
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
    console.error('SafeNet: Enhanced quiz functionality error:', error);
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