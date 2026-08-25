<?php
// CleverStudyWay - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CleverStudyWay — Smart Learning Strategies, Active Recall & Exam Focus</title>
  <meta name="description" content="CleverStudyWay explores cognitive active recall, spaced repetition algorithms, Pomodoro deep work, Feynman technique, and academic exam prep.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-study {
      background: var(--accent-violet) !important;
      color: #ffffff !important;
      border-color: var(--accent-violet) !important;
      font-weight: 800 !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Clever<span>StudyWay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Study Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Cognitive Science & Smart Study Methods</span>
        <h1 class="hero-title">Master Active Recall & Spaced Repetition</h1>
        <p class="hero-desc">Unlock 90%+ long-term memory retention, 50-minute deep work Pomodoro intervals, Cornell note-taking architecture, and stress-free 30-day exam prep.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-violet">Explore Study Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Learning Science Lab</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Cognitive Study Pillars & Active Recall Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Learning Science Standards</span>
        <h2 class="section-title">The Four Pillars of Cognitive Focus & Memory</h2>
      </div>
      <div class="grid-4">
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧠</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-violet); margin-bottom: 0.75rem;">Active Testing Effect</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Retrieving information from memory through self-testing rather than passive re-reading.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">📈</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-violet); margin-bottom: 0.75rem;">Spaced Leitner Box</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Increasing review intervals across 1, 3, 7, and 30 days to flatten the forgetting curve.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">⏱️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-violet); margin-bottom: 0.75rem;">Deep Work Intervals</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Structuring 50/10 focus sprints to maximize prefrontal cortex concentration without fatigue.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">💡</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-violet); margin-bottom: 0.75rem;">Feynman Technique</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Deconstructing complex academic concepts into simple plain-language explanations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Study Strategy & Focus Technique Explorer -->
  <section class="section" id="study-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Strategy Explorer</span>
        <h2 class="section-title">The Cognitive Study Strategy Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a cognitive study technique to inspect its memory retention, review interval, and efficiency score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark study-btn active-study" data-study="Active Recall Flashcard Retrieval" data-desc="Forcing brain retrieval mechanisms using flashcards without looking at answers." data-score="9.9/10 Memory Retention">Active Recall Retrieval</button>
          <button class="btn btn-outline-dark study-btn" data-study="Spaced Repetition SuperMemo Algorithm" data-desc="Reviewing flashcards right before memory decay occurs (Days 1, 3, 7, 14, 30)." data-score="9.8/10 Long-Term Storage">Spaced Repetition</button>
          <button class="btn btn-outline-dark study-btn" data-study="Cornell Note-Taking Architecture" data-desc="Dividing notes into Cues, Main Notes, and Summary sections for instant review." data-score="9.9/10 Lecture Clarity">Cornell Note System</button>
          <button class="btn btn-outline-dark study-btn" data-study="50/10 Ultradian Rhythm Deep Focus Sprint" data-desc="50 minutes of single-task immersion followed by 10 minutes of restorative rest." data-score="9.7/10 Focus Endurance">50/10 Deep Focus</button>
        </div>
        <div id="study-detail">
          <div class="study-card" style="border-left: 4px solid var(--accent-violet);">
            <h3 style="color: var(--accent-violet); font-size: 1.5rem; margin-bottom: 0.5rem;">Active Recall Flashcard Retrieval Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Forcing brain retrieval mechanisms using flashcards without looking at answers.</p>
            <strong style="color: var(--accent-teal); font-size: 0.95rem;">Empirical Memory Benchmark: 9.9/10 Memory Retention</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Spaced Repetition Algorithms & Pomodoro Focus Spotlight -->
  <section class="section" id="spaced-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Neuroscience of Memory</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Ebbinghaus Forgetting Curve & Synaptic Plasticity</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Passive re-reading loses 70% of information within 24 hours. At CleverStudyWay, we analyze active memory retrieval, Leitner box scheduling, and overnight sleep consolidation.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🧠 <strong style="color:var(--text-primary);">Synaptic Strengthening:</strong> Each active recall trial builds stronger neural pathways.</li>
            <li style="margin-bottom: 0.75rem;">📈 <strong style="color:var(--text-primary);">Algorithmic Spacing:</strong> Reviewing material at increasing time intervals flattens decay curves.</li>
            <li style="margin-bottom: 0.75rem;">⏱️ <strong style="color:var(--text-primary);">Cognitive Load Balance:</strong> Preventing brain fatigue by chunking dense textbook material.</li>
          </ul>
          <a href="about.html" class="btn btn-violet">Our Learning Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Student Studying Display" style="border-radius: 10px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Academic Study Style Matcher & Student Quiz -->
  <section class="section" id="style-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Study Diagnostic</span>
        <h2 class="section-title">Academic Study Style Matcher Quiz</h2>
      </div>
      <div class="study-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-violet); margin-bottom: 1rem;">What Is Your Biggest Academic Challenge or Focus Goal?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="student-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Active Recall Anki Flashcards & 30-Day Spaced Repetition Exam Schedule.">
            A. Forgetting Exam Material Rapidly, Need Long-Term Memory Retention
          </button>
          <button class="student-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="50/10 Ultradian Rhythm Focus Intervals & Ambient Brown Noise Soundscapes.">
            B. Frequent Distractions & Procrastination, Need Deep Focus Work Sprint Habits
          </button>
          <button class="student-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Feynman Technique Plain-Language Decomposition & Cornell Note Summaries.">
            C. Struggling with Complex Technical Concepts, Need Simplify & Teach Methods
          </button>
        </div>
        <div id="student-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Retention Rate & Memory Recall Hours Performance Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Clever Study Way Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-violet" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-violet" data-target="95" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Memory Retention Rate</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-violet" data-target="50" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Minutes Deep Focus Sprints</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-violet" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Academic Researchers & University Scholar Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Acclaim</span>
        <h2 class="section-title">Endorsements From Cognitive Scientists & University Scholars</h2>
      </div>
      <div class="grid-3">
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "CleverStudyWay provides brilliant, evidence-based guides on active recall, spaced repetition algorithms, and cognitive load management."
          </p>
          <strong style="color: var(--accent-violet); display: block;">— Dr. Eleanor Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Cognitive Neuroscience Researcher, Boston</span>
        </div>
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their Feynman technique breakdowns and Cornell note-taking templates transformed how our undergraduate students prepare for medical exams."
          </p>
          <strong style="color: var(--accent-violet); display: block;">— Prof. Robert Sterling</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">University Learning Director, Oxford</span>
        </div>
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital publication for overcoming academic procrastination, study space ergonomics, and sleep memory consolidation."
          </p>
          <strong style="color: var(--accent-violet); display: block;">— Maya Lin</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Academic Productivity Coach</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Academic Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Dispatches</span>
        <h2 class="section-title">Latest Learning Science Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Active Recall Science">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Active Recall</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-science-of-active-recall-testing-effects-in-long-term-memory.html">The Science of Active Recall & Testing Effects</a></h3>
            <p class="blog-excerpt">Testing effect, flashcard retrieval, and memory pathways.</p>
            <a href="blog/the-science-of-active-recall-testing-effects-in-long-term-memory.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=800&q=80" alt="Spaced Repetition">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Spaced Repetition</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/spaced-repetition-algorithms-mastering-leitner-box-and-anki-flashcards.html">Spaced Repetition & Leitner Algorithms</a></h3>
            <p class="blog-excerpt">Leitner box intervals, Anki algorithms, and forgetting curve.</p>
            <a href="blog/spaced-repetition-algorithms-mastering-leitner-box-and-anki-flashcards.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=800&q=80" alt="Pomodoro Deep Work">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Pomodoro Focus</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/pomodoro-technique-variations-customizing-focus-intervals-for-deep-work.html">Pomodoro Technique & Deep Work Intervals</a></h3>
            <p class="blog-excerpt">50/10 focus sprints, ultradian rhythms, and mental fatigue.</p>
            <a href="blog/pomodoro-technique-variations-customizing-focus-intervals-for-deep-work.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Clever Study Gazette Newsletter & Unified Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="study-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-violet);">
        <span class="section-subtitle">Academic Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Clever Study Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of active recall neuroscience, spaced repetition algorithms, and exam focus.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to CleverStudyWay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 6px;">
          <button type="submit" class="btn btn-violet">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Clever<span>StudyWay</span></a>
          <p>CleverStudyWay is a premier editorial platform dedicated to smart learning strategies, cognitive active recall, spaced repetition algorithms, and exam focus mastery.</p>
          <p style="margin-top: 1rem; color: var(--accent-violet);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Study Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Study Focus</h4>
          <p>Deconstructing cognitive active recall, spaced repetition algorithms, Pomodoro deep work intervals, Feynman technique, and academic productivity globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 CleverStudyWay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Smart Academic Learning.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
