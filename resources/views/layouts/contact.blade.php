@extends('layouts.app')
@section('content')
<!-- ======================== HERO ======================== -->
<section class="page-hero">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </nav>
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <div class="label-pill light mb-3">📞 Get In Touch</div>
        <h1 class="section-title light" style="font-size:clamp(2.2rem,4.5vw,3.5rem);">Contact Our Bookkeeping <span class="gold">Experts</span></h1>
        <div class="divider-gold mt-3"></div>
        <p class="section-subtitle light" style="max-width:480px;">Get professional bookkeeping, payroll, and accounting support for your business. We respond to all enquiries within 2 business hours.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#consultation-form" class="btn-gold btn">Book Free Consultation</a>
          <a href="tel:02079460321" class="btn-outline-gold btn"><i class="bi bi-telephone me-2"></i>020 7946 0321</a>
        </div>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <div class="hero-badge"><i class="bi bi-clock"></i> 2-Hour Response</div>
          <div class="hero-badge"><i class="bi bi-patch-check-fill"></i> ISO 9001 Certified</div>
          <div class="hero-badge"><i class="bi bi-lock-fill"></i> GDPR Compliant</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-illus">
          <div class="illus-icon-grid">
            <div class="illus-box"><i class="bi bi-telephone-fill"></i><span>Direct Line</span></div>
            <div class="illus-box"><i class="bi bi-envelope-fill"></i><span>Email Support</span></div>
            <div class="illus-box"><i class="bi bi-calendar-check-fill"></i><span>Consultation</span></div>
            <div class="illus-box"><i class="bi bi-geo-alt-fill"></i><span>London Office</span></div>
          </div>
          <div class="illus-bottom">
            <div>
              <div class="illus-bottom-text">Avg. Response Time</div>
              <div style="font-size:.75rem;color:rgba(13,27,42,.6);">Across all channels</div>
            </div>
            <div class="illus-bottom-num">2hrs</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================== CONTACT INFO CARDS ======================== -->
<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Reach Us</div>
      <h2 class="section-title">How to Get in Touch</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Multiple ways to connect with our expert team — choose whichever works best for you.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3 fade-up delay-1">
        <div class="contact-card">
          <div class="contact-card-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <h5>Office Address</h5>
          <p>245 Whitechapel Road, 2nd Floor<br/>London, England<br/>United Kingdom</p>
          <a href="https://maps.google.com" target="_blank" class="mt-2" style="color:var(--gold);font-size:.83rem;font-weight:600;">Get Directions →</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-2">
        <div class="contact-card">
          <div class="contact-card-icon"><i class="bi bi-telephone-fill"></i></div>
          <h5>Phone Numbers</h5>
          <p>Main: <a href="tel:02079460321">020 7946 0321</a><br/>Consultation: <a href="tel:02079460322">020 7946 0322</a><br/>Free: <a href="tel:08000556677">0800 055 6677</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-3">
        <div class="contact-card">
          <div class="contact-card-icon"><i class="bi bi-envelope-fill"></i></div>
          <h5>Email Addresses</h5>
          <p>Support: <a href="mailto:hello@cainandco.co.uk">hello@cainandco.co.uk</a><br/>Enquiries: <a href="mailto:info@cainandco.co.uk">info@cainandco.co.uk</a><br/>Payroll: <a href="mailto:payroll@cainandco.co.uk">payroll@cainandco.co.uk</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-4">
        <div class="contact-card">
          <div class="contact-card-icon"><i class="bi bi-clock-fill"></i></div>
          <h5>Office Hours</h5>
          <p>Mon – Fri: 8:30am – 6:00pm<br/>Saturday: 10:00am – 2:00pm<br/>Sunday: Closed</p>
          <p class="mt-2" style="color:var(--gold);font-size:.82rem;font-weight:600;">✓ Urgent queries handled out of hours</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================== CONTACT FORM ======================== -->
<section id="consultation-form" class="section-pad">
  <div class="container">
    <div class="row g-5 align-items-start">
      <!-- Left side info -->
      <div class="col-lg-4 fade-up">
        <div class="form-side-info">
          <div class="label-pill light mb-3">Free Consultation</div>
          <h3 style="color:var(--white);font-size:1.6rem;margin-bottom:16px;">Let's Talk Business</h3>
          <div class="divider-gold"></div>
          <p style="color:rgba(255,255,255,.65);font-size:.9rem;line-height:1.9;margin-bottom:28px;">Complete the form and one of our senior bookkeeping specialists will contact you within 2 business hours to discuss your requirements.</p>

          <div style="margin-bottom:28px;">
            <div style="color:rgba(255,255,255,.4);font-size:.78rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:14px;">Office Hours</div>
            <div class="hours-row"><span class="hours-day">Monday – Friday</span><span class="hours-time">8:30 – 18:00</span></div>
            <div class="hours-row"><span class="hours-day">Saturday</span><span class="hours-time">10:00 – 14:00</span></div>
            <div class="hours-row"><span class="hours-day">Sunday</span><span class="hours-time">Closed</span></div>
          </div>

          <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:28px;">
            <div style="display:flex;gap:12px;align-items:center;">
              <div style="width:36px;height:36px;border-radius:8px;background:rgba(201,168,76,.15);display:flex;align-items:center;justify-content:center;"><i class="bi bi-telephone-fill" style="color:var(--gold);font-size:.9rem;"></i></div>
              <div><div style="color:rgba(255,255,255,.4);font-size:.72rem;letter-spacing:.5px;">CALL US</div><div style="color:var(--white);font-size:.9rem;font-weight:600;">020 7946 0321</div></div>
            </div>
            <div style="display:flex;gap:12px;align-items:center;">
              <div style="width:36px;height:36px;border-radius:8px;background:rgba(201,168,76,.15);display:flex;align-items:center;justify-content:center;"><i class="bi bi-envelope-fill" style="color:var(--gold);font-size:.9rem;"></i></div>
              <div><div style="color:rgba(255,255,255,.4);font-size:.72rem;letter-spacing:.5px;">EMAIL US</div><div style="color:var(--white);font-size:.9rem;font-weight:600;">hello@cainandco.co.uk</div></div>
            </div>
          </div>

          <div style="display:flex;gap:10px;flex-wrap:wrap;">
            <div class="cert-badge"><div class="cert-title">ISO 9001</div><div class="cert-sub">Certified</div></div>
            <div class="cert-badge"><div class="cert-title">AAT</div><div class="cert-sub">Qualified</div></div>
            <div class="cert-badge"><div class="cert-title">ICB</div><div class="cert-sub">Member</div></div>
          </div>

          <div class="footer-social mt-4">
            <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-8 fade-up delay-2">
        <div class="form-wrapper">
          <h3 style="font-size:1.5rem;margin-bottom:8px;">Request a Free Consultation</h3>
          <p style="color:var(--muted);font-size:.88rem;margin-bottom:30px;">Fill in the details below and we'll be in touch within 2 business hours. No obligation, no sales pressure.</p>

          <form id="contactForm" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="fullName">Full Name *</label>
                <input type="text" class="form-control" id="fullName" placeholder="John Smith" required>
                <div class="invalid-feedback">Please enter your full name.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="companyName">Company Name</label>
                <input type="text" class="form-control" id="companyName" placeholder="Acme Ltd">
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" class="form-control" id="email" placeholder="john@business.co.uk" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="07700 900000">
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="businessType">Business Type *</label>
                <select class="form-select" id="businessType" required>
                  <option value="">Select business type...</option>
                  <option>Sole Trader</option>
                  <option>Limited Company</option>
                  <option>Partnership</option>
                  <option>Restaurant / Hospitality</option>
                  <option>Construction</option>
                  <option>Retail</option>
                  <option>Consultancy</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">Please select your business type.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="service">Service Interested In *</label>
                <select class="form-select" id="service" required>
                  <option value="">Select service...</option>
                  <option>Bookkeeping</option>
                  <option>Payroll Management</option>
                  <option>Auto Enrolment</option>
                  <option>VAT Returns</option>
                  <option>Full Finance Package</option>
                  <option>Not Sure — Need Advice</option>
                </select>
                <div class="invalid-feedback">Please select a service.</div>
              </div>
              <div class="col-12">
                <label class="form-label" for="howHeard">How Did You Hear About Us?</label>
                <select class="form-select" id="howHeard">
                  <option value="">Select option...</option>
                  <option>Google Search</option>
                  <option>Referral from client</option>
                  <option>LinkedIn</option>
                  <option>Networking Event</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="message">Your Message *</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Tell us about your business, current bookkeeping setup, and what you need help with..." required></textarea>
                <div class="invalid-feedback">Please enter a message.</div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gdpr" required>
                  <label class="form-check-label" for="gdpr">
                    I agree to Cain &amp; Co processing my personal data in accordance with the <a href="#" style="color:var(--gold);">Privacy Policy</a>. I understand I can withdraw consent at any time. *
                  </label>
                  <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="newsletter">
                  <label class="form-check-label" for="newsletter">Send me monthly bookkeeping tips and HMRC updates (optional)</label>
                </div>
              </div>
              <div class="col-12 mt-2">
                <button type="submit" class="btn-gold btn w-100" style="font-size:1rem;padding:16px 32px;" id="submitBtn">
                  <i class="bi bi-calendar-check me-2"></i>Request Free Consultation
                </button>
              </div>
              <div class="col-12">
                <p style="color:var(--muted);font-size:.78rem;text-align:center;margin:0;"><i class="bi bi-shield-lock-fill me-1" style="color:var(--gold);"></i>Your data is 100% secure. We never share your information with third parties.</p>
              </div>
            </div>
          </form>
          <div class="submit-success" id="successMsg">
            <i class="bi bi-check-circle-fill me-2"></i>Thank you! Your enquiry has been received. One of our team will contact you within 2 business hours.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======================== MAP ======================== -->
<section class="section-pad-sm bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Find Us</div>
      <h2 class="section-title">Our London Office</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Conveniently located in the City of London, minutes from Cannon Street and Mansion House stations.</p>
    </div>
    <div class="map-wrapper fade-up">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.676332287218!2d-0.061181458126064577!3d51.51915381488188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccdc6301ea9%3A0x1e12d1116d7207a3!2s2nd%20Floor%2C%20245%20Whitechapel%20Rd%2C%20London%20E1%201DB%2C%20UK!5e0!3m2!1sen!2sbd!4v1778636939987!5m2!1sen!2sbd"
        width="100%" height="420" style="border:0;display:block;" allowfullscreen="" loading="lazy"
        title="Cain & Co Office Location — Cannon Street London">
      </iframe>
    </div>
    <div class="row g-4 mt-4">
      <div class="col-md-4 text-center fade-up delay-1">
        <div style="padding:20px;"><i class="bi bi-train-front-fill" style="font-size:2rem;color:var(--gold);display:block;margin-bottom:10px;"></i><h6>Cannon Street Station</h6><p style="font-size:.85rem;color:var(--muted);">2 minutes walk — Circle &amp; District line</p></div>
      </div>
      <div class="col-md-4 text-center fade-up delay-2">
        <div style="padding:20px;"><i class="bi bi-train-front" style="font-size:2rem;color:var(--gold);display:block;margin-bottom:10px;"></i><h6>Mansion House Station</h6><p style="font-size:.85rem;color:var(--muted);">4 minutes walk — Circle &amp; District line</p></div>
      </div>
      <div class="col-md-4 text-center fade-up delay-3">
        <div style="padding:20px;"><i class="bi bi-p-square-fill" style="font-size:2rem;color:var(--gold);display:block;margin-bottom:10px;"></i><h6>NCP Parking</h6><p style="font-size:.85rem;color:var(--muted);">Queen Street car park — 5 minutes walk</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ======================== WHY CONTACT US ======================== -->
<section class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Why Us</div>
      <h2 class="section-title light">Why Contact Cain &amp; Co?</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle light mx-auto text-center">Six reasons why 200+ London businesses trust us with their finances.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-lock-fill"></i></div>
          <h5>Fixed Monthly Pricing</h5>
          <p>No surprise invoices. Transparent fixed fees from £299/month so you can budget with confidence every month.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-shield-check"></i></div>
          <h5>HMRC Compliance Support</h5>
          <p>Our team guarantees full HMRC compliance. If we make an error that leads to a penalty, we cover it.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-lightning-charge-fill"></i></div>
          <h5>Fast Response Times</h5>
          <p>Every query answered within 2 business hours. Your dedicated account manager is always just a call or email away.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-person-badge-fill"></i></div>
          <h5>Dedicated Bookkeeper</h5>
          <p>You get one consistent point of contact who knows your business inside-out — not a different person every time.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-calculator-fill"></i></div>
          <h5>Payroll &amp; VAT Support</h5>
          <p>Complete payroll processing, VAT returns and auto enrolment management — all handled by certified specialists.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-gift-fill"></i></div>
          <h5>Risk-Free Consultation</h5>
          <p>Your initial consultation is completely free, no obligation. Discover how we can help your business — at zero cost.</p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection