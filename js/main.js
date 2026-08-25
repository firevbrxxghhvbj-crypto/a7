/* CleverStudyWay - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Study Strategy & Focus Technique Explorer
  const studyButtons = document.querySelectorAll('.study-btn');
  const studyDisplay = document.getElementById('study-detail');

  if (studyButtons.length > 0 && studyDisplay) {
    studyButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        studyButtons.forEach(b => b.classList.remove('active-study'));
        this.classList.add('active-study');
        const studyName = this.getAttribute('data-study');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        studyDisplay.innerHTML = `
          <div class="study-card" style="border-left: 4px solid var(--accent-violet); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-violet); font-size: 1.5rem; margin-bottom: 0.5rem;">${studyName} Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-teal); font-size: 0.95rem;">Empirical Memory Benchmark: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Academic Study Style Matcher & Student Quiz
  const studentQuizButtons = document.querySelectorAll('.student-quiz-btn');
  const studentQuizResult = document.getElementById('student-quiz-result');

  if (studentQuizButtons.length > 0 && studentQuizResult) {
    studentQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        studentQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        studentQuizResult.innerHTML = `
          <div class="study-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-violet);">
            <h4 style="color: var(--accent-violet); margin-bottom: 0.5rem;">Your Curated Academic Study Strategy</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
