@extends('layouts.app')
@section('content')


<!-- ============================================================
     HERO
============================================================ -->
<section class="page-hero">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="index.html#services">Services</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payroll Services</li>
      </ol>
    </nav>
    <div class="row align-items-center gy-5">
      <!-- Copy -->
      <div class="col-lg-6">
        <div class="label-pill light mb-3">💼 Payroll Services London</div>
        <h1 class="section-title light" style="font-size:clamp(2.1rem,4.5vw,3.4rem);">
          Professional Payroll Services <span class="gold">in London</span>
        </h1>
        <div class="divider-gold mt-3"></div>
        <p class="section-subtitle light" style="max-width:490px;">
          Accurate, compliant and stress-free payroll solutions for businesses of every size. RTI submissions, payslips, pensions — all handled for you.
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#payroll-contact" class="btn-gold btn">Book Free Consultation</a>
          <a href="tel:02079460322" class="btn-outline-gold btn"><i class="bi bi-telephone me-2"></i>Call Our Payroll Team</a>
        </div>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <div class="hero-badge"><i class="bi bi-patch-check-fill"></i> HMRC Compliant</div>
          <div class="hero-badge"><i class="bi bi-lock-fill"></i> Fixed Monthly Fees</div>
          <div class="hero-badge"><i class="bi bi-people-fill"></i> 200+ Businesses Served</div>
        </div>
        <!-- Stats strip -->
        <div class="hero-stats-strip">
          <div class="hs-item">
            <div class="hs-num" data-target="500">0</div>
            <div class="hs-lab">Employees Managed</div>
          </div>
          <div class="hs-item">
            <div class="hs-num" data-target="12">0</div>
            <div class="hs-lab">Years Experience</div>
          </div>
          <div class="hs-item">
            <div class="hs-num" data-target="100">0</div>
            <div class="hs-lab">% RTI Accuracy</div>
          </div>
          <div class="hs-item">
            <div class="hs-num" data-target="0">0</div>
            <div class="hs-lab">HMRC Penalties</div>
          </div>
        </div>
      </div>
      <!-- Visual -->
      <div class="col-lg-6">
        <div class="hero-visual">
          <div class="hero-visual-top">
            <div class="hv-box"><i class="bi bi-people-fill"></i><span>Employee Payroll</span></div>
            <div class="hv-box"><i class="bi bi-receipt-cutoff"></i><span>Payslip Generation</span></div>
            <div class="hv-box"><i class="bi bi-send-check-fill"></i><span>RTI Submission</span></div>
            <div class="hv-box"><i class="bi bi-shield-lock-fill"></i><span>Pension Enrolment</span></div>
          </div>
          <div class="hv-banner">
            <div>
              <div class="hv-banner-label">Next Payroll Run</div>
              <div class="hv-banner-sub">Processed &amp; submitted on time — guaranteed</div>
            </div>
            <div class="hv-banner-num">On Time ✓</div>
          </div>
          <div style="display:flex;gap:10px;margin-top:14px;">
            <div style="flex:1;background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:14px 16px;">
              <div style="font-size:.72rem;color:rgba(255,255,255,.4);letter-spacing:1px;text-transform:uppercase;margin-bottom:6px;">Monthly</div>
              <div style="display:flex;gap:4px;align-items:flex-end;">
                <div style="width:8px;height:30px;background:rgba(201,168,76,.3);border-radius:3px;"></div>
                <div style="width:8px;height:42px;background:rgba(201,168,76,.5);border-radius:3px;"></div>
                <div style="width:8px;height:28px;background:rgba(201,168,76,.3);border-radius:3px;"></div>
                <div style="width:8px;height:50px;background:var(--gold);border-radius:3px;"></div>
                <div style="width:8px;height:38px;background:rgba(201,168,76,.4);border-radius:3px;"></div>
                <div style="width:8px;height:46px;background:var(--gold-light);border-radius:3px;"></div>
              </div>
            </div>
            <div style="flex:1;background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:10px;padding:14px 16px;">
              <div style="font-size:.72rem;color:rgba(255,255,255,.4);letter-spacing:1px;text-transform:uppercase;margin-bottom:6px;">Compliance</div>
              <div style="position:relative;height:44px;display:flex;align-items:center;justify-content:center;">
                <div style="width:44px;height:44px;border-radius:50%;border:3px solid rgba(201,168,76,.2);border-top-color:var(--gold);display:flex;align-items:center;justify-content:center;">
                  <span style="font-family:var(--head-font);font-size:.85rem;font-weight:700;color:var(--gold);">✓</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     INTRO SPLIT
============================================================ -->
<section class="section-pad bg-offwhite" id="intro">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- Graphic col -->
      <div class="col-lg-5 fade-up">
        <div class="intro-graphic">
          <div class="label-pill light mb-3 text-danger">Why Outsource?</div>
          <h3 style="color:var(--white);font-size:1.6rem;margin-bottom:22px;position:relative;z-index:1;">Is payroll eating into your working day?</h3>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-clock-history"></i></div>
            <div><div class="igb-title">Average 8 hours saved per month</div><div class="igb-sub">When businesses outsource payroll to us</div></div>
          </div>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
            <div><div class="igb-title">£3,000+ average HMRC fine avoided</div><div class="igb-sub">When payroll errors go uncorrected</div></div>
          </div>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-check-circle-fill"></i></div>
            <div><div class="igb-title">100% on-time submission record</div><div class="igb-sub">Every RTI filing submitted before deadline</div></div>
          </div>
          <div class="intro-graphic-seal">
            <div class="igs-top">CAIN</div>
            <div class="igs-year">&amp;Co</div>
            <div class="igs-bot">SINCE 2012</div>
          </div>
        </div>
      </div>
      <!-- Text col -->
      <div class="col-lg-7 fade-up delay-2">
        <div class="label-pill">The Problem</div>
        <h2 class="section-title" style="margin-bottom:18px;">Payroll is Complex. <br/><span style="color:var(--gold);">We Make It Simple.</span></h2>
        <div class="divider-gold"></div>
        <p style="font-size:.95rem;color:#555;line-height:1.9;margin-bottom:18px;">Managing payroll in-house is one of the most time-consuming and high-risk tasks a business owner faces. HMRC regulations change regularly, RTI submission deadlines are strict, and errors lead to costly fines — yet payroll is non-negotiable.</p>
        <p style="font-size:.95rem;color:#555;line-height:1.9;margin-bottom:28px;">At Cain &amp; Co, our CIPP-qualified payroll specialists take the entire process off your hands. From collecting employee data and calculating pay to submitting RTI to HMRC and managing pension auto enrolment — we handle everything, every time, on time.</p>

        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div style="display:flex;gap:12px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
              <i class="bi bi-check-circle-fill" style="color:var(--gold);font-size:1.1rem;margin-top:2px;flex-shrink:0;"></i>
              <div style="font-size:.88rem;font-weight:600;">All payroll runs processed accurately, every pay cycle</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex;gap:12px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
              <i class="bi bi-check-circle-fill" style="color:var(--gold);font-size:1.1rem;margin-top:2px;flex-shrink:0;"></i>
              <div style="font-size:.88rem;font-weight:600;">Full HMRC RTI submissions handled on your behalf</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex;gap:12px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
              <i class="bi bi-check-circle-fill" style="color:var(--gold);font-size:1.1rem;margin-top:2px;flex-shrink:0;"></i>
              <div style="font-size:.88rem;font-weight:600;">Pension auto enrolment managed end-to-end</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex;gap:12px;align-items:flex-start;padding:16px;background:var(--white);border-radius:10px;border:1px solid rgba(0,0,0,.06);">
              <i class="bi bi-check-circle-fill" style="color:var(--gold);font-size:1.1rem;margin-top:2px;flex-shrink:0;"></i>
              <div style="font-size:.88rem;font-weight:600;">Digital payslips delivered to every employee</div>
            </div>
          </div>
        </div>
        <a href="#payroll-contact" class="btn-gold btn">Get a Free Payroll Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PAYROLL SERVICES SECTION
============================================================ -->
<section id="payroll-services" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">What We Handle</div>
      <h2 class="section-title">Our Payroll Services</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">From weekly wages to complex multi-location payroll — we cover every aspect of your payroll cycle.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3 fade-up delay-1">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-calendar-week-fill"></i></div>
          <h5>Weekly Payroll</h5>
          <p>Accurate weekly payroll processing for hourly-paid staff and casual workers, including all statutory calculations and deductions.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-2">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-calendar-month-fill"></i></div>
          <h5>Monthly Payroll</h5>
          <p>Full monthly payroll for salaried employees, directors, and contractors — processed and ready by your chosen pay date, every month.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-3">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-file-earmark-person-fill"></i></div>
          <h5>Payslip Generation</h5>
          <p>Branded digital payslips generated and securely distributed to every employee, with a full audit trail and record-keeping.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-4">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-send-check-fill"></i></div>
          <h5>Payroll Tax Submissions</h5>
          <p>All PAYE, NI and income tax submissions filed directly with HMRC in real time via RTI, before every deadline.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-1">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-shield-lock-fill"></i></div>
          <h5>Pension &amp; Auto Enrolment</h5>
          <p>Full workplace pension setup, employee communications, contribution calculations and The Pensions Regulator compliance.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-2">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-people-fill"></i></div>
          <h5>Employee Payroll Management</h5>
          <p>Starters, leavers, P45s, holiday pay, sick pay, maternity/paternity — all employee lifecycle events handled correctly.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-3">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-patch-check-fill"></i></div>
          <h5>HMRC Compliance</h5>
          <p>Full compliance with all HMRC payroll legislation, including NMW checks, IR35 guidance, and end-of-year P60 production.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 fade-up delay-4">
        <div class="payroll-svc-card">
          <div class="psvc-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
          <h5>Payroll Reporting</h5>
          <p>Detailed monthly payroll reports, cost analysis by department, and year-end summaries to support your financial planning.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US + COUNTERS
============================================================ -->
<section id="why-us" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Our Advantage</div>
      <h2 class="section-title">Why Choose Cain &amp; Co for Payroll?</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Six reasons London businesses trust us to run their payroll — month in, month out.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-check2-all"></i></div>
          <h5>Accurate Payroll Processing</h5>
          <p>Our triple-check verification process means errors are caught before payslips are issued. 100% accuracy, every pay cycle, guaranteed.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-shield-check"></i></div>
          <h5>HMRC Compliance Guaranteed</h5>
          <p>If a penalty arises due to our payroll error, we pay it. Full stop. Our CIPP-qualified team stays current with every legislative change.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-lightning-charge-fill"></i></div>
          <h5>Fast Response Times</h5>
          <p>Same-day response to every query. Your dedicated payroll specialist is reachable by phone or email during all business hours.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-lock-fill"></i></div>
          <h5>Fixed Monthly Pricing</h5>
          <p>No surprise invoices. Clear, fixed monthly fees from £99 so you can budget with absolute confidence. No hidden extras.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-person-badge-fill"></i></div>
          <h5>Dedicated Payroll Specialist</h5>
          <p>One qualified specialist manages your payroll account. No passing between departments, no starting over explaining your business.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="why-feature-card">
          <div class="wfc-icon"><i class="bi bi-eye-slash-fill"></i></div>
          <h5>Confidential &amp; Secure</h5>
          <p>All payroll data is handled under strict GDPR compliance with end-to-end encryption. ISO 27001 aligned data security standards.</p>
        </div>
      </div>
    </div>

    <!-- Counter strip -->
    <div class="counter-strip fade-up">
      <div class="row g-0">
        <div class="col-6 col-md-3" style="border-right:1px solid rgba(201,168,76,.15);">
          <div class="cs-item"><span class="cs-num" data-target="500">0</span><div class="cs-lab">Employees Managed</div></div>
        </div>
        <div class="col-6 col-md-3" style="border-right:1px solid rgba(201,168,76,.15);">
          <div class="cs-item"><span class="cs-num" data-target="200">0</span><div class="cs-lab">Business Clients</div></div>
        </div>
        <div class="col-6 col-md-3" style="border-top:1px solid rgba(201,168,76,.15);border-right:1px solid rgba(201,168,76,.15);">
          <div class="cs-item"><span class="cs-num" data-target="12">0</span><div class="cs-lab">Years in Payroll</div></div>
        </div>
        <div class="col-6 col-md-3" style="border-top:1px solid rgba(201,168,76,.15);">
          <div class="cs-item"><span class="cs-num" data-target="0">0</span><div class="cs-lab">Missed RTI Deadlines</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PAYROLL PROCESS
============================================================ -->
<section id="process" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">How It Works</div>
      <h2 class="section-title light">Our Payroll Process</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle light mx-auto text-center">A transparent, reliable 4-step workflow that runs every pay cycle without fail.</p>
    </div>
    <div class="process-timeline row g-0">
      <div class="col-6 col-md-3 pt-step fade-up delay-1">
        <div class="pt-num">1</div>
        <i class="pt-step-icon bi bi-cloud-upload-fill"></i>
        <h5 style="color:var(--white);">Employee Data Collection</h5>
        <p>You securely share hours, new starters, leavers, and any changes via our encrypted client portal. We handle the rest.</p>
      </div>
      <div class="col-6 col-md-3 pt-step fade-up delay-2">
        <div class="pt-num">2</div>
        <i class="pt-step-icon bi bi-calculator-fill"></i>
        <h5 style="color:var(--white);">Payroll Processing</h5>
        <p>Our specialists calculate gross pay, statutory deductions, NI, PAYE, pension contributions, and all employee-specific adjustments.</p>
      </div>
      <div class="col-6 col-md-3 pt-step fade-up delay-3">
        <div class="pt-num">3</div>
        <i class="pt-step-icon bi bi-send-check-fill"></i>
        <h5 style="color:var(--white);">HMRC &amp; Pension Submission</h5>
        <p>We submit your RTI data directly to HMRC and send pension contribution files to your provider before every deadline.</p>
      </div>
      <div class="col-6 col-md-3 pt-step fade-up delay-4">
        <div class="pt-num">4</div>
        <i class="pt-step-icon bi bi-envelope-check-fill"></i>
        <h5 style="color:var(--white);">Payslip Delivery &amp; Reporting</h5>
        <p>Digital payslips are sent securely to each employee. You receive a full payroll report and cost summary for your records.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     INDUSTRIES
============================================================ -->
<section id="industries" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Sector Expertise</div>
      <h2 class="section-title">Payroll for Every Industry</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">We understand the unique payroll challenges of different sectors — from restaurant tronc schemes to construction CIS deductions.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="industry-svc-card">
          <i class="bi bi-egg-fried isc-icon"></i>
          <h5>Restaurants &amp; Food Service</h5>
          <p>Tronc schemes, variable hours, tips, and high staff turnover — we manage every complexity of the hospitality payroll cycle.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="industry-svc-card">
          <i class="bi bi-building isc-icon"></i>
          <h5>Hospitality &amp; Hotels</h5>
          <p>Multi-location payroll, shift-based pay, seasonal workers, and complex rota management handled with precision.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="industry-svc-card">
          <i class="bi bi-hammer isc-icon"></i>
          <h5>Construction</h5>
          <p>CIS deductions, subcontractor payments, CITB levies, and site-based workforce payroll managed in full compliance.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-1">
        <div class="industry-svc-card">
          <i class="bi bi-shop isc-icon"></i>
          <h5>Retail</h5>
          <p>Part-time contracts, zero-hours arrangements, Saturday staff, and commission-based earnings — all processed accurately.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-2">
        <div class="industry-svc-card">
          <i class="bi bi-briefcase isc-icon"></i>
          <h5>Consultants &amp; Professional Services</h5>
          <p>Director payrolls, dividend planning considerations, IR35 reviews, and contractor management for professional firms.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 fade-up delay-3">
        <div class="industry-svc-card">
          <i class="bi bi-buildings isc-icon"></i>
          <h5>Limited Companies</h5>
          <p>Optimal director salary and dividend structuring, company secretary functions, and shareholder payroll management.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PRICING
============================================================ -->
<section id="pricing" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Payroll Pricing</div>
      <h2 class="section-title">Simple, Fixed Payroll Fees</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">No per-payslip charges. No setup fees. Just clear monthly pricing that grows with your team.</p>
    </div>
    <div class="row g-4 align-items-stretch justify-content-center">
      <!-- Starter -->
      <div class="col-md-4 fade-up delay-1">
        <div class="price-card">
          <div class="price-tier">Starter</div>
          <div class="price-amount">£99</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Up to 5 employees</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Weekly or monthly payroll</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Digital payslip generation</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> HMRC RTI submissions</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> P60 &amp; P45 production</div>
          <div class="price-feature" style="color:#bbb;"><i class="bi bi-x-circle"></i> Pension management</div>
          <div class="price-feature" style="color:#bbb;"><i class="bi bi-x-circle"></i> Monthly payroll report</div>
          <div class="mt-auto"><a href="#payroll-contact" class="btn btn-outline-navy w-100">Get Started</a></div>
        </div>
      </div>
      <!-- Business (featured) -->
      <div class="col-md-4 fade-up delay-2">
        <div class="price-card featured">
          <div class="price-badge">Most Popular</div>
          <div class="price-tier">Business</div>
          <div class="price-amount">£199</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Up to 20 employees</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Everything in Starter</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Pension auto enrolment</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Holiday &amp; sick pay calc.</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Monthly payroll report</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Priority phone support</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> New starter onboarding</div>
          <div class="mt-auto"><a href="#payroll-contact" class="btn btn-gold w-100">Get Started</a></div>
        </div>
      </div>
      <!-- Premium -->
      <div class="col-md-4 fade-up delay-3">
        <div class="price-card">
          <div class="price-tier">Premium</div>
          <div class="price-amount">£399</div>
          <div class="price-mo">per month + VAT</div>
          <div class="price-divider"></div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Unlimited employees</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Everything in Business</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Multi-site payroll</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Dept. cost reporting</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> IR35 &amp; CIS support</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Director payroll advisory</div>
          <div class="price-feature"><i class="bi bi-check2-circle"></i> Same-day urgent support</div>
          <div class="mt-auto"><a href="#payroll-contact" class="btn btn-outline-navy w-100">Get Started</a></div>
        </div>
      </div>
    </div>
    <p class="text-center mt-4 fade-up" style="font-size:.85rem;color:var(--muted);">Need a custom quote for a larger team? <a href="#payroll-contact" style="color:var(--gold);font-weight:600;">Contact us →</a></p>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
============================================================ -->
<section id="testimonials" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Client Stories</div>
      <h2 class="section-title light">What Our Payroll Clients Say</h2>
      <div class="divider-gold mx-auto"></div>
    </div>

    <div class="testi-slider-wrap fade-up">
      <!-- Slide 1 -->
      <div class="testi-slide active">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"Our restaurant had 22 staff across two sites with weekly wages, tips, and tronc. Cain &amp; Co sorted the entire payroll in 3 days. We haven't had a single HMRC query since. Phenomenal service."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,var(--gold),var(--navy-light));">JM</div>
                <div><div class="testi-name">James Mitchell</div><div class="testi-role">Owner, Meridian Restaurants · Soho</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"I was spending every Friday afternoon on payroll. Now it just happens. Payslips go out on time, HMRC gets their RTI, and pensions are sorted. I have my Fridays back. Worth every penny."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,#2a5ca8,var(--gold));">SR</div>
                <div><div class="testi-name">Sarah Rahman</div><div class="testi-role">MD, Capital Build Ltd · Croydon</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"Our construction business had CIS complications no one wanted to touch. Cain &amp; Co handled it all — subcontractor deductions, verification, monthly returns. They made the impossible seem easy."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,var(--navy-light),var(--gold));">AT</div>
                <div><div class="testi-name">Alex Thompson</div><div class="testi-role">Director, BuildRight Construction</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="testi-slide">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"Switched to Cain &amp; Co after our previous payroll bureau missed an RTI deadline and we got fined. In 18 months with Cain &amp; Co — not one issue. Their guarantee is genuine."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,var(--gold),#1a4080);">LC</div>
                <div><div class="testi-name">Linda Chen</div><div class="testi-role">Founder, Nova Retail Group</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"The auto enrolment piece alone was worth it. Setting up a pension scheme, writing to all 40 employees, managing opt-outs — Cain &amp; Co handled everything. I barely knew it was happening."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,#1a2d50,var(--gold-light));">RB</div>
                <div><div class="testi-name">Robert Barnes</div><div class="testi-role">Partner, Thames Consulting · City</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testi-card dark-testi">
              <div class="testi-stars">★★★★★</div>
              <p class="testi-text">"Fixed fee, dedicated specialist, same-day responses. That's all we asked for. Cain &amp; Co delivered on all three from day one. Our payroll has never been cleaner or more reliable."</p>
              <div class="testi-author">
                <div class="testi-avatar" style="background:linear-gradient(135deg,var(--navy-mid),var(--gold));">KP</div>
                <div><div class="testi-name">Karen Price</div><div class="testi-role">CEO, Eastfield Hotels · South London</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider controls -->
    <div class="d-flex justify-content-center align-items-center gap-4 mt-4 fade-up">
      <button class="testi-nav-btn" id="prevTesti" aria-label="Previous"><i class="bi bi-chevron-left"></i></button>
      <div class="testi-dots">
        <div class="testi-dot active" data-idx="0"></div>
        <div class="testi-dot" data-idx="1"></div>
      </div>
      <button class="testi-nav-btn" id="nextTesti" aria-label="Next"><i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
</section>

<!-- ============================================================
     SOFTWARE EXPERTISE
============================================================ -->
<section id="software" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Technology</div>
      <h2 class="section-title">Software We Work With</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Certified in all major UK payroll and accounting platforms. We work with your existing setup — or help you choose the best one.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3 fade-up delay-1">
        <div class="sw-card">
          <div class="sw-logo" style="background:var(--gold-pale);color:var(--gold);">X</div>
          <h5>Xero</h5>
          <p>Xero certified payroll partner with deep integration experience.</p>
          <div class="sw-certified">Certified Partner</div>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up delay-2">
        <div class="sw-card">
          <div class="sw-logo" style="background:#e8f4ff;color:#2d7dd2;">QB</div>
          <h5>QuickBooks</h5>
          <p>QuickBooks payroll setup, migration and ongoing management.</p>
          <div class="sw-certified">ProAdvisor</div>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up delay-3">
        <div class="sw-card">
          <div class="sw-logo" style="background:#fff0f0;color:#c0392b;">S</div>
          <h5>Sage Payroll</h5>
          <p>Sage 50 and Sage HR payroll bureau and managed service delivery.</p>
          <div class="sw-certified">Sage Accredited</div>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up delay-4">
        <div class="sw-card">
          <div class="sw-logo" style="background:#f0fff4;color:#27ae60;">FE</div>
          <h5>FreeAgent</h5>
          <p>FreeAgent payroll processing for sole traders and small businesses.</p>
          <div class="sw-certified">Registered Agent</div>
        </div>
      </div>
    </div>
    <!-- Trust indicators -->
    <div class="row justify-content-center mt-5 fade-up">
      <div class="col-auto">
        <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;">
          <div style="display:flex;align-items:center;gap:8px;background:var(--navy);border-radius:8px;padding:10px 18px;">
            <i class="bi bi-patch-check-fill" style="color:var(--gold);"></i>
            <span style="color:rgba(255,255,255,.8);font-size:.83rem;font-weight:600;">CIPP Qualified Payroll</span>
          </div>
          <div style="display:flex;align-items:center;gap:8px;background:var(--navy);border-radius:8px;padding:10px 18px;">
            <i class="bi bi-shield-fill-check" style="color:var(--gold);"></i>
            <span style="color:rgba(255,255,255,.8);font-size:.83rem;font-weight:600;">ISO 9001 Certified</span>
          </div>
          <div style="display:flex;align-items:center;gap:8px;background:var(--navy);border-radius:8px;padding:10px 18px;">
            <i class="bi bi-award-fill" style="color:var(--gold);"></i>
            <span style="color:rgba(255,255,255,.8);font-size:.83rem;font-weight:600;">ICB Member Practice</span>
          </div>
          <div style="display:flex;align-items:center;gap:8px;background:var(--navy);border-radius:8px;padding:10px 18px;">
            <i class="bi bi-lock-fill" style="color:var(--gold);"></i>
            <span style="color:rgba(255,255,255,.8);font-size:.83rem;font-weight:600;">GDPR Compliant</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FAQ
============================================================ -->
<section id="faq" class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">FAQs</div>
      <h2 class="section-title">Payroll Questions Answered</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up">
        <div class="accordion" id="payrollFaq">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq1">
                How quickly can payroll be set up for my business?
              </button>
            </h2>
            <div id="pfaq1" class="accordion-collapse collapse show" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Most businesses are fully onboarded within 3–5 working days. We collect your existing employee data, set up our systems, and run a test payroll before going live. For urgent situations, we can go live within 24 hours.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq2">
                Do you support weekly payroll as well as monthly?
              </button>
            </h2>
            <div id="pfaq2" class="accordion-collapse collapse" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Yes. We support weekly, fortnightly, four-weekly, and monthly payroll runs. Many of our hospitality and construction clients run weekly payroll. There is no additional charge for more frequent payroll runs on Business or Premium plans.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq3">
                Can you manage our workplace pension auto enrolment?
              </button>
            </h2>
            <div id="pfaq3" class="accordion-collapse collapse" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Absolutely. Pension auto enrolment management is included in our Business and Premium payroll plans. We handle scheme setup, employee communications, eligibility assessments, contribution management, and all reporting to The Pensions Regulator.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq4">
                Do you handle HMRC RTI submissions?
              </button>
            </h2>
            <div id="pfaq4" class="accordion-collapse collapse" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Yes — all HMRC Real Time Information (RTI) submissions are handled by us on every payroll run, included in all plans. We submit Full Payment Submissions (FPS) and Employer Payment Summaries (EPS) directly to HMRC on your behalf.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq5">
                Is my payroll data kept secure and confidential?
              </button>
            </h2>
            <div id="pfaq5" class="accordion-collapse collapse" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Payroll data security is our highest priority. All data is transmitted via encrypted, GDPR-compliant systems. We operate under ISO 27001-aligned data security practices, and no payroll data is ever shared with third parties. We are registered with the ICO as a data processor.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq6">
                Do you support businesses based outside London?
              </button>
            </h2>
            <div id="pfaq6" class="accordion-collapse collapse" data-bs-parent="#payrollFaq">
              <div class="accordion-body">Yes. While we are based in the City of London, all our payroll services are delivered entirely remotely via cloud platforms. We have clients across the UK — from Edinburgh to Bristol. Payroll management requires no in-person meetings.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
============================================================ -->
<section class="cta-banner">
  <div class="container text-center position-relative fade-up">
    <div class="label-pill light mb-3">Start Today</div>
    <h2 class="section-title light" style="max-width:600px;margin:0 auto 16px;">Need Reliable Payroll Support?</h2>
    <div class="divider-gold mx-auto"></div>
    <p class="section-subtitle light mx-auto text-center mb-4" style="max-width:480px;">
      Our payroll experts help businesses stay compliant, accurate and stress-free — every pay cycle, without fail.
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="#payroll-contact" class="btn-gold btn" style="font-size:1rem;padding:15px 32px;">Book Free Consultation</a>
      <a href="tel:02079460322" class="btn-outline-gold btn" style="font-size:1rem;padding:15px 32px;"><i class="bi bi-telephone me-2"></i>Speak to Payroll Expert</a>
    </div>
  </div>
</section>

<!-- ============================================================
     CONTACT SECTION
============================================================ -->
<section id="payroll-contact" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="row g-5">
      <!-- Info -->
      <div class="col-lg-5 fade-up">
        <div class="label-pill light mb-3">Get a Quote</div>
        <h2 class="section-title light" style="font-size:2rem;margin-bottom:18px;">Start Your Payroll Journey</h2>
        <div class="divider-gold"></div>
        <p style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.9;margin-bottom:28px;">Tell us about your business and payroll requirements. We'll provide a tailored quote and have you onboarded within 5 working days.</p>

        <div style="display:flex;flex-direction:column;gap:16px;margin-bottom:28px;">
          <div style="display:flex;gap:14px;align-items:center;padding:16px;background:rgba(255,255,255,.04);border:1px solid rgba(201,168,76,.15);border-radius:10px;">
            <div style="width:42px;height:42px;border-radius:10px;background:rgba(201,168,76,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="bi bi-telephone-fill" style="color:var(--gold);"></i></div>
            <div><div style="color:rgba(255,255,255,.4);font-size:.72rem;letter-spacing:.5px;text-transform:uppercase;">Payroll Hotline</div><div style="color:var(--white);font-weight:600;">020 7946 0322</div></div>
          </div>
          <div style="display:flex;gap:14px;align-items:center;padding:16px;background:rgba(255,255,255,.04);border:1px solid rgba(201,168,76,.15);border-radius:10px;">
            <div style="width:42px;height:42px;border-radius:10px;background:rgba(201,168,76,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="bi bi-envelope-fill" style="color:var(--gold);"></i></div>
            <div><div style="color:rgba(255,255,255,.4);font-size:.72rem;letter-spacing:.5px;text-transform:uppercase;">Payroll Email</div><div style="color:var(--white);font-weight:600;">payroll@cainandco.co.uk</div></div>
          </div>
          <div style="display:flex;gap:14px;align-items:center;padding:16px;background:rgba(255,255,255,.04);border:1px solid rgba(201,168,76,.15);border-radius:10px;">
            <div style="width:42px;height:42px;border-radius:10px;background:rgba(201,168,76,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="bi bi-clock-fill" style="color:var(--gold);"></i></div>
            <div><div style="color:rgba(255,255,255,.4);font-size:.72rem;letter-spacing:.5px;text-transform:uppercase;">Response Time</div><div style="color:var(--white);font-weight:600;">Within 2 business hours</div></div>
          </div>
        </div>

        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(201,168,76,.2);border-radius:12px;padding:22px;">
          <div style="font-size:.8rem;font-weight:700;color:var(--gold);letter-spacing:1px;text-transform:uppercase;margin-bottom:14px;">What Happens Next?</div>
          <div style="display:flex;gap:12px;align-items:flex-start;margin-bottom:10px;">
            <div style="width:24px;height:24px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;color:var(--navy);flex-shrink:0;">1</div>
            <div style="font-size:.85rem;color:rgba(255,255,255,.65);">We review your submission and call within 2 hours</div>
          </div>
          <div style="display:flex;gap:12px;align-items:flex-start;margin-bottom:10px;">
            <div style="width:24px;height:24px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;color:var(--navy);flex-shrink:0;">2</div>
            <div style="font-size:.85rem;color:rgba(255,255,255,.65);">Free 30-min consultation to understand your needs</div>
          </div>
          <div style="display:flex;gap:12px;align-items:flex-start;">
            <div style="width:24px;height:24px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;color:var(--navy);flex-shrink:0;">3</div>
            <div style="font-size:.85rem;color:rgba(255,255,255,.65);">Tailored proposal sent same day — onboard in 5 days</div>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-7 fade-up delay-2">
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(201,168,76,.2);border-radius:16px;padding:44px 40px;" class="contact-dark-form">
          <h3 style="color:var(--white);font-size:1.4rem;margin-bottom:8px;">Request a Free Payroll Quote</h3>
          <p style="color:rgba(255,255,255,.5);font-size:.88rem;margin-bottom:28px;">No obligation. Response within 2 business hours.</p>

          <form id="payrollForm" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="pName">Full Name *</label>
                <input type="text" class="form-control" id="pName" placeholder="John Smith" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pCompany">Company Name *</label>
                <input type="text" class="form-control" id="pCompany" placeholder="Acme Ltd" required>
                <div class="invalid-feedback">Please enter your company name.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pEmail">Email Address *</label>
                <input type="email" class="form-control" id="pEmail" placeholder="john@business.co.uk" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pPhone">Phone Number</label>
                <input type="tel" class="form-control" id="pPhone" placeholder="07700 900000">
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pEmployees">Number of Employees *</label>
                <select class="form-select" id="pEmployees" required>
                  <option value="">Select...</option>
                  <option>1–5 employees</option>
                  <option>6–10 employees</option>
                  <option>11–20 employees</option>
                  <option>21–50 employees</option>
                  <option>51–100 employees</option>
                  <option>100+ employees</option>
                </select>
                <div class="invalid-feedback">Please select employee count.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pFrequency">Payroll Frequency *</label>
                <select class="form-select" id="pFrequency" required>
                  <option value="">Select...</option>
                  <option>Weekly</option>
                  <option>Fortnightly</option>
                  <option>Monthly</option>
                  <option>Multiple frequencies</option>
                </select>
                <div class="invalid-feedback">Please select payroll frequency.</div>
              </div>
              <div class="col-12">
                <label class="form-label" for="pIndustry">Industry</label>
                <select class="form-select" id="pIndustry">
                  <option value="">Select your industry...</option>
                  <option>Restaurant / Hospitality</option>
                  <option>Construction / Trades</option>
                  <option>Retail</option>
                  <option>Consultancy / Professional</option>
                  <option>Limited Company</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="pMsg">Additional Requirements</label>
                <textarea class="form-control" id="pMsg" rows="4" placeholder="Tell us about any specific payroll requirements — CIS, pensions, multi-site, etc..."></textarea>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="pGdpr" required>
                  <label class="form-check-label" for="pGdpr">I agree to Cain &amp; Co processing my data per the <a href="#" style="color:var(--gold);">Privacy Policy</a>. *</label>
                  <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
              </div>
              <div class="col-12 mt-2">
                <button type="submit" class="btn-gold btn w-100" style="font-size:1rem;padding:16px;" id="pSubmitBtn">
                  <i class="bi bi-send-fill me-2"></i>Request Free Payroll Quote
                </button>
              </div>
              <div class="col-12">
                <p style="color:rgba(255,255,255,.3);font-size:.78rem;text-align:center;margin:0;"><i class="bi bi-shield-lock-fill me-1" style="color:var(--gold);"></i>100% confidential. Your payroll data is never shared.</p>
              </div>
            </div>
          </form>
          <div class="submit-success" id="pSuccessMsg">
            <i class="bi bi-check-circle-fill me-2"></i>Enquiry received! Our payroll team will contact you within 2 business hours.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  /* ---- Navbar scroll ---- */
  const nav = document.getElementById('mainNav');
  const btt = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
    btt.classList.toggle('show', window.scrollY > 400);
  });
  btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  /* ---- Dark mode ---- */
  let dark = false;
  document.querySelectorAll('#darkToggle').forEach(btn => {
    btn.addEventListener('click', () => {
      dark = !dark;
      document.body.classList.toggle('dark-mode', dark);
      document.querySelectorAll('#darkToggle i').forEach(i => i.className = dark ? 'bi bi-sun' : 'bi bi-moon-stars');
    });
  });

  /* ---- Scroll animations + counter trigger ---- */
  const animated = new Set();
  function animateCounter(el) {
    if (animated.has(el)) return;
    animated.add(el);
    const target = +el.dataset.target;
    if (target === 0) { el.textContent = '0'; return; }
    const duration = 1800;
    const step = target / (duration / 16);
    let cur = 0;
    const t = setInterval(() => {
      cur = Math.min(cur + step, target);
      el.textContent = Math.floor(cur) + (el.dataset.suffix || '');
      if (cur >= target) { clearInterval(t); el.textContent = target + (el.dataset.suffix || ''); }
    }, 16);
  }

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        e.target.querySelectorAll('[data-target]').forEach(animateCounter);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

  // Hero stats
  const heroObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('[data-target]').forEach(animateCounter);
        heroObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.hero-stats-strip, .counter-strip').forEach(el => heroObs.observe(el));

  /* ---- Testimonial slider ---- */
  const slides = document.querySelectorAll('.testi-slide');
  const dots   = document.querySelectorAll('.testi-dot');
  let idx = 0, autoTimer;

  function goTo(n) {
    slides[idx].classList.remove('active');
    dots[idx].classList.remove('active');
    idx = (n + slides.length) % slides.length;
    slides[idx].classList.add('active');
    dots[idx].classList.add('active');
  }

  document.getElementById('nextTesti').addEventListener('click', () => { goTo(idx + 1); resetAuto(); });
  document.getElementById('prevTesti').addEventListener('click', () => { goTo(idx - 1); resetAuto(); });
  dots.forEach(d => d.addEventListener('click', () => { goTo(+d.dataset.idx); resetAuto(); }));

  function resetAuto() { clearInterval(autoTimer); autoTimer = setInterval(() => goTo(idx + 1), 5000); }
  resetAuto();

  /* ---- Form validation ---- */
  document.getElementById('payrollForm').addEventListener('submit', function(e) {
    e.preventDefault();
    if (!this.checkValidity()) { this.classList.add('was-validated'); return; }
    const btn = document.getElementById('pSubmitBtn');
    btn.textContent = 'Sending...';
    btn.disabled = true;
    setTimeout(() => {
      this.style.display = 'none';
      document.getElementById('pSuccessMsg').style.display = 'block';
    }, 1500);
  });

  /* ---- Active nav highlight ---- */
  window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    let current = '';
    sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) current = s.id; });
    document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)').forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
  });
</script>

@endsection