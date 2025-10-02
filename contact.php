<?php // contact.php ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Contact — Rehan School</title>
  <style>
    :root{--accent:#0b63c6;--muted:#586071;--bg:#f7fbff}
    *{box-sizing:border-box;margin:0;padding:0;font-family:Inter, Arial}
    body{background:var(--bg);color:#081726}
    .wrap{max-width:860px;margin:0 auto;padding:20px}
    header{display:flex;justify-content:space-between;align-items:center;padding-bottom:8px}
    form{background:#fff;padding:18px;border-radius:12px;box-shadow:0 12px 36px rgba(8,18,34,0.05);border:1px solid #eef6ff}
    label{display:block;margin-bottom:6px;font-weight:700}
    input[type="text"], input[type="email"], textarea{width:100%;padding:12px;border-radius:10px;border:1px solid #e6eefc;margin-bottom:12px}
    textarea{min-height:120px;resize:vertical}
    .row{display:flex;gap:12px}
    .col{flex:1}
    .submit{background:var(--accent);color:#fff;padding:12px 16px;border-radius:10px;border:none;font-weight:800;cursor:pointer}
    .contact-info{margin-top:16px;color:var(--muted)}
    footer{margin-top:18px;color:var(--muted)}
    @media (max-width:680px){.row{flex-direction:column}}
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <div><strong>Contact Us</strong></div>
      <div><a href="#" onclick="go('index.php')">Home</a></div>
    </header>
 
    <p style="color:var(--muted);margin-bottom:12px">Have questions or want to enroll? Send us a message — we'll reply via email or WhatsApp.</p>
 
    <!-- NOTE: form is client-side — adjust action to your backend or email handler as needed -->
    <form id="contactForm" onsubmit="submitForm(event)">
      <div class="row">
        <div class="col">
          <label for="name">Full name</label>
          <input id="name" name="name" type="text" required placeholder="e.g. Abdul Rehman">
        </div>
        <div class="col">
          <label for="phone">Phone / WhatsApp</label>
          <input id="phone" name="phone" type="text" placeholder="+44 7418 359852">
        </div>
      </div>
 
      <label for="email">Email</label>
      <input id="email" name="email" type="email" required placeholder="you@example.com">
 
      <label for="message">Message / Inquiry</label>
      <textarea id="message" name="message" placeholder="Tell us what you're interested in..."></textarea>
 
      <div style="display:flex;align-items:center;gap:12px;margin-top:8px">
        <button type="submit" class="submit">Send Message</button>
        <div id="status" style="color:var(--muted)"></div>
      </div>
    </form>
 
    <div class="contact-info">
      <p><strong>Address:</strong> Rehan School, Online Campus</p>
      <p><strong>Call / WhatsApp:</strong> +44 7418 359852</p>
      <p><strong>Email:</strong> info@rehanschool.example</p>
    </div>
 
    <footer>By submitting you agree to be contacted about the program. We protect your privacy.</footer>
  </div>
 
  <script>
    function go(path){ window.location.href = path; }
 
    // Simple client-side form handler — replace with server endpoint when available
    function submitForm(e){
      e.preventDefault();
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      const phone = document.getElementById('phone').value.trim();
 
      // Basic validation
      if(!name || !email || !message){
        setStatus('Please fill required fields', true);
        return;
      }
 
      // Here we simulate success. Replace with AJAX/fetch POST to your backend.
      setStatus('Sending message...', false);
      setTimeout(()=>{
        setStatus('Message sent! We will contact you soon via email or WhatsApp.', false);
        document.getElementById('contactForm').reset();
      }, 900);
    }
 
    function setStatus(txt,isError){
      const s = document.getElementById('status');
      s.style.color = isError ? '#D23' : '#55607A';
      s.textContent = txt;
    }
  </script>
</body>
</html>
