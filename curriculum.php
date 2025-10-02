<?php // curriculum.php ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Curriculum — Rehan School</title>
  <style>
    :root{--accent:#0b63c6;--muted:#586071;--bg:#f6fbff}
    *{box-sizing:border-box;margin:0;padding:0;font-family:Inter, Arial;}
    body{background:var(--bg);color:#0b1720;min-height:100vh}
    .wrap{max-width:1000px;margin:0 auto;padding:24px}
    header{display:flex;align-items:center;justify-content:space-between;padding:12px 0}
    nav a{margin-left:12px;color:var(--muted)}
    h2{font-size:22px;color:#072033;margin-bottom:8px}
    .intro{color:var(--muted);margin-bottom:18px}
 
    .module-list{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
    .module{background:#fff;padding:18px;border-radius:12px;box-shadow:0 8px 26px rgba(8,18,34,0.04);border:1px solid #eef6ff}
    .module h3{margin-bottom:8px}
    .module p{color:var(--muted);font-size:14px;margin-bottom:8px}
    .lesson{padding:8px 10px;border-radius:8px;background:#f8fbff;margin-bottom:8px}
 
    footer{margin-top:28px;color:var(--muted);padding:16px 0;border-top:1px solid rgba(8,18,34,0.04)}
    @media (max-width:820px){.module-list{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <div>
        <strong>Rehan School</strong>
      </div>
      <nav>
        <a href="#" onclick="go('index.php')">Home</a>
        <a href="#" onclick="go('facilitators.php')">Facilitators</a>
        <a href="#" onclick="go('contact.php')">Contact</a>
      </nav>
    </header>
 
    <main>
      <h2>Program Curriculum — Overview</h2>
      <div class="intro">A six-module program focusing on practical digital skills, AI tool literacy, content creation, and online teaching methodology. Each module mixes instruction, practice, and project delivery.</div>
 
      <div class="module-list">
        <div class="module">
          <h3>Module 1 — Digital Foundations</h3>
          <p>Internet safety, productivity tools, research methods, and practical browser workflows.</p>
          <div class="lesson">Lesson 1: Digital safety & privacy</div>
          <div class="lesson">Lesson 2: Productivity (Notion, Google Workspace)</div>
          <div class="lesson">Lesson 3: Research & sourcing</div>
        </div>
 
        <div class="module">
          <h3>Module 2 — AI Tools & Workflows</h3>
          <p>Introduction to AI assistants, prompt engineering, automations and real-case usage.</p>
          <div class="lesson">Lesson 1: Chat-based assistants</div>
          <div class="lesson">Lesson 2: Image generation basics</div>
          <div class="lesson">Lesson 3: Automation recipes</div>
        </div>
 
        <div class="module">
          <h3>Module 3 — Content & Course Creation</h3>
          <p>Create lesson plans, short-form videos, slide decks and publishable courses.</p>
          <div class="lesson">Lesson 1: Structuring a course</div>
          <div class="lesson">Lesson 2: Video scripting & editing basics</div>
          <div class="lesson">Lesson 3: Hosting & publishing</div>
        </div>
 
        <div class="module">
          <h3>Module 4 — Teaching & Facilitation</h3>
          <p>Student engagement, assessment design, feedback loops and synchronous teaching tips.</p>
          <div class="lesson">Lesson 1: Lesson planning</div>
          <div class="lesson">Lesson 2: Live session best practices</div>
          <div class="lesson">Lesson 3: Assessment & feedback</div>
        </div>
 
        <div class="module">
          <h3>Module 5 — Freelancing & Earning Online</h3>
          <p>Freelance profiles, pitching, client workflows and scaling income streams.</p>
          <div class="lesson">Lesson 1: Portfolio building</div>
          <div class="lesson">Lesson 2: Client communication</div>
          <div class="lesson">Lesson 3: Rates & scaling</div>
        </div>
 
        <div class="module">
          <h3>Module 6 — Capstone Project</h3>
          <p>Students launch a micro-course, portfolio piece or paid product with mentor reviews.</p>
        </div>
      </div>
    </main>
 
    <footer>
      <div>Want to enroll? <a href="#" onclick="go('contact.php')">Contact us</a></div>
      <div style="margin-top:6px;color:var(--muted)">Call/WhatsApp: +44 7418 359852</div>
    </footer>
  </div>
 
  <script>
    function go(path){ window.location.href = path; }
  </script>
</body>
</html>
 
