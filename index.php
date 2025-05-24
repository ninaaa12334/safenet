<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SafeNet</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #f3f5f9;
      color: #333;
    }

    header, footer {
      background-color: #4a3f94;
      color: white;
      padding: 1.5rem;
      text-align: center;
    }

    nav {
      background: #eee;
      padding: 1rem;
      text-align: center;
    }

    nav a {
      margin: 0 1rem;
      text-decoration: none;
      color: #4a3f94;
      font-weight: bold;
    }

    .hero {
      background: url('https://source.unsplash.com/featured/?women') no-repeat center center/cover;
      height: 300px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-shadow: 0 0 5px black;
    }

    .section {
      padding: 2rem;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      color: #4a3f94;
    }

    .gallery {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      margin-top: 1rem;
    }

    .gallery img {
      width: 30%;
      border-radius: 8px;
      object-fit: cover;
    }

    .card {
      background: white;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      margin-bottom: 1rem;
    }

    .cta-button {
      background: #ff5c5c;
      color: white;
      padding: 1rem 2rem;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      margin-top: 1rem;
    }

    .fixed-help {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #ff5c5c;
      color: white;
      padding: 1rem;
      border-radius: 50%;
      text-align: center;
      font-weight: bold;
      cursor: pointer;
      z-index: 1000;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: 0;
      border-radius: 8px;
    }

    .quiz, .story {
      background: #fff;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      margin: 1rem 0;
    }

  </style>
</head>
<body>

  <header>
    <h1>SafeNet</h1>
    <p>Empowering Women and Supporting Orphans</p>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Orphanage</a>
    <a href="#">Women Rights</a>
    <a href="#">Report Abuse</a>
    <a href="#">Education</a>
  </nav>

  <div class="hero">
    <h2>We Stand for Safety, Education, and Empowerment</h2>
    <a href="#" class="cta-button">Find Help</a>
  </div>

  <section class="section">
    <h2>Our Mission</h2>
    <p>SafeNet aims to support women in crisis, provide shelter and hope to children in orphanages, and raise awareness about human rights. We educate, empower, and protect.</p>
  </section>

  <section class="section">
    <h2>Volunteers</h2>
    <div class="card">👩‍⚕️ Sarah - Social Worker</div>
    <div class="card">👨‍🏫 Alex - Human Rights Lawyer</div>
    <div class="card">👩‍🎓 Priya - Child Educator</div>
  </section>

  <section class="section">
    <h2>What We Offer</h2>
    <ul>
      <li>🏠 Shelter and support for women</li>
      <li>🍲 Food donations for orphans</li>
      <li>📚 Education and legal advice</li>
      <li>💬 Anonymous reporting and AI support</li>
    </ul>
  </section>

  <section class="section">
    <h2>Gallery</h2>
    <div class="gallery">
      <img src="https://source.unsplash.com/300x200/?woman" />
      <img src="https://source.unsplash.com/301x200/?children" />
      <img src="https://source.unsplash.com/302x200/?human-rights" />
    </div>
  </section>

  <section class="section">
    <h2>Orphanage: How They Live</h2>
    <p>Children in local orphanages face daily challenges — from education to basic hygiene. We offer you a chance to make a difference:</p>
    <ul>
      <li><a href="#">Volunteer</a></li>
      <li><a href="#">Adopt</a></li>
      <li><a href="#">Donate Food</a></li>
      <li><a href="#">Send Financial Help</a></li>
    </ul>
  </section>

  <section class="section">
    <h2>Women's Stories</h2>
    <div class="story">
      <p><strong>Anonymous Story:</strong> “I escaped a forced marriage at 16. SafeNet gave me the courage to speak out.”</p>
    </div>
    <div class="story">
      <p><strong>Anonymous Story:</strong> “After years of abuse, I finally found peace and protection here.”</p>
    </div>
  </section>

  <section class="section">
    <h2>Report Abuse Map</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18..." allowfullscreen="" loading="lazy"></iframe>
  </section>

  <section class="section">
    <h2>Education & Quiz</h2>
    <div class="quiz">
      <p><strong>Question:</strong> What year was the Universal Declaration of Human Rights adopted?</p>
      <p>A) 1948 &nbsp; B) 1952 &nbsp; C) 1970</p>
    </div>
    <div class="quiz">
      <p><strong>Educational Fact:</strong> 1 in 3 women worldwide have experienced violence in their lifetime.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 SafeNet. All rights reserved.</p>
  </footer>

  <div class="fixed-help" onclick="window.location.href='#'">Help</div>

</body>
</html>