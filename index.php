<?php // index.php - Home ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rehan.Education - Digital Mastery for a Connected World</title>
  <style>
    /* ---------- GLOBAL ---------- */
    :root{
      --accent:#0b63c6;
      --accent-2:#0f84ff;
      --muted:#586071;
      --bg:#f4f8ff;
      --card:#ffffff;
      --glass: rgba(255,255,255,0.6);
    }
    *{box-sizing:border-box;margin:0;padding:0;font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial;}
    body{background:linear-gradient(180deg,var(--bg),#f0f6ff);color:#0b1720;-webkit-font-smoothing:antialiased;min-height:100vh;}
    a{color:inherit;text-decoration:none}
    img{max-width:100%;display:block}
    .wrap{max-width:1150px;margin:0 auto;padding:28px;}
 
    /* ---------- HEADER ---------- */
    header{display:flex;align-items:center;justify-content:space-between;padding:18px 0}
    .brand{display:flex;gap:12px;align-items:center}
    .brand .logo{width:64px;height:64px;border-radius:10px;overflow:hidden;box-shadow:0 6px 18px rgba(8,18,34,0.08)}
    .brand h1{font-size:18px;color:#08223a}
    nav a{margin-left:18px;color:var(--muted);font-weight:600}
    .nav-cta{padding:10px 14px;border-radius:10px;background:var(--accent);color:#fff;font-weight:700;margin-left:12px}
 
    /* ---------- HERO ---------- */
    .hero{display:grid;grid-template-columns:1fr 420px;gap:32px;align-items:center;padding:38px 0}
    .hero h2{font-size:34px;line-height:1.02;color:#062235}
    .hero .tag{display:inline-block;margin-top:8px;color:var(--accent);font-weight:800}
    .hero p.lead{margin-top:14px;color:var(--muted);font-size:15px}
    .hero .actions{margin-top:22px;display:flex;gap:12px;flex-wrap:wrap}
    .btn{padding:12px 16px;border-radius:12px;font-weight:800}
    .btn-primary{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff}
    .btn-outline{background:transparent;border:2px solid rgba(11,99,198,0.12);color:var(--accent);font-weight:700}
 
    .hero-card{background:linear-gradient(180deg,#fff, #f8fbff);border-radius:14px;padding:18px;box-shadow:0 10px 30px rgba(8,18,34,0.06);border:1px solid rgba(8,18,34,0.03)}
    .hero-card h4{font-size:16px;margin-bottom:6px}
    .hero-card p{color:var(--muted);font-size:14px}
 
    /* ---------- FEATURES ---------- */
    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:34px}
    .feature{background:var(--card);padding:18px;border-radius:12px;box-shadow:0 8px 28px rgba(8,18,34,0.04);border:1px solid rgba(8,18,34,0.03)}
    .feature h4{margin-bottom:8px}
    .feature p{color:var(--muted);font-size:14px}
 
    /* ---------- ABOUT / STATS ---------- */
    .about{display:flex;gap:28px;align-items:center;margin:56px 0}
    .about .photo{flex:0 0 320px;border-radius:12px;overflow:hidden;box-shadow:0 12px 36px rgba(8,18,34,0.06)}
    .about .text h3{font-size:22px;color:#062235;margin-bottom:8px}
    .stats{display:flex;gap:12px;margin-top:14px}
    .stat{background:#fff;padding:10px 14px;border-radius:10px;box-shadow:0 6px 18px rgba(8,18,34,0.04);text-align:center}
    .stat .num{font-weight:800;color:var(--accent);font-size:18px}
    .stat .lbl{color:var(--muted);font-size:13px}
 
    /* ---------- CURRICULUM PREVIEW ---------- */
    .curriculum-preview{display:grid;grid-template-columns:1fr 320px;gap:20px;align-items:center;margin:36px 0;padding:20px;border-radius:12px;background:linear-gradient(180deg,#ffffff,#f7fbff);box-shadow:0 10px 40px rgba(8,18,34,0.04)}
    .module{background:#fff;padding:14px;border-radius:10px;border:1px solid #eef6ff;box-shadow:0 6px 20px rgba(8,18,34,0.03);margin-bottom:12px}
    .module h5{font-size:16px;margin-bottom:6px}
 
    /* ---------- TESTIMONIALS ---------- */
    .testimonials{margin:42px 0;display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .testimonial{background:linear-gradient(180deg,#ffffff,#fbfeff);padding:20px;border-radius:12px;box-shadow:0 8px 28px rgba(8,18,34,0.04)}
    .testimonial p{color:var(--muted);font-size:14px;margin-top:8px}
 
    /* ---------- FOOTER ---------- */
    footer{margin-top:40px;padding:28px 0;border-top:1px solid rgba(8,18,34,0.04);display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:14px}
 
    /* ---------- RESPONSIVE ---------- */
    @media (max-width:980px){
      .hero{grid-template-columns:1fr; padding-bottom:10px}
      .curriculum-preview{grid-template-columns:1fr}
      .features{grid-template-columns:repeat(2,1fr)}
      .testimonials{grid-template-columns:1fr}
      .about{flex-direction:column;align-items:flex-start}
      nav{display:none}
    }
    @media (max-width:520px){
      .features{grid-template-columns:1fr}
      .wrap{padding:16px}
      .brand h1{font-size:15px}
    }
  </style>
</head>
<body>
  <div class="wrap">
    <!-- HEADER -->
    <header>
      <div class="brand">
        <div class="logo">
          <!-- Replace with your logo image -->
          <img src="https://via.placeholder.com/160x160.png?text=RE" alt="Rehan Education Logo">
        </div>
        <div>
          <h1>Rehan School</h1>
          <div style="color:var(--muted);font-size:13px">Where Leaders Are Made, Not Born</div>
        </div>
      </div>
 
      <nav>
        <a href="#" onclick="go('index.php')">Home</a>
        <a href="#" onclick="go('curriculum.php')">Curriculum</a>
        <a href="#" onclick="go('facilitators.php')">Facilitators</a>
        <a href="#" onclick="go('contact.php')">Contact</a>
        <a class="nav-cta" href="#" onclick="go('contact.php')">Enroll Now</a>
      </nav>
    </header>
 
    <!-- HERO -->
    <section class="hero">
      <div>
        <div class="tag">Digital Mastery for a Connected World</div>
        <h2>Empowering teens with AI, digital skills and online teaching proficiency.</h2>
        <p class="lead">A practical program to help students build sustainable online incomes, teach others, and create impact. Learn AI tools, create content, and build real projects.</p>
        <div class="actions">
          <a href="#" class="btn btn-primary" onclick="go('curriculum.php')">View Curriculum</a>
          <a href="#" class="btn btn-outline" onclick="go('facilitators.php')">Meet Facilitators</a>
        </div>
 
        <div class="features" style="margin-top:26px;">
          <div class="feature">
            <h4>AI-Enabled Education</h4>
            <p>Hands-on use of AI tools so learners can automate, create and teach.</p>
          </div>
          <div class="feature">
            <h4>Digital Skills & Monetization</h4>
            <p>From content creation to freelancing and online courses—learn to earn.</p>
          </div>
          <div class="feature">
            <h4>Teaching Methodologies</h4>
            <p>How to plan, deliver and monetize online sessions with real practice.</p>
          </div>
        </div>
      </div>
 
      <aside class="hero-card">
        <h4>Why this program?</h4>
        <p>Practical projects, mentorship, and a roadmap to build income streams using modern digital tools and AI.</p>
        <div style="margin-top:12px" class="stat">
          <div class="stat" style="display:flex;flex-direction:column;align-items:flex-start;">
            <div class="pill" style="padding:8px 12px;border-radius:10px;background:#eef6ff;color:var(--accent);font-weight:800;margin-bottom:8px">Live Projects</div>
            <div style="color:var(--muted);font-size:13px">Collaborate on real outputs</div>
          </div>
        </div>
      </aside>
    </section>
 
    <!-- ABOUT / STATS -->
    <section class="about">
      <div class="photo">
        <img src="https://via.placeholder.com/720x480.png?text=Rehan+School+Photo" alt="School Photo">
      </div>
      <div class="text">
        <h3>About Rehan School</h3>
        <p style="color:var(--muted);margin-top:8px">We believe teens can learn career-ready digital skills that enable them to teach, freelance and build online businesses. Our curriculum blends AI literacy, content creation, and teaching practice.</p>
        <div class="stats">
          <div class="stat">
            <div class="num">25+</div>
            <div class="lbl">Years of Experience</div>
          </div>
          <div class="stat">
            <div class="num">300+</div>
            <div class="lbl">Students & Alumni</div>
          </div>
          <div class="stat">
            <div class="num">6</div>
            <div class="lbl">Core Modules</div>
          </div>
        </div>
      </div>
    </section>
 
    <!-- CURRICULUM PREVIEW -->
    <section class="curriculum-preview">
      <div>
        <h4 style="margin-bottom:10px">Curriculum Snapshot</h4>
        <div class="module">
          <h5>Module 1 — Digital Foundations</h5>
          <p style="color:var(--muted)">Digital literacy, safety, research methods, productivity tools.</p>
        </div>
        <div class="module">
          <h5>Module 2 — AI Tools & Workflows</h5>
          <p style="color:var(--muted)">Use chat, image and automation tools to speed work and creativity.</p>
        </div>
        <div class="module">
          <h5>Module 3 — Content & Course Creation</h5>
          <p style="color:var(--muted)">Create lessons, short-form video, and publishable content.</p>
        </div>
        <div style="margin-top:12px">
          <a class="btn btn-primary" href="#" onclick="go('curriculum.php')">Full Curriculum</a>
        </div>
      </div>
 
      <div style="padding:10px;">
        <img src="https://via.placeholder.com/320x220.png?text=Classroom+Preview" alt="Classroom Preview" style="border-radius:10px;box-shadow:0 8px 28px rgba(8,18,34,0.06)">
        <p style="color:var(--muted);margin-top:12px">Project-based learning with mentor feedback and public outputs.</p>
      </div>
    </section>
 
    <!-- TESTIMONIALS -->
    <section>
      <h4 style="margin-bottom:12px">What Our Visitors Say</h4>
      <div class="testimonials">
        <div class="testimonial">
          <strong>Ali R.</strong>
          <p>"The AI lessons helped me build content faster and start freelancing."</p>
        </div>
        <div class="testimonial">
          <strong>Sara K.</strong>
          <p>"Practical and to the point — I launched my first online class within weeks."</p>
        </div>
        <div class="testimonial">
          <strong>Faisal M.</strong>
          <p>"Mentors were supportive and the projects were real-world relevant."</p>
        </div>
      </div>
    </section>
 
    <!-- FOOTER -->
    <footer>
      <div>© <?php echo date('Y'); ?> Rehan School — Digital Mastery for a Connected World</div>
      <div style="display:flex;gap:12px;align-items:center">
        <div style="color:var(--muted)">Call / WhatsApp: +44 7418 359852</div>
        <div style="color:var(--muted)">Follow: Facebook • Instagram • X</div>
      </div>
    </footer>
  </div>
 
  <script>
    // JS-based navigation (file redirection via JS)
    function go(path){
      // simple client-side redirect
      window.location.href = path;
    }
  </script>
</body>
</html>
