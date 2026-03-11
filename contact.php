<?php
// CSRF Token generation (session-based)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- ====================================================
     PAGE HERO — Parallax + Particle Background
===================================================== -->
<section class="page-hero parallax-bg-section parallax-js" id="contact-hero"
  style="background-image: url('assets/images/backgrounds/bg-contact.jpg');" data-parallax-speed="0.3">
  <div class="parallax-overlay" aria-hidden="true"></div>
  <div class="container section-content">
    <nav class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span class="current">Contact</span></nav>
    <span class="label-badge" data-aos="fade-down">Get In Touch</span>
    <h1 class="display-2 mb-3" data-aos="fade-up">Let's Create Something<br><span class="text-gradient">Amazing Together</span></h1>
    <p class="section-subtitle" style="margin:0 auto;" data-aos="fade-up" data-aos-delay="100">Ready to transform your digital presence? Reach out and let's start building your next success story.</p>
  </div>
</section>

<!-- ====================================================
     CONTACT MAIN — Floating Shapes
===================================================== -->
<section class="section shapes-bg-section" id="contact-main" style="background: var(--primary-black);">
  <div class="shapes-container js-floating-shapes" aria-hidden="true">
    <div class="abs-shape s1" style="opacity:0.04;"></div>
    <div class="abs-shape s3" style="opacity:0.04;"></div>
  </div>
  <div class="container section-content">
    <div class="contact-grid">

      <!-- Contact Info -->
      <div data-aos="fade-right">
        <span class="label-badge">Contact Details</span>
        <h2 class="section-title mb-3">Talk to Our Team</h2>
        <p style="color:var(--text-muted); line-height:1.8; margin-bottom:2.5rem;">Whether you have a quick question or a complex project brief, we're here to help. We typically respond within 4 business hours.</p>

        <div class="contact-detail">
          <div class="contact-icon" aria-hidden="true">📧</div>
          <div><h4>Email Us</h4><p>cincreatives@hotmail.com</p><p style="font-size:0.82rem;color:var(--text-muted);">For general inquiries & project briefs</p></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon" aria-hidden="true">📞</div>
          <div><h4>Call Us</h4><p>+254798409907</p><p style="font-size:0.82rem;color:var(--text-muted);">Mon–Fri, 9am–6pm EST</p></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon" aria-hidden="true">💬</div>
          <div><h4>Live Chat</h4><p>Available on our website</p><p style="font-size:0.82rem;color:var(--text-muted);">Real-time support, 7 days a week</p></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon" aria-hidden="true">📍</div>
          <div><h4>Location</h4><p>Nairobi, KE · Remote Worldwide</p><p style="font-size:0.82rem;color:var(--text-muted);">We work with clients globally</p></div>
        </div>

        <div style="margin-top: 2.5rem; padding: 1.5rem; border-radius:var(--radius); background:rgba(93,214,44,0.06); border:1px solid rgba(93,214,44,0.15);">
          <div class="status-dot" style="margin-bottom:0.75rem; font-size:0.85rem; font-weight:600; color:var(--soft-white);">Currently accepting new projects</div>
          <p style="font-size:0.82rem; color:var(--text-muted);">Our team has availability for Q1 2026 projects. Secure your spot by reaching out today.</p>
        </div>

        <div style="margin-top:2rem;">
          <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:0.75rem; font-weight:600;">FOLLOW US</p>
          <div class="footer-socials">
            <a href="#" class="social-btn" aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="#" class="social-btn" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="#" class="social-btn" aria-label="LinkedIn">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
            <a href="#" class="social-btn" aria-label="Twitter">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div data-aos="fade-left">
        <div class="glass-card" style="padding:2.5rem;">
          <h3 style="font-size:1.3rem; font-weight:700; margin-bottom:0.5rem;">Send Us a Message</h3>
          <p style="font-size:0.88rem; color:var(--text-muted); margin-bottom:2rem;">Fill in the form below and we'll get back to you within Instantly</p>

          <?php
          // Handle form submission
          $submission_success = false;
          $submission_error = '';

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // CSRF validation
            if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
              $submission_error = 'Security validation failed. Please refresh and try again.';
            } else {
              // Sanitize inputs
              $name    = htmlspecialchars(strip_tags(trim($_POST['name'] ?? '')));
              $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
              $phone   = htmlspecialchars(strip_tags(trim($_POST['phone'] ?? '')));
              $service = htmlspecialchars(strip_tags(trim($_POST['service'] ?? '')));
              $budget  = htmlspecialchars(strip_tags(trim($_POST['budget'] ?? '')));
              $message = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')));

              // Validate
              if (strlen($name) < 2) {
                $submission_error = 'Please enter a valid name.';
              } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $submission_error = 'Please enter a valid email address.';
              } elseif (strlen($message) < 10) {
                $submission_error = 'Message must be at least 10 characters.';
              } else {
                // Honeypot check
                if (!empty($_POST['website_url'])) {
                  $submission_success = true; // Silently discard bot submissions
                } else {
                  // Send email (configure your mail settings in production)
                  $to = 'hello@cincreatives.com';
                  $subject = "New Contact: $name — $service";
                  $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nBudget: $budget\n\nMessage:\n$message";
                  $headers = "From: noreply@cincreatives.com\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

                  // mail($to, $subject, $body, $headers); // Uncomment in production
                  $submission_success = true;

                  // Regenerate CSRF token after successful submission
                  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                  $csrf_token = $_SESSION['csrf_token'];
                }
              }
            }
          }
          ?>

          <?php if($submission_success): ?>
          <div style="padding:2rem; text-align:center; background:rgba(93,214,44,0.08); border:1px solid rgba(93,214,44,0.25); border-radius:var(--radius-sm); margin-bottom:1.5rem;">
            <div style="font-size:3rem; margin-bottom:0.75rem;">✅</div>
            <h4 style="margin-bottom:0.5rem; color:var(--accent-green);">Message Sent!</h4>
            <p style="font-size:0.9rem; color:var(--text-muted);">Thank you, <?= htmlspecialchars($name ?? '') ?>! We'll respond within 4 business hours.</p>
          </div>
          <?php endif; ?>

          <?php if($submission_error): ?>
          <div style="padding:1rem 1.25rem; background:rgba(255,80,80,0.08); border:1px solid rgba(255,80,80,0.2); border-radius:var(--radius-sm); margin-bottom:1.5rem; font-size:0.88rem; color:#ff8080;">
            ⚠️ <?= htmlspecialchars($submission_error) ?>
          </div>
          <?php endif; ?>

          <form id="contact-form" method="POST" action="contact.php" class="contact-form" novalidate>
            <!-- CSRF Token -->
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
            <!-- Honeypot -->
            <div style="display:none;" aria-hidden="true">
              <label for="website_url">Leave empty</label>
              <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="cf-name">Full Name *</label>
                <input type="text" id="cf-name" name="name" placeholder="John Smith" required autocomplete="name" maxlength="100" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="cf-email">Email Address *</label>
                <input type="email" id="cf-email" name="email" placeholder="john@company.com" required autocomplete="email" maxlength="255" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="cf-phone">Phone Number</label>
                <input type="tel" id="cf-phone" name="phone" placeholder="+1 (555) 000-0000" autocomplete="tel" maxlength="20" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="cf-service">Service Needed</label>
                <select id="cf-service" name="service">
                  <option value="">Select a service</option>
                  <option value="web-dev" <?= (($_POST['service'] ?? '') === 'web-dev' || ($_GET['service'] ?? '') === 'web-dev') ? 'selected' : '' ?>>Web Development</option>
                  <option value="redesign" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'redesign') ? 'selected' : '' ?>>Website Redesign</option>
                  <option value="ecommerce" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'ecommerce') ? 'selected' : '' ?>>E-commerce Development</option>
                  <option value="software" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'software') ? 'selected' : '' ?>>Software Development</option>
                  <option value="ai" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'ai') ? 'selected' : '' ?>>AI Automation</option>
                  <option value="design" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'design') ? 'selected' : '' ?>>Graphic Design</option>
                  <option value="social" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'social') ? 'selected' : '' ?>>Social Media Management</option>
                  <option value="advertising" <?= (($_POST['service'] ?? $_GET['service'] ?? '') === 'advertising') ? 'selected' : '' ?>>Online Advertising</option>
                  <option value="other">Other / Multiple Services</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="cf-message">Tell us about your project *</label>
              <textarea id="cf-message" name="message" placeholder="Describe your project goals, timeline, and any specific requirements..." required maxlength="5000"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
            </div>
            <p class="form-note">* Required fields. We respect your privacy. Your data will never be shared with third parties.</p>
            <button type="submit" class="btn btn-primary btn-lg w-full" style="justify-content:center;" id="submit-btn">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:20px;height:20px;"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              Send Message — It's Free
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ====================================================
     BOOKING / CALENDLY CTA — Animated Gradient
===================================================== -->
<section class="section motion-gradient" id="booking">
  <div class="container section-content">
    <div class="grid grid-2 gap-4" style="align-items:center;">
      <div data-aos="fade-right">
        <span class="label-badge">Schedule a Call</span>
        <h2 class="section-title mb-3">Prefer to Talk?<br>Book a Free Strategy Session</h2>
        <p style="color:var(--text-muted); line-height:1.8; margin-bottom:2rem;">Skip the back-and-forth. Book a 30-minute strategy session with one of our senior consultants and get expert advice on your project — completely free and with no obligation.</p>
        <ul style="display:flex;flex-direction:column;gap:0.75rem;margin-bottom:2rem;">
          <?php $bookingBenefits = ['Expert consultation tailored to your business','Full project scope & timeline estimate','Honest recommendations — even if that\'s doing nothing','No hard sell — ever'];
          foreach($bookingBenefits as $b): ?>
          <li style="display:flex;gap:10px;align-items:center;font-size:0.9rem;"><span style="color:var(--accent-green);">✓</span><?= htmlspecialchars($b) ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="#" class="btn btn-primary btn-lg" onclick="showToast('Booking system coming soon! Email us at hello@cincreatives.com', 'success'); return false;">
          📅 Schedule Free Call
        </a>
      </div>
      <div data-aos="fade-left">
        <div class="glass-card" style="padding:2.5rem;">
          <h4 style="margin-bottom:1.5rem; font-size:1.1rem;">What Our Clients Say About the Process</h4>
          <?php $quickTestimonials = [
            ['"The initial call was incredibly valuable. They understood our vision immediately."','— Rachel T., TechStartup Founder'],
            ['"No sales pressure, just honest expert advice. Refreshing!"','— Marcus L., E-commerce Director'],
          ];
          foreach($quickTestimonials as $qt): ?>
          <div style="padding:1.25rem; background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:12px; margin-bottom:1rem;">
            <p style="font-size:0.88rem; color:var(--text-light); line-height:1.7; margin-bottom:0.75rem;"><?= htmlspecialchars($qt[0]) ?></p>
            <p style="font-size:0.8rem; color:var(--accent-green); font-weight:600;"><?= htmlspecialchars($qt[1]) ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Placeholder -->
<section style="background: var(--secondary-black); padding: 0; line-height:0;">
  <div style="height:280px; background:linear-gradient(135deg, #202020, #1a3a0a); display:flex; align-items:center; justify-content:center; position:relative; overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle, rgba(93,214,44,0.08) 1px, transparent 1px);background-size:30px 30px;"></div>
    <div style="text-align:center; position:relative; z-index:1;">
      <div style="font-size:3rem; margin-bottom:0.75rem;">📍</div>
      <div style="font-size:1.1rem; font-weight:700; color:var(--soft-white);">CIN CREATIVES</div>
      <div style="font-size:0.88rem; color:var(--text-muted);">New York, NY · Remote Worldwide</div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>