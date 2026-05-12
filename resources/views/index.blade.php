@extends('layouts.app')
@section('content')

<!-- ===========================
     HERO
=========================== -->
<section id="hero">
  <div class="hero-bg-shape"></div>
  <div class="hero-grid-lines"></div>
  <div class="container py-5" style="padding-top:120px !important">
    <div class="row align-items-center gy-5">
      <div class="col-lg-7">
        <div class="label-pill light">🇬🇧 London's Trusted Bookkeepers</div>
        <h1 class="section-title light" style="font-size:clamp(2.4rem,5vw,3.8rem);">
          Bookkeeping <br/><span class="gold">London</span>
        </h1>
        <div class="divider-gold mt-3"></div>
        <p class="section-subtitle light" style="font-size:1.15rem;max-width:520px;">
          Risk-Free Bookkeeping in London From Just <strong style="color:var(--gold)">£299 Per Month</strong>. Fixed fees. Proactive support. Zero HMRC surprises.
        </p>
        <div class="hero-badge-row">
          <div class="hero-badge"><i class="bi bi-lock-fill"></i> Fixed Fees</div>
          <div class="hero-badge"><i class="bi bi-headset"></i> Proactive Support</div>
          <div class="hero-badge"><i class="bi bi-patch-check-fill"></i> ISO 9001 Certified</div>
          <div class="hero-badge"><i class="bi bi-shield-check"></i> HMRC Compliant</div>
        </div>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#contact" class="btn btn-gold">Book Free Consultation</a>
          <a href="#trial" class="btn btn-outline-gold">Try Us For 3 Months</a>
        </div>
        <div class="d-flex align-items-center gap-3 mt-4">
          <div class="d-flex" style="gap:-6px">
            <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#C9A84C,#1E3050);border:2px solid rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;font-size:.8rem;font-weight:700;color:#fff;">JM</div>
            <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#2a5ca8,#C9A84C);border:2px solid rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;font-size:.8rem;font-weight:700;color:#fff;margin-left:-8px;">SR</div>
            <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#0D1B2A,#C9A84C);border:2px solid rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;font-size:.8rem;font-weight:700;color:#fff;margin-left:-8px;">AT</div>
            <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#C9A84C,#2a5ca8);border:2px solid rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;font-size:.8rem;font-weight:700;color:#fff;margin-left:-8px;">+</div>
          </div>
          <div>
            <div class="d-flex gap-1" style="color:#f5c518;font-size:.85rem;">★★★★★</div>
            <div style="color:rgba(255,255,255,.55);font-size:.78rem;">Trusted by 200+ London businesses</div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="hero-card">
          <div class="row g-3 mb-3">
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num" data-target="200">0</span><span class="hero-stat-label">Clients</span></div></div>
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num" data-target="12">0</span><span class="hero-stat-label">Years Exp.</span></div></div>
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num" data-target="100">0</span><span class="hero-stat-label">% Compliant</span></div></div>
          </div>
          <div class="hero-price-box">
            <div class="from">Starting from</div>
            <div class="price">£299</div>
            <div class="mo">per month · all inclusive</div>
          </div>
          <div class="mt-3 p-3" style="background:rgba(255,255,255,.04);border-radius:10px;border:1px solid rgba(201,168,76,.15);">
            <div style="color:rgba(255,255,255,.7);font-size:.82rem;font-weight:600;margin-bottom:10px;letter-spacing:.5px;">WHAT'S INCLUDED</div>
            <div style="display:flex;flex-direction:column;gap:6px;">
              <div style="display:flex;gap:8px;align-items:center;font-size:.84rem;color:rgba(255,255,255,.75);"><i class="bi bi-check-circle-fill" style="color:var(--gold);"></i> Monthly bookkeeping &amp; reconciliation</div>
              <div style="display:flex;gap:8px;align-items:center;font-size:.84rem;color:rgba(255,255,255,.75);"><i class="bi bi-check-circle-fill" style="color:var(--gold);"></i> VAT returns &amp; HMRC submissions</div>
              <div style="display:flex;gap:8px;align-items:center;font-size:.84rem;color:rgba(255,255,255,.75);"><i class="bi bi-check-circle-fill" style="color:var(--gold);"></i> Dedicated account manager</div>
              <div style="display:flex;gap:8px;align-items:center;font-size:.84rem;color:rgba(255,255,255,.75);"><i class="bi bi-check-circle-fill" style="color:var(--gold);"></i> Year-end support included</div>
            </div>
          </div>
          <a href="#contact" class="btn btn-gold w-100 mt-3">Get Started Today →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     CLIENTS STRIP
=========================== -->
<section id="clients">
  <div class="container-fluid px-4">
    <div style="text-align:center;font-size:.78rem;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--muted);margin-bottom:18px;">Trusted By London's Leading Businesses</div>
    <div class="clients-scroll-wrap">
      <div class="clients-track" id="clientsTrack">
        <div class="client-logo">Meridian Group</div>
        <div class="client-logo">Archway Hospitality</div>
        <div class="client-logo">BuildRight Construction</div>
        <div class="client-logo">Soho Eats</div>
        <div class="client-logo">Capital Consult</div>
        <div class="client-logo">Eastfield Retail</div>
        <div class="client-logo">LondonPay Solutions</div>
        <div class="client-logo">Nova Tech Ltd</div>
        <div class="client-logo">Thames Ventures</div>
        <div class="client-logo">Meridian Group</div>
        <div class="client-logo">Archway Hospitality</div>
        <div class="client-logo">BuildRight Construction</div>
        <div class="client-logo">Soho Eats</div>
        <div class="client-logo">Capital Consult</div>
        <div class="client-logo">Eastfield Retail</div>
        <div class="client-logo">LondonPay Solutions</div>
        <div class="client-logo">Nova Tech Ltd</div>
        <div class="client-logo">Thames Ventures</div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     PROBLEMS
=========================== -->
<section id="problems" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Sound Familiar?</div>
      <h2 class="section-title">Are These Problems Holding <br/>Your Business Back?</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center" style="max-width:520px;">You didn't start a business to spend your days wrestling with spreadsheets. We did.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4 fade-up fade-up-delay-1">
        <div class="problem-card">
          <div class="problem-icon"><i class="bi bi-clock-history"></i></div>
          <h4 style="font-size:1.15rem;margin-bottom:12px;">Spending Too Much Time on Bookkeeping?</h4>
          <p style="color:var(--muted);font-size:.9rem;line-height:1.8;">Every hour you spend on accounts is an hour stolen from growing your business. Let our experts reclaim that time for you.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-2">
        <div class="problem-card">
          <div class="problem-icon"><i class="bi bi-exclamation-triangle"></i></div>
          <h4 style="font-size:1.15rem;margin-bottom:12px;">Worried About HMRC Fines?</h4>
          <p style="color:var(--muted);font-size:.9rem;line-height:1.8;">Late filings, incorrect VAT, or missed deadlines can cost thousands. Our team guarantees zero HMRC penalties when you're on our books.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-3">
        <div class="problem-card">
          <div class="problem-icon"><i class="bi bi-currency-pound"></i></div>
          <h4 style="font-size:1.15rem;margin-bottom:12px;">Frustrated by Unpredictable Costs?</h4>
          <p style="color:var(--muted);font-size:.9rem;line-height:1.8;">Surprise invoices from accountants? Not with us. Our fixed monthly fees mean you always know exactly what you're paying.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===========================
     INDUSTRIES
=========================== -->
<section id="industries" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Sector Specialists</div>
      <h2 class="section-title light">Industries We Serve</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle light mx-auto text-center">Deep sector expertise means we understand your specific compliance needs, cash flow patterns, and reporting requirements.</p>
    </div>
    <div class="row g-3">
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-1"><div class="industry-card"><i class="bi bi-egg-fried"></i><h5>Restaurants</h5></div></div>
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-2"><div class="industry-card"><i class="bi bi-building"></i><h5>Hospitality</h5></div></div>
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-3"><div class="industry-card"><i class="bi bi-hammer"></i><h5>Construction</h5></div></div>
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-1"><div class="industry-card"><i class="bi bi-calculator"></i><h5>Accountants</h5></div></div>
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-2"><div class="industry-card"><i class="bi bi-briefcase"></i><h5>Consultants</h5></div></div>
      <div class="col-6 col-md-4 col-lg-2 fade-up fade-up-delay-3"><div class="industry-card"><i class="bi bi-shop"></i><h5>Retail</h5></div></div>
    </div>
  </div>
</section>

<!-- ===========================
     TRIAL
=========================== -->
<section id="trial" class="section-pad">
  <div class="container position-relative">
    <div class="row align-items-center gy-4">
      <div class="col-lg-7 fade-up">
        <div class="trial-badge"><i class="bi bi-star-fill"></i> RISK-FREE OFFER</div>
        <h2 class="section-title" style="color:var(--navy);font-size:clamp(2rem,4vw,3rem);">Try Us Free <br/>For 3 Months</h2>
        <div style="width:56px;height:3px;background:rgba(13,27,42,.3);border-radius:2px;margin:18px 0 22px;"></div>
        <p style="color:rgba(13,27,42,.75);font-size:1rem;line-height:1.9;max-width:480px;">Not sure if we're right for you? We're so confident you'll love our service that we offer a full 3-month trial. No lock-in contracts. No hidden fees. Just brilliant bookkeeping from day one.</p>
        <ul style="list-style:none;padding:0;margin:20px 0 28px;display:flex;flex-direction:column;gap:10px;">
          <li style="display:flex;gap:10px;align-items:center;color:var(--navy);font-weight:500;font-size:.92rem;"><i class="bi bi-check-circle-fill" style="color:var(--navy);font-size:1.1rem;"></i> No cancellation penalties</li>
          <li style="display:flex;gap:10px;align-items:center;color:var(--navy);font-weight:500;font-size:.92rem;"><i class="bi bi-check-circle-fill" style="color:var(--navy);font-size:1.1rem;"></i> Full service from day 1</li>
          <li style="display:flex;gap:10px;align-items:center;color:var(--navy);font-weight:500;font-size:.92rem;"><i class="bi bi-check-circle-fill" style="color:var(--navy);font-size:1.1rem;"></i> Dedicated account manager assigned</li>
        </ul>
        <a href="#contact" class="btn-outline-navy btn">Claim Your Free Trial →</a>
      </div>
      <div class="col-lg-5 text-center fade-up fade-up-delay-2">
        <div style="background:rgba(13,27,42,.12);border-radius:20px;padding:40px;display:inline-block;">
          <div style="font-family:var(--head-font);font-size:7rem;font-weight:900;color:var(--navy);line-height:1;text-shadow:0 4px 20px rgba(13,27,42,.2);">3</div>
          <div style="font-size:1.5rem;font-weight:700;color:var(--navy);margin-top:-10px;">MONTHS FREE</div>
          <div style="color:rgba(13,27,42,.6);font-size:.88rem;margin-top:8px;">Then just £299/mo</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     7 REASONS
=========================== -->
<section id="reasons" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Why Choose Us</div>
      <h2 class="section-title">7 Reasons London Businesses <br/>Choose Cain &amp; Co</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-1">
        <div class="reason-card">
          <div class="reason-num">1</div>
          <div><h5>No HMRC Fines — Guaranteed</h5><p>We take full responsibility for your HMRC compliance. If a penalty arises due to our error, we cover it. Simple as that.</p></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-2">
        <div class="reason-card">
          <div class="reason-num">2</div>
          <div><h5>Same-Day Response Promise</h5><p>Your dedicated account manager responds to every query within the same business day. No chasing, no waiting.</p></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-3">
        <div class="reason-card">
          <div class="reason-num">3</div>
          <div><h5>Fixed Fees, No Surprises</h5><p>Transparent pricing means you know your exact monthly cost upfront. No hourly billing, no surprise invoices.</p></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-1">
        <div class="reason-card">
          <div class="reason-num">4</div>
          <div><h5>Proactive Financial Support</h5><p>We don't wait for problems — we flag issues before they become costly. Monthly insights help you make smarter decisions.</p></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-2">
        <div class="reason-card">
          <div class="reason-num">5</div>
          <div><h5>Monthly Financial Reviews</h5><p>Every month, we walk you through your financial position. Know exactly where your business stands, always.</p></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-3">
        <div class="reason-card">
          <div class="reason-num">6</div>
          <div><h5>Year-End Support Included</h5><p>Year-end accounts support is built into every package. No expensive add-ons when the tax year closes.</p></div>
        </div>
      </div>
      <div class="col-md-6 offset-lg-2 col-lg-4 fade-up fade-up-delay-1">
        <div class="reason-card">
          <div class="reason-num">7</div>
          <div><h5>Dedicated Account Manager</h5><p>One point of contact who knows your business inside-out. Continuity you can count on, year after year.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     TESTIMONIALS
=========================== -->
<section id="testimonials" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Client Love</div>
      <h2 class="section-title light">What Our Clients Say</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle light mx-auto text-center">Real results from real London businesses who switched to Cain &amp; Co.</p>
    </div>
    <div id="testiCarousel" class="position-relative">
      <div class="row g-4" id="testiSlides">
        <!-- Testimonial 1 -->
        <div class="col-md-6 col-lg-4 testi-item fade-up fade-up-delay-1">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">"Switching to Cain &amp; Co was the best business decision we made last year. Our books are always up to date, VAT is handled seamlessly, and I finally sleep at night knowing our finances are in expert hands."</p>
            <div class="testi-author">
              <div class="testi-avatar">JM</div>
              <div><div class="testi-name">James Mitchell</div><div class="testi-role">Director, Meridian Group · Canary Wharf</div></div>
            </div>
          </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="col-md-6 col-lg-4 testi-item fade-up fade-up-delay-2">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">"As a restaurant owner, I was drowning in receipts and payroll chaos. Cain &amp; Co sorted everything within a week. Fixed fees mean I can plan my cash flow properly. Absolutely transformed my business."</p>
            <div class="testi-author">
              <div class="testi-avatar">SR</div>
              <div><div class="testi-name">Sarah Rahman</div><div class="testi-role">Owner, The Spice Room · Shoreditch</div></div>
            </div>
          </div>
        </div>
        <!-- Testimonial 3 -->
        <div class="col-md-6 col-lg-4 testi-item fade-up fade-up-delay-3">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">"The proactive support is what sets them apart. My accountant at Cain &amp; Co spotted a cashflow issue three months before it became a problem. That kind of foresight is genuinely priceless for a small business."</p>
            <div class="testi-author">
              <div class="testi-avatar">AT</div>
              <div><div class="testi-name">Alex Thompson</div><div class="testi-role">MD, BuildRight Construction · South London</div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center gap-3 mt-4">
        <button class="testi-nav-btn" id="testiPrev"><i class="bi bi-chevron-left"></i></button>
        <button class="testi-nav-btn" id="testiNext"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>

    <!-- Stats -->
    <div class="row g-0 mt-5" style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.2);border-radius:16px;overflow:hidden;">
      <div class="col-6 col-md-3"><div class="counter-card"><span class="counter-num" data-target="200">0</span><div class="counter-label">Happy Clients</div></div></div>
      <div class="col-6 col-md-3" style="border-left:1px solid rgba(201,168,76,.15);"><div class="counter-card"><span class="counter-num" data-target="97">0</span><div class="counter-label">% Retention Rate</div></div></div>
      <div class="col-6 col-md-3" style="border-top:1px solid rgba(201,168,76,.15);border-left:1px solid rgba(201,168,76,.15);"><div class="counter-card"><span class="counter-num" data-target="12">0</span><div class="counter-label">Years in London</div></div></div>
      <div class="col-6 col-md-3" style="border-top:1px solid rgba(201,168,76,.15);border-left:1px solid rgba(201,168,76,.15);"><div class="counter-card"><span class="counter-num" data-target="0">0</span><div class="counter-label">HMRC Penalties</div></div></div>
    </div>
  </div>
</section>

<!-- ===========================
     PRICING
=========================== -->
<section id="pricing" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Transparent Pricing</div>
      <h2 class="section-title">Simple, Fixed Monthly Fees</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">No hourly rates. No surprise invoices. Just clear, honest pricing for outstanding bookkeeping.</p>
    </div>
    <div class="row g-4 align-items-stretch">
      <!-- Entry -->
      <div class="col-md-4 fade-up fade-up-delay-1">
        <div class="price-card">
          <div class="price-tier">Entry</div>
          <div class="price-amount">£299</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Monthly bookkeeping</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Bank reconciliation</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> VAT returns</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> P&amp;L reports</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Email support</div>
          <div class="price-feature" style="color:#ccc;"><i class="bi bi-x-circle"></i> Payroll management</div>
          <div class="price-feature" style="color:#ccc;"><i class="bi bi-x-circle"></i> Auto enrolment</div>
          <div class="mt-auto"><a href="#contact" class="btn btn-outline-navy w-100">Get Started</a></div>
        </div>
      </div>
      <!-- Full (Featured) -->
      <div class="col-md-4 fade-up fade-up-delay-2">
        <div class="price-card featured">
          <div class="price-badge">Most Popular</div>
          <div class="price-tier">Full</div>
          <div class="price-amount">£499</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Everything in Entry</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Payroll (up to 10 staff)</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Auto enrolment management</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Monthly review calls</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Priority phone support</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Year-end accounts support</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Cashflow forecasting</div>
          <div class="mt-auto"><a href="#contact" class="btn btn-gold w-100">Get Started</a></div>
        </div>
      </div>
      <!-- Premium -->
      <div class="col-md-4 fade-up fade-up-delay-3">
        <div class="price-card">
          <div class="price-tier">Premium</div>
          <div class="price-amount">£699</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Everything in Full</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Unlimited payroll staff</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Management accounts</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> KPI dashboards</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Director-level advisory</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Quarterly strategy reviews</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Same-day support</div>
          <div class="mt-auto"><a href="#contact" class="btn btn-outline-navy w-100">Get Started</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     TEAM
=========================== -->
<section id="team" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">The People Behind the Books</div>
      <h2 class="section-title light">Meet Our Team</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-sm-6 col-lg-3 fade-up fade-up-delay-1">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.2);border-radius:14px;overflow:hidden;text-align:center;transition:all .3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.2)'">
          <div style="height:180px;background:linear-gradient(135deg,var(--navy-light),#2a4a7a);display:flex;align-items:center;justify-content:center;">
            <div style="width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,var(--gold),var(--navy));border:3px solid rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--white);">RC</div>
          </div>
          <div style="padding:24px 20px;">
            <h5 style="color:var(--white);font-size:1rem;">Rebecca Cain</h5>
            <div style="color:var(--gold);font-size:.78rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:10px;">Founder &amp; Director</div>
            <p style="color:rgba(255,255,255,.5);font-size:.82rem;line-height:1.7;">AAT qualified with 15 years in London finance. Rebecca founded Cain &amp; Co with a passion for small business support.</p>
            <div style="display:flex;justify-content:center;gap:10px;margin-top:14px;">
              <a href="#" style="color:rgba(255,255,255,.4);font-size:1rem;transition:color .2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><i class="bi bi-linkedin"></i></a>
              <a href="#" style="color:rgba(255,255,255,.4);font-size:1rem;transition:color .2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up fade-up-delay-2">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.2);border-radius:14px;overflow:hidden;text-align:center;transition:all .3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.2)'">
          <div style="height:180px;background:linear-gradient(135deg,#1a3d6e,var(--navy-light));display:flex;align-items:center;justify-content:center;">
            <div style="width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,#2a5ca8,var(--gold));border:3px solid rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--white);">MK</div>
          </div>
          <div style="padding:24px 20px;">
            <h5 style="color:var(--white);font-size:1rem;">Marcus King</h5>
            <div style="color:var(--gold);font-size:.78rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:10px;">Senior Bookkeeper</div>
            <p style="color:rgba(255,255,255,.5);font-size:.82rem;line-height:1.7;">Specialist in construction and hospitality sectors. Marcus manages over 60 client accounts with meticulous precision.</p>
            <div style="display:flex;justify-content:center;gap:10px;margin-top:14px;">
              <a href="#" style="color:rgba(255,255,255,.4);font-size:1rem;transition:color .2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up fade-up-delay-3">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.2);border-radius:14px;overflow:hidden;text-align:center;transition:all .3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.2)'">
          <div style="height:180px;background:linear-gradient(135deg,#1e2f50,#233a65);display:flex;align-items:center;justify-content:center;">
            <div style="width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,var(--gold-light),#8a6020);border:3px solid rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--white);">PA</div>
          </div>
          <div style="padding:24px 20px;">
            <h5 style="color:var(--white);font-size:1rem;">Priya Anand</h5>
            <div style="color:var(--gold);font-size:.78rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:10px;">Payroll Manager</div>
            <p style="color:rgba(255,255,255,.5);font-size:.82rem;line-height:1.7;">CIPP qualified payroll specialist with 10 years' experience handling complex payroll and auto enrolment for London SMEs.</p>
            <div style="display:flex;justify-content:center;gap:10px;margin-top:14px;">
              <a href="#" style="color:rgba(255,255,255,.4);font-size:1rem;transition:color .2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up fade-up-delay-4">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.2);border-radius:14px;overflow:hidden;text-align:center;transition:all .3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.2)'">
          <div style="height:180px;background:linear-gradient(135deg,#162840,var(--navy-mid));display:flex;align-items:center;justify-content:center;">
            <div style="width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,var(--navy),var(--gold));border:3px solid rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--white);">TW</div>
          </div>
          <div style="padding:24px 20px;">
            <h5 style="color:var(--white);font-size:1rem;">Tom Walsh</h5>
            <div style="color:var(--gold);font-size:.78rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:10px;">Client Manager</div>
            <p style="color:rgba(255,255,255,.5);font-size:.82rem;line-height:1.7;">Tom is the friendly face ensuring every client receives outstanding, proactive support from onboarding to year-end.</p>
            <div style="display:flex;justify-content:center;gap:10px;margin-top:14px;">
              <a href="#" style="color:rgba(255,255,255,.4);font-size:1rem;transition:color .2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     CURRY & CO
=========================== -->
<section id="curry" class="section-pad">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5 fade-up">
        <div class="label-pill light">Networking Nights</div>
        <h2 class="section-title light">Curry &amp; Co <br/>Networking Nights</h2>
        <div class="divider-gold"></div>
        <p style="color:rgba(255,255,255,.7);font-size:.95rem;line-height:1.9;margin-bottom:24px;">Every quarter, we bring London's finest small business owners together for an evening of great food, honest conversation, and genuine connections. No hard sells. Just good curry, good company, and business relationships that actually last.</p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;margin-bottom:28px;">
          <div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.75);font-size:.88rem;"><i class="bi bi-geo-alt-fill" style="color:var(--gold);"></i> Central London venues</div>
          <div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.75);font-size:.88rem;"><i class="bi bi-people-fill" style="color:var(--gold);"></i> 30–50 attendees each event</div>
          <div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.75);font-size:.88rem;"><i class="bi bi-calendar3" style="color:var(--gold);"></i> Quarterly events</div>
        </div>
        <a href="#contact" class="btn btn-gold">Register Interest →</a>
      </div>
      <div class="col-lg-7 fade-up fade-up-delay-2">
        <div class="row g-3">
          <div class="col-12">
            <div class="event-card">
              <div class="d-flex align-items-center gap-16" style="gap:16px;">
                <div class="event-date-box"><div class="day">14</div><div class="month">Jun</div></div>
                <div>
                  <h5 style="color:var(--white);margin-bottom:4px;font-size:.95rem;">Summer Curry Night — Covent Garden</h5>
                  <p style="color:rgba(255,255,255,.5);font-size:.82rem;margin:0;">7pm · Dishoom, Covent Garden · 40 seats available</p>
                </div>
                <a href="#contact" class="btn btn-gold ms-auto" style="padding:8px 20px;font-size:.82rem;white-space:nowrap;">Book Seat</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="event-card">
              <div class="d-flex align-items-center" style="gap:16px;">
                <div class="event-date-box"><div class="day">19</div><div class="month">Sep</div></div>
                <div>
                  <h5 style="color:var(--white);margin-bottom:4px;font-size:.95rem;">Autumn Networking Dinner — Shoreditch</h5>
                  <p style="color:rgba(255,255,255,.5);font-size:.82rem;margin:0;">6:30pm · Hawksmoor Spitalfields · 50 seats available</p>
                </div>
                <a href="#contact" class="btn btn-gold ms-auto" style="padding:8px 20px;font-size:.82rem;white-space:nowrap;">Book Seat</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="event-card">
              <div class="d-flex align-items-center" style="gap:16px;">
                <div class="event-date-box"><div class="day">11</div><div class="month">Dec</div></div>
                <div>
                  <h5 style="color:var(--white);margin-bottom:4px;font-size:.95rem;">Christmas Curry &amp; Co Gala — Mayfair</h5>
                  <p style="color:rgba(255,255,255,.5);font-size:.82rem;margin:0;">7pm · The Cinnamon Club · 60 seats — Limited!</p>
                </div>
                <a href="#contact" class="btn btn-gold ms-auto" style="padding:8px 20px;font-size:.82rem;white-space:nowrap;">Book Seat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     REFERRAL
=========================== -->
<section id="referral" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">🥂 Referral Rewards</div>
      <h2 class="section-title">Referral Reward — <span class="gold">Champagne's on Us!</span></h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Know a business that needs brilliant bookkeeping? Refer them to us and we'll send you a bottle of Moët &amp; Chandon as a thank you. Every time.</p>
    </div>
    <div class="row g-4 mb-5">
      <div class="col-md-4 fade-up fade-up-delay-1">
        <div class="referral-step">
          <div class="referral-step-num">1</div>
          <h5>Refer a Friend or Colleague</h5>
          <p>Tell them about Cain &amp; Co and share their details with us using the simple form below.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-2">
        <div class="referral-step">
          <div class="referral-step-num">2</div>
          <h5>They Sign Up With Us</h5>
          <p>Once your referral becomes a Cain &amp; Co client, we get started on making their books beautiful.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-3">
        <div class="referral-step">
          <div class="referral-step-num">3</div>
          <h5>We Send You Champagne 🥂</h5>
          <p>A bottle of Moët &amp; Chandon lands on your doorstep. No limits — refer 10 clients, get 10 bottles!</p>
        </div>
      </div>
    </div>
    <!-- Referral Form -->
    <div class="row justify-content-center fade-up">
      <div class="col-lg-7">
        <div style="background:var(--white);border:1px solid rgba(0,0,0,.07);border-radius:16px;padding:40px 36px;box-shadow:0 8px 40px rgba(0,0,0,.06);">
          <h4 style="font-size:1.2rem;margin-bottom:20px;">Submit a Referral</h4>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Your Name</label>
              <input type="text" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="Rebecca Smith">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Business Name</label>
              <input type="text" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="Acme Ltd">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Email</label>
              <input type="email" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="info@acme.co.uk">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Phone</label>
              <input type="tel" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="07700 900000">
            </div>
            <div class="col-12 mt-2">
              <button class="btn btn-gold w-100">Submit Referral &amp; Claim My Champagne 🥂</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     COVERAGE
=========================== -->
<section id="coverage" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Where We Work</div>
      <h2 class="section-title light">Client Coverage Across London &amp; the UK</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-3 justify-content-center">
      <div class="col-12 fade-up">
        <div class="row g-3">
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">City of London</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Canary Wharf</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Shoreditch</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Mayfair</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Southwark</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Manchester</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Birmingham</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Leeds</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Edinburgh</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Bristol</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:16px;text-align:center;transition:all .3s;" onmouseover="this.style.borderColor='var(--gold)';this.style.background='rgba(201,168,76,.08)'" onmouseout="this.style.borderColor='rgba(201,168,76,.15)';this.style.background='rgba(255,255,255,.05)'">
              <i class="bi bi-geo-alt-fill" style="color:var(--gold);font-size:1.3rem;display:block;margin-bottom:8px;"></i>
              <div style="color:var(--white);font-weight:600;font-size:.88rem;">Nationwide (Remote)</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     COMMUNITY
=========================== -->
<section id="community" class="section-pad bg-offwhite">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5 fade-up">
        <div class="label-pill">Giving Back</div>
        <h2 class="section-title">Supporting Our <br/>Community</h2>
        <div class="divider-gold"></div>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.9;margin-bottom:20px;">We believe successful businesses have a responsibility to invest in their communities. From local charity partnerships to pro-bono bookkeeping for non-profits, giving back is built into everything we do.</p>
        <div style="display:flex;flex-direction:column;gap:14px;">
          <div style="display:flex;gap:14px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
            <div style="width:42px;height:42px;border-radius:10px;background:var(--gold-pale);display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:1.1rem;flex-shrink:0;"><i class="bi bi-heart-fill"></i></div>
            <div><h6 style="font-size:.9rem;margin-bottom:4px;">East London Food Bank</h6><p style="font-size:.82rem;color:var(--muted);margin:0;">Monthly donations &amp; volunteer bookkeeping for the Hackney Community Food Bank.</p></div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
            <div style="width:42px;height:42px;border-radius:10px;background:var(--gold-pale);display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:1.1rem;flex-shrink:0;"><i class="bi bi-mortarboard-fill"></i></div>
            <div><h6 style="font-size:.9rem;margin-bottom:4px;">SME Finance Education</h6><p style="font-size:.82rem;color:var(--muted);margin:0;">Free financial literacy workshops for new business owners across London boroughs.</p></div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
            <div style="width:42px;height:42px;border-radius:10px;background:var(--gold-pale);display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:1.1rem;flex-shrink:0;"><i class="bi bi-tree-fill"></i></div>
            <div><h6 style="font-size:.9rem;margin-bottom:4px;">Carbon Neutral Pledge</h6><p style="font-size:.82rem;color:var(--muted);margin:0;">Committed to carbon neutrality by 2026 through verified offsets and green operations.</p></div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 fade-up fade-up-delay-2">
        <div class="row g-3">
          <div class="col-6 col-md-3"><div style="background:var(--navy);border-radius:12px;padding:28px 16px;text-align:center;"><div style="font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--gold);">£12k</div><div style="color:rgba(255,255,255,.55);font-size:.78rem;margin-top:4px;">Donated to charities</div></div></div>
          <div class="col-6 col-md-3"><div style="background:var(--navy);border-radius:12px;padding:28px 16px;text-align:center;"><div style="font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--gold);">18+</div><div style="color:rgba(255,255,255,.55);font-size:.78rem;margin-top:4px;">Community workshops</div></div></div>
          <div class="col-6 col-md-3"><div style="background:var(--navy);border-radius:12px;padding:28px 16px;text-align:center;"><div style="font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--gold);">5</div><div style="color:rgba(255,255,255,.55);font-size:.78rem;margin-top:4px;">Charity partners</div></div></div>
          <div class="col-6 col-md-3"><div style="background:var(--navy);border-radius:12px;padding:28px 16px;text-align:center;"><div style="font-family:var(--head-font);font-size:2rem;font-weight:700;color:var(--gold);">Pro</div><div style="color:rgba(255,255,255,.55);font-size:.78rem;margin-top:4px;">Bono bookkeeping</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     BLOG
=========================== -->

<!-- ===========================
     BROCHURE
=========================== -->
<section id="brochure" class="section-pad bg-offwhite">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill">Free Download</div>
        <h2 class="section-title">Download Our Service Brochure</h2>
        <div class="divider-gold"></div>
        <p style="color:var(--muted);font-size:.95rem;line-height:1.9;margin-bottom:24px;">Get our comprehensive 20-page service brochure — including full pricing breakdowns, service descriptions, client case studies, and everything you need to decide if Cain &amp; Co is right for your business.</p>
        <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:10px;margin-bottom:30px;">
          <li style="display:flex;gap:10px;align-items:center;font-size:.9rem;"><i class="bi bi-file-earmark-pdf-fill" style="color:var(--gold);font-size:1.1rem;"></i> Full pricing &amp; packages overview</li>
          <li style="display:flex;gap:10px;align-items:center;font-size:.9rem;"><i class="bi bi-file-earmark-pdf-fill" style="color:var(--gold);font-size:1.1rem;"></i> Service process walkthroughs</li>
          <li style="display:flex;gap:10px;align-items:center;font-size:.9rem;"><i class="bi bi-file-earmark-pdf-fill" style="color:var(--gold);font-size:1.1rem;"></i> Client success case studies</li>
          <li style="display:flex;gap:10px;align-items:center;font-size:.9rem;"><i class="bi bi-file-earmark-pdf-fill" style="color:var(--gold);font-size:1.1rem;"></i> Team credentials &amp; certifications</li>
        </ul>
        <a href="#contact" class="btn btn-gold">Download Brochure (PDF)</a>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2 text-center">
        <div style="background:var(--white);border:2px solid rgba(0,0,0,.07);border-radius:16px;padding:50px 40px;box-shadow:0 20px 60px rgba(0,0,0,.08);display:inline-block;max-width:320px;width:100%;">
          <div style="background:linear-gradient(135deg,var(--navy),var(--navy-light));border-radius:12px;padding:30px;margin-bottom:20px;">
            <div style="font-family:var(--head-font);font-size:1.4rem;color:var(--white);font-weight:700;margin-bottom:4px;">Cain &amp; Co</div>
            <div style="color:var(--gold);font-size:.78rem;font-weight:600;letter-spacing:1px;">SERVICE BROCHURE 2025</div>
            <div style="margin-top:20px;display:flex;flex-direction:column;gap:6px;">
              <div style="height:8px;background:rgba(255,255,255,.15);border-radius:4px;"></div>
              <div style="height:8px;background:rgba(255,255,255,.1);border-radius:4px;width:80%;"></div>
              <div style="height:8px;background:rgba(201,168,76,.3);border-radius:4px;width:60%;"></div>
            </div>
          </div>
          <div style="font-size:.85rem;color:var(--muted);">20 pages · PDF format · Free</div>
          <a href="#contact" class="btn btn-gold w-100 mt-3"><i class="bi bi-download me-2"></i>Download Free</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     FAQ
=========================== -->
<section id="faq" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Got Questions?</div>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is included in the £299/month entry package?</button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">The Entry package includes full monthly bookkeeping, bank reconciliation, VAT returns, profit &amp; loss reports, and dedicated email support. It covers businesses with up to 100 transactions per month and is ideal for sole traders and small businesses.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How does the 3-month free trial work?</button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">You get the first 3 months at no cost — full service, no hidden conditions. If you're not completely satisfied after 3 months, you can walk away with zero obligation. If you love it (and we think you will), you simply continue at your chosen monthly package price.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Are your bookkeepers AAT qualified?</button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">Yes. All our bookkeepers hold AAT qualifications and undergo regular CPD training to stay current with HMRC regulations, MTD changes, and evolving compliance requirements. We are also ICB members and ISO 9001 certified.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What accounting software do you use?</button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">We work with all major cloud accounting platforms including Xero, QuickBooks, Sage, and FreeAgent. If you're not already using one, we'll recommend the best fit for your business and help you migrate at no extra charge.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">Can you take over from my existing bookkeeper or accountant?</button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">Absolutely. We handle the entire transition process, including liaising with your previous provider to retrieve all records. Most transitions are completed within 5 working days with zero disruption to your business operations.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">Do you guarantee no HMRC fines?</button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">Yes. If HMRC issues a penalty due to an error on our part, we will cover the cost of that penalty in full. This guarantee applies to all clients on any of our packages, giving you complete peace of mind.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================
     FINAL CTA
=========================== -->
<section style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-light) 100%);padding:100px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;top:-100px;right:-100px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(201,168,76,.07) 0%,transparent 70%);pointer-events:none;"></div>
  <div class="container text-center position-relative fade-up">
    <div class="label-pill light" style="margin-bottom:20px;">Start Today</div>
    <h2 class="section-title light" style="font-size:clamp(2rem,4.5vw,3.5rem);max-width:700px;margin:0 auto 20px;">Your Search for a Trusted Bookkeeper in London Ends Here</h2>
    <div class="divider-gold mx-auto"></div>
    <p class="section-subtitle light mx-auto text-center" style="max-width:500px;margin-bottom:36px;">Join 200+ London businesses who trust Cain &amp; Co with their finances. Fixed fees. Zero HMRC surprises. Brilliant support.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="#contact" class="btn btn-gold" style="font-size:1rem;padding:16px 36px;">Book Free Consultation</a>
      <a href="#trial" class="btn btn-outline-gold" style="font-size:1rem;padding:16px 36px;">Try Us For 3 Months</a>
    </div>
  </div>
</section>

<!-- ===========================
     CONTACT
=========================== -->

@endsection