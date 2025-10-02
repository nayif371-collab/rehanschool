<?php // facilitators.php ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Facilitators — Rehan School</title>
  <style>
    :root{--accent:#0b63c6;--muted:#566073;--bg:#f8fbff}
    *{box-sizing:border-box;margin:0;padding:0;font-family:Inter, Arial}
    body{background:var(--bg);color:#081726;min-height:100vh}
    .wrap{max-width:1000px;margin:0 auto;padding:20px}
    header{display:flex;justify-content:space-between;align-items:center;padding-bottom:8px}
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:18px}
    .card{background:#fff;border-radius:12px;padding:16px;box-shadow:0 10px 30px rgba(8,18,34,0.05);text-align:center}
    .avatar{width:86px;height:86px;border-radius:50%;margin:0 auto 10px;overflow:hidden}
    .name{font-weight:800;margin-bottom:4px}
    .role{color:var(--muted);font-size:13px;margin-bottom:8px}
    .social a{margin:0 6px;color:var(--muted);font-weight:700}
    footer{margin-top:20px;color:var(--muted)}
    @media (max-width:900px){.grid{grid-template-columns:repeat(2,1fr)}}
    @media (max-width:520px){.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <div><strong>Facilitators</strong></div>
      <div><a href="#" onclick="go('index.php')">Home</a></div>
    </header>
 
    <p style="color:var(--muted)">Meet the educators and mentors guiding students on their digital journeys.</p>
 
    <div class="grid">
      <div class="card">
        <div class="avatar"><img src="https://via.placeholder.com/200x200.png?text=AR" alt="Facilitator"></div>
        <div class="name">Rehan (Founder)</div>
        <div class="role">Founder • Lead Educator</div>
        <div class="bio" style="color:var(--muted);font-size:14px">Experienced educator and digital entrepreneur focused on empowering youth.</div>
        <div class="social" style="margin-top:10px"><a href="#">Twitter</a> • <a href="#">LinkedIn</a></div>
      </div>
 
      <div class="card">
        <div class="avatar"><img src="https://via.placeholder.com/200x200.png?text=SK" alt="Facilitator"></div>
        <div class="name">Sara K.</div>
        <div class="role">Content & Video Mentor</div>
        <div class="bio" style="color:var(--muted)">Video producer and curriculum designer for online courses.</div>
        <div class="social" style="margin-top:10px"><a href="#">Instagram</a> • <a href="#">LinkedIn</a></div>
      </div>
 
      <div class="card">
        <div class="avatar"><img src="https://via.placeholder.com/200x200.png?text=FM" alt="Facilitator"></div>
        <div class="name">Faisal M.</div>
        <div class="role">AI & Tools Mentor</div>
        <div class="bio" style="color:var(--muted)">Automation specialist helping students build efficient workflows.</div>
        <div class="social" style="margin-top:10px"><a href="#">Twitter</a> • <a href="#">LinkedIn</a></div>
      </div>
    </div>
 
    <footer>Want to join the team or request a workshop? <a href="#" onclick="go('contact.php')">Contact us</a></footer>
  </div>
 
  <script>function go(path){window.location.href=path;}</script>
</body>
</html>
 
